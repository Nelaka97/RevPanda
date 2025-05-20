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
      class="flex flex-col sm:flex-row max-w-[358px] sm:max-w-[1120px] h-[298px] sm:h-[160px] mx-auto bg-[#FEF7F9] border border-[#990085] rounded-sm overflow-hidden mb-4 shadow">
      <div class="flex max-w-[358px] sm:max-w-[530px]">
        <!--Rank and thumbnail-->
        <div class="flex items-center bg-[#47003E] text-white px-4 py-6 w-[36px] sm:w-[60px]">
          <div class="text-xl font-noto text-center font-bold">#<?php echo $rank_of_the_listing; ?></div>
        </div>

        <div class="flex flex-row bg-[#700062] justify-center w-[101px] sm:w-[160px]">
          <div class="flex flex-col items-center justify-center">
            <?php if ($thumbnail): ?>
              <img src="<?php echo esc_url($thumbnail); ?>" alt="<?php the_title(); ?>"
                class="w-[88px] sm:w-[120px] h-[44px] sm:h-[60px] object-contain mb-2" />
            <?php endif; ?>
            <div class="text-sm text-white font-semibold"><?php echo esc_html($offer_type); ?></div>
          </div>
        </div>

        <!--Bonus and free spins-->
        <div class="flex items-center justify-center bg-[#990085] text-white px-4 py-4 w-[221px] sm:w-[310px]">
          <div class="flex items-center justify-center gap-4">
            <div
              class="flex flex-col items-center justify-center bg-gradient-to-b from-[#C213AB] to-[#990085] w-[80px] sm:w-[116px] h-[86px] sm:h-[120px] rounded-sm">
              <p class="text-sm">100% Up to</p>
              <div class="flex items-end">
                <p class="text-xl font-medium">€<?php echo esc_html($bonus); ?></p>
                <p class="text-sm ml-1">Bonus</p>
              </div>
            </div>
            <div
              class="flex flex-col items-center justify-center bg-gradient-to-b from-[#C213AB] to-[#990085] w-[80px] sm:w-[116px] h-[86px] sm:h-[120px] rounded-sm">
              <p class="text-2xl font-bold"><?php echo esc_html($spins); ?></p>
              <p class="text-sm">Free Spins</p>
            </div>
          </div>
        </div>
      </div>

      <!--Ratings-->
      <div class="flex flex-col justify-center items-center text-center px-4 py-2 w-[358px] sm:w-[295px]">
        <p class="font-semibold text-gray-900 mb-1">Star Rating</p>
        <div class="flex items-center gap-1 text-yellow-400 text-xl font-bold">
          <?php
          $stars = floor($rating);
          echo str_repeat('★', $stars);
          echo str_repeat('☆', 5 - $stars);
          ?>
          <span class="text-black text-base ml-1"><?php echo esc_html($rating); ?></span>
        </div>
      </div>

      <!--Button and review link-->
      <div class="flex flex-col justify-center items-center flex-1 px-6 py-4 bg-[#fef7fd] w-[358px] sm:w-[295px]">
        <a href="<?php echo esc_url($affiliate_link); ?>" target="_blank"
          class="bg-gradient-to-r from-[#13E14A] to-[#13E1A0] text-black font-bold text-center text-lg px-6 py-2 rounded-sm w-[238px] hover:brightness-110 transition">
          <?php echo esc_html($button_text); ?>
        </a>
        <a href="<?php echo esc_url($review_link); ?>" target="_blank"
          class="text-sm underline text-gray-700 hover:text-black mt-2">
          Read Review
        </a>
      </div>
    </div>
    <?php
    $rank_of_the_listing++;
  endwhile;
  wp_reset_postdata();
endif;
?>

<!--Show more button at bottom-->
<div class="flex justify-center mt-6 mb-10">
  <button
    class="text-[#990099] font-semibold hover:bg-[#990099] hover:text-white border border-[#990099] rounded-md px-6 py-2 transition">
    Show More
  </button>
</div>