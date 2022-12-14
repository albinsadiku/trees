<?php get_header(); ?>



<style>
	.gradient {
		background: linear-gradient(90deg, #d53369 0%, #daae51 100%);
	}
</style>


<body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">






	<!--Hero-->
	<div class="pt-24 bg-gray-200">
		<?php
		if (have_rows('landing_page')); ?>
		<?php while (have_rows('landing_page')) : the_row();
			$titulli = get_sub_field('titulli_kryesor');
			$nentitulli = get_sub_field('nentitulli');
			$link = get_sub_field('link');
			$image = get_sub_field('fotografia');
			$fotografia = $image['sizes']['large'];
		?>

			<div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
				<!--Left Col-->
				<div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">

					<h1 class="my-4 text-5xl font-bold text-green-600 font-sans"><?php echo $titulli; ?></h1>
					<p class="leading-normal text-2xl mb-8"><?php echo $nentitulli; ?></p>



					<?php if ($link) : ?> <a href="<?php echo $link['url']; ?> "><button class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg">Shiko</button></a>
					<?php endif; ?>
				</div>
				<!--Right Col-->
				<div class="w-full md:w-3/5 py-6 text-center">
					<img class="w-full md:w-4/5 z-50" src="<?php echo $fotografia; ?>">
				</div>
			</div>
	</div>

<?php endwhile; ?>


<!-- Test-->



<!-- Test-->

<div class="relative -mt-12 lg:-mt-24">
	<svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink%22%3E
				<g stroke=" none" stroke-width="1" fill="none" fill-rule="evenodd">
		<g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
			<path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
			<path d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z" opacity="0.100000001"></path>
			<path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" id="Path-4" opacity="0.200000003"></path>
		</g>
		<g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
			<path d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"></path>
		</g>
		</g>
	</svg>
</div>
</div>
<h1 class="lg:text-5xl  w-full my-2 text-2xl font-bold leading-tight text-center text-green-600">Karakteristikat rreth pyjeve t?? Kosov??s </h1>
<div class="w-full mb-10">
	<div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
</div>


<?php if (have_rows('content')) : ?>

<?php while (have_rows('content')) : the_row(); ?>



  <?php if (get_row_layout() == 'textarea_with_image') :

    $title = get_sub_field('title');
    $content = get_sub_field('description');
    $image = get_sub_field('image');
    $picture = $image['sizes']['large'];
    $side = get_sub_field('choose');

  ?>
    <div class="max-w-5xl mx-auto py-3">

      <?php if ($side == 'left') : ?>

        <div class="flex flex-col w-full h-auto md:flex-row gap-5 items-center mt-2 p-6">

          <div class="w-full md:w-3/4 md:rounded overflow-hidden md:h-72 object-cover">
            <img src="<?php echo $picture; ?>" alt="">
          </div>

          <div class="rounded w-full md:w-1/2">
            <h1 class="text-3xl md:text-4xl font-extrabold tracking-tight text-gray-900 py-2">
              <span class="block text-green-600"><?php echo $title; ?></span>
            </h1>
            <p class="text-base text-gray-500"><?php echo $content; ?></p>

          </div>
        </div>

      <?php else : ?>
        <div class="flex flex-col-reverse w-full md:flex-row gap-5 items-center mt-2 p-6 md:gap-0">
          <div class="md:mx-5 rounded w-full md:w-1/2">
            <h1 class="text-3xl md:text-4xl font-extrabold tracking-tight text-gray-900 py-2">
              <span class="block text-green-600"><?php echo $title; ?></span>
            </h1>
            <p class="text-base text-gray-500 "><?php echo $content; ?></p>

          </div>
          <div class="w-full md:w-3/4 md:rounded overflow-hidden md:h-72 object-cover"><img src="<?php echo $picture; ?>" alt=""></div>
        </div>
      <?php endif; ?>
    </div>
  <?php endif; ?>


<?php endwhile; ?>

<?php endif; ?>




<?php
if (have_rows('sherbime_tona')) : ?>
	<?php while (have_rows('sherbime_tona')) : the_row();
		$image = get_sub_field('foto_1');
		$picture = $image['sizes']['large'];
		$image2 = get_sub_field('foto_2');
		$picture2 = $image2['sizes']['large'];
		$image3 = get_sub_field('foto_3');
		$picture3 = $image3['sizes']['large'];
		$link = get_sub_field('link_1');
		$link2 = get_sub_field('link_2');
		$link3 = get_sub_field('link_3');
	?>


		<!-- Section Tabs-->
		<div class="flex flex-wrap" id="tabs-id">
			<div class="w-full p-2">
				<ul class="flex mb-0 list-none flex-wrap pt-3 pb-4 flex-row">
					<li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
						<a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-white bg-green-500" onclick="changeAtiveTab(event,'tab-profile')">
							<i class="fas fa-space-shuttle text-base mr-1"></i> <?php the_sub_field('titulli_1'); ?>
						</a>
					</li>
					<li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
						<a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-blue-600 bg-white" onclick="changeAtiveTab(event,'tab-settings')">
							<i class="fas fa-cog text-base mr-1"></i> <?php the_sub_field('titulli_2'); ?>
						</a>
					</li>
					<li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
						<a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-blue-500 bg-white" onclick="changeAtiveTab(event,'tab-options')">
							<i class="fas fa-briefcase text-base mr-1"></i> <?php the_sub_field('titulli_3'); ?>
						</a>
					</li>
				</ul>
				<div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
					<div class="px-4 py-5 flex-auto">
						<div class="tab-content tab-space">
							<div class="block" id="tab-profile">
								<?php if ($picture) : ?> <img class="w-64 h-64 " src="<?php echo $picture ?>" alt="" /> <?php endif; ?>
								<p>
									<?php the_sub_field('pershkrimi_1'); ?>
									<br />

									<?php if ($link) : ?> <a href="<?php echo $link['url']; ?>  "><button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg">Lexo me shume</button></a><?php endif; ?>
								</p>
							</div>
							<div class="hidden" id="tab-settings">
								<img class="w-64 h-64" src="<?php echo $picture2; ?>" alt="" />
								<p>
									<?php the_sub_field('pershkrimi_2'); ?>
									<br />

									<?php if ($link2) : ?> <a href="<?php echo $link2['url']; ?>  "><button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg">Lexo me shume</button></a><?php endif; ?>
								</p>
							</div>
							<div class="hidden" id="tab-options">
								<img class="w-64 h-64" src="<?php echo $picture3; ?>" alt="" />
								<p>
									<?php the_sub_field('pershkrimi_3'); ?>
									<br />

									<?php if ($link3) : ?> <a href="<?php echo $link3['url']; ?>"><button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg">Lexo me shume</button></a><?php endif; ?>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	<?php endwhile; ?>
<?php endif; ?>

<!-- End Section -->
<?php
if (have_rows('donato')) : ?>
	<?php while (have_rows('donato')) : the_row();

		$link = get_sub_field('link_1');
		$link2 = get_sub_field('link_2');
		$link3 = get_sub_field('link_3');
	?>

		<section class="bg-gray-100 py-8">

			<div class="container mx-auto px-2 pt-4 pb-12 text-gray-800">

				<h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">Donation</h1>
				<div class="w-full mb-4">
					<div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
				</div>



				<div class="flex flex-col sm:flex-row justify-center pt-12 my-12 sm:my-4">

					<div class="flex flex-col w-5/6 lg:w-1/4 mx-auto lg:mx-0 rounded-none lg:rounded-l-lg bg-white mt-4">
						<div class="flex-1 bg-white text-gray-600 rounded-t rounded-b-none overflow-hidden shadow">
							<div class="p-8 text-3xl font-bold text-center border-b-4"><?php the_sub_field('titulli_1'); ?></div>
							<ul class="w-full text-center text-sm">
								<li class="border-b py-4"><?php the_sub_field('nentituj'); ?></li>
								<li class="border-b py-4"><?php the_sub_field('nentituj_oferta1'); ?></li>

							</ul>
						</div>
						<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
							<div class="w-full pt-6 text-3xl text-gray-600 font-bold text-center"> <span class="text-base">P??r nj?? person</span></div>
							<div class="flex items-center justify-center">
								<?php if ($link) : ?><a href="<?php echo $link['url']; ?>"><button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg">Apliko</button></a><?php endif; ?>
							</div>
						</div>
					</div>



					<div class="flex flex-col w-5/6 lg:w-1/3 mx-auto lg:mx-0 rounded-lg bg-white mt-4 sm:-mt-6 shadow-lg z-10">
						<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
							<div class="w-full p-8 text-3xl font-bold text-center"><?php the_sub_field('titulli_3'); ?></div>
							<div class="h-1 w-full gradient my-0 py-0 rounded-t"></div>
							<ul class="w-full text-center text-base font-bold">

								<li class="border-b py-4"><?php the_sub_field('nentituj_3'); ?></li>
								<li class="border-b py-4"><?php the_sub_field('nentituj_oferta3'); ?></li>

							</ul>
						</div>
						<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
							<div class="w-full pt-6 text-4xl font-bold text-center"><?php the_sub_field('qmimi_2'); ?>???<span class="text-base">/ p??r person</span></div>
							<div class="flex items-center justify-center">
								<?php if ($link2) : ?><a href="<?php echo $link2['url']; ?>"><button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg">Dhuro</button></a><?php endif; ?>
							</div>
						</div>
					</div>



					<div class="flex flex-col w-5/6 lg:w-1/4 mx-auto lg:mx-0 rounded-none lg:rounded-l-lg bg-white mt-4">
						<div class="flex-1 bg-white text-gray-600 rounded-t rounded-b-none overflow-hidden shadow">
							<div class="p-8 text-3xl font-bold text-center border-b-4"><?php the_sub_field('titulli_2'); ?></div>
							<ul class="w-full text-center text-sm">
								<li class="border-b py-4"><?php the_sub_field('nentituj_2'); ?></li>
								<li class="border-b py-4"><?php the_sub_field('nentituj_oferta2'); ?></li>

							</ul>
						</div>
						<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
							<div class="w-full pt-6 text-3xl text-gray-600 font-bold text-center"><?php the_sub_field('qmimi'); ?>??? <span class="text-base">/ p??r person</span></div>
							<div class="flex items-center justify-center">
								<?php if ($link3) : ?><a href="<?php echo $link3['url']; ?>"><button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg">Dhuro</button></a><?php endif; ?>
							</div>
						</div>
					</div>

				</div>

			</div>


		</section>
	<?php endwhile; ?>
<?php endif; ?>

<!-- Change the colour #f8fafc to match the previous section colour -->
<svg class="wave-top" viewBox="0 0 1439 147" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
		<g transform="translate(-1.000000, -14.000000)" fill-rule="nonzero">
			<g class="wave" fill="#f8fafc">
				<path d="M1440,84 C1383.555,64.3 1342.555,51.3 1317,45 C1259.5,30.824 1206.707,25.526 1169,22 C1129.711,18.326 1044.426,18.475 980,22 C954.25,23.409 922.25,26.742 884,32 C845.122,37.787 818.455,42.121 804,45 C776.833,50.41 728.136,61.77 713,65 C660.023,76.309 621.544,87.729 584,94 C517.525,105.104 484.525,106.438 429,108 C379.49,106.484 342.823,104.484 319,102 C278.571,97.783 231.737,88.736 205,84 C154.629,75.076 86.296,57.743 0,32 L0,0 L1440,0 L1440,84 Z"></path>
			</g>
			<g transform="translate(1.000000, 15.000000)" fill="#FFFFFF">
				<g transform="translate(719.500000, 68.500000) rotate(-180.000000) translate(-719.500000, -68.500000) ">
					<path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
					<path d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z" opacity="0.100000001"></path>
					<path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" opacity="0.200000003"></path>
				</g>
			</g>
		</g>
	</g>
</svg>








<div class="p-5 sm:p-10 bg-[#269488] ">
	<?php get_template_part('searchform-section') ?>
</div>



<?php get_footer(); ?>