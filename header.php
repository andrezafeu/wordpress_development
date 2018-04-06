<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php  wp_title(); ?></title>
      <!-- tells wordpress that is this the end of head and if there's anything that a plugin or theme would like to output in this area, this is where it should be done -->
    <?php wp_head(); ?>
  </head>

  <body>
    <header class="row no-max pad main">
  <!-- https://developer.wordpress.org/reference/functions/bloginfo/ -->
  <h1><a class='current' href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
  <a href="" class="nav-toggle"><span></span>Menu</a>
  <nav>
    <h1 class="open"><a class='current' href="index.html">G</a></h1>

    <?php 

      $defaults = array(
        // Whether to wrap the ul, and what to wrap it with. Default 'div'.
        'container' => 'ul',
        // tell wordpress that this is where the primary menu lives
        'theme_location' => 'primary-menu',
        // CSS class to use for the ul element which forms the menu. Default 'menu'.
        'menu_class' => 'no-bullet'
      );

      wp_nav_menu( $defaults );

    ?>

    <!-- <ul>
      <li class="current parent"><a class='current' href="index.html">Portfolio</a>
        <ul class="sub-menu">
          <li><a href="item.html">Portfolio Item</a></li>
          <li><a href="item.html">Portfolio Item</a></li>
          <li><a href="item.html">Portfolio Item</a></li>
          <li><a href="item.html">Portfolio Item</a></li>
        </ul>
      </li>
      <li class="parent"><a href="blog.html">Blog</a>
        <ul class="sub-menu">
          <li><a href="single-post.html">Single Post</a></li>
          <li><a href="author.html">Author Page</a></li>
        </ul>
      </li>
      <li><a href="about.html">About</a></li>
      <li><a href="contact.html">Contact</a></li>
    </ul> -->
  </nav>
</header>