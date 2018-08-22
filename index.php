<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://www.bbpress.me/
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen(bbpress)
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="main-content" class="main-content">

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php 
			if ( class_exists( 'bbPress' ) ) : ?>
			
			<div class="content-front">
				<h1 class="entry-title-content">
					<?php printf(__('Recent Topics', 'bbpress' ), $widget_ops ); ?>
				</h1>
					<?php bbp_get_template_part( 'content', 'archive-topic' ); ?>
			</div>

			<div id="forum-front" class="bbp-forum-front">
				<h1 class="entry-title-front"><?php bbp_forum_archive_title(); ?></h1>
				<div class="entry-content-front">
					<?php bbp_get_template_part( 'content', 'archive-forum' ); ?>
				</div>
			</div>
			<?php 	
			else:
				echo " <h1 class='entry-title-front'>This theme requires you to install bbPress plugin, 
				<br/><a href='http://www.bbpress.me'>Download it from here.</a></h1>";
			endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->
	<?php get_sidebar( 'content' ); ?>
</div><!-- #main-content -->

<?php
get_sidebar();
get_footer();
