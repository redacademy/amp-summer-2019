<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

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
        foreach($arr as $key=>$value)
    {
            echo "<div class='col-md-2'>";
                echo '<a href="#" class="thumbnail" id="carousel-selector-'.$key.'"><img src="'.get_stylesheet_directory_uri() . '/' . $value.'" alt="Image" style="max-width:100%;"></a>';
            echo "</div>";
    }
    echo "</div>";  
echo "</div>";?> 

<?php get_footer();
