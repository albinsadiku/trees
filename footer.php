  <?php 
$rreth_ne = site_url( '/rreth-ne/', );
$kontakti = site_url( '/kontakti/', );
  ?>
  
  <footer>
      <div class="container mx-auto px-8">
        <div class="w-full flex flex-col md:flex-row py-6">
          <div class="flex-1 mb-6 text-black">
            <a class="text-teal-500 no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="<?php get_the_title(); ?>">           
            SaveTheTree
            </a>
          </div>
          <div class="flex-1">
            <p class="uppercase text-gray-500 md:mb-6">Linqe</p>
            <ul class="list-reset mb-6">
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">FAQ</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Ndihme</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Mbeshtetje</a>
              </li>
            </ul>
          </div>
          <div class="flex-1">
            <p class="uppercase text-gray-500 md:mb-6">Ligjore</p>
            <ul class="list-reset mb-6">
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Kushtet</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Privatesia</a>
              </li>
            </ul>
          </div>
          <div class="flex-1">
            <p class="uppercase text-gray-500 md:mb-6">Rrjetet Sociale</p>
            <ul class="list-reset mb-6">
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="www.facebook.com" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Facebook</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Linkedin</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Twitter</a>
              </li>
            </ul>
          </div>
          <div class="flex-1">
            <p class="uppercase text-gray-500 md:mb-6">Kompania</p>
            <ul class="list-reset mb-6">
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="<?php site_url('/'); ?>" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Blog zyrtar</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="<?php echo $rreth_ne ?>" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Rreth nesh</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="<?php echo $kontakti; ?>" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Kontakti</a>
              </li>
            </ul>
          </div>
        </div>
      </div>

    </footer>

	

	<?php wp_footer() ; ?>
	</body>
</html>



