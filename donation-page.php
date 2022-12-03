<?php
/*
Template name: Donation Page    
*/

get_header();


?>


<div>
    <div class="w-full sm:h-80 md:h-96 h-48">
        <div class="w-full h-full bg-no-repeat bg-center flex items-center" style="background:linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.674)), url('<?php echo the_field("background-img"); ?>')">
            <h1 class="w-full text-white text-center text-3xl font-bold uppercase">
                <?php echo the_field('title') ?>
            </h1>
        </div>

    </div>

    <div class="w-full flex flex-col md:flex-row p-5 md:p-10 items-center">

        <div class="w-full md:w-1/2 flex flex-col gap-10 p-5">
            <h1 class="text-3xl font-bold">
                <?php echo the_field('sub-title'); ?>
            </h1>
            <p class="text-xl"><?php echo the_field('description'); ?></p>
        </div>

        <div class="w-full md:w-1/2">
            <div id="donationForm" tabindex="-1" aria-hidden="true" class="h-full flex items-center justify-center overflow-y-auto overflow-x-hidden z-50 md:inset-0 tranistion-all">
                <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                    <!-- Modal header -->
                    <div class="bg-[#14B8A6] flex justify-between items-start p-4 dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Donato me paypal
                        </h3>
                    </div>
                    <!-- Modal content -->
                    <div class="relative bg-white p-2 border-r-2 border-l-2 border-b-2 rounded-b border-[#ebebeb]">

                        <!-- Modal body -->
                        <form action="charge" method="post" class="m-2">
                            <div>
                                <label for="small-input" class="block mb-2 text-sm font-medium text-gray-600">Emri juaj</label>
                                <input type="text" name="fullName" required class="block p-2 w-full text-gray-900 bg-gray-50 rounded border border-gray-300 sm:text-xs outline-0">
                            </div>
                            <div class="mt-5">
                                <label for="small-input" class="block mb-2 text-sm font-medium text-gray-600">Zgjedh shumën</label>
                            </div>

                            <div>
                                <div class="flex flex-row w-full">
                                    <div id="10d" data-value="10.0" class="cursor-pointer option w-1/2 text-[#14B8A6] border border-[#14B8A6] focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded text-sm px-5 py-2.5 text-center mr-2 mb-2">$10</div>
                                    <div id="25d" data-value="25.0" class="cursor-pointer option w-1/2 text-[#14B8A6] border border-[#14B8A6] focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded text-sm px-5 py-2.5 text-center mr-2 mb-2">$25</div>
                                </div>

                                <div class="flex flex-row w-full">
                                    <div id="50d" data-value="50.0" class="cursor-pointer option w-1/2 text-[#14B8A6] border border-[#14B8A6] focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded text-sm px-5 py-2.5 text-center mr-2 mb-2">$50</div>
                                    <div id="100d" data-value="100.0" class="cursor-pointer option w-1/2 text-[#14B8A6] border border-[#14B8A6] focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded text-sm px-5 py-2.5 text-center mr-2 mb-2">$100</div>
                                </div>

                                <div class="flex flex-row w-full">
                                    <div class="w-1/2 flex flex-row pr-2">
                                        <div class="rounded-l w-auto px-5 py-2.5 text-center bg-[#14B8A6] text-white font-bold">$</div>
                                        <input id="customDon" min="10" value="" required onchange="changeDonation()" class="option bg-slate-200 w-full text-[#14B8A6] border outline-none border-[#14B8A6] font-bold bg-transparent rounded-r text-sm px-5 py-2.5 text-left" type="text" placeholder="Tjeter" autocomplete="off">
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" name="amount" id="amount" value="" required>

                            <label for="message" class="mt-10 block mb-2 text-sm font-medium text-gray-600">Mesazhi juaj</label>
                            <textarea id="message" name="message" value="" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 outline-0" placeholder="Shkruaj një koment..."></textarea>

                            <!-- Modal footer -->
                            <div class="flex items-center justify-end my-3 border-gray-200 dark:border-gray-600">
                                <button type="submit" name="submit" class="my-6 text-white bg-[#14B8A6] hover:bg-[#109e8d] focus:ring-4 focus:outline-none focus:ring-[#F7BE38]/50 font-medium rounded text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 mb-2 transition-all">
                                    <svg class="w-4 h-4 mr-2 -ml-1" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="paypal" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                        <path fill="currentColor" d="M111.4 295.9c-3.5 19.2-17.4 108.7-21.5 134-.3 1.8-1 2.5-3 2.5H12.3c-7.6 0-13.1-6.6-12.1-13.9L58.8 46.6c1.5-9.6 10.1-16.9 20-16.9 152.3 0 165.1-3.7 204 11.4 60.1 23.3 65.6 79.5 44 140.3-21.5 62.6-72.5 89.5-140.1 90.3-43.4 .7-69.5-7-75.3 24.2zM357.1 152c-1.8-1.3-2.5-1.8-3 1.3-2 11.4-5.1 22.5-8.8 33.6-39.9 113.8-150.5 103.9-204.5 103.9-6.1 0-10.1 3.3-10.9 9.4-22.6 140.4-27.1 169.7-27.1 169.7-1 7.1 3.5 12.9 10.6 12.9h63.5c8.6 0 15.7-6.3 17.4-14.9 .7-5.4-1.1 6.1 14.4-91.3 4.6-22 14.3-19.7 29.3-19.7 71 0 126.4-28.8 142.9-112.3 6.5-34.8 4.6-71.4-23.8-92.6z"></path>
                                    </svg>
                                    Check out with PayPal
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>






<?php get_footer(); ?>