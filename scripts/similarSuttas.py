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

stopWords = ['ti', 'kho', 'bhikkhave', 'ca', 'hoti', 'na', u'v\u0101', 'pe', u'eva\u1e43', u'ta\u1e43', 'so', 'bhikkhu', 'te', 'bhante', u'bhagav\u0101', u'na\u1e43', 'me',
'atha', u'aya\u1e43', 'pana', u'ya\u1e43', 'tassa', 'no']
vectorizer = TfidfVectorizer(stop_words = stopWords)
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
#print tfidfDf
#freqs = [(word, tfidfDf.getcol(idx).sum()) for word, idx in vectorizer.vocabulary_.items()]
#sort from largest to smallest
#print sorted (freqs, key = lambda x: -x[1])[:20]

# indices = np.argsort(vectorizer.idf_)[::-1]
# features = vectorizer.get_feature_names()
# top_n = 20
# top_features = [features[i] for i in indices[:top_n]]
# print top_features

# print "Find most significant words for each sutta..."
# tfidfRank = tfidfDf.apply(np.argsort, axis=1)
# rankedCols = tfidfDf.columns.to_series()[tfidfRank.values[:,::-1][:,1:6]]
# tfidfWords = pd.DataFrame(rankedCols, index=tfidfDf.index)
#
# print "Merge dataframes..."
# tfidfDf = tfidfDf.merge(tfidfWords, left_index=True, right_index=True)
# tfidfDf.rename(columns={0: 'sigWord 1', 1: 'sigWord 2', 2: 'sigWord 3', 3: 'sigWord 4', 4: 'sigWord 5'}, inplace=True)

numCols = tfidfDf.ix[:, tfidfDf.columns != 'suttaId']

print "Fit nearest neighbors..."
nbrs = NearestNeighbors(n_neighbors=6).fit(numCols)

print "Find similar suttas..."
neighborIndices = nbrs.kneighbors(numCols, return_distance = False)
# print neighborIndices[:,1:6]

print "Store similar suttas..."
for i in range(0, len(neighborIndices)):
    #print suttaIds[i]
    similarSuttaIds = neighborIndices[i, 1:6]
    c.execute('insert or ignore into similarSuttas (suttaId, s1, s2, s3, s4, s5) values (?, ?, ?, ?, ?, ?)',
            (suttaIds[i], suttaIds[similarSuttaIds[0]], suttaIds[similarSuttaIds[1]], suttaIds[similarSuttaIds[2]], suttaIds[similarSuttaIds[3]],
            suttaIds[similarSuttaIds[4]]))

#print vectorizer.get_feature_names()[2731]
conn.commit()
conn.close()
elapsed = (time.clock() - start)
print(elapsed)
