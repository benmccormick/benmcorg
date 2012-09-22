<!--
   Copyright 2012 by Ben McCormick

   Licensed under the Apache License, Version 2.0 (the "License");
   you may not use this file except in compliance with the License.
   You may obtain a copy of the License at

       http://www.apache.org/licenses/LICENSE-2.0

   Unless required by applicable law or agreed to in writing, software
   distributed under the License is distributed on an "AS IS" BASIS,
   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
   See the License for the specific language governing permissions and
   limitations under the License.

-->

<?php
/*
Author: Eddie Machado
URL: htp://themble.com/bones/

This is where you can drop your custom functions or
just edit things like thumbnail sizes, header images, 
sidebars, comments, ect.
*/

// Get Bones Core Up & Running!
require_once('library/bones.php');            // core functions (don't remove)
require_once('library/plugins.php');          // plugins & extra functions (optional)



// Custom Backend Footer
function bones_custom_admin_footer() {
	echo '<span id="footer-thankyou">Developed by <a href="benmccormick.org" target="_blank">Ben McCormick</a> Built using <a href="http://themble.com/bones" target="_blank">Bones</a>.';
}

// adding it to the admin area
add_filter('admin_footer_text', 'bones_custom_admin_footer');

// Set content width
if ( ! isset( $content_width ) ) $content_width = 580;

/************* THUMBNAIL SIZE OPTIONS *************/

// Thumbnail sizes
add_image_size( 'wpbs-featured', 638, 300, true );
add_image_size( 'wpbs-featured-home', 970, 311, true);
add_image_size( 'wpbs-featured-carousel', 970, 400, true);
add_image_size( 'bones-thumb-600', 600, 150, false );
add_image_size( 'bones-thumb-300', 300, 100, true );
/* 
to add more sizes, simply copy a line from above 
and change the dimensions & name. As long as you
upload a "featured image" as large as the biggest
set width or height, all the other sizes will be
auto-cropped.

To call a different size, simply change the text
inside the thumbnail function.

For example, to call the 300 x 300 sized image, 
we would use the function:
<?php the_post_thumbnail( 'bones-thumb-300' ); ?>
for the 600 x 100 image:
<?php the_post_thumbnail( 'bones-thumb-600' ); ?>

You can change the names and dimensions to whatever
you like. Enjoy!
*/
 
function theme_styles()  
{ 
    wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0', 'all' );
     wp_register_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array(), '1.0', 'all' );
      wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0', 'all' );
    wp_register_style( 'prettify', get_template_directory_uri() . '/prettify/prettify.css', array(), '1.0', 'all' );
    wp_register_style( 'benmcc', get_template_directory_uri() . '/style.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'bootstrap' );
   wp_enqueue_style( 'font-awesome');
   wp_enqueue_style( 'benmcc');
   wp_enqueue_style( 'prettify');
}
add_action('wp_enqueue_scripts', 'theme_styles');

// enqueue javascript

function theme_js(){

  wp_deregister_script('jquery'); // initiate the function  
  wp_register_script('jquery', get_template_directory_uri().'/library/js/libs/jquery-1.7.1.min.js', false, '1.7.1');

  wp_register_script('bootstrap', get_template_directory_uri().'/library/js/bootstrap.min.js');

  wp_register_script('wpbs-scripts', get_template_directory_uri().'/library/js/scripts.js');
  wp_register_script('modernizr', get_template_directory_uri().'/library/js/modernizr.full.min.js');
  wp_register_script('prettify', get_template_directory_uri().'/prettify/prettify.js');

  
  wp_enqueue_script('jquery');
  wp_enqueue_script('bootstrap', array('jQuery'), '1.1', true);
  wp_enqueue_script('wpbs-scripts', array('jQuery'), '1.1', true);
  wp_enqueue_script('modernizr', array('jQuery'), '1.1', true);
  wp_enqueue_script('prettify', array('jQuery'), '1.1', true);
}
add_action('wp_enqueue_scripts', 'theme_js');

?>
