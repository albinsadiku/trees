<?php get_header();


$year     = get_query_var('year');
$monthnum = get_query_var('monthnum');

$muaji = "";

switch ($monthnum) {
    case 1:
        $muaji = "Janar";
        break;

    case 2:
        $muaji = "Shkurt";
        break;

    case 3:
        $muaji = "Mars";
        break;

    case 4:
        $muaji = "Prill";
        break;

    case 5:
        $muaji = "Maj";
        break;

    case 6:
        $muaji = "Qershor";
        break;

    case 7:
        $muaji = "Korrik";
        break;

    case 8:
        $muaji = "Gusht";
        break;

    case 9:
        $muaji = "Shtator";
        break;

    case 10:
        $muaji = "Tetor";
        break;
    case 11:
        $muaji = "Nëntor";
        break;
    case 12:
        $muaji = "Dhjetor";
        break;
}

?>


<h1 class="text-center m-10 text-2xl">Arkiva: <b><?php echo $muaji . " " . $year ?></b></h1>
<div class="flex flex-col space-around justify-center items-center lg:items-start p-0 sm:p-5 lg:flex-row">
    <div class="w-full lg:w-3/4 flex flex-wrap justify-center lg:justify-start">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
        ?>
   <div class="rounded-lg border border-gray-200 shadow-md my-5 w-80 mx-2 mt-2">
                    <a class="">
                        <div class="rounded-t-lg"><?php the_post_thumbnail(array('class' => 'object-cover h-52 w-full')); ?></div>
                    </a>
                    <div class="p-5 flex flex-col items-center">
                        <h5 class="mb-2 text-xl font-bold tracking-tight text-green-600 text-center"><?php echo the_title(); ?></h5>
                        <a href="<?php the_permalink(); ?>" class="bg-transparent hover:bg-[#14B8A6] text-black font-semibold hover:text-white py-1 px-4 border border-[#14B8A6] hover:border-transparent rounded hover:text-white transition-all">
                            Read more
                        </a>
                    </div>
                </div>
                
        <?php
            endwhile;
        endif;
        ?>
    </div>
    <div>
        <div class="w-80">
            <?php get_template_part('sidebar')  ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>