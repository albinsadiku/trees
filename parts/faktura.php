


<?php get_header(); 
/* Template Name: Faktura */ 

?>

<h1>asd</h1>
<?php 

global $post ?>

        <?php
        $faktura = new WP_Query( array(
            'post_type' => 'faktura',
            'posts_per_page' => 1,
            'author' => get_current_user_id()
        ));
        
        while($faktura->have_posts()) {
            $faktura->the_post(); ?>
     
             <h1 class="text-lg text-center"><?php echo get_the_title(); ?> <?php the_field('data');?></h1>
           
                 <div class="flex items-center justify-center w-full bg-gray-100">
            <div class="w-full bg-white shadow-lg">
                <div class="flex justify-between p-4">
                    <div>
                        <h1 class="text-3xl italic font-extrabold tracking-widest text-indigo-500 uppercase">Fakture</h1>
                        
                    </div>
                    <p class="text-xl font-bold tracking-widest uppercase pt-16"><?php the_field('lloji_raportit'); ?></p>
                    <div class="p-2">
                        <ul class="flex">
                            <li class="flex flex-col items-center p-2 border-l-2 border-indigo-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                </svg>
                                <span class="text-sm">
                                    www.savethetree.com
                                </span>
                                <span class="text-sm">
                                    www.support.savethetree.com
                                </span>
                            </li>
                            <li class="flex flex-col p-2 border-l-2 border-indigo-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span class="text-sm">
                                 <?php the_field('adresa'); ?> 
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="w-full h-0.5 bg-indigo-500"></div>
                <div class="flex justify-between p-4">
                    <div>
                        <h6 class="font-bold">Data: <span class="text-sm font-medium"><?php the_field('data'); ?></span></h6>
                        <h6 class="font-bold">ID e juaj : <span class="text-sm font-medium"> <?php the_field('id_juaj'); ?></span></h6>
                        <h6 class="font-bold">Roli : <span class="text-sm font-medium"> <?php the_field('roli_juaj'); ?></span></h6>
                    </div>
                    <div class="w-40">
                        <address class="text-sm">
                            <span class="font-bold">Derguar nga: <br></span>
                            <?php the_field('emri_mbiemri');?> <br>
                            10000, Prishtine
                            Kosovo, 
                           (+383) <?php the_field('numri_telefonit'); ?>
                        </address>
                    </div>
                    <div class="w-40">
                        <address class="text-sm">
                            <span class="font-bold">Derguar tek :</span>
                            MBPZH
                            10000, Prishtine
                            Kosovo, 
                            (+383) 44-123-456
                        </address>
                    </div>
                    <div></div>
                </div>
                <div class="w-full p-4">
                    <div class="w-full border-b border-gray-200 shadow">
                        <table class="w-full">
                            <thead class="bg-gray-50 w-full">
                                <tr>
                                    
                                    <th class="px-4 py-2 text-xs text-gray-500 ">
                                       Raporti
                                    </th>
                                    <th class="px-4 py-2 text-xs text-gray-500 ">
                                        
                                    </th>
                                    <th class="px-4 py-2 text-xs text-gray-500 ">
                                      
                                    </th>
                                    <th class="px-4 py-2 text-xs text-gray-500 ">
                                    Rrezikshmeri
                                    </th>
                                    </th>
                                    <th class="px-4 py-2 text-xs text-gray-500 ">
                                   Pershkrimi
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                <tr class="whitespace-nowrap">
                                   
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-900">
                                            <?php the_field('raporti_1') ;?>
                                        </div>
                                    </td>

                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-500">
                                    
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-sm ml-2 text-gray-500">
                                        
                                    </td>
                                    <td class="px-6 py-4">
                                       <?php the_field('rrezikshmeri'); ?>
                                    </td>
                                    <td class="px-6 py-4">
                                    <?php the_field('pershkrimi_1'); ?>
                                    </td>
                                </tr>
                                
                                <tr class="whitespace-nowrap">
                                    
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-900">
                                        <?php the_field('raporti_2') ;?>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-500"></div>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                    
                                    </td>
                                    <td class="px-6 py-4">
                                    <?php the_field('rrezikshmeri_2'); ?>
                                    </td>
                                    <td class="px-6 py-4">
                                    <?php the_field('pershkrimi_2'); ?>
                                    </td>
                                </tr>
                                <tr class="whitespace-nowrap">
                                   
                                   <td class="px-6 py-4">
                                       <div class="text-sm text-gray-900">
                                           <?php the_field('raporti_3') ;?>
                                       </div>
                                   </td>


                                   <td class="px-6 py-4">
                                       <div class="text-sm text-gray-500"></div>
                                   </td>
                                   <td class="px-6 py-4 text-sm ml-2 text-gray-500">
                                       
                                   </td>
                                   <td class="px-6 py-4">
                                   <?php the_field('rrezikshmeri_3'); ?>
                                   </td>
                                   <td class="px-6 py-4">
                                   <?php the_field('pershkrimi_3'); ?>
                                   </td>
                               </tr>
                               <tr class="whitespace-nowrap">
                                   
                                   <td class="px-6 py-4">
                                       <div class="text-sm text-gray-900">
                                           <?php the_field('raporti_4') ;?>
                                       </div>
                                   </td>


                                   <td class="px-6 py-4">
                                       <div class="text-sm text-gray-500"></div>
                                   </td>
                                   <td class="px-6 py-4 text-sm ml-2 text-gray-500">
                                       
                                   </td>
                                   <td class="px-6 py-4">
                                   <?php the_field(''); ?>
                                   </td>
                                   <td class="px-6 py-4">
                                   <?php the_field('pershkrimi'); ?>
                                   </td>
                               </tr>
                                <tr class="border-b-2 whitespace-nowrap">
                                   
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-900">
                                        <?php the_field('raporti_5') ;?>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-500"></div>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                       
                                    </td>
                                    <td class="px-6 py-4">
                                    <?php the_field(''); ?>
                                    </td>
                                    <td class="px-6 py-4">
                                    <?php the_field('pershkrimi'); ?>
                                   </td>
                                    
                                </tr>
                                
                                                   </tbody>
                        </table>
                    </div>
                </div>
                <div class="flex justify-between p-4">
                    <div>
                        <h3 class="text-xl">Terms And Condition :</h3>
                        <ul class="text-xs list-disc list-inside">
                            
                        </ul>
                    </div>
                    <div class="p-4">
                        <h3>Nenshkrimi: <?php the_field('emri_mbiemri') ?></h3>
                        <div class="text-4xl italic text-indigo-500">_____________ </div>
                    </div>
                </div>
                <div class="w-full h-0.5 bg-indigo-500"></div>

                <div class="p-4">
                    <div class="flex items-center justify-center">
                       
                    </div>
                    <div class="flex items-end justify-end space-x-3">
                      
                        <button class="px-4 py-2 text-sm text-green-600 bg-green-100">Print</button>
                        <button class="px-4 py-2 text-sm text-blue-600 bg-blue-100">Save</button>
                        <button class="px-4 py-2 text-sm text-red-600 bg-red-100">Cancel</button>
                    </div>
                </div>

            </div>
        </div>
        
                <div class="w-full h-0.5 bg-gray-800"></div>
                

            </div>
        </div>
        <?php 
        }
        ?> 
 
  
<?php echo paginate_links(); ?>



<?php get_footer(); ?>