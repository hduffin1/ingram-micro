<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

<div class="heading-wrapper">
    <div class="container">
        <h1><?php the_field('header');?></h1>
        <h2><?php the_field('date');?></h2>
        <img src="<?php bloginfo( 'template_directory' ); ?>/images/clouds.svg" class="clouds">
    </div>
</div>

<div class="blue">
    <div class="container">
        <div class="home-content">
            <?php the_content();?>
        </div>

        <a href="register" class="cta">Register</a>
    </div>

    <img src="<?php bloginfo( 'template_directory' ); ?>/images/white-triangle.svg" class="white-triangle">
</div>

<?php get_footer(); ?>