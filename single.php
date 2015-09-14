<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

<article class="article-description">

	<div class="layout-container">

		<div class="row element-fade">

			<div class="col-4">

				<a class="link-style-three" href="">Back to Posts</a>

				<h2><?php the_title(); ?></h2>

			</div>

			<div class="col-8 element-the-content">

				<div class="image-hero"></div>

				<?php the_content(); ?>

			</div>

		</div>

		<div class="row">
			

		</div>

		<div class="row"></div>

	</div>

</article>
	
<?php endwhile ?>
<?php get_footer(); ?>