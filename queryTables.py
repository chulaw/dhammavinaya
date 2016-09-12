import time
start = time.clock()
import sqlite3
conn = sqlite3.connect('dhammavinaya.db')
c = conn.cursor()
for row in c.execute("select * from suttas where suttaId='mn1'"):
     print row[2].encode('utf-8')

# conn.commit()
conn.close()
elapsed = (time.clock() - start)
print(elapsed)