<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

<?php if (is_home()): ?>
<div id="featured">
  <h2><em>Where you will always have a place in our Field</em></h2>
  <p>You will find that our passion is to be a place where God can change lives. Our doors are wide open to people from all walks of life, regardless of where they are on their spiritual journey. Harvest is a church that anyone can attend.</p>
  <p>We believe that God wants us to be the kind of church written about in the Bible, where the lost can be rescued and discover a new way of life. He wants us to equip His people and to send them out to reach the lost. Our goal is to reach outside these four walls and into our community with one act of kindness at a time. We believe that by showing Christ's love in tangible ways, lost people will be drawn to Him.</p>
  <p>So, regardless of where you may be on your journey, you can find a home here at Harvest, "Where you will always have a place in our Field."</p>
</div>  
<?php endif; ?>

	<div id="content" class="narrowcolumn">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			  <div class="post-head">
  				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
  				<small><?php the_time('l, F jS, Y') ?> <!-- by <?php the_author() ?> --></small>
        </div>
          
				<div class="entry">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>

				<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
