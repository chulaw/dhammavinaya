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

# digha nikaya
for i in range(1, 35):
    sutta = 'dn' + `i`
    suttaURL = 'http://www.suttacentral.net/pi/' + sutta
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
    suttaSection = suttaSection[0].text_content().lower().strip()
    suttaSection = suttaSection.replace("\"", "")
    suttaSection = suttaSection.replace(".", "")
    suttaSection = suttaSection.replace(",", "")
    # print suttaSection[0].text_content().strip().encode("utf-8")

    c.execute('insert or ignore into suttas (suttaId, nikaya, suttaText) values (?, ?, ?)',
                (sutta, 'D', suttaSection.translate({ord(ch): None for ch in '0123456789'})))
    conn.commit()

# majjhima nikaya
for i in range(1, 153):
    sutta = 'mn' + `i`
    suttaURL = 'http://www.suttacentral.net/pi/' + sutta
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
    suttaSection = suttaSection[0].text_content().lower().strip()
    suttaSection = suttaSection.replace("\"", "")
    suttaSection = suttaSection.replace(".", "")
    suttaSection = suttaSection.replace(",", "")
    # print suttaSection[0].text_content().strip().encode("utf-8")

    c.execute('insert or ignore into suttas (suttaId, nikaya, suttaText) values (?, ?, ?)',
                (sutta, 'M', suttaSection.translate({ord(ch): None for ch in '0123456789'})))
    conn.commit()
conn.close()

elapsedSec = (time.clock() - start)
elapsedMin =  elapsedSec / 60
print 'Time elapsed: ' + `elapsedMin` + 'min'
