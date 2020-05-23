<?php

/** Template name: Блог */


get_header(); ?>
<div class="blog">
    <div class="container">
        <h2 class="section-title text-center">
            Категории постов </h2>
        <?php
        $categories = get_categories($args);
        $menu .= '<ul сlass = "cat-wrapp">';
    
        // iterate through your categories
        foreach ($categories as $category) {
            $cat_link = get_category_link($category);
            // you can also use $category->slug
            $menu .= '<div class="wrapper"> <div class="'. " cat cat". $category->term_id . '" > </div><div> <a  href = "'  . $cat_link .  '" class="'. "cat". $category->term_id . '">' . $category->name . '</a></div></div>';
        }
        $menu .= '</ul>';
        echo $menu;
        ?>
    </div>


</div>
<?php get_footer();
