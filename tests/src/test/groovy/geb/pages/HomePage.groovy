package geb.pages

import geb.*
import geb.modules.*


class HomePage extends DrupalPage{
	static url = "/"
	static at = { $('body').classes().contains('front') }
}
