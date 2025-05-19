<?php
/**
 * Author Card Template for the Front page
 */
?>

<section class="bg-red-100 w-4/5 px-4 md:px-8 py-4 mb-6 mx-auto ">
  <div class="flex items-center space-x-4">
    <div class="relative w-12 h-12">
      <img src="<?php echo get_template_directory_uri(); ?>/src/images/author-card/author-avatar.png"
        alt="Author Avatar" class="w-12 h-12 object-cover border border-gray-300 rounded-full">

      <img src="<?php echo get_template_directory_uri(); ?>/src/images/author-card/checkmark.png"
        alt="Verified-checkmark" class="bottom-0 right-0 w-4 h-4 absolute">
    </div>

    <div class="flex-1">
      <div class="flex items-center space-x-2">
        <span class="font-semibold text-sm md:text-base">Author: Name Surname</span>
        <img src="<?php echo get_template_directory_uri(); ?>/src/images/author-card/email-icon.png" alt="Email"
          class="w-4 h-4">
      </div>

      <p class="text-xs text-gray-600 mt-1">Published: November 11, 2022, 4:23 PM</p>
      <p class="text-sm mt-1">This is the author text</p>
    </div>
  </div>
</section>