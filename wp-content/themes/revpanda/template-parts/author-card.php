<?php
/**
 * Author Card Template for the Front page
 */
?>

<section class="bg-main w-full sm:max-w-[1120px] px-4 md:px-6 py-4 my-8 sm:my-10 mx-auto">
  <div class="flex flex-col max-w-[358px] sm:max-w-[1120px] mx-auto">
    <div class="flex items-center mb-1">
      <img src="<?php echo get_template_directory_uri(); ?>/src/images/author-card/author.jpg" alt="Author Avatar"
        class="w-[20px] h-[20px] sm:w-[29px] sm:h-[29px] object-cover rounded-sm mr-2 order-2 sm:order-1">
      <img src="<?php echo get_template_directory_uri(); ?>/src/images/author-card/checkmark.png" alt="checkmark"
        class="w-[20px] h-[20px] mr-2 order-1 sm:order-2">
      <span class="font-medium gray-text text-sm md:text-base mr-1 order-3">Author:</span>
      <span class="font-medium text-sm md:text-base text-black mr-2 order-4">Name Surname</span>
      <img src="<?php echo get_template_directory_uri(); ?>/src/images/author-card/email-icon.png" alt="Email"
        class="w-[20px] h-[19px] sm:w-[23px] sm:h-[21px] order-5">
    </div>
    <div class="flex items-center">
      <img src="<?php echo get_template_directory_uri(); ?>/src/images/author-card/calender.png" alt="calender"
        class="w-[20px] h-[20px] mr-2">
      <p class="block sm:hidden text-sm md:text-base font-medium gray-text mr-1">Last updated:</p>
      <p class="hidden sm:block text-sm md:text-base font-medium gray-text mr-1">Published:</p>
      <p class="text-sm md:text-base font-medium text-black">November 11, 2022, 4:23 PM</p>
    </div>
    <div>
      <p class="block sm:hidden text-sm md:text-base font-normal mt-3 sm:mt-1">This is author text.</p>
      <p class="hidden sm:block text-sm md:text-base font-normal mt-3 sm:mt-1">This is the author text</p>
    </div>
  </div>
</section>