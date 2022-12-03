<div class="w-full mt-2 h-auto bg-slate-50">
    <div class="flex flex-col lg:flex-row rounded overflow-hidden h-auto lg:h-32 border">
        <div class="block h-auto bg-cover flex items-center bg-center lg:w-60 "><?php the_post_thumbnail(); ?></div>
        <div class=" rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-around leading-normal">
            <div class="text-black font-bold text-2xl mb-2 leading-tight"><?php the_title(); ?></div>
            <a href="<?php the_permalink(); ?>" class="hover:text-red-800 trasition-all">
                <p class="w-max bg-transparent hover:bg-[#14B8A6] text-black font-semibold hover:text-white py-1 px-4 border border-[#14B8A6] hover:border-transparent rounded hover:text-white transition-all">Lexo më shumë</p>
            </a>
        </div>
    </div>
</div>