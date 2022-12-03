<?php
/*Template name: Success Donation*/
get_header();
session_start();

$fullName =  $_SESSION['fullName'];
if ($fullName != "") {

?>

    <div class="w-full flex justify-center">
        <div id='defaultModal' tabindex='-1' aria-hidden='true' class='overflow-y-auto overflow-x-hidden z-50'>
            <div class='relative p-4 w-full max-w-2xl h-full md:h-auto'>
                <div class='relative bg-green-700 shadow rounded'>
                    <div class='flex justify-center items-start rounded dark:border-gray-600 p-8'>
                        <h3 class='text-xl font-semibold text-gray-900 dark:text-white'>
                            Thank you so much for your donation <?php echo $fullName ?>!
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php

    ///header("refresh:1; url=form.php");

   echo "<script>setTimeout(()=> {
    window.location.href = 'http://localhost/wpadvanced/';
},1000)</script>";

} else {
    echo "<script>window.location.href = 'http://localhost/wpadvanced/'</script>";
}



session_destroy();
get_footer();

/**/
?>