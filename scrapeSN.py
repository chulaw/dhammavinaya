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

# samyutta nikaya
for i in range(1, 57):
    isError = 0
    for j in range(1, 299):
        if isError == 1: break
        sutta = 'sn' + `i` + '.' + `j`
        suttaURL = 'http://www.suttacentral.net/pi/' + sutta
        suttaPage = requests.get(suttaURL)
        suttaTree = html.fromstring(suttaPage.text)
        if len(suttaTree.xpath("//div[@class='error_page']")) != 0: isError = 1

        if isError == 0:
            print sutta

            for hGroup in suttaTree.xpath("//div[@class='hgroup']"):
                hGroup.getparent().remove(hGroup)

            for endSection in suttaTree.xpath("//p[@class='endsection']"):
                endSection.getparent().remove(endSection)

            for metaArea in suttaTree.xpath("//aside[@id='metaarea']"):
                metaArea.getparent().remove(metaArea)

            suttaSection = suttaTree.xpath('(//div[@id="text"])')
            suttaSection = suttaSection[0].text_content().lower().strip()
            if "on display: title of section only" in suttaSection: continue
            suttaSection = suttaSection.replace("\"", "")
            suttaSection = suttaSection.replace(".", "")
            suttaSection = suttaSection.replace(",", "")
            suttaSection = suttaSection.translate({ord(ch): None for ch in '0123456789'})
            # print suttaSection[0].text_content().strip().encode("utf-8")

            c.execute('insert or ignore into suttas (suttaId, nikaya, suttaText) values (?, ?, ?)',
                        (sutta, 'S', suttaSection))
            conn.commit()
conn.close()

elapsedSec = (time.clock() - start)
elapsedMin =  elapsedSec / 60
print 'Time elapsed: ' + `elapsedMin` + 'min'
