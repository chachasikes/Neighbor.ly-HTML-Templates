This is the base theme for Neighborly.

Created by Chach Sikes
chachasikes@gmail.com

Hosted on github:
http://github.com/chachasikes/Neighbor.ly-HTML-Templates

The theme consists of a main page template, css, and some php functions that return form elements and some dynamic graphics.

It is based on the 960 grid layout (20 columns, 20px wide with a 10px gutter.)
http://960.gs/

Javascript:
The jQuery 1.4 and jQuery UI libraries have been added.
The jQuery UI library is the full export, as decisions are made, a smaller library can be made available.
(Though no interactivity has been added yet.)

Using Cufon font replacement

_resources folder
contains illustrator files & fonts and other miscellany

Status: March 13 2010
This is a simple design which I would like to adjust, so it is not final, but it is usable, valid, accessible and checked in firefox, safari and ie 6/7.
If the page templates are all built out and hard to adjust after the fact, we can easily adjust the background images, fonts and make a big different just with CSS.

Next Steps:
* finish alpha version of design
* make the forms interactive & animated
* finalize the text
* confirm that the form has the right elements

Design Ideas:
I would like to design a background sprite and change the background and maybe add some little people to the design.
Ideally the page decorations would be a little bit dynamic, and have scenes of neighborhoods/neighbors.
I like the drupalcon washington design, and i also like meomi's octonauts, so it would be cute and awesome, but for cities.

Templatizing:
I added some comment tags about where dynamic content should go.
I'm not sure how Django works or how it is different from Drupal, so I'm not sure how menus, forms, links work in Django.
Since I didn't know this, I didn't spend too much time futzing with the forms. Nor did I make them actually work.
I also didn't bother with any sort of form validation.

There is a forms stylesheet that works if forms are wrapped in form-container.