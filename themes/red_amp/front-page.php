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

<!-- loop over workspaces here  -->
<?php
$args = array(
    'post_type' => 'workspace',
);

$the_query = new WP_Query($args);
?>
<div class="front-page-workspace">

    <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <a class="front-page-each-workspace" href="<?php echo get_the_permalink(); ?>">
                <div>
                    <div class="front-page-workspace-thumbnail"><?php the_post_thumbnail(); ?></div>
                    <div class="front-page-workspace-title">
                        <h1><?php the_title(); ?></h1>
                    </div>
                </div>
            </a>
        <?php endwhile;
        else : ?> <p>Please add a workspace</p>
    <?php endif; ?>
    <?php wp_reset_query(); ?>
</div>
<!-- end of workspace loop -->

<!-- view workspace button -->
<div class="front-page-workspace-button">
    <button class="button-book"> View Workspaces</button>
</div>

<div class="front-page-amp-community">
    <div>
        <h2>
            The Amp Community
        </h2>
    </div>
    <div>
        <p>
            Our name, The Amp, is inspired by our location in the old BC Electric Building.
             An Ampere is a unit of electric current named after a French mathematician. 
             ‘Ampeer’ is the name we give to the many teams and individuals who
              make The Amp their home for work in the heart of Vancouver. 
        </p>
    </div>
    <div class="front-page-amp-community-logos">
        <div>
            <img src="<?php echo get_template_directory_uri() . '/images/dog.png' ?>" alt="">
        </div>
        <div>
            <img src="<?php echo get_template_directory_uri() . '/images/dog.png' ?>" alt="">
        </div>
        <div>
            <img src="<?php echo get_template_directory_uri() . '/images/dog.png' ?>" alt="">
        </div>
        <div>
            <img src="<?php echo get_template_directory_uri() . '/images/dog.png' ?>" alt="">
        </div>
        <div>
            <img src="<?php echo get_template_directory_uri() . '/images/dog.png' ?>" alt="">
        </div>
        <div>
            <img src="<?php echo get_template_directory_uri() . '/images/dog.png' ?>" alt="">
        </div>
        <div>
            <img src="<?php echo get_template_directory_uri() . '/images/dog.png' ?>" alt="">
        </div>
        <div>
            <img src="<?php echo get_template_directory_uri() . '/images/dog.png' ?>" alt="">
        </div>
        <div>
            <img src="<?php echo get_template_directory_uri() . '/images/dog.png' ?>" alt="">
        </div>
    </div>

</div>


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
