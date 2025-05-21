<?php
/**
 * Listings section for the Front page
 */
?>

<?php
$listing_query_args = array(
  'post_type' => 'listing',
  'posts_per_page' => -1,
  'orderby' => 'date',
  'order' => 'DESC',
);
$listings = new WP_Query($listing_query_args);

if ($listings->have_posts()):
  $rank_of_the_listing = 1;
  while ($listings->have_posts()):
    $listings->the_post();

    $bonus = get_post_meta(get_the_ID(), 'bonus', true);
    $spins = get_post_meta(get_the_ID(), 'free_spins', true);
    $rating = get_post_meta(get_the_ID(), 'rating', true);
    $offer_type = get_post_meta(get_the_ID(), 'offer_type', true);
    $affiliate_link = get_post_meta(get_the_ID(), 'affiliate_link', true);
    $button_text = get_post_meta(get_the_ID(), 'button_text', true);
    $review_link = get_post_meta(get_the_ID(), 'review_link', true);
    $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'medium');
    if (!$thumbnail) {
      $thumbnail = get_template_directory_uri() . '/src/images/listings/no-thumbnail.png';
      }
    ?>

    <div
      class="flex flex-col md:flex-row max-w-[358px] sm:max-w-[1120px] h-[298px] sm:h-[160px] mx-auto bg-main border main-border rounded-sm overflow-hidden mb-4 shadow">
      <div class="flex max-w-[358px] sm:max-w-[530px]">
        <!--Rank and thumbnail-->
        <div class="flex items-center justify-center bg-pink-90 text-white px-4 py-6 w-[36px] sm:w-[60px]">
          <div class="sm:text-xl text-center font-bold">#<?php echo $rank_of_the_listing; ?></div>
        </div>
        <div class="flex flex-row bg-pink-80 justify-center w-[101px] sm:w-[160px]">
          <div class="flex flex-col flex-wrap items-center justify-center">
            <?php if ($thumbnail): ?>
              <img src="<?php echo esc_url($thumbnail); ?>" alt="<?php the_title(); ?>"
                class="w-[88px] sm:w-[120px] h-[44px] sm:h-[60px] object-contain mb-2" />
            <?php endif; ?>
            <div class="text-sm sm:text-md text-white font-bold px-2"><?php echo esc_html($offer_type); ?></div>
          </div>
        </div>

        <!--bonus and free spins-->
        <div class="flex items-center justify-center bg-main-pink text-white px-4 py-4 w-[221px] sm:w-[310px]">
          <div class="flex items-center justify-center gap-4">
            <div
              class="flex flex-col items-center leading-tight justify-center bg-gradient-pink w-[80px] sm:w-[116px] h-[86px] sm:h-[120px] rounded-sm text-center px-1">
              <p class="text-sm sm:text-md break-words leading-tight sm:leading-normal">100% Up to</p>
              <div class="flex flex-wrap items-baseline justify-center">
                <p class="text-2xl font-bold break-words leading-tight sm:leading-normal">€<?php echo esc_html($bonus); ?>
                </p>
                <p class="text-sm sm:text-md sm:ml-1 break-words leading-tight sm:leading-normal">Bonus</p>
              </div>
            </div>
            <div
              class="flex flex-col flex-wrap items-center justify-center bg-gradient-pink w-[80px] sm:w-[116px] h-[86px] sm:h-[120px] rounded-sm text-center px-1">
              <p class="text-2xl font-bold leading-tight sm:leading-normal break-words"><?php echo esc_html($spins); ?></p>
              <p class="text-sm leading-tight sm:leading-normal break-words">Free Spins</p>
            </div>
          </div>
        </div>
      </div>

      <!--Ratings-->
      <div class="flex flex-col justify-center items-center text-center px-4 py-2 w-[358px] sm:w-[295px]">
        <p class="font-bold text-base text-black mb-1">Star Rating</p>
        <div class="flex items-center gap-1 text-[#FFA825] text-2xl font-bold">
          <?php
          $stars = floor($rating);
          echo str_repeat('★', $stars);
          echo str_repeat('☆', 5 - $stars);
          ?>
          <span class="font-bold text-black text-lg ml-1"><?php echo esc_html($rating); ?></span>
        </div>
      </div>

      <!--Button and review link-->
      <div class="flex flex-col justify-center items-center bg-[#fef7fd] w-[358px] sm:w-[295px]">
        <a href="<?php echo esc_url($affiliate_link); ?>" target="_blank"
          class="bg-gradient-to-r from-[#13E14A] to-[#13E1A0] text-black font-bold text-center text-xl px-6 py-2 rounded-sm w-[93%] sm:w-[238px] h-[48px] mt-2 sm:mt-0 hover:brightness-110 transition">
          <?php echo esc_html($button_text); ?>
        </a>
        <a href="<?php echo esc_url($review_link); ?>" target="_blank"
          class="text-sm font-normal underline text-black hover:text-gray-800 mt-3">
          Read Review
        </a>
      </div>
    </div>
    <?php
    $rank_of_the_listing++;
  endwhile;
  wp_reset_postdata();
else: ?>
  <div
    class="max-w-[358px] sm:max-w-[1120px] mx-auto bg-yellow-100 border border-yellow-400 text-yellow-800 px-4 py-3 mt-6 text-center rounded-sm">
    <p class="text-lg font-semibold mb-2">No listings available!</p>
    <p>Please go to the <a href="<?php echo admin_url('edit.php?post_type=listing'); ?>"
        class="underline font-medium text-yellow-900">Admin Dashboard</a> and add some listings to display here..
    </p>
  </div>
<?php endif; ?>

<!--Show more button / not functional as it is not required by the task -->
<div class="flex justify-center mt-6 mb-10">
  <button
    class="w-[140px] sm:w-[165px] h-[40px] sm:h-[48px] pink-text font-bold text-sm sm:text-base hover:bg-main-pink border main-border rounded-sm px-6 py-2 transition">
    Show More
  </button>
</div>