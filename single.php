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

<header class="container">
    <h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
    <h2><?php bloginfo('description'); ?></h2>
</header>

<div class="container">
    <section id="content">
        
        <!-- The loop starts Here -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
        <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
            <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
            <p><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></p>
            
            <div class="entry">
                <?php the_content('Read the rest of this entry &raquo;'); ?>
            </div>
            
            <p class="postmetadata">
            This entry was posted on <?php the_time('l, F jS, Y') ?> at <?php the_time() ?> and is filed under <?php the_category(', ') ?>. You can follow any responses to this entry through the <?php post_comments_feed_link('RSS 2.0'); ?> feed.
    
            <?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
                // Both Comments and Pings are open ?>
                You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> from your own site.
    
            <?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
                // Only Pings are Open ?>
                Responses are currently closed, but you can <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> from your own site.
    
            <?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
                // Comments are open, Pings are not ?>
                You can skip to the end and leave a response. Pinging is currently not allowed.
    
            <?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
                // Neither Comments, nor Pings are open ?>
                Both comments and pings are currently closed.
    
            <?php } edit_post_link('Edit this entry','','.'); ?>
            </p>
    
        </div>
        
        <!-- the comments template below refers to the comments.php file in the theme-->
        <?php comments_template(); ?>
    
            <?php endwhile; ?>
    
            <div class="navigation">
                <div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
                <div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
            </div>
    
        <?php else : ?>
    
            <h2 class="center">Not Found</h2>
            <p class="center">Sorry, but you are looking for something that isn't here.</p>
            <?php get_search_form(); ?>
    
        <?php endif; ?><!-- The loop ends here -->
    
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
        <?php endif; ?><!-- this ends the if on line 101 -->
    </section>
</div><!-- end class container -->

<footer class="container">
    <p>
        <?php bloginfo('name'); ?> is proudly powered by <a href="http://wordpress.org/">WordPress</a><br />
        <a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a> and 
        <a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a>.
    </p>
</footer><!-- end Footer -->
		<?php wp_footer(); ?>
</body>
</html>

