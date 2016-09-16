import time
start = time.clock()
import sqlite3
from sklearn.feature_extraction.text import TfidfVectorizer
from pandas import DataFrame
import pandas as pd
from string import digits
from sklearn.neighbors import NearestNeighbors
import numpy as np

conn = sqlite3.connect('dhammavinaya.db')
c = conn.cursor()

vectorizer = TfidfVectorizer()
suttaList = []
suttaIds = []
print "Load sutta text data..."
for row in c.execute("select * from suttas"):
    suttaIds.append(row[0])
    suttaList.append(row[2]) # remove numbers

print "Fit and transform count vectorizer..."
tfidf = vectorizer.fit_transform(suttaList)

print "Setup dataframe with tfidf data..."
tfidfDf = DataFrame(tfidf.A, columns=vectorizer.get_feature_names())
suttaIdsSeries = pd.Series(suttaIds)
tfidfDf['suttaId'] = suttaIdsSeries.values
numCols = tfidfDf.ix[:, tfidfDf.columns != 'suttaId']

print "Fit nearest neighbors..."
nbrs = NearestNeighbors(n_neighbors=len(numCols)).fit(numCols)

print "Calculate and store sutta score..."
i = 0
for index, row in numCols.iterrows():
    neighborDistances, neighborIndices = nbrs.kneighbors(row)
    # print neighborIndices
    #print neighborDistances
    # print len(neighborIndices[0])
    suttaScore = np.median(neighborDistances[0])
    similarSuttaCount = sum(1 if x < 1.33 else 0 for x in neighborDistances[0]) - 1
    dissimilarSuttaCount = sum(1 if x**2 >= 1.99 else 0 for x in neighborDistances[0])
    netSimilarCount = similarSuttaCount - dissimilarSuttaCount
    print suttaIds[i] + ", Score: " + `round(suttaScore, 3)` + ", SimilarCount: " + `similarSuttaCount` + ", DissimilarCount: " + `dissimilarSuttaCount` + ", NetCount: " + `netSimilarCount`
    c.execute('insert or ignore into suttaScore (suttaId, suttaScore, similarSuttaCount, dissimilarSuttaCount, netSimilarCount) values (?, ?, ?, ?, ?)',
            (suttaIds[i], suttaScore, similarSuttaCount, dissimilarSuttaCount, netSimilarCount))
    i += 1
    conn.commit()
conn.close()
elapsed = (time.clock() - start)
print(elapsed)
