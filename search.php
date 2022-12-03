<?php get_header(); ?>
<section class="w-full p-5">
    <h1 class="w-full mt-12 mb-8 text-2xl">Rezulatet e kerkuara per: <b> <?php echo get_search_query(); ?> </b></h1>

    <div class="search-section-container flex flex-col align-center xl:flex-row">

        <div class="block mt-2 mb-4 xl:hidden">
            <h2 class="text-[#14B8A6] font-bold">Po kerkoni per diçka tjetër?</h2>
            <?php get_search_form(); ?>
        </div>

        <div class="w-full xl:w-9/12 h-auto">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post(); ?>
                    <?php get_template_part('content', 'search') ?>
                <?php
                endwhile;
                ?>

            <?php else : echo "Nuk u gjet asgjë";

            ?>
            <?php endif ?>

        </div>

        <div class="w-0 hidden xl:w-1/5 xl:h-auto xl:ml-auto xl:block">
            <?php get_sidebar() ?>
        </div>
    </div>

    <div class="flex items-center py-8">
        <div class="h-max font-semibold text-gray-800 text-sm ml-3 hover:text-red-600 transition-all"> <?php previous_posts_link('« Previous Page'); ?></div>
        <div class="h-max font-semibold text-gray-800 text-sm ml-3 hover:text-red-600 transition-all"><?php next_posts_link('Next Page »'); ?></div>
    </div>

</section>

<?php get_footer(); ?>