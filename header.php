<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' />
    <meta name="description" content="
    The Secret to CX Success | Ingram Cisco CX Summit
    Ingram Micro understands the power of Cisco’s CX approach and we’re now part of it. We have achieved the Cisco Customer Experience Specialization – the first distributor in the UK to earn this. We have a dedicated Cisco CX Practice Lead, customers success managers and offer full lifecycle services. We’re ready to support resellers who want to capitalise on Cisco CX.">

    <title>The Secret to CX Success | Ingram Cisco CX Summit</title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/sass/css.css?v=12" />
    <script>(function(H){H.className=H.className+="js"})(document.documentElement)</script>
  </head>
<body>

<header>
    <div class="container">
        <div class="flex">

        <a href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/images/nav-logo.png" class="nav-logo" alt=""></a>

            <nav class="nav">
            <a class="skip" href="#menu"><img src="<?php bloginfo( 'template_directory' ); ?>/images/bar.svg" class="btn" alt="menu bar"></a>
                 <?php wp_nav_menu(array(
                'container' => false,
                'menu' => __( 'Main Menu', 'textdomain' ),
                'menu_class' => 'dropdown menu',
                'theme_location' => 'topbar-menu',
                )); ?>
            </nav>
        </div>
    </div>
</header>