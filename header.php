<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' />
    <meta name="description" content="">

    <title></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/sass/css.css" />
    <script>(function(H){H.className=H.className+="js"})(document.documentElement)</script>
  </head>
<body>

<header>
    <div class="container">
        <div class="flex">

        <a href="home"><img src="<?php bloginfo( 'template_directory' ); ?>/images/" class="nav-logo" alt=""></a>

            <nav class="nav">
            <a class="skip" href="#menu"><img src="<?php bloginfo( 'template_directory' ); ?>/images/bar.svg" class="btn" alt="menu bar"></a>
                 <ul id="menu">
                    <li><a href="/home">Welcome & Agenda</a></li>
                    <li><a href="agenda/day-one">Sessions</a></li>
                    <li><a href="./sponsors/">Sponsors</a></li>
                    <li><a href="./register">Register</a></li>
                    <li><?php if (is_user_logged_in()) : ?>
                        <a href="<?php echo wp_logout_url(get_permalink()); ?>">Logout</a>
                        <?php else : ?>
                        <a href="<?php the_permalink(); ?>/login/">Login</a>
                        <?php endif;?>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>