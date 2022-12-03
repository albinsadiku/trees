<?php if(have_rows('slider') ):?>

<?php while(have_rows('slider')): the_row();?>
<?php  
$titulli = get_sub_field('title');
$image = get_sub_field('foto_1');
$picture = $image['sizes']['large'];

$image2 = get_sub_field('foto_2');
$picture2 = $image2['sizes']['large'];

$image3 = get_sub_field('foto_3');
$picture3 = $image3['sizes']['large'];


?>

<div class="h-screen w-full overflow-hidden flex flex-nowrap text-center" id="slider">
    <div class="text-white space-y-4 flex-none w-full flex flex-col items-center justify-center">
      <img src=" <?php echo $picture; ?>" alt="">
        <h2 class="text-4xl max-w-md">Your Big Ideia</h2>
        <p class="max-w-md">It's fast, flexible, and reliable — with zero-runtime.</p>
    </div>
    <div class=" text-white space-y-4 flex-none w-full flex flex-col items-center justify-center">
    <img src=" <?php echo $picture2; ?>" alt="">
        <h2 class="text-4xl max-w-md">Tailwind CSS works by scanning all of your HTML</h2>
        <p class="max-w-md">It's fast, flexible, and reliable — with zero-runtime.</p>
    </div>
    <div class="text-white space-y-4 flex-none w-full flex flex-col items-center justify-center">
    <img src=" <?php echo $picture3; ?>" alt="">
        <h2 class="text-4xl max-w-md">React, Vue, and HTML</h2>
        <p class="max-w-md">Accessible, interactive examples for React and Vue powered by Headless UI, plus vanilla HTML if you’d rather write any necessary JS yourself.</p>
    </div>
</div> 


<?php endwhile;?>

<?php endif;?>