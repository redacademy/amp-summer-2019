<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>


<!-- make array for this  -->
<?php 
  echo "<div class='item active'>";
  echo "<div class='row'>";
    foreach($arr as $key=>$value)
    {
        if ($key % 3 == 0) 
        {
            echo "</div>";
            echo "</div>";
            echo "<div class='item'>";
            echo "<div class='row'>";
        }
         echo "<div class='col-md-2'>";
         echo '<a href="#" class="thumbnail" id="carousel-selector-'.$key.'"><img src="images/img'.$value.'.jpg" alt="Image" style="max-width:100%;"></a>';
        echo "</div>";
    }
echo "</div>";  
echo "</div>";?> 


