<?php 
/**
 * Default Header
 *
 * @package WordPress
 * @subpackage Wp_Bootstrap
 * @since Wp Bootstrap 1.0
 *
 */?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
 
  <?php 
  // Fires the 'wp_head' action and gets all the scripts included by wordpress, wordpress plugins or functions.php 
  // using wp_enqueue_script if it has $in_footer set to false (which is the default)
  wp_head(); ?>
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js"></script>
  <![endif]-->
</head>
<body <?php body_class(); ?>>
  <div class="container">
    <h2><a href="<?php echo home_url(); ?>"><?php echo get_bloginfo('title'); ?></a></h2>
    <p><?php echo get_bloginfo('description'); ?></p>

    <nav class="navbar navbar-default" role="navigation">
      <!-- Mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
           
      <!-- Collect the nav links for toggling -->
      <?php // Loading WordPress Custom Menu
         wp_nav_menu( array(
            'container_class' => 'collapse navbar-collapse navbar-ex1-collapse',
            'menu_class'      => 'nav navbar-nav',
            'menu_id'         => 'main-menu',
            'walker'          => new Cwd_wp_bootstrapwp_Walker_Nav_Menu()
        ) );
      ?>
    </nav>