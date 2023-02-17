<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Rekrutacja
 */

get_header();
?>
<header class="single__header">
	<div class="container single__header">
		<div class="row">
			<div class="col-md-8">
			<h2><?php single_post_title(); ?></h2>
			<?php
	                if ( function_exists('yoast_breadcrumb') ) {
	                  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
	                }
	            ?>
			</div>
			<div class="col-md-4">
			<?php if ( has_post_thumbnail()) : ?>
	    <a href="<?php the_permalink(); ?>" alt="<?php the_title_attribute(); ?>">
	        <?php the_post_thumbnail(); ?>
	    </a>
	<?php endif; ?>
			</div>
		</div>
	</div>
</header>



<div class="container">
	<div class="row">
		<div class="col-md-8">
		<main id="primary" class="site-main">

<?php
while ( have_posts() ) :
	the_post();

	get_template_part( 'template-parts/content', get_post_type() );

	the_post_navigation(
		array(
			'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'rekrutacja' ) . '</span> <span class="nav-title">%title</span>',
			'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'rekrutacja' ) . '</span> <span class="nav-title">%title</span>',
		)
	);

endwhile; // End of the loop.
?>

</main><!-- #main -->
		</div>
		<div class="col-md-4">
		<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rekrutacja
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
		</div>
	</div>
</div>

<?php
get_sidebar();
get_footer();
