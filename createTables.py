import sqlite3
conn = sqlite3.connect('dhammavinaya.db')
c = conn.cursor()
# c.execute('drop table suttas')
c.execute('drop table similarSuttas')
# c.execute('drop table suttaScore')
# c.execute('drop table names')
# c.execute('drop table nameLinks')

# c.execute('create table suttas (suttaId text unique, nikaya text, suttaText text)')
c.execute('create table similarSuttas (suttaId text unique, s1 text, s2 text, s3 text, s4 text, s5 text)')
# c.execute('create table suttaScore (suttaId text unique, suttaScore float, wordCount integer, similarSuttaCount integer, dissimilarSuttaCount integer, netSimilarCount integer)')
# c.execute('create table names (nameId text unique)')
# c.execute('create table nameLinks (suttaId text unique, name1 text unique, name2 text unique)')
conn.commit()
conn.close()
