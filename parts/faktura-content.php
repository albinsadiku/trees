

<?php get_header(); 
/* Template Name: Fakturat Content */
?>
  
        <form role="search" action="<?php echo site_url('/'); ?>" method="get" id="searchform">
            <div class="flex items-center justify-center mt-3">  
                 <div class="flex border-2 border-gray-200 rounded">
                    <input type="text" class="px-4 py-2 w-80" name="s" placeholder="Kerko faktura"/>
                    <input type="hidden" name="post_type" value="faktura" /> <!-- // hidden 'products' value -->
                    <input type="submit" alt="Search" value="Kerko" class="px-4 text-white bg-gray-600 border-l " />
                 </div>
            </div>
        </form>
        

         <div class="contentarea"> 
            <div id="content" class="content_right">  
               <h4 class="font-medium leading-tight text-2xl mt-0 mb-2 text-black-600">
                Rezultatet e kerkuara per fakturen : <p>--<?php echo htmlentities($s, ENT_QUOTES, 'UTF-8'); ?>-- 
                </h4>
                  <p class="font-medium leading-tight text-2xl mt-0 mb-2 text-blue-600">Jane:</p>
                     <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>    
         <div id="post-<?php the_ID(); ?>" class="posts">        
             <article>        
                 <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="font-medium text-blue-600 hover:text-red-500 transition duration-300 ease-in-out mb-4"><?php the_title(); ?></a>   
                    <p><?php the_excerpt(); ?></p>        
            
             </article><!-- #post -->    
         </div>
        <?php endwhile; ?>
    <?php endif; ?>


           </div><!-- content -->    
        </div><!-- contentarea -->   


<?php 
 $current = get_query_var( 'paged') ? get_query_var( 'paged'): 1;
    $faktura = new WP_Query(array(
    'post_type' => 'faktura',
    'posts_per_page'=>'5', 
    'paged' => $current,  
    'author' => get_current_user_id(),
));

  ?>
    
    <table class="border-collapse w-full">
    <thead>
        <tr>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Emri Faktures</th>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Adresa</th>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Lloji raportit</th>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Veprimet</th>
        </tr>
    </thead>

                    <?php  
                    while($faktura->have_posts()) : $faktura -> the_post()?>
                           <tbody>
        <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Emri Faktures</span>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Adresa</span>
                <?php the_field('adresa_juaj');?>&nbsp <?php the_field('data'); ?>
            </td>
          	<td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Lloji raportit</span>
                <span class="rounded bg-green-400 py-1 px-3 text-xs font-bold"><?php the_field('lloji_i_raportit'); ?></span>
          	</td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Veprimet</span>
                <a href="http://localhost/starlabs/wp-admin/edit.php?post_type=faktura&author" class="text-blue-400 hover:text-blue-600 underline">Modfiko/Fshij</a>
               
            </td>
        </tr>
       
    <?php 

endwhile;
    
     
     ?>
    </table>
  

   <div class="flex justify-center items-center">
        <div class="h-max font-semibold items-center justify-center text-gray-800 text-lg ml-3 hover:text-red-600 transition-all">
   <?php 
    $totalpage = $faktura -> max_num_pages;
    
    echo paginate_links( array(
        'total' => $totalpage,
        'current' => $current,
        'show_all' => true,
        'prev_text'          => __( '&laquo; Prapa' ),
        'next_text'          => __( 'Para &raquo;' ),
    ))

?>
       </div>     
        </div>
<!-- component -->

    

<!-- component -->


<?php get_footer();?>
