<?php header("Access-Control-Allow-Origin: *"); ?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<!--
	Welcome to the source.
	It's been our pleasure.
	-->
	<title><?php echo (wp_title('', false)) ? wp_title('', false) . ' – ' : ''; ?><?php bloginfo( 'name' ); ?></title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendor/default.css?v2">
	<link href='https://fonts.googleapis.com/css?family=Libre+Baskerville' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="style.css" type="text/css">
	<meta name="viewport" content="width=device-width">
	<meta name="format-detection" content="telephone=no">
	<?php wp_head(); ?>

	<script src='https://api.mapbox.com/mapbox.js/v2.2.1/mapbox.js'></script>
	<link href='https://api.mapbox.com/mapbox.js/v2.2.1/mapbox.css' rel='stylesheet' />
	<script src="https://use.typekit.net/war1bld.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<script>try{Typekit.load({ async: true });}catch(e){}</script>


</head>
<?php if ( is_single() ) {
	$is_project = 'hero-header project';
} ?>
<body <?php body_class($is_project); ?>>
<?php get_sidebar(); ?>

<header>

	<div class="layout-container">

		<div class="col-3">

			<h2>Dick <span>&amp;</span> Lottie</h2>

		</div>

		<div class="col-3 col-shift"></div>

		<div class="col-6">

			<nav>

				<ul>

					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>

					<li><a href="<?php echo esc_url( home_url( '/about' ) ); ?>">About</a></li>

					<li><a href="<?php echo esc_url( home_url( '/shows' ) ); ?>">Shows</a></li>

					<li><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>">Blog</a></li>

					<li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Contact</a></li>

					<li><a href="https://www.facebook.com/Dickandlottie"><i class="fa fa-facebook"></i></a>

					<li><a href="https://twitter.com/dickandlottie"><i class="fa fa-twitter"></i></a>

				</ul>

			</nav>

		</div>


	</div>

</header>