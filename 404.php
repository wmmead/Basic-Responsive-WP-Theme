<?php
/**
 * @package WordPress
 * @subpackage Basic_Responsive_Theme
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/images/favicon.png">

<?php wp_head(); ?>
</head>
<body>



<header>
	<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
    <h2><?php bloginfo('description'); ?></h2>
</header>

<div class="container">
    <section id="content">
        
        <h2 class="center">Error 404 - Not Found</h2>
    
    </section><!-- end Content -->
    
    <section id="sidebar">
    
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
        <?php endif; ?><!-- this ends the if on line 50 -->
    </section>
</div> <!-- end class container -->

<footer>
    <p>
        <?php bloginfo('name'); ?> is proudly powered by <a href="http://wordpress.org/">WordPress</a><br />
        <a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a> and 
        <a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a>.
    </p>
</footer><!-- end Footer -->

		<?php wp_footer(); ?>
</body>
</html>

