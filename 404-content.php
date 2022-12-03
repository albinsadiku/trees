<?php
/*
Template Name: 404 Page
*/
get_header(); ?>

<section class="w-full h-4/5 bg-no-repeat bg-cover flex  justify-center items-center bg-center " style="background:linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.674)), url(<?php the_field('404-background') ?>)">

  <div class="404-content">
    <div class="flex flex-col items-center text-center max-w-max sm:flex-row sm:text-left">

      <div class="p-10">
        <h1 class="text-9xl text-white font-bold">404</h1>
      </div>

      <div class="p-5 border-t-4 flex flex-col justify-between w-auto h-auto sm:border-l-4 sm:border-t-0">
        <p class="text-white text-5xl pt-3 uppercase">Ops!</p>
        <p class="text-white text-1xl pt-3  ">Faqja që po kërkoni nuk u gjet</p>
        <a class="underline text-white font-bold mt-3 p-1 text-center before:content-['←']  sm:max-w-max" href="<?php echo get_home_url(); ?>">Kthehu te Kryefaqja</a>
      </div>
    </div>

    <div class="search-form-container flex justify-center p-8">
      <?php get_search_form(); ?>
    </div>
  </div>
</section>
<?php get_footer();?>




<?php //npx tailwindcss -i css/src/input.css -o css/dist/output.css --watch
//src="<?php the_field('404-background'); 
?>