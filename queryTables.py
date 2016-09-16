import time
start = time.clock()
import sqlite3
conn = sqlite3.connect('dhammavinaya.db')
c = conn.cursor()
# for row in c.execute("select * from suttas where suttaId='mn1'"):
#      print row[2].encode('utf-8')

# for row in c.execute("select * from similarSuttas where suttaId='dn2'"):
#       print row

for row in c.execute("select * from suttaScore order by netSimilarCount desc"):
      print row
#c.execute("delete from suttas where nikaya='A'")
#conn.commit()
conn.close()
elapsed = (time.clock() - start)
print(elapsed)
