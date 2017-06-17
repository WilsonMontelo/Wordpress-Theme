<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <title><?php bloginfo( 'name' ); ?><?php wp_title(" - ");?></title>
  <!-- Css -->
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link href="<?php bloginfo('template_directory'); ?>/responsivo.css" rel="stylesheet">
  <link href="<?php bloginfo('template_directory'); ?>/reset.css" rel="stylesheet">
  <!-- Boostrap -->
  <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">
  <?php wp_enqueue_script("jquery"); ?>
  <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<section id="menu-principal">
  <header>
    <nav class="navbar" role="navigation">
      <div id="centraliza" class="container">
       <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- Logo -->
        <a class="logo" href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/fato-comunicacao.png" alt=""></a>
      </div>
        <?php
          wp_nav_menu( array(
            'menu'              => 'primary',
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'            => new wp_bootstrap_navwalker())
          );
        ?>
      </div>
    </nav>
  </header>
</section>
<!-- Fim Menu Principal -->