<?php include('parts/login-modal.php'); ?>
<?php include('parts/register-modal.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.bootcdn.net/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
  <script src="https://unpkg.com/@popperjs/core@2.9.1/dist/umd/popper.min.js" charset="utf-8"></script>
  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />
  <title>SaveTheTree</title>

  <style media="screen">
    #map {
      height: 100%;
    }

    body {
      background: <?php the_field('background_color', 'options'); ?>;
    }

    nav a {
      color: <?php the_field('menu_font_color', 'options'); ?>;
    }

    nav {
      background: <?php the_field('navigation_background_color', 'options'); ?>;
    }
  </style>
  <?php wp_head(); ?>
</head>

<body>






  <nav class="flex justify-between items-center shadow-md font-bold p-4">
    <div class="lg:flex lg:justify-between lg:items-center ">
      <div class="flex justify-between items-center">
        <div>
          <?php

          if (has_custom_logo()) { ?>
            <?php the_custom_logo(); ?>
            <!-- Kjo funksion nese ska logo at'her shfaqet titulli faqes, po nese ka logo titulli faqes largohet  -->
          <?php } else { ?>
            <div class="text-lg uppercase">
              <a href="<?php echo get_bloginfo('url'); ?>" class="font-extrabold text-lg uppercase text-teal-500">
                <?php echo get_bloginfo('name'); ?>
              </a>
            </div>

            <p class="text-sm font-light text-gray-600">
              <?php echo get_bloginfo('description'); ?>
            </p>

          <?php } ?>
        </div>
      </div>
    </div>

    <div class="hidden md:block mr-8 py-3 tracking-wide flex flex-col w-2/4">
      <?php
      wp_nav_menu(
        array(
          'theme-location' => 'primary',
          'container' => 'div',
          'menu_class' => 'flex flex-wrap justify-between items-center',
        )
      );
      ?>

    </div>

    <div class="hamicon w-max right-0 absolute">
      <div id="open" class=" space-y-2 text-red-500 block md:hidden pr-5 cursor-pointer">
        <div class="w-8 h-1 bg-[#14B8A6]"></div>
        <div class="w-8 h-1 bg-[#14B8A6]"></div>
        <div class="w-8 h-1 bg-[#14B8A6]"></div>
      </div>

      <div id="close" class=" hidden pr-5 modal-close cursor-pointer z-50">
        <svg class="fill-current text-[#14B8A6]" xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 18 18">
          <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
        </svg>
      </div>
    </div>

    </div>
    <div class="flex flex-row gap-5">
      <?php get_template_part('modals'); ?>
    </div>
  </nav>






  <!--Sidenav-->

  <div id="sidenav" class="-left-full bg-white h-screen w-46 shadow-md absolute overflow-x-hidden flex flex-col items-left text-left z-20 transition-all">

    <div>
      <?php
      wp_nav_menu(
        array(
          'theme-location' => 'primary',
          'container' => 'div',
          'menu_class' => 'uppercase text-xl border-b-4 text-center p-10',
        )
      );
      ?>
    </div>



    <div class="p-10 flex flex-col items-center justify-center text-center">
      <?php
      if (is_user_logged_in()) {  ?>

        <div class="headerDropdown my-10">
          <div id="avatar" onclick="changeDropdown('dropdownItemSide') " class="cursor-pointer flex justify-center items-center"><img class="rounded-full overflow-hidden" src="<?php echo get_avatar_url(get_the_author_meta('ID'), array('size' => 42)); ?>" alt="avatar"></div>

          <div id="dropdownItemSide" class="hidden dropdownItems flex flex-col absolute bg-white w-min h-max mt-5 p-2 rounded shadow-[0_5px_60px_-15px_rgba(0,0,0,0.3)] transition-all">
            <a href="<?php echo esc_url(site_url('/profili')) ?>" class="hover:shadow inline-block px-6 py-2 text-black font-medium text-xs leading-tight uppercase transition duration-150 ease-in-out hover:text-slate-700">PROFILI</a>
            <a href="<?php echo wp_logout_url() ?>">
              <button class="inline-block px-6 py-2  text-black font-medium text-xs leading-tight uppercase rounded hover:shadow focus:bg-gray-300 focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out mr-2">Qkyqu</button>
            </a>
          </div>

        </div>

        <div>
          <button type="button" onclick="openDropdown(event,'dropdown-id')" class="inline-block px-6 py-2.5 bg-blue-700 font-medium text-xs leading-tight text-white uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-lg transition duration-150 ease-in-out mr-2">
            Fakturat</button>
          <div class="hidden bg-white  text-base z-50 float-left py-2 list-none text-left rounded shadow-lg mt-1" style="min-width:12rem" id="dropdown-id">
            <a href='<?php echo esc_url(site_url('/lista-fakturav')) ?>' class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-slate-700">
              Te gjitha
            </a>
            <a href="http://localhost/starlabs/wp-admin/post-new.php?post_type=faktura" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-slate-700">
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
        

        <div class="flex flex-col mt-2 gap-2">
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
   </div>




      <?php } else { ?>
        <button class="w-full mt-2 show-modal px-7 py-2 text-base font-medium text-center text-blue-600 transition duration-500 ease-in-out transform border-2 border-white shadow-md rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">Kyqu</button>

        <button class="w-full mt-2 show-modal-register px-7 py-2 text-base font-medium text-center text-white transition duration-500 ease-in-out transform bg-blue-600 rounded-xl hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 mr-2  ">Regjistrohu</button>
      <?php } ?>
    </div>
  </div>


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



  <body <?php body_class(); ?>>