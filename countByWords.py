import time
start = time.clock()
import sqlite3
from sklearn.feature_extraction.text import CountVectorizer
from pandas import DataFrame
import pandas as pd
from string import digits
from sklearn.neighbors import NearestNeighbors
import numpy as np

conn = sqlite3.connect('dhammavinaya.db')
c = conn.cursor()

vectorizer = CountVectorizer()
suttaList = []
suttaIds = []
print "Load sutta text data..."
for row in c.execute("select * from suttas"):
    suttaIds.append(row[0])
    suttaList.append(row[2]) # remove numbers

print "Fit and transform count vectorizer..."
tfidf = vectorizer.fit_transform(suttaList)

#print tfidfDf
freqs = [(word, tfidf.getcol(idx).sum()) for word, idx in vectorizer.vocabulary_.items()]
# sort from largest to smallest
print sorted (freqs, key = lambda x: -x[1])[:30]

# for wordFreq in sortedFreqs:
#     print wordFreq[0].encode('utf-8') + " " + `wordFreq[1]`

conn.close()
elapsed = (time.clock() - start)
print(elapsed)
