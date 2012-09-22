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

<?php get_header(); ?>
			
			<div id="content " class="clearfix row">
			
				<div id="main" class="clearfix span8 offset1" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						<div class="row">
						<header class="post_header span6 offset2">
						
						
							<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'wpbs-featured' ); ?></a>
							
							<div class="page-header"><h1 class="headline">
							<?php
							$keys = get_post_custom_keys();
							$haslink = in_array("outsidelink",$keys);
							
							if($haslink)
							{
							?>
							<a href="<?php $key="outsidelink"; echo get_post_meta($post->ID, $key, true);?>" rel="bookmark">
							<?php 
							}
							the_title(); 
							if($haslink)
							{
							?>
							</a>
							<?php }?>
							</h1>
							</div>
							
						
						</header> <!-- end article header -->
						</div>
						<div class="row">
						<div class="span2 articledate">
							<time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_date(); ?></time>
						</div>
						<section class="span6 post_content clearfix">
							<?php the_content( __("Read more &raquo;","bonestheme") ); ?>
						</section> <!-- end article section -->
						</div>
					</article> <!-- end article -->
					
					<?php endwhile; ?>			
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "bonestheme"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>