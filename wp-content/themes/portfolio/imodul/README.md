# iModul
## – A Page builing framework for Wordpress

#### Description:
iModul for Wordpress is a system for building advanced layouts yet easy enough to use for clients. It is based on an original concept from iModul CMS by [Web&Co.](http://www.webogco.dk).
It is built around Foundation markup and is meant to be used 
It is set up to be fully costumizable so feel free to add your own stuff.

#### Requirements
- [Advanced Custom Fields](http://www.advancedcustomfields.com/) Wordpress plugin .
- [Repeater Field](http://www.advancedcustomfields.com/add-ons/repeater-field/) Add-on for ACF.
- [Flexible Content](http://www.advancedcustomfields.com/add-ons/flexible-content-field/) Add-on for ACF.
- [Playmaker](https://github.com/Jursdotme/Playmaker) – A custom Wordpress theme build on [HTML5 Reset](http://html5reset.org/) and [Zurb Foundation](http://foundation.zurb.com/) (Strictly this is not required, a few changes to the imodul.php markup should make it workable for any theme).

---
#### Files included:

##### imodul.php 
Wordpress template file with all the markup for the system.

##### imodul.xml
Import file for Wordpress.
##### imodul.js
jQuery stuff that does some stuff to make things work.  
At this point it only adds `class="active"` to the first tab in a tab-row.

---
#### Installation:
1. Install Playmaker Theme (kinda' optional)
2. Install [Advanced Custom Fields](http://wordpress.org/extend/plugins/advanced-custom-fields/).
3. Unlock the required add-ons ([Repeater Field](http://www.advancedcustomfields.com/add-ons/repeater-field/) & [Flexible Content](http://www.advancedcustomfields.com/add-ons/flexible-content-field/)).
4. Place imodul.php in you theme folder.
5. Use the Wordpress import and import the imodul.xml file.
6. Enjoy!

#### Usage: *(This section needs further detail.)*
When creating a new page use the iModul page template.
