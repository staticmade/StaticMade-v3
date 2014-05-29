<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<article>
		<div class="container">
			<div class="thirteen columns offset-by-three">		    
			    <?php if (is_linked_list()): ?>
			    <h2 class="entry-title linked-list-item"><a href="<?php the_linked_list_link(); ?>" title="<?php printf( esc_attr__( 'Link to %s', 'Nova' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?> &rarr;</a></h2>
			    <?php else: ?>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php endif; ?>
				<?php the_content(); ?>
				<?php if (is_linked_list()): ?><h4><a href="<?php the_permalink(); ?>">&infin;</a></h4><?php endif; ?>
							</div>
		</div>
	</article>
	<?php endwhile; ?>
	<?php else : ?>
	<article>
		<div class="container">
			<div class="thirteen columns offset-by-three">
				<h2>No matching results.</h2>
				<p>You're on the wrong side of town, brother. <a href="<?php echo get_settings('home'); ?>">Return to homepage.</a></p>
			</div>
		</div>
	</article>
	<?php endif; ?>
		<div class="pagination">
          <ul>
            <li><?php previous_posts_link('&larr; Previous Page', 0) ?></li>
            <li><?php next_posts_link('Next Page &rarr;', 0); ?></li>
          </ul>
        </div>
	<?php get_footer(); ?>