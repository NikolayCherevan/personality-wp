<?php

/** Template name: Блог */


get_header(); ?>
<div class="blog">
    <div class="container">
        <h2 class="section-title text-center">
            Категории постов  </h2>


        <ul>
            <?php
            $args = array(
                'show_option_all'    => '',
                'show_option_none'   => __('No categories'),
                'orderby'            => 'name',
                'order'              => 'ASC',
                'style'              => 'ul',
                'show_count'         => 0,
                'hide_empty'         => 1,
                'use_desc_for_title' => 1,
                'child_of'           => 0,
                'feed'               => '',
                'feed_type'          => '',
                'feed_image'         => '',
                'exclude'            => '',
                'exclude_tree'       => '',
                'include'            => '',
                'hierarchical'       => true,
                'title_li'           => __('Categories'),
                'number'             => NULL,
                'echo'               => 1,
                'depth'              => 0,
                'current_category'   => 0,
                'pad_counts'         => 0,
                'taxonomy'           => 'category',
                'walker'             => 'Walker_Category',
                'hide_title_if_empty' => false,
                'separator'          => '<br />',
            );

            echo '<ul>';
            wp_list_categories($args);
            echo '</ul>';
            the_posts_navigation(); ?>
        </ul>

    </div>


</div>
<?php get_footer();
