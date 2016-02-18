'''
Juanita Hales
10/21/2014
DPWP
Site
'''
# site to pick battlefield attractions around Fredericksburg VA

import webapp2
from pages import ContentPage
from data import Information


class MainHandler(webapp2.RequestHandler):
    def get(self):
        cp = ContentPage()
        i = Information()
        if self.request.GET:
            # this stuff happens when stuff is in the url
            # requests from data.py to match when a link is clicked
            # requests return the entire array from data.py to be used on print_out function on pages.py
            if self.request.GET['name'] == "Fredericksburg":
                cp.info = i.bf[0]
                self.response.write(cp.info_print())
            elif self.request.GET['name'] == "Chatham":
                cp.info = i.bf[1]
                self.response.write(cp.info_print())
            elif self.request.GET['name'] == "Chancellorsville":
                cp.info = i.bf[2]
                self.response.write(cp.info_print())
            elif self.request.GET['name'] == "Wilderness":
                cp.info = i.bf[3]
                self.response.write(cp.info_print())
            elif self.request.GET['name'] == "Spotsylvania":
                cp.info = i.bf[4]
                self.response.write(cp.info_print())
        else:
            # this stuff happens when nothing is in the url returns orignal base html
            self.response.write(cp.print_out())


app = webapp2.WSGIApplication([
                                  ('/', MainHandler)
                              ], debug=True)
