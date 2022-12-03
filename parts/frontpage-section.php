<?php if(have_rows('content') ):?>

<?php while(have_rows('content')): the_row();?>

        

                <?php if(get_row_layout() == 'textarea_with_image'):
                           $title = get_sub_field('title');
                           $content = get_sub_field('description');
                           $image = get_sub_field('image');
                           $picture = $image['sizes']['large'];
                           $side = get_sub_field('choose');
                  ?>
                   
                   <div class="mx-auto bg-white rounded-xl shadow-md overflow-hidden pl-40">
  <div class="md:flex">
    <div class="md:shrink-0">
    <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold"><h1 class="text-lg font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl py-2">
         
         <span class="block text-green-600 xl:inline"><?php echo $title; ?></span></h1></div>
      <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Finding customers for your new business</a>
      <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-2xl"><?php echo $content; ?></p>
    </div>
    <div class="py-7">
    <img class="w-1/2" src="<?php echo $picture; ?>" alt="Man looking at item at a store">
    </div>
  </div>
</div>
                  
                 <?php endif;?>
<?php endwhile;?>

<?php endif;?>