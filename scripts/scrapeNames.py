#set PYTHONIOENCODING=utf-8

import time
import lxml.html
from lxml import html
import requests
import sqlite3
import re
import sys
start = time.clock()

conn = sqlite3.connect('dhammavinaya.db')
c = conn.cursor()

letters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'v', 'y']
sourceAbbs = ['AA.', 'AbhS.', u'An\xc4gat.', 'Ap.', 'ApA.', 'AvS.', 'Barua', 'Beal', 'Bode', 'Brethren ', 'Bu.', 'BuA.', 'CAGI.', 'CNid.', 'Codrington', 'Compendium',
             'Cv.', 'Cv.Trs.', 'Cyp.', 'CypA.', 'DA.', u'D\xc4th.', 'DhA.', 'DhS.', 'DhSA.', 'Dial.', 'Dpv.', 'Dvy.', 'Ep.Zey.', 'ERE.', 'Geog.', 'Giles', 'GS.',
             'Gv.', 'I.H.Q.', 'Ind.An.', 'Itv.', 'ItvA.', 'J.', 'JA.', 'J.P.T.S.', 'J.R.A.S.', 'KhpA.', 'KS.', 'Kvu.', 'Lal.', 'Law', 'MA.', 'Mbv.', 'Mhv.',
             'Mhv.Trs.', 'Mil.', 'MNid.', 'MNidA.', 'MT.', 'Mtu.', 'Netti.', 'NidA.', 'NPD.', 'PHAI.', 'P.L.C.', 'PS.', 'PSA.', 'P.T.S.', 'Pug.', 'Pv.', 'PvA.',
             'Rockhill', 'SA.', 'SadS.', u'S\xc4s.', 'SHB.', 'Sisters ', 'Sp.', 'SN.', 'SNA.', 'Svd.', 'Thag.', 'ThagA.', 'Thig.', 'ThigA ', 'Thomas', 'Ud.',
             'UdA.', 'VibhA.', 'Vin.', 'Vsm.', 'VT.', 'Vv.', 'VvA.', 'ZDMG.']

namesCount = 0
for letter in letters:
    namesURL = 'http://www.aimwell.org/DPPN/' + letter + '.html'
    namesPage = requests.get(namesURL)
    namesTree = html.fromstring(namesPage.text)
    print letter

    names = namesTree.xpath('(//p[@class="Contents"])')
    for name in names:
        nameText = name.text_content()
        if any(sourceAbb in nameText for sourceAbb in sourceAbbs): continue
        nameText = nameText.split(".")[0]
        nameText = nameText.split("(")[0].strip()
        if "Sutta" in nameText or "Vagga" in nameText or "Vatthu" in nameText or " See " in nameText or 'Paritta' in nameText or ' (No' in nameText: continue
        if "" == nameText: continue
        nameText = nameText.replace(" Thera", "")
        nameText = nameText.replace(" Theri", "")
        nameText = nameText.replace(" Theri", "")
        #print nameText.encode('utf-8')

        c.execute('insert or ignore into names (nameId) values (?)', (nameText.lower(), ))
        namesCount += 1
        conn.commit()
conn.close()

print namesCount
elapsedSec = (time.clock() - start)
elapsedMin =  elapsedSec / 60
print 'Time elapsed: ' + `elapsedMin` + 'min'
