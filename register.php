<?php /* Template Name: Register */ ?>

<?php get_header(); ?>

<div class="heading-wrapper">
    <div class="container">
        <h1><?php the_field('header' ,5);?></h1>
        <h2><?php the_field('date' ,5);?></h2>
        <img src="<?php bloginfo( 'template_directory' ); ?>/images/clouds.svg" class="clouds">
    </div>
</div>

<div class="blue">
    <div class="container">
        	<div class="reg-wrapper">
        		<div class="flex">
        		<img src="<?php bloginfo( 'template_directory' ); ?>/images/reg-icon.svg" class="reg-icon">
        		<h2>Register Now</h2>
        	</div>
            <?php the_content();?>
        	</div>
    </div>

    <img src="<?php bloginfo( 'template_directory' ); ?>/images/white-triangle.svg" class="white-triangle">
</div>



<?php get_footer(); ?>