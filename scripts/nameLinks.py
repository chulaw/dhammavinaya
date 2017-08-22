#set PYTHONIOENCODING=utf-8

import time
start = time.clock()
import sqlite3
from pandas import DataFrame
import pandas as pd
import numpy as np

conn = sqlite3.connect('dhammavinaya.db')
c = conn.cursor()

print "Load names..."
names = []
for nameRow in c.execute("select * from names"):
    if nameRow[0] == "": continue
    names.append(nameRow[0])

print "Load sutta text data..."
suttaIds = []
suttaTexts = []
for suttaRow in c.execute("select * from suttas"):
    suttaIds.append(suttaRow[0])
    suttaTexts.append(suttaRow[2])
    print suttaRow[2].encode('utf-8')
    asd


for i in range(0, len(suttaIds)):
    print suttaIds[i]
    addedLinks = []
    for name in names:
        if name in suttaTexts[i]:
            for nameSecond in names:
                if nameSecond in suttaTexts[i] and name != nameSecond and name + '-' + nameSecond not in addedLinks and nameSecond + '-' + name not in addedLinks:
                    nameLink = name + '-' + nameSecond
                    print nameLink
                    c.execute('insert or ignore into nameLinks (suttaId, name1, name2) values (?, ?, ?)', (suttaIds[i], name, nameSecond))
                    addedLinks.append(nameLink)
    conn.commit()
conn.close()
elapsed = (time.clock() - start)
print(elapsed)
