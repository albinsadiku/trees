<?php get_header(); ?>

<div class="container mx-auto flex flex-wrap py-6">
    <!-- Posts Section -->
    <section class="w-full md:w-2/3 flex flex-col items-center px-3">

        <article class="flex flex-col shadow my-4">
            <!-- Article Image -->
            
                <?php the_post_thumbnail(); ?>
            
            <div class="bg-white flex flex-col justify-start p-6">
                <div class="text-sm mt-2 mb-2">
                    <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4"><?php echo the_tags(); ?></a>
                </div>
                <p class="text-3xl font-bold hover:text-gray-700 pb-4"><?php the_title(); ?></p>
                <p class="text-sm pb-3">
                    E<a href="#" class="font-semibold hover:text-gray-800">
                    </a>, Publikuar <?php the_time('l, d F Y'); ?>
                </p>
                <p><?php the_content(); ?></p>

            </div>
        </article>


    </section>

    <!-- Sidebar Section -->
    <aside class="w-full md:w-1/3 flex flex-col items-center px-3">

        <div class="w-full bg-white shadow flex flex-col my-4 p-6">
            <p class="text-xl font-semibold pb-5">Rreth nesh</p>
            <p class="pb-2">Qellimi ynë është mbrotja e pyejeve ndaj aksioneve ilegale. Për më shumë informacion rreth nesh, kliko me poshtë</p>
            <a href="<?php echo "http://localhost/wpadvanced/rreth-nesh/" ?>" class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-4">
                Njoftohu me ne
            </a>
        </div>

        <div class="w-full bg-white shadow flex flex-col my-4 p-6">
        <p class="text-xl font-semibold pb-5">Poste te ngjashme</p>
            <?php include('related-posts.php');?>
        </div>

    </aside>

</div>




<?php


get_footer(); ?>