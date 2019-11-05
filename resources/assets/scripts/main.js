// import external dependencies
import 'jquery';

// Import everything from autoload
import './autoload/**/*'

// import then needed Font Awesome functionality
import { library, dom } from '@fortawesome/fontawesome-svg-core';
// import the Facebook and Twitter icons
import { faTachometerAlt, faBars } from '@fortawesome/free-solid-svg-icons';

// add the imported icons to the library
library.add( faTachometerAlt, faBars );

// tell FontAwesome to watch the DOM and add the SVGs when it detects icon markup
dom.watch();

// Load some Google Fonts asynchrously 
// Typekit Web Font Loader https://github.com/typekit/webfontloader
// https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js loads latest 1.x version

window.WebFontConfig = {
  google: { families: [ 'Raleway:100,100i,300,300i,400,400i,500,500i,700,700i' ] },
};
(function() {
  var wf = document.createElement('script');
  wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
  wf.type = 'text/javascript';
  wf.async = 'true';
  var s = document.getElementsByTagName('script')[0];
  s.parentNode.insertBefore(wf, s);
})();

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
