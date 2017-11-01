import requests
import urllib2, urllib
from bs4 import BeautifulSoup
url = 'http://fisat.ac.in/index.php'
result = requests.get(url)
c = result.content
soup = BeautifulSoup(c)
article_text=''
article_text1=''

article = soup.find("div", {"id":"News"}).findAll('p')
for element in article:
        article_text += '\n' +''.join(element.findAll(text = True)).encode('utf-8').strip()
print article_text
article1 = soup.find("div", {"id":"News"}).findAll('small')
for element1 in article1:
	article_text1 += '\n' + ''.join(element1.findAll(text = True)).encode('utf-8').strip()
print article_text1

mydata=[('title',article_text),('date',article_text1)]
mydata=urllib.urlencode(mydata)
path='http://localhost/notification.php'
req=urllib2.Request(path,mydata)
req.add_header("Content-type","application/x-www-form-urlencoded")
page=urllib2.urlopen(req).read()
print page
