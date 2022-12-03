<?php 
if(!is_user_logged_in()) {
    wp_redirect(esc_url(site_url('/')));
}
?>

<?php get_header();?>


            
           
                 <div class="flex items-center justify-center w-full bg-gray-100">
            <div class="w-full bg-white shadow-lg">
                <div class="flex justify-between p-4">
                   
                    <p class="text-3xl italic font-extrabold tracking-widest text-indigo-500 uppercase pt-16"><?php the_field('lloji_i_raportit'); ?></p>
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
                                 <?php the_field('adresa_juaj'); ?> 
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
                            <?php the_field('emri_dhe_mbiemri');?> <br>
                            10000, Prishtine
                            Kosovo, 
                           (+383) <?php the_field('numri_i_telefonit'); ?>
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
                                   <?php the_field('lloji_i_raportit'); ?>
                                    </th>   
                                
                                    <th class="px-4 py-2 text-xs text-gray-500 ">
                                         <?php // Rrezikshmeria //
                                               if(have_rows('raportimet')):?>
                                                 <?php while(have_rows('raportimet')): the_row();
                                                     $choose = get_sub_field('rrezikshmeria');?>
                                   
                                                       <?php if($choose == 'Po'):?> 
                                                         <p>Rrezikshmeria</p>                 
                                                      <?php endif;?>
                                    </th>
                                 
                                    <th class="px-4 py-2 text-xs text-gray-500 ">
                                        <?php // Raporti rreth Rrezikshmeris //
                                   
                                             if($choose == 'Po'):?> 
                                                <p>Pershkrimi rreth rrezikshmeris</p>                 
                                            <?php endif;?>
                                                     <?php endwhile;?>
                                                 <?php endif;?>

                                             <?php
                                                  $pershkrimiiankeses = get_field('lloji_i_raportit');
                                                      if($pershkrimiiankeses == 'Ankese'):?>
                                                          <p>Detaje rreth ankeses</p>                            
                                                     <?php endif ?>
                                            <?php
                                                  $kerkese = get_field('lloji_i_raportit');
                                                      if($kerkese == 'Kerkese'):?>
                                                          <p>Detaje rreth kerkeses</p>                            
                                                     <?php endif ?>           
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                <tr class="whitespace-nowrap">

                                <?php if(have_rows('raportimet') ):?>
                                    <?php while(have_rows('raportimet')): the_row();?>
                                    <?php 
                                        $raporti1 = get_sub_field('raportimi_1');
                                        $rrezikshmeria = get_sub_field('rrezikshmeria');
                                        $raportirrezik = get_sub_field('raportimi_rreth_rrezikshmerish');
                                        
                                        ?>

                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-900">
                                        <?php echo $raporti1;?>
                                        </div>
                                    </td>
      
                                    <td class="px-6 py-4">
                                       <?php echo $rrezikshmeria ?>
                                    </td>
                                    <td class="px-6 py-4">
                                    <?php echo $raportirrezik?>
                                    </td>
                                </tr>
                                <?php 
                             endwhile; 
                              endif; ?>

                                <tr class="whitespace-nowrap">

                                <?php if(have_rows('ankese') ):?>
                                    <?php while(have_rows('ankese')): the_row();?>
                                    <?php 
                                
                                        $ankese = get_sub_field('ankese');
                                        $pershkrimiiankeses = get_sub_field('ankese')
                                        ?>

                                    <td class="px-6 py-6">
                                        <div class="text-sm text-gray-900">
                             <?php echo $ankese;?>
                                        </div>
                                    </td>

                                  
                                    <td class="px-6 py-4">
                                    <?php echo $pershkrimiiankeses; ?>
                                    </td>
                                </tr>
                                <?php 
                                endwhile; 
                                endif; ?>
                               
                               <tr class="whitespace-nowrap">

                                <?php if(have_rows('kerkese') ):?>
                                    <?php while(have_rows('kerkese')): the_row();?>
                                    <?php 

                                        $kerkese = get_sub_field('kerkese');
                                        $pershkrimiikerkeses = get_sub_field('pershkrimi');
                                        ?>

                                    <td class="px-6 py-6">
                                        <div class="text-sm text-gray-900">
                                <?php echo $kerkese;?>
                                        </div>
                                    </td>

                                
                                    <td class="px-6 py-4">
                                    <?php echo $pershkrimiikerkeses; ?>
                                    </td>
                                </tr>
                                <?php 
                                endwhile; 
                                endif; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
       
                <div class="flex justify-between p-4">
                    <div>
                        <h3 class="text-xl">Termet dhe Kushtet :</h3>
                        <ul class="text-xs list-disc list-inside">
                            <li>Ju lutemi te keni parasysh rregullat dhe ligjet para se te raportoni.</li>
                            <li>Nuk mund te terheqni denoncimin/padin per nje person pa u konsultuar me organet kompetente.</li>
                            <li>Pyjet e Kosoves jane te mbrojtura me ligje.</li>
                        </ul>
                    </div>
                    <div class="p-4">
                        <h3>Nenshkrimi: <?php the_field('emri_dhe_mbiemri') ?></h3>
                        <div class="text-4xl italic text-indigo-500">_____________ </div>
                    </div>
                </div>
                <div class="w-full h-0.5 bg-indigo-500"></div>

                <div class="p-4">
                    <div class="flex items-center justify-center">
                        Faleminderit per bashkepunimin tuaj me ne.
                    </div>
                   
                </div>

            </div>
        </div>
        
                <div class="w-full h-0.5 bg-gray-800"></div>
                

            </div>
        </div>
   
 