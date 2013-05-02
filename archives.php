<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */

get_header(); ?>

<article>

<div class="container">
			<div class="thirteen columns offset-by-three">

		<?php the_post(); ?>
		
		<p><ul>
<?php
global $post;
$args = array( 'numberposts' => 500, 'offset'=> 0 );
$myposts = get_posts( $args );
foreach( $myposts as $post ) :	setup_postdata($post); ?>
	 <li><?php the_time('F d, Y') ?>:  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endforeach; ?>
</ul></p>
         
	</div>
		</div>
</article><!-- end #content-area -->
					
				


<?php get_footer(); ?>