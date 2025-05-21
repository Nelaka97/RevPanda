<?php
/**
 * Header of RevPanda theme
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header class="bg-main-pink text-white">
    <div class="container mx-auto py-4 flex justify-between items-center max-w-[358px] sm:max-w-[1120px] h-[48px] sm:h-[60px]">
      <a href="<?php echo esc_url(home_url('#')); ?>" class="flex items-center">
        <img src="<?php echo get_template_directory_uri(); ?>/src/images/logo.png" alt="Logo" class="w-[24px] sm:w-[40px] h-auto">
      </a>

      <!--Menu-->
      <nav class="hidden lg:flex items-center space-x-8">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center space-x-2">
          <img src="<?php echo get_template_directory_uri(); ?>/src/images/header/home.png" alt="Home" class="h-5 w-5">
          <span class="text-base font-medium">Home</span>
        </a>

        <div class="relative group">
          <div class="flex items-center space-x-2 cursor-pointer">
            <img src="<?php echo get_template_directory_uri(); ?>/src/images/header/brands.png" alt="Brands"
              class="h-5 w-5">
            <span class="text-base font-medium">Best Brands</span>
            <svg class="h-6 w-6 text-white transition-transform duration-200 group-hover:rotate-180" fill="currentColor"
              viewBox="0 0 20 20">
              <path fill-rule="evenodd"
                d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.24a.75.75 0 01-1.06 0L5.23 8.27a.75.75 0 01.02-1.06z"
                clip-rule="evenodd" />
            </svg>
          </div>

          <!--dropdown -->
          <div
            class="absolute left-0 mt-2 w-48 bg-main-pink text-white rounded shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
            <a href="#" class="block px-4 py-2 hover:bg-gray-100 hover:text-black">Brand 1</a>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100 hover:text-black">Brand 2</a>
          </div>
        </div>

        <a href="<?php echo esc_url(home_url('#')); ?>" class="flex items-center space-x-2">
          <img src="<?php echo get_template_directory_uri(); ?>/src/images/header/games.png" alt="Games"
            class="h-5 w-5">
          <span class="text-base font-medium">Best Games</span>
        </a>

        <div class="relative group">
          <div class="flex items-center space-x-2 cursor-pointer">
            <img src="<?php echo get_template_directory_uri(); ?>/src/images/header/new-games.png" alt="New Games"
              class="h-5 w-5">
            <span class="text-base font-medium">New Games</span>
            <svg class="h-6 w-6 text-white transition-transform duration-200 group-hover:rotate-180" fill="currentColor"
              viewBox="0 0 20 20">
              <path fill-rule="evenodd"
                d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.24a.75.75 0 01-1.06 0L5.23 8.27a.75.75 0 01.02-1.06z"
                clip-rule="evenodd" />
            </svg>
          </div>

          <!--dropdown -->
          <div
            class="absolute left-0 mt-2 w-48 bg-main-pink text-white rounded shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
            <a href="#" class="block px-4 py-2 hover:bg-gray-100 hover:text-black">Game 1</a>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100 hover:text-black">Game 2</a>
          </div>
        </div>
      </nav>

      <div class="flex items-center space-x-4">
        <!--Search icon for desktop-->
        <button class="hidden lg:block text-white hover:text-gray-200 focus:outline-none">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
            stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1110.5 3a7.5 7.5 0 016.15 13.65z" />
          </svg>
        </button>

        <!--Mobile Menu icon-->
        <div class="lg:hidden">
          <button id="mobile-menu-toggle" class="text-white focus:outline-none">
            <svg class="w-7 h-10" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
              stroke-linecap="square" stroke-linejoin="square">
              <path d="M4 5h16M4 12h16M4 19h16" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!--Mobile menu-->
    <div id="mobile-menu" class="lg:hidden hidden bg-main-pink py-4 space-y-4 max-w-[358px] mx-auto">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="text-white hover:underline flex items-center"><img
          src="<?php echo get_template_directory_uri(); ?>/src/images/header/home.png" alt="Home" class="h-5 w-5 mr-2">
        Home</a>
      <a href="<?php echo esc_url(home_url('#')); ?>" class="text-white hover:underline flex items-center"><img
          src="<?php echo get_template_directory_uri(); ?>/src/images/header/brands.png" alt="Brands"
          class="h-5 w-5 mr-2">Best Brands</a>
      <a href="<?php echo esc_url(home_url('#')); ?>" class="text-white hover:underline flex items-center"><img
          src="<?php echo get_template_directory_uri(); ?>/src/images/header/games.png" alt="Games"
          class="h-5 w-5 mr-2">Best Games</a>
      <a href="<?php echo esc_url(home_url('#')); ?>" class="text-white hover:underline flex items-center"><img
          src="<?php echo get_template_directory_uri(); ?>/src/images/header/new-games.png" alt="New Games"
          class="h-5 w-5 mr-2">New Games</a>
    </div>
  </header>

  <script>
    //mobile menu toggle script
    document.addEventListener('DOMContentLoaded', function () {
      const toggle = document.getElementById('mobile-menu-toggle');
      const menu = document.getElementById('mobile-menu');
      toggle.addEventListener('click', () => {
        menu.classList.toggle('hidden');
      });
    });
  </script>

  <?php wp_body_open(); ?>