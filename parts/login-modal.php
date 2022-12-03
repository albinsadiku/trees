
<?php
if (isset($_POST['submitbtn'])) {

  $redirect_to = !empty($_POST['redirect_to']) ? $_POST['redirect_go'] : '/';
  $user_login = sanitize_user($_POST['loginuser']);
  $user_password = sanitize_text_field($_POST['loginpass']);

  $user = wp_authenticate($user_login, $user_password);

  if (!is_wp_error($user)) {
    wp_set_auth_cookie($user->data->ID);
  
  echo "<script type='text/javascript'>
  
  (function()
  {
    if( window.localStorage )
    {
      if( !localStorage.getItem('firstLoad') )
      {
        localStorage['firstLoad'] = true;
        window.location.reload();
      }  
      else
        localStorage.removeItem('firstLoad');
    }
  })();
  
  </script>";
  $username = wp_get_current_user()->user_login;


?><div id='defaultModal' tabindex='-1' aria-hidden='true' class='overflow-y-auto overflow-hidden fixed bottom-0 right-0 left-0 z-50 w-full transition-all'>
  <div class='relative p-4 w-full max-w-2xl h-full md:h-auto'>
      <div class='relative bg-white rounded-lg shadow'>
          <div class='flex justify-between items-center justify-center p-4 rounded-t border-b dark:border-gray-600 bg-[#3e6b06]'>
              <h3 class='text-xl font-semibold text-gray-900 dark:text-white'>
                Mire se vini <?php echo $username ?>!
              </h3>
              <button type='button' id='closeNotify' class='text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-[#315406] dark:hover:text-white' data-modal-toggle='defaultModal'>
                  <svg class='w-5 h-5' fill='currentColor' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'>
                      <path fill-rule='evenodd' d='M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z' clip-rule='evenodd'></path>
                  </svg>
              </button>
          </div>
      </div>
  </div>
</div> <?php 
  
}
  else {

    echo "
 <div id='defaultModal' tabindex='-1' aria-hidden='true' class='overflow-hidden overflow-hidden fixed bottom-0 right-0 left-0 z-50 w-full transition-all'>
  <div class='relative p-4 w-full max-w-2xl h-full md:h-auto'>
      <div class='relative rounded-lg shadow bg-red-500'>
          <div class='flex justify-between items-center justify-center p-4 rounded-t dark:border-gray-600'>
              <h3 class='text-xl font-semibold text-gray-900 dark:text-white'>
                   Emri i përdoruesit ose fjalëkalimi nuk është i saktë!
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
}
?> 


