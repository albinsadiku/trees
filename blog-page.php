<?php
/* Template name: Blog Page*/
get_header();

?>

<div>
    <div class="container px-8 py-5 lg:py-8 mx-auto xl:px-5 max-w-screen-lg">
        <div class="grid gap-10 lg:gap-10 md:grid-cols-2 ">

            <?php
            $queryFeatured = new WP_Query(array('category_name' => 'featured', 'posts_per_page' => 2));
            if ($queryFeatured->have_posts()) :
                while ($queryFeatured->have_posts()) : $queryFeatured->the_post(); ?>
                    <div class="cursor-pointer group"> <a href="<?php the_permalink(); ?>">
                            <div class="relative overflow-hidden transition-all bg-gray-100 rounded-md dark:bg-gray-800  hover:scale-105 aspect-video"><?php the_post_thumbnail() ?></div>
                            <div><a href="#"><span class="inline-block mt-5 text-xs font-medium tracking-wider uppercase  text-purple-600"><?php echo '<p>' . get_the_category($id)[0]->name . '</p>';
                                                                                                                                            ?></span></a></div>
                            <h2 class="mt-2 text-lg font-semibold tracking-normal text-brand-primary text-black"><?php the_title(); ?> </h2>
                            <div class="hidden">
                                <p class="mt-2 text-sm text-gray-500 dark:text-gray-400 line-clamp-3"><a href="#"><?php the_excerpt(); ?></a></p>
                            </div>
                            <div class="flex mt-3 space-x-2 text-gray-500 dark:text-gray-400">
                                <span class="text-xs text-gray-300 dark:text-gray-600">•</span><time class="text-sm"><?php the_time('l, d F Y') ?></time>
                            </div>
                        </a>
                    </div>
                <?php
                endwhile;
                ?>

            <?php else : echo "Shto Poste me kategorine \"Featured\" në menyre qe të shfaqen featured posts";

            ?>
            <?php endif ?>
        </div>

        <div class="grid gap-10 mt-10 lg:gap-10 md:grid-cols-2 xl:grid-cols-3 ">
            <?php
            $args = array(
                'posts_per_page' => 100,
                'category__not_in' => 7,
            );

            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="cursor-pointer">
                        <a href="<?php the_permalink() ?>">
                            <div class="flex bg-center relative overflow-hidden transition-all bg-gray-100 rounded-md dark:bg-gray-800  hover:scale-105 aspect-video"> <?php the_post_thumbnail() ?></div>
                            <div><span class="inline-block mt-5 text-xs font-medium tracking-wider uppercase text-purple-600">
                                    <?php echo '<p>' . get_the_category($id)[0]->name . '</p>';
                                    ?></span></div>
                            <h2 class="mt-2 text-lg font-semibold tracking-normal text-brand-primary text-black"><?php the_title() ?></h2>
                            <div class="flex mt-3 space-x-2 text-gray-500 dark:text-gray-400">
                                <span class="text-xs text-gray-300 dark:text-gray-600">•</span><time class="text-sm"><?php the_time('l, d F Y') ?></time>
                            </div>
                        </a>
                    </div>

                <?php
                endwhile;
                ?>

            <?php else : echo "Shto Poste";

            ?>

            <?php endif;  ?>


            <?php 
            global $wp_query;
            
            ?>
            <!--div class="flex items-center py-8">
                <div class="h-max font-semibold text-gray-800 text-sm ml-3 hover:text-red-600 transition-all"> <?php echo the_posts_pagination();?></div>
                <div class="h-max font-semibold text-gray-800 text-sm ml-3 hover:text-red-600 transition-all"><?php echo next_posts_link('Next Page »'); ?></div>
            </div-->


        </div>
    </div>
</div>

<?php get_footer(); ?>