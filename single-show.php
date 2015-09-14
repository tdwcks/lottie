<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

<article class="article-description">

	<div class="layout-container">

		<div class="row element-fade">

			<div class="col-3 element-poster">

				<h2><?php the_title(); ?></h2>

				<h2>Alan Ayckbourn</h2>

				<div class="image-poster"></div>

			</div>

			<div class="col-2 col-shift"></div>

			<div class="col-7 element-show-description">

				<h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</h2>

				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

			</div>

		</div>

		<div class="row element-fade">

			<div class="swiper-container">
			    <div class="swiper-wrapper">
			        <div class="swiper-slide"><div class="image-golden"></div></div>
			        <div class="swiper-slide"><div class="image-golden"></div></div>
			        <div class="swiper-slide"><div class="image-golden"></div></div>
			    </div>

			    <div class="swiper-pagination"></div>
			    
			    <div class="swiper-button-prev"></div>
			    <div class="swiper-button-next"></div>
			    
			</div>

		</div>

		<div class="row element-comments element-fade">

			<div class="col-6">

				<h2>Comments</h2>

			</div>

			<div class="col-6">
			
				<?php comments_template(); ?>

			</div>

		</div>

		<div class="row"></div>

	</div>

</article>
	
<?php endwhile ?>
<?php get_footer(); ?>