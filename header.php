<!doctype html>  
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
<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<title><?php bloginfo('name'); ?><?php wp_title('-', true, 'left'); ?></title>
				
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- icons-->
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/h/ben_logo.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/m/ben_logo.png">
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/l/ben_logo.png">
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/l/ben_logo.png">
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
				
		<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<!-- Get Scripts and styles -->
		<?php wp_head(); ?>
		


	</head>
	
	<body onload="prettyPrint()" <?php body_class(); ?>>
		
		<div class="container">
			<div class="row">
				<div class="span6 offset3 header">
					<div class="row">
						<div class="span3">
							<h2>benmccormick.org</h2>
							<h5>BEN MCCORMICK</h5>
							<nav>
								<a href="http://www.benmccormick.org">
									Blog
								</a>
								&bull;
								<a href="http://www.benmccormick.org/resume">
									Resume
								</a>
								&bull;
								<a href="http://www.benmccormick.org/web-development-qa/">
									Development
								</a>
							</nav>
							<p class="headertext">
								I'm a web developer from Durham NC. Currently employed by Cisco Systems.
							</p>
							
						</div>		
						<div class="span2 offset1 headerlinkbox">
							
							<h2 class="headerlinks pull-left">
								<a href="mailto:ben.mccormick@alumni.duke.edu">
									<i class="icon-envelope"> </i> 
								</a>
								<a href="http://www.benmccormick.org/?feed=rss">
									<i class="icon-rss"> </i>
								</a>
							</h2>
							<h2 class="headerlinks pull-left">
								<a href="https://twitter.com/ben336">
									<i class="icon-twitter"> </i> 
								</a>
								<a href="http://www.linkedin.com/in/benmccormick">
									<i class="icon-linkedin"> </i>
								</a>
							</h2>
						</div>
					</div>
				</div>
			</div>