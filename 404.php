<?php
/**
 * @package WordPress
 * @subpackage Basic_Responsive_Theme
 */


?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

<!-- ******if you want favicons, make the images and put them in the images folder *******
 
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">
<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/images/apple-touch-icon-114x114.png">
-->

<?php wp_head(); ?>
</head>
<body>
<div class="container">


<header class="sixteen columns">
	<hgroup>
        <h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
        <h2><?php bloginfo('description'); ?></h2>
    </hgroup>
</header>


<div id="content" class="twelve columns">
	
    <h2 class="center">Error 404 - Not Found</h2>

</div><!-- end Content -->

<div id="sidebar" class="four columns">

    <ul>
    	<!-- if widgets are being used, display them -->
        <?php if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>
    </ul>
    
    <!-- if widgets are not being used, display this instead -->
	<h2>Here is a subtitle</h2>
    <p>Here is some content for the sidebar</p>
    
    <h2>Archives</h2>
    <ul>
    	<?php wp_get_archives('type=monthly'); ?>
    </ul>
    <?php endif; ?><!-- this ends the if on line 73 -->
</div>

<footer class="sixteen columns">
    <p>
        <?php bloginfo('name'); ?> is proudly powered by <a href="http://wordpress.org/">WordPress</a><br />
        <a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a> and 
        <a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a>.
    </p>
</footer><!-- end Footer -->
</div><!-- end Container -->
		<?php wp_footer(); ?>
</body>
</html>

