<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="profile" href="http://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
    <nav class="navbar navbar-expand-md bg-dark" role="navigation">
        <a class="navbar-brand" href="<?php echo site_url(); ?>">[logo here]</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headernav" aria-controls="headernav" aria-expanded="false" aria-label="Toggle navigation">Menu</button>
        <?php
            //get from github
            wp_nav_menu( array(
                'theme_location'  => 'header',
                'depth'           => 2,
                'container'       => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id'    => 'headernav',
                'menu_class'      => 'navbar-nav mr-auto',
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker(),
            ) );
        ?>
		</nav>
    </header>