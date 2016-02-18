'''
Juanita Hales
10/21/2014
DPWP
Site
'''
# click on link info from data gets entered into div info
# 1 add links into base HTML
# 2 add empty div to float next to links and fill with data
# data inport of Battlefiled () on from data.py
from data import Battlefield


class Page(object):
    def __init__(self):
        self._head = '''
<!DOCTYPE HTML>
<html>
    <head>
        <title>Fredericksburg Battlefields</title>
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link href='http://fonts.googleapis.com/css?family=Alegreya:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Libre+Baskerville' rel='stylesheet' type='text/css'>

    </head>
    <body>'''
        self.body = ''
        self.close = '''
    </body>
        '''

    def print_out(self):
        return self._head + self.body + self.close


class ContentPage(Page):  # borrows for the object class Page function holds HTML structure and buttons
    def __init__(self):
        super(ContentPage, self).__init__()

        self._body = '''
            <header>
                <h1> Fredericksburg Battlefield Park </h1>
            </header>
            <p> Fredericksburg Virginia was in the center of many skirmishes and battles that shaped the Civil War. Located at the half way point between the Confederate capital Richmond and the Union capital Washington DC, Fredericksburg experienced many hardships during the war. Click on the links below to discover more about the battles.</p>
            <h3>Links to Battlefields</h3>
            <div id = links>
                <a href="?name=Fredericksburg" class="button"> Fredericksburg Battlefield</a> <br>
                <a href="?name=Chatham" class="button"> Chatham Manor  </a> <br>
                <a href="?name=Chancellorsville" class="button"> Chancellorsville Battlefield</a> <br>
                <a href="?name=Wilderness" class="button"> Wilderness Battlefield</a> <br>
                <a href="?name=Spotsylvania" class="button"> Spotsylvania Battlefield</a> <br>
            </div>
            '''
        self.filler = "<h3 id= battle >Choose a Battlefield<h3>"
        self.info = Battlefield()

        self._close = '''
    </body>
</html>'''

    def print_out(self):  # function to add html to web page
        return self._head + self._body + self.filler + self._close

    def info_print(self):  # function to add additional html from the data objects
        return self._head + self._body + "<div id ='battle'>" + "<strong>Name: </strong>" + self.info.name + "<br>" + "<strong>Address: </strong>" + self.info.address + "<br>" + "<strong>Day Battle Started: </strong>" + self.info.start + "<br>" + "<strong>Day Battle Ended: </strong>" + self.info.end + "<br>" + "<strong>Description: </strong>" + self.info.description + "<br>" + "</div>" + self._close
