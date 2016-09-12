import sqlite3
conn = sqlite3.connect('dhammavinaya.db')
c = conn.cursor()
# c.execute('drop table suttas')
c.execute('create table suttas (suttaId text unique, nikaya text, suttaText text)')
conn.commit()
conn.close()