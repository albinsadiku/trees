<?php

global $wpdb;

if(isset($_POST['btnsubmit']))  {
    $name = $_POST['emri'];
    $lastname = $_POST['mbiemri'];
    $age = $_POST['mosha'];
    $adress = $_POST['adresa'];
    $email = $_POST['email'];
    $phone = $_POST['telefon'];

     $erorr = array();
  


  // Kontrollimi i username nese ka hapesire apo jo 
  if(strpos($name, ' ')!==FALSE) {
    $erorr['username_space'] =  "";
    
    echo "
    <div id='defaultModal' tabindex='-1' aria-hidden='true' class='overflow-hidden overflow-hidden fixed bottom-0 right-0 left-0 z-50 w-full transition-all'>
     <div class='relative p-4 w-full max-w-2xl h-full md:h-auto'>
         <div class='relative rounded-lg shadow bg-red-500'>
             <div class='flex justify-between items-center justify-center p-4 rounded-t dark:border-gray-600'>
                 <h3 class='text-xl font-semibold text-gray-900 dark:text-white'>
                      Fusha e Emrit ka hapsire!
                 </h3>
   
                 <button type='button' id='closeNotify' class='text-white bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-[#730318] dark:hover:text-white' data-modal-toggle='defaultModal'>
                     <svg class='w-5 h-5' fill='currentColor' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' d='M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z' clip-rule='evenodd'></path></svg>  
                 </button>
             </div>
         </div>
     </div>
   </div>
   ";
  }

   // Kontrollimi i username nese eshte e zbrazet apo jo 
  if(empty($name)) {
    $erorr['username_empty'] =  "";
    echo "
    <div id='defaultModal' tabindex='-1' aria-hidden='true' class='overflow-hidden overflow-hidden fixed bottom-0 right-0 left-0 z-50 w-full transition-all'>
     <div class='relative p-4 w-full max-w-2xl h-full md:h-auto'>
         <div class='relative rounded-lg shadow bg-red-500'>
             <div class='flex justify-between items-center justify-center p-4 rounded-t dark:border-gray-600'>
                 <h3 class='text-xl font-semibold text-gray-900 dark:text-white'>
                      Fusha e Emrit eshte e zbrazet!
                 </h3>
   
                 <button type='button' id='closeNotify' class='text-white bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-[#730318] dark:hover:text-white' data-modal-toggle='defaultModal'>
                     <svg class='w-5 h-5' fill='currentColor' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' d='M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z' clip-rule='evenodd'></path></svg>  
                 </button>
             </div>
         </div>
     </div>
   </div>
   ";
  
  }
  if(strpos($lastname, ' ')!==FALSE) {
    $erorr['lastname_space'] =  "";
    
    echo "
    <div id='defaultModal' tabindex='-1' aria-hidden='true' class='overflow-hidden overflow-hidden fixed bottom-0 right-0 left-0 z-50 w-full transition-all'>
     <div class='relative p-4 w-full max-w-2xl h-full md:h-auto'>
         <div class='relative rounded-lg shadow bg-red-500'>
             <div class='flex justify-between items-center justify-center p-4 rounded-t dark:border-gray-600'>
                 <h3 class='text-xl font-semibold text-gray-900 dark:text-white'>
                      Fusha e Mbiemrit ka hapesires!
                 </h3>
   
                 <button type='button' id='closeNotify' class='text-white bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-[#730318] dark:hover:text-white' data-modal-toggle='defaultModal'>
                     <svg class='w-5 h-5' fill='currentColor' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' d='M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z' clip-rule='evenodd'></path></svg>  
                 </button>
             </div>
         </div>
     </div>
   </div>
   ";
  }

   // Kontrollimi i username nese eshte e zbrazet apo jo 
  if(empty($lastname)) {
    $erorr['lastname_empty'] =  "";
    echo "
    <div id='defaultModal' tabindex='-1' aria-hidden='true' class='overflow-hidden overflow-hidden fixed bottom-0 right-0 left-0 z-50 w-full transition-all'>
     <div class='relative p-4 w-full max-w-2xl h-full md:h-auto'>
         <div class='relative rounded-lg shadow bg-red-500'>
             <div class='flex justify-between items-center justify-center p-4 rounded-t dark:border-gray-600'>
                 <h3 class='text-xl font-semibold text-gray-900 dark:text-white'>
                      Fusha e Mbiemrit eshte e zbrazet!
                 </h3>
   
                 <button type='button' id='closeNotify' class='text-white bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-[#730318] dark:hover:text-white' data-modal-toggle='defaultModal'>
                     <svg class='w-5 h-5' fill='currentColor' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' d='M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z' clip-rule='evenodd'></path></svg>  
                 </button>
             </div>
         </div>
     </div>
   </div>
   ";
  
  }
// Kontrollimi i username nese eshte e zbrazet apo jo 
if(empty($age)) {
    $erorr['age_empty'] =  "";
    echo "
    <div id='defaultModal' tabindex='-1' aria-hidden='true' class='overflow-hidden overflow-hidden fixed bottom-0 right-0 left-0 z-50 w-full transition-all'>
     <div class='relative p-4 w-full max-w-2xl h-full md:h-auto'>
         <div class='relative rounded-lg shadow bg-red-500'>
             <div class='flex justify-between items-center justify-center p-4 rounded-t dark:border-gray-600'>
                 <h3 class='text-xl font-semibold text-gray-900 dark:text-white'>
                      Fusha e Moshes eshte e zbrazet!
                 </h3>
   
                 <button type='button' id='closeNotify' class='text-white bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-[#730318] dark:hover:text-white' data-modal-toggle='defaultModal'>
                     <svg class='w-5 h-5' fill='currentColor' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' d='M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z' clip-rule='evenodd'></path></svg>  
                 </button>
             </div>
         </div>
     </div>
   </div>
   ";
}
   if(empty($adress)) {
    $erorr['adress_empty'] =  "";
    echo "
    <div id='defaultModal' tabindex='-1' aria-hidden='true' class='overflow-hidden overflow-hidden fixed bottom-0 right-0 left-0 z-50 w-full transition-all'>
     <div class='relative p-4 w-full max-w-2xl h-full md:h-auto'>
         <div class='relative rounded-lg shadow bg-red-500'>
             <div class='flex justify-between items-center justify-center p-4 rounded-t dark:border-gray-600'>
                 <h3 class='text-xl font-semibold text-gray-900 dark:text-white'>
                      Fusha e Adreses eshte e zbrazet!
                 </h3>
   
                 <button type='button' id='closeNotify' class='text-white bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-[#730318] dark:hover:text-white' data-modal-toggle='defaultModal'>
                     <svg class='w-5 h-5' fill='currentColor' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' d='M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z' clip-rule='evenodd'></path></svg>  
                 </button>
             </div>
         </div>
     </div>
   </div>
   ";
  
   }
    // Ben kontrollimin nese email eshte valide 
if(!is_email($email)) {

  $erorr['email_valid'] =  "";

  echo "
 <div id='defaultModal' tabindex='-1' aria-hidden='true' class='overflow-hidden overflow-hidden fixed bottom-0 right-0 left-0 z-50 w-full transition-all'>
  <div class='relative p-4 w-full max-w-2xl h-full md:h-auto'>
      <div class='relative rounded-lg shadow bg-red-500'>
          <div class='flex justify-between items-center justify-center p-4 rounded-t dark:border-gray-600'>
              <h3 class='text-xl font-semibold text-gray-900 dark:text-white'>
                   Kjo Email nuk eshte valide!
              </h3>

              <button type='button' id='closeNotify' class='text-white bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-[#730318] dark:hover:text-white' data-modal-toggle='defaultModal'>
                  <svg class='w-5 h-5' fill='currentColor' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' d='M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z' clip-rule='evenodd'></path></svg>  
              </button>
          </div>
      </div>
  </div>
</div>
";
  
}




if(count($erorr) ==0) {
    $wpdb->query("INSERT INTO vullnetaret(emri,mbiemri,mosha,adresa,email,numri) VALUES('$name','$lastname','$age','$adress','$email','$phone')");
  echo "
  <div id='defaultModal' tabindex='-1' aria-hidden='true' class='overflow-hidden overflow-hidden fixed bottom-0 right-0 left-0 z-50 w-full transition-all'>
   <div class='relative p-4 w-full max-w-2xl h-full md:h-auto'>
       <div class='relative rounded-lg shadow bg-[#3e6b06]'>
           <div class='flex justify-between items-center justify-center p-4 rounded-t dark:border-gray-600'>
               <h3 class='text-xl font-semibold text-gray-900 dark:text-white'>
                   Ju aplikuat me suksses, ne do te ju kontaktojm permes email adreses ose numrit te telefonit.
               </h3>
 
               <button type='button' id='closeNotify' class='text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-[#315406] dark:hover:text-white' data-modal-toggle='defaultModal'>
                   <svg class='w-5 h-5' fill='currentColor' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' d='M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z' clip-rule='evenodd'></path></svg>  
               </button>
           </div>
       </div>
   </div>
 </div>
 ";
  /*echo "<script> setTimeout(function(){
    window.location.href = 'http://localhost/wpadvanced';
 }, 2000);
</script>";*/

header(site_url());

}
} ?>