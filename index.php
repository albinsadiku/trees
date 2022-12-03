<?php get_header();?>


<?php 
while(have_posts()) { 
    the_post(); ?>
    <div class="w-1/2">    
    <h1"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    <h1 class="text-red-500 ">
    <?php the_content(); ?>
    </h1>
    </div>
    <hr>
    <?php }

?>


<?php get_footer();?>