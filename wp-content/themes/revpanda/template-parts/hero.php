<?php
/**
 * Hero Section Part on front Page
 */
?>

<section class="w-full h-[200px] sm:h-[400px] relative">
  <!--bg casino image-->
  <div class="absolute inset-0">
    <img src="<?php echo get_template_directory_uri(); ?>/src/images/hero/cover.jpg" alt="Casino-background"
      class="w-full h-full object-cover">
    <!--black overlay-->
    <div class="inset-0 absolute 
  bg-gradient-to-b 
  from-black/70 via-black/55 to-black/80 
  sm:from-black/40 sm:via-black/20 sm:to-black/60">
    </div>
  </div>

  <div class="relative z-10 flex flex-col justify-center text-white h-full pt-18 sm:pt-25 max-w-[358px] sm:max-w-[1120px] mx-auto">
    <h1 class="text-[20px] sm:text-[32px] font-bold pb-1 sm:pb-6 text-center">Best Affiliates of 2024</h1>
    <div class="flex flex-col items-start sm:items-center gap-3">
      <p class="text-base font-medium">Text 1</p>
      <p class="hidden sm:block text-base font-medium">Text 2</p>
      <p class="hidden sm:block text-base font-medium">Text 3</p>
    </div>
  </div>
</section>