// 3rd party packages from NPM

import $ from 'jquery';

//import 'jquery-ui-dist/jquery-ui';
// this is not working so better enqueue jquery-ui.js in functions.php
// working :  Maybe : need to use npm instal --save jquery-ui-dist : google & find

//import 'slick-carousel';
//import slick from 'slick-carousel';

import MobileMenu from './modules/MobileMenu';
import AnimateOnScroll from './modules/AnimateOnScroll';

// Our modules / classes

var mobileMenu = new MobileMenu();
var animateOnScroll = new AnimateOnScroll();



// Instantiate a new object using our modules/classes
