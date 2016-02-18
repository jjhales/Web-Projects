'''
Juanita Hales
10/8/2014
DPWP
Site
'''


class Battlefield(object):
    def __init__(self):
        # structure for the data objects
        self.name = ""
        self.address = ""
        self.start = ""
        self.end = ""
        self.description = ""


#information storage class
class Information(object):
    def __init__(self):
        # fredericksburg battlefield represented by fb 0
        fb = Battlefield()
        fb.name = "Fredericksburg Battlefield"
        fb.address = "1013 Lafayette Boulevard, Fredericksburg, VA 22401"
        fb.start = "December 11th, 1862"
        fb.end = "December 15th, 1862"
        fb.description = "Battle between Confederate General Lee and Union Major General Burnside."
        # Chatham Manor represented by cm 1
        cm = Battlefield()
        cm.name = "Chatham Manor"
        cm.address = "120 Chatham Lane, Fredericksburg, VA 22405"
        cm.start = "April 1862"
        cm.end = "May 1863"
        cm.description = "Chatham Manor served as Union Headquarters and field hospital during the Civil War. Chatham is the headquarters of the Fredericksburg and Spotsylvania National Military Park. Once a plantation the gardens grounds and house have been restored to it's former glory."
        # Chancellorsville battlefield represented by ch 2
        ch = Battlefield()
        ch.name = "Chancellorsville Battlefield"
        ch.address = "9001 Plank Road, Spotsylvania, VA 22553"
        ch.start = "April 27th, 1863"
        ch.end = "May 6th, 1863"
        ch.description = "Battle  between Confederate General Lee, Jackson and Union General Hooker."
        #Wilderness battlefield represented by ws 3
        ws = Battlefield()
        ws.name = "Wilderness Battlefield"
        ws.address = "35347 Constitution Highway, Locust Grove, VA 22508"
        ws.start = "May 5th, 1864"
        ws.end = "May 7th, 1864"
        ws.description = "Battle between Confederate General Lee and Union General Grant."
        #Spotsylvania Battlefield represented by sp 4
        sp = Battlefield()
        sp.name = "Spotsylvania Battlefield"
        sp.address = "9550 Grant Drive West, Spotsylvania, VA 22553"
        sp.start = "May 8th, 1864"
        sp.end = "May 21st, 1864"
        sp.description = "Battle between Confederate General Lee and Union General Grant "
        # adds attribute to variables to be used by other functions globally
        self.bf = [fb, cm, ch, ws, sp]








