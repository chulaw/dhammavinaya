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

# anguttara nikaya
for i in range(3, 12):
    suttaListURL = 'http://www.suttacentral.net/an' + `i`
    suttaListPage = requests.get(suttaListURL)
    suttaListPageTree = html.fromstring(suttaListPage.text)
    suttaList = suttaListPageTree.xpath('(//td/a[@class="acro"])')
    suttaListAdj = []
    for j in range(0, len(suttaList)):
        if 'href' in suttaList[j].attrib: href = suttaList[j].attrib['href']
        if '#' in href: href = href[0:href.index('#')]
        if '/pi/' in href and 'an' + `i` in href:
            suttaListAdj.append(href)

    suttaListAdj = sorted(list(set(suttaListAdj)))
    print suttaListAdj
    for k in range(0, len(suttaListAdj)):
        sutta = suttaListAdj[k]
        suttaURL = 'http://www.suttacentral.net' + sutta
        suttaPage = requests.get(suttaURL)
        suttaTree = html.fromstring(suttaPage.text)
        print sutta

        for hGroup in suttaTree.xpath("//div[@class='hgroup']"):
            hGroup.getparent().remove(hGroup)

        for endSection in suttaTree.xpath("//p[@class='endsection']"):
            endSection.getparent().remove(endSection)

        for metaArea in suttaTree.xpath("//aside[@id='metaarea']"):
            metaArea.getparent().remove(metaArea)

        suttaSection = suttaTree.xpath('(//div[@id="text"])')
        # print suttaSection[0].text_content().strip().encode("utf-8")

        c.execute('insert or ignore into suttas (suttaId, nikaya, suttaText) values (?, ?, ?)',
                    (sutta, 'A', suttaSection[0].text_content().strip()))
        conn.commit()
conn.close()

elapsedSec = (time.clock() - start)
elapsedMin =  elapsedSec / 60
print 'Time elapsed: ' + `elapsedMin` + 'min'
