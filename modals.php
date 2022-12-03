<?php
if (is_user_logged_in()) { ?>



  <div class="hidden md:block">
      

      <?php
        if ( is_user_logged_in() ) {
          $user = wp_get_current_user();
          $allowed_roles = array('administrator', 'visitor');
          if ( array_intersect($allowed_roles, $user->roles ) || ( !is_user_logged_in()) ) {?> 
            <a href="<?php echo esc_url(site_url('/regjistrohu-si-vullnetar')) ?> ?>" class="inline-block px-6 py-2.5 bg-blue-700 font-medium text-xs leading-tight text-white uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-lg transition duration-150 ease-in-out mr-2">
            Donatoret</a>
           <a href="<?php echo esc_url(site_url('/admin-map')) ?> ?>" class="inline-block px-6 py-2.5 bg-blue-700 font-medium text-xs leading-tight text-white uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-lg transition duration-150 ease-in-out mr-2">
            Mapa admin</a>
       
         <?php }

          }

        ?>
    <button type="button" onclick="openDropdown(event,'dropdown-ids')" class="inline-block px-6 py-2.5 bg-blue-700 font-medium text-xs leading-tight text-white uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-lg transition duration-150 ease-in-out mr-2">
      Fakturat</button>
    
    <div class="hidden bg-white  text-base z-999 float-left py-2 list-none text-left rounded shadow-lg mt-1" style="min-width:12rem" id="dropdown-ids">
      <a href='<?php echo esc_url(site_url('/lista-fakturav')) ?>' class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-slate-700 z-999">
        Te gjitha
      </a>
      <a href="http://localhost/starlabs/wp-admin/post-new.php?post_type=faktura" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-slate-700 z-999">
        Shto nje te re
      </a>
      <a href="http://localhost/starlabs/wp-admin/edit.php?post_type=faktura&author" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-slate-700">
        Fshije/Modifiko
      </a>
      <div class="h-0 my-2 border border-solid border-t-0 border-slate-800 opacity-25"></div>
      <a href="#" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-slate-700">
        Save the Tree
      </a>
    </div>

  </div>

  <div class="hidden md:block headerDropdown pr-20">
  <div id="avatar" class="cursor-pointer" onclick="changeDropdown('dropdownItem') "><img class="rounded-full overflow-hidden" src="<?php echo get_avatar_url(get_the_author_meta('ID'), array('size'=>42)); ?>" alt="avatar"></div>
    <div id="dropdownItem" class="hidden dropdownItems flex flex-col absolute bg-white w-min h-max mt-5 p-2 rounded shadow-[0_5px_60px_-15px_rgba(0,0,0,0.3)] transition-all">
      <a href="<?php echo esc_url(site_url('/profili')) ?>" class="hover:shadow inline-block px-6 py-2 text-black font-medium text-xs leading-tight uppercase transition duration-150 ease-in-out hover:text-slate-700">PROFILI</a>
      <a href="<?php echo wp_logout_url() ?>">
        <button class="inline-block px-6 py-2  text-black font-medium text-xs leading-tight uppercase rounded hover:shadow focus:bg-gray-300 focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out mr-2">Qkyqu</button>
      </a>
    </div>

  </div>
<?php }
?>

<?php if (is_user_logged_in()) { ?>

  <div class="modal-login hidden">
    <div class="overlay hidden"></div>
    <button class="hidden md:block show-modal-register text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 shadow-lg shadow-teal-500/50 dark:shadow-lg dark:shadow-teal-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Regjistrohu</button>
    <div class="modal-register hidden">
      <button class="close-modal-register">&times;</button>

    <?php } else { ?>
      <button class="hidden md:block show-modal px-7 py-2 text-base font-medium text-center text-blue-600 transition duration-500 ease-in-out transform border-2 border-white shadow-md rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">Kyqu</button>

      <div class="modal-login hidden w-full md:w-auto p-6  pt-24 sm:p-28">
        <button class="close-modal-login">&times;</button>

      <?php } ?>

      <div class="flex flex-col justify-center z-999">
        <div class="w-full p-2 md:p-6 m-auto bg-transparent border-t-4 border-teal-500 rounded-md shadow-md border-top lg:max-w-md ">
          <form method="post" name="form">
            <h1 class="text-3xl font-semibold text-center text-green-800">Save The Trees</h1>
            <form class="mt-6">
              <label for="loginuser" class="block text-lg text-white"> Emri/Email</label>
              <input type="text" name="loginuser" placeholder="example@example.com " class="w-full block px-4 py-2 mt-2  text-green-800 bg-white border rounded-md focus:border-green-800 focus:ring-green-800  focus:outline-none focus:ring focus:ring-opacity-40">
              <form class="mt-6">
                <label for="loginpass" class="block text-lg text-white"> Fjalekalimi</label>
                <input type="password" name="loginpass" placeholder="example@example.com " class="w-full block px-4 py-2 mt-2 text-green-800 bg-white border rounded-md focus:border-green-800 focus:ring-green-800  focus:outline-none focus:ring focus:ring-opacity-40">
                <a href="#" class="text-lg text-white hover:underline">Keni harruar fjalekalimin?</a>
                <div class="mt-6">
                  <button type="submit" name="submitbtn" class="w-full px-4 py-2 tracking-wide text-white uppercase text-lg transition-colors duration-200 transform bg-teal-500 rounded-md hover:bg-green-800 focus:outline-none focus:bg-green-800">
                    Kyqu
                  </button>
                </div>
              </form>
            </form>
          </form>

        </div>
      </div>
      </div>



      <div class="overlay hidden"></div>
      <button class="hidden md:block show-modal-register px-7 py-2 text-base font-medium text-center text-white transition duration-500 ease-in-out transform bg-blue-600 rounded-xl hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 mr-2  ">Regjistrohu</button>
      <div class="modal-register hidden  w-full md:w-1/2 p-6 pt-24 sm:p-28">
        <button class="close-modal-register -m-5">&times;</button>
        <div class="relative flex flex-col justify-center w-full">

          <div class="w-full md:p-6 m-auto bg-transparent border-t-4 border-teal-500 rounded-md shadow-md border-top lg:max-w-md">

            <form method="post">
              <div class="relative flex flex-col justify-center  overflow-hidden">
                <h1 class="text-3xl font-semibold text-center text-green-800">Save The Trees</h1>
                <form class="mt-6">
                  <div>
                    <label for="username" class="block text-lg  text-white mb-2">Emri i Perdoruesit:</label>
                    <input type="text" name="username" placeholder="example" autocomplete="off" class="block w-full px-4 py-2 mt-2  text-green-800 bg-white border rounded-md focus:border-green-800 focus:ring-green-800 focus:outline-none focus:ring focus:ring-opacity-40">
                  </div>
                  <div class="mt-4">
                    <div>
                      <label for="email" class="block text-lg text-white">Email:</label>
                      <input type="email" name="email" placeholder="example@example.com" autocomplete="off" class="block w-full px-4 py-2 mt-2  text-green-800 bg-white border rounded-md focus:border-green-800 focus:ring-green-800 focus:outline-none focus:ring focus:ring-opacity-40">
                    </div>
                    <div class="mt-4">
                      <div>
                        <label for="password" class="block text-lg text-white">Fjalekalimi</label>
                        <input type="password" name="password" placeholder="********" autocomplete="off" class="block w-full px-4 py-2 mt-2  text-green-800 bg-white border rounded-md focus:border-green-800 focus:ring-green-800 focus:outline-none focus:ring focus:ring-opacity-40">
                      </div>
                      <div class="mt-4">
                        <div>
                          <label for="password" class="block text-lg text-white">Konfirmo Fjalekalimin:</label>
                          <input type="password" name="confirmpassword" placeholder="********" autocomplete="off" class="block w-full px-4 py-2 mt-2 text-green-800 bg-white border rounded-md focus:border-green-800 focus:ring-green-800focus:outline-none focus:ring focus:ring-opacity-40">
                        </div>


                        <div class="mt-6">
                          <button type="submit" name="registerbtn" class="w-full px-4 py-2 tracking-wide text-white text-lg transition-colors duration-200 transform bg-teal-500 rounded-md hover:bg-green-800 focus:outline-none focus:bg-green-800">
                            Regjistrohu
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay hidden"></div>


    <!--Script Files-->

    <script src="https://unpkg.com/@popperjs/core@2.9.1/dist/umd/popper.min.js" charset="utf-8"></script>
    <script>
      function openDropdown(event, dropdownID) {
        let element = event.target;
        while (element.nodeName !== "BUTTON") {
          element = element.parentNode;
        }
        var popper = Popper.createPopper(element, document.getElementById(dropdownID), {
          placement: 'bottom-start'
        });
        document.getElementById(dropdownID).classList.toggle("hidden");
        document.getElementById(dropdownID).classList.toggle("block");
        document.querySelector('.dropdownItems').classList.remove("block");
        document.querySelector('.dropdownItems').classList.add("hidden");
      }
    </script>