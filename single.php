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
				<time><hr />			
				<p>This post was published on <?php the_time('F jS, Y') ?>. If you enjoyed it, I'd love if you would tell some friends: 
				<ul class="actions"><li><a class="button share" href="https://twitter.com/intent/tweet?text=<?php the_title(); ?>+-+<?php the_permalink(); ?>+via+%40StaticMade">Share on Twitter</a></li><!--<li><a class="button share" href="https://alpha.app.net/intent/post?text=<?php the_title(); ?>+-+<?php the_permalink(); ?>+via+%40StaticMade">Post to ADN</a></li>--><li><a class="button share" href="http://www.tumblr.com/share" title="Share on Tumblr">Reblog on Tumblr</a></li><li><a class="button share" href="https://news.ycombinator.com/submitlink?u=<?php the_permalink(); ?>&t=<?php the_title(); ?>" title="Share on Hacker News">Submit to Hacker News</a></li></ul></p></time>		
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
	<?php get_footer(); ?>