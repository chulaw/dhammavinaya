import time
start = time.clock()
import sqlite3
conn = sqlite3.connect('dhammavinaya.db')
c = conn.cursor()
# for row in c.execute("select suttaText from suttas where suttaId='sn24.17'"):
#       print row[0].encode('utf-8')

for row in c.execute("select * from similarSuttas where suttaId='mn2'"):
   print row

# import csv
# csvfile = 'suttaScore.csv'
# with open(csvfile, 'wb') as csvfile:
#     fieldnames = ['suttaId', 'suttaScore', 'wordCount', 'similarSuttaCount', 'dissimilarSuttaCount', 'netSimilarCount']
#     writer = csv.DictWriter(csvfile, fieldnames=fieldnames)
#     writer.writeheader()
#     for row in c.execute("select * from suttaScore"):
#         print row
#         writer.writerow({'suttaId': row[0], 'suttaScore': row[1], 'wordCount': row[2], 'similarSuttaCount': row[3], 'dissimilarSuttaCount': row[4], 'netSimilarCount': row[5]})

#c.execute("delete from suttas where nikaya='A'")
#conn.commit()
conn.close()
elapsed = (time.clock() - start)
print(elapsed)
