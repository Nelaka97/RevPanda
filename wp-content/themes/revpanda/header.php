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

  <header class="bg-[#9B0684] text-white">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center">
        <img src="<?php echo get_template_directory_uri(); ?>/src/images/logo.png" alt="Logo" class="h-10 w-auto">
      </a>

      <!--Menu-->
      <nav class="hidden lg:flex items-center space-x-8">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center space-x-2 hover:underline">
          <img src="<?php echo get_template_directory_uri(); ?>/src/images/header/home.png" alt="Home" class="h-5 w-5">
          <span>Home</span>
        </a>

        <a href="<?php echo esc_url(home_url('/brands')); ?>" class="flex items-center space-x-2 hover:underline">
          <img src="<?php echo get_template_directory_uri(); ?>/src/images/header/brands.png" alt="Brands"
            class="h-5 w-5">
          <span>Best Brands</span>
        </a>

        <a href="<?php echo esc_url(home_url('/games')); ?>" class="flex items-center space-x-2 hover:underline">
          <img src="<?php echo get_template_directory_uri(); ?>/src/images/header/games.png" alt="Games"
            class="h-5 w-5">
          <span>Best Games</span>
        </a>

        <a href="<?php echo esc_url(home_url('/new-games')); ?>" class="flex items-center space-x-2 hover:underline">
          <img src="<?php echo get_template_directory_uri(); ?>/src/images/header/new-games.png" alt="New Games"
            class="h-5 w-5">
          <span>New Games</span>
        </a>
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

        <!--Mobile Menu button-->
        <div class="lg:hidden">
          <button id="mobile-menu-toggle" class="text-white focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
              stroke-linecap="round" stroke-linejoin="round">
              <path d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!--Mobile menu-->
    <div id="mobile-menu" class="lg:hidden hidden bg-[#8A0576] px-4 py-4 space-y-4">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="block text-white hover:underline">Home</a>
      <a href="<?php echo esc_url(home_url('/brands')); ?>" class="block text-white hover:underline">Best Brands</a>
      <a href="<?php echo esc_url(home_url('/games')); ?>" class="block text-white hover:underline">Best Games</a>
      <a href="<?php echo esc_url(home_url('/new-games')); ?>" class="block text-white hover:underline">New Games</a>
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