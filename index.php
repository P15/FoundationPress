<?php get_header(); ?>

  <div class="horizontal-pane hidden"></div>
  <div class="horizontal-pane page-title">
    <section class="page-title">
      <h2>
        Recombine News
      </h2>      
    </section>
  </div>

<main class="container" role="document">
  <?php do_action('foundationPress_after_header'); ?>
  <div class="row">


	<div class="medium-8 large-9 columns" role="main">
	
  	<?php if ( have_posts() ) : ?>
		
  		<?php do_action('foundationPress_before_content'); ?>
	
  		<?php while ( have_posts() ) : the_post(); ?>
  			<?php get_template_part( 'content', get_post_format() ); ?>
  		<?php endwhile; ?>
		
  		<?php else : ?>
  			<?php get_template_part( 'content', 'none' ); ?>
		
  		<?php do_action('foundationPress_before_pagination'); ?>
		
  	<?php endif;?>
	
	
	
  	<?php if ( function_exists('FoundationPress_pagination') ) { FoundationPress_pagination(); } else if ( is_paged() ) { ?>
  		<nav id="post-nav">
  			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'FoundationPress' ) ); ?></div>
  			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'FoundationPress' ) ); ?></div>
  		</nav>
  	<?php } ?>
	
  	<?php do_action('foundationPress_after_content'); ?>
	
  	</div>
  	<?php get_sidebar(); ?>
	
	</div>
</main>


<?php get_footer(); ?>

