// import external dependencies
import 'jquery';
import AOS from 'aos';

// Import everything from autoload
import './autoload/**/*'

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

jQuery('.menu-item-has-children').hover(function(e){
    e.preventDefault();
    jQuery(this).find('.sub-menu').toggleClass('expand-menu');
});

var openmenu = document.querySelector('.mobile-menu-button');
var mobilemenu = document.querySelector('.mobile-menu');
var body = document.querySelector('body');

openmenu.onclick = function() {
  mobilemenu.classList.toggle('mobile-menu-toggle');
  body.classList.toggle('overflow-hidden');
}

var closemenu = document.querySelector('.close-menu');

closemenu.onclick = function() {
  mobilemenu.classList.toggle('mobile-menu-toggle');
  body.classList.toggle('overflow-hidden');
}

var menuClick = document.querySelectorAll('#menu-mobile-menu .menu-item');

menuClick.forEach(function(menuItem) {
menuItem.addEventListener('click', function() {
	mobilemenu.classList.toggle('mobile-menu-toggle');
	body.classList.toggle('overflow-hidden');
  });
});

AOS.init({
  disable: 'mobile',
  once: true,

});

document.addEventListener( 'wpcf7mailsent', function() {
    location = 'http://www.medsupportinc.com/thank-you/';
}, false );