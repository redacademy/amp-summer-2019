<?php

/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>


<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <?php $banner_bg = get_the_post_thumbnail_url(); ?>
        <div class="hero-banner">
            <div style="
            background: 
            linear-gradient(to bottom, rgba(0, 0, 0, 0.1) 0%, rgba(0, 0, 0, 0) 3%),
            url(<?php echo $banner_bg; ?>);
            background-size: 100%;
            background-position: bottom;
            background-repeat: no-repeat;
            width: 1400px;
            height: 800px;
            ">

            </div>
            <div class="front-page-content-container">
                <div class="button-arrow-container">
                    <button class="button-arrow"><i class="fas fa-chevron-down"></i></button>
                </div>
                <div class="front-page-values">
                    <div>
                        <img src="<?php echo get_template_directory_uri() . '/images/Community.png' ?>" alt="values-community">
                    </div>
                    <div>
                        <img src="<?php echo get_template_directory_uri() . '/images/Collaboration.png' ?>" alt="values-collaboration">
                    </div>
                    <div>
                        <img src="<?php echo get_template_directory_uri() . '/images/Mission_Driven.png' ?>" alt="values-mission-driven">
                    </div>
                </div>
                <div class="hr-line">
                    <hr>
                </div>
                <?php
                        the_content(); // the content loads the gutenberg content, template tags 
                        ?>
                <button class="button-book front-page-button-book"> Book a Tour</button>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

<?php
$arr = array(
    'images/bike.svg',
    'images/clock.svg',
    'images/desk.svg',
    'images/dog.svg',
    'images/people.svg',
);
?>


<!-- TESTIMONIALS CAROUSEL  -->
<?php
echo "<div class='item active'>";
echo "<div class='row main-carousel'>";
foreach ($arr as $key => $value) {
    echo "<div class='col-md-2'>";
    echo '<a href="#" class="thumbnail" id="carousel-selector-' . $key . '"><img src="' . get_stylesheet_directory_uri() . '/' . $value . '" alt="Image" style="max-width:100%;"></a>';
    echo "</div>";
}
echo "</div>";
echo "</div>"; ?>

<?php get_footer();
