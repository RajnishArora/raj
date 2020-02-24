<?php
/**
 * The header for our theme
 *
 * @package crockery
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
     <title>Rajnish Arora</title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="description" content="Freelancer for Web Development, Wordpress, HTML, javascript,C++">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300&display=swap" rel="stylesheet">
    <?php wp_head(); ?>


  </head>
<body <?php body_class();?>>

  <header>
    <div class="site-header">
      <div class = "site-header__menu-icon ">
          <div class ="site-header__menu-icon__middle">
          </div>
      </div>
      <div class ="site-header__logo">
          RA
      </div>

      <nav class = "primarynav">
        <ul class ="primarynav__ul">
            <li class = "primarynav__li <?php if(is_page('home')) echo 'current-menu-item' ?>" ><a href="<?php _e(site_url()); ?>"  > Home </a> </li>
            <li class ="primarynav__li"><a href="<?php _e(site_url('/blog')); ?>"> Blog </a> </li>
            <li class ="primarynav__li"><a href="<?php _e(site_url('#aboutme')); ?>"> About Us </a> </li>
            <li class ="primarynav__li"><a href="<?php _e(site_url('/contact-us')); ?>"> Contact Us </a> </li>

        </ul>
      </nav>

    </div>


</header>
