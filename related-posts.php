<?php

$orig_post = $post;
global $post;
$categories = get_the_category($post->ID);
if ($categories) {
    $category_ids = array();
    foreach ($categories as $individual_category) $category_ids[] = $individual_category->term_id;
    $args = array(
        'category__in' => $category_ids,
        'post__not_in' => array($post->ID),
        'posts_per_page' => 2, // Number of related posts that will be shown.
        'ignore_sticky_posts' => 1
    );
    $my_query = new wp_query($args);
    if ($my_query->have_posts()) {
        while ($my_query->have_posts()) {
            $my_query->the_post(); ?>


            <div class="flex flex-row overflow-hidden bg-white rounded mt-4 w-100 mx-2 bg-neutral-100 mt-2 mb-2 shadow">
                <div class="h-auto w-auto md:w-1/2">
                    <?php the_post_thumbnail(array(100, 100)) ?>
                </div>
                <div class="p-2 pl-2 md:pl-0 md:pl-0  w-full text-gray-800 flex flex-col text-left justify-center">
                    <a href="<?php the_permalink() ?>" class="hover:text-red-800 transition-all">
                        <h3 class="font-semibold text-lg leading-tight truncate"><?php the_title(); ?></h3>
                    </a>
                    <p class="text-sm text-gray-700 uppercase tracking-wide font-semibold mt-2">
                     
                        &bull; <?php the_time('l, d F Y'); ?>
                    </p>
                </div>
            </div>

<?php }
    }
}
$post = $orig_post;
wp_reset_query();




?>