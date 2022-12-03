<?php 

//this 404 is to redirect to 404-content, because I had to use ACF-s

$pages = get_pages(array(
    'meta_key' => '_wp_page_template',
    'meta_value' => '404-content.php'
));

foreach($pages as $page){
    echo $page->ID.'<br />';
}


wp_redirect(get_permalink($page->ID));


?>