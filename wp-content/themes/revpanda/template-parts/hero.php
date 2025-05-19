<?php
/**
 * Hero Section Part on front Page
 */
?>

<section class="w-full h-[450px] relative">
  <!--bg casino image-->
  <div class="absolute inset-0">
    <img
      src="<?php echo get_template_directory_uri(); ?>/src/images/hero/cover.jpg"
      alt="Casino-background"
      class="w-full h-full object-cover"
    >
    <!--black overlay-->
    <div class="inset-0 bg-gradient-to-b from-black/40 via-black/20 to-black/60 absolute"></div>
  </div>

  <div class="relative z-10 flex flex-col items-center justify-center text-white h-full px-4 text-center">
    <h1 class="text-3xl md:text-4xl font-bold mb-4">Best Affiliates of 2024</h1>
    <p class="text-sm md:text-base">Text 1</p>
    <p class="text-sm md:text-base">Text 2</p>
    <p class="text-sm md:text-base">Text 3</p>
  </div>
</section>
