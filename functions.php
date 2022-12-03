<?php
function load_stylesheets(){
wp_enqueue_style('savetrees', get_template_directory_uri(). '/css/savetrees.css', array());
  
wp_enqueue_style(
    "tailwind",
    get_template_directory_uri() . "/css/dist/output.css",
    [],
    "3.0.24",
    "all"
  );

}
add_action('wp_enqueue_scripts','load_stylesheets');
add_image_size('custom_size',1200, 600, false);

//testtt 

add_action('wp_ajax_contact_us', 'ajax_contact_us');
function ajax_contact_us() { 
  wp_send_json_success("test");
}
// end testt


// javascript
function javascript() {
  wp_enqueue_script( 'login-register', get_stylesheet_directory_uri() . '/js/login-register.js', array( 'jquery'), false,true);

  wp_register_script('slider-js', get_stylesheet_directory_uri() . '/js/slider-frontpage.js', '' , 1, true);
  wp_enqueue_script('slider-js');

  wp_register_script('burger-menu', get_stylesheet_directory_uri() . '/js/burger-menu.js', '' , 1, true);
  wp_enqueue_script('burger-menu');
  
  wp_register_script('section-js', get_stylesheet_directory_uri() . '/js/section-js.js', '' , 1, true);
  wp_enqueue_script('section-js');

  wp_enqueue_script('donation', get_stylesheet_directory_uri() . '/donation/js/donation.js', array('jquery'), false, true);


}
add_action('wp_enqueue_scripts','javascript');


// javascript end 


function savetrees_theme_setup() {
  add_theme_support('menus');

  register_nav_menu('primary','Navigimi kryesor i menyve');
}
  add_action('init','savetrees_theme_setup');
  

  function icon_stylesheet() {

    wp_register_style( 'fontawesome', 'http:////maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
    wp_enqueue_style( 'fontawesome');
  }
  add_action( 'wp_enqueue_scripts', 'icon_stylesheet');

  

  add_theme_support( 'custom-logo',[
    'header-text' => ['site-title', 'site_description'],
    'height' => 100,
    'width' => 200,
    'flex-width' => true,
    'flex-height' => true,
  ]);
  
  // Ridirect login
  function redirect_login() {
    wp_redirect(site_url(). '');
    exit();
  }
 
  add_action('wp_logout','redirect_login');

// Hide pages when a user searchs something
function remove_pages_from_search($query)
{
  if ($query->is_search) {
    $query->set('post_type', 'post');
  }
  return $query;
}
add_filter('pre_get_posts', 'remove_pages_from_search');



// Lista e fakturav search

function template_chooser($template)   
{    
  global $wp_query;   
  $post_type = get_query_var('post_type');   
  if( $wp_query->is_search && $post_type == 'faktura' )   
  {
    return locate_template('faktura-content.php');
    WP_Query( array(
      'author' => get_current_user_id()
    ));  //  
  }   
  return $template;   
}
add_filter('template_include', 'template_chooser'); 
//end of lista e fakturav

// Ridirektimi i userave nese s'jane te kyqur 

add_action('template_redirect', 'only_for_admins');
function only_for_admins() {
  if( is_page('faktura') && ! is_user_logged_in() ) {
    wp_redirect(site_url( 'error404') ); 
    die();  
  }
  if( is_page('lista-fakturav') && ! is_user_logged_in()) { 
    wp_redirect(site_url('error404'));
    die();
  }
  if( is_page('profili') && ! is_user_logged_in() ) {
    wp_redirect(site_url('error404'));
    die();
  } 
}


// end of ridirektimi i userave
 

 

  // Navigation Menus
register_nav_menus(array(
	'primary' => __( 'Primary Menu'),
	'footer' => __( 'Footer Menu'),
));

// Does page have children?
function has_children() {
	
	global $post;
	
	$pages = get_pages('child_of=' . $post->ID);
	return count($pages);
	
}

function savethetree_widget_setup()
  {
    register_sidebar(
      array(
        'name'=>'Sidebar',
        'id'=>'sidebar-1',
        'description'=>'This is the primary sidebar',
        'before_widget' => '<aside  id="%1$s" class="widget %2$s bg-gray-100  py-3 px-6 mt-auto">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title text-[#14B8A6]">',
        'after_title'   => '</h1><hr>',
      )
    );
  }
  	
add_theme_support( 'post-thumbnails' );

  add_action('widgets_init', 'savethetree_widget_setup');

/* Excerpt length function*/
add_filter( 'excerpt_length', function($length) {
  return 30;
}, PHP_INT_MAX );



  function tutsplus_burger_menu_scripts() {
     
    wp_enqueue_script( 'burger-menu-script', get_stylesheet_directory_uri() . '/parts/burger-menu.js', array( 'jquery' ),false,true );
  
}
add_action( 'wp_enqueue_scripts', 'tutsplus_burger_menu_scripts' );


//Customize forgot password 
add_action('login_head', 'change_my_forgott_passord');
function change_my_forgott_passord() {

  echo '<style>
    body {
      background-image: url("http://localhost/starlabs/wp-content/uploads/2022/06/bistra.jpg");
      -webkit-background-size: cover !important;
      background-size: cover !important;
      font-family:"Monteserrat", Arial;
    }
    .login h1 a { 
      background-image: url("http://localhost/starlabs/wp-content/uploads/2022/05/savethetree1-4.png");
      
      -webkit-background-size: contain !important;
      background-size: contain !important;
      height: 150px !important;
      width: 150px !important;
    }
    .login-form {
      background-color: rgba(255, 255, 255, 0.14);
    }

    .message { 
      color:black;
    } 
  
  </style>';
}

/// Sessions

function sess_start()
{
  if (!session_id())
    session_start();
}
add_action('init', 'sess_start');


///Custom Page to fetch donations

/**
 * Register a custom menu page.
 */
function wpdocs_register_my_custom_menu_page()
{
  add_menu_page(
    __('Donators page', 'textdomain'),
    'Donatorët',
    'manage_options',
    'custompage',
    'donators_page',
    'dashicons-money',
    25
  );
}
add_action('admin_menu', 'wpdocs_register_my_custom_menu_page');

/**
 * Display a custom menu page
 */
function donators_page()
{
  wp_head();
  require 'donation/config.php';
  $sql = "SELECT fullName, amount, message FROM payments";

  $result = mysqli_query($conn, $sql);
  $resultNum = mysqli_num_rows($result);

?>
  <div class="relative overflow-x-auto shadow-md sm:rounded">
    <table class="w-full text-sm text-left text-gray-400">
      <thead class="text-lg text-gray-300 bg-gray-900 uppercase">
        <tr>
          <th scope="col" class="px-6 py-3">
            Donatori
          </th>
          <th scope="col" class="px-6 py-3">
            Donacioni
          </th>
          <th scope="col" class="px-6 py-3">
            Mesazhi
          </th>

        </tr>
      </thead>

      <?php
      if ($resultNum > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
      ?>
          <tbody>
            <tr class="border-b bg-gray-800 border-gray-700">
              <th scope="row" class="px-6 py-4 font-medium  text-white whitespace-nowrap">
                <?php echo $row['fullName']; ?>
              </th>
              <td class="px-6 py-4">
                <?php echo "$" . $row['amount']; ?>
              </td>
              <td class="px-6 py-4">
                <?php echo $row['message']; ?>
              </td>
            </tr>
          </tbody>
      <?php
        }
      } ?>
    </table>
  </div>
<?php
}



// Faktura custom post type

function fakturat_raportet() {
  

  // Faktura Post Type
  register_post_type('faktura', array(
    'show_in_rest' => true,
    'supports' => array('title', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
    'public' => true,
    'show_ui' => true,
    'taxonomies' => array( 'category' ),
    'labels' => array(
      'name' => 'Faktura',
      'add_new' =>'Shto',  
      'add_new_item' => 'Shto faktura',
      'edit_item' => 'Modifiko faktura',
      'all_items' => 'Shfaq te gjitha',
      'singular_name' => 'Faktura',
    
    ),
    'menu_icon' => 'dashicons-welcome-write-blog'
  ));
}

add_action('init', 'fakturat_raportet');

// end of faktura







  if( function_exists('acf_add_options_page') ) {
	
    acf_add_options_page(array(
      'page_title' 	=> 'Theme General Settings',
      'menu_title'	=> 'Theme Settings',
      'menu_slug' 	=> 'theme-general-settings',
      'capability'	=> 'edit_posts',
      'redirect'		=> false,
    ));

    
  }


  // ACF code starts here 



   


    if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_627221f1ce12a',
	'title' => 'Footer',
	'fields' => array(
		array(
			'key' => 'field_62722200b054a',
			'label' => 'Description',
			'name' => 'description',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => '',
		),
		array(
			'key' => 'field_62743091b4d7d',
			'label' => 'phonenumber',
			'name' => 'phonenumber',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'min' => '',
			'max' => '',
			'step' => '',
		),
		array(
			'key' => 'field_627430c4b4d7e',
			'label' => 'location',
			'name' => 'location',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_6274345470c87',
			'label' => 'url',
			'name' => 'url',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page',
				'operator' => '==',
				'value' => '7',
			),
		),
		array(
			array(
				'param' => 'page',
				'operator' => '==',
				'value' => '29',
			),
		),
		array(
			array(
				'param' => 'page',
				'operator' => '==',
				'value' => '11',
			),
		),
		array(
			array(
				'param' => 'page',
				'operator' => '==',
				'value' => '105',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

endif;

// Footer ACF

if( function_exists('acf_add_local_field_group') ):

  acf_add_local_field_group(array(
    'key' => 'group_627221f1ce12a',
    'title' => 'Footer',
    'fields' => array(
      array(
        'key' => 'field_62722200b054a',
        'label' => 'Description',
        'name' => 'description',
        'type' => 'textarea',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'maxlength' => '',
        'rows' => '',
        'new_lines' => '',
      ),
      array(
        'key' => 'field_62743091b4d7d',
        'label' => 'phonenumber',
        'name' => 'phonenumber',
        'type' => 'number',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'min' => '',
        'max' => '',
        'step' => '',
      ),
      array(
        'key' => 'field_627430c4b4d7e',
        'label' => 'location',
        'name' => 'location',
        'type' => 'text',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_6274345470c87',
        'label' => 'url',
        'name' => 'url',
        'type' => 'url',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'page',
          'operator' => '==',
          'value' => '7',
        ),
      ),
      array(
        array(
          'param' => 'page',
          'operator' => '==',
          'value' => '29',
        ),
      ),
      array(
        array(
          'param' => 'page',
          'operator' => '==',
          'value' => '11',
        ),
      ),
      array(
        array(
          'param' => 'page',
          'operator' => '==',
          'value' => '105',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
  ));
  
  endif;
// End Footer ACF


//404 ACF
if( function_exists('acf_add_local_field_group') ):

  acf_add_local_field_group(array(
    'key' => 'group_6273d4ba3fe9e',
    'title' => '404 Background image',
    'fields' => array(
      array(
        'key' => 'field_6273d4c39aeea',
        'label' => '404-background',
        'name' => '404-background',
        'type' => 'image',
        'instructions' => '',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'return_format' => 'url',
        'preview_size' => 'full',
        'library' => 'all',
        'min_width' => '',
        'min_height' => '',
        'min_size' => '',
        'max_width' => '',
        'max_height' => '',
        'max_size' => '',
        'mime_types' => '',
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'page_template',
          'operator' => '==',
          'value' => '404-content.php',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
  ));
  
  endif;
  /// END 404 ACF

  // Theme Settings ACF

  

