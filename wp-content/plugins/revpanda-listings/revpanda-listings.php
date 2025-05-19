<?php
/**
 * Plugin Name: Revpanda Listings
 * Description: A custom plugin to register a "Listing" post type and related meta fields. Developed under the RevPanda WP Developer test task.
 * Version: 1.0.0
 * Author: Nelaka Kannangara
 */

// Register Custom Post Type - Listings
function revpanda_register_listing_cpt() {
    $labels = array(
        'name' => 'Listings',
        'singular_name' => 'Listing',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Listing',
        'edit_item' => 'Edit Listing',
        'new_item' => 'New Listing',
        'view_item' => 'View Listing',
        'search_items' => 'Search Listings',
        'not_found' => 'No Listings found',
        'menu_name' => 'Listings',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => false,
        'rewrite' => array('slug' => 'listing'),
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
    );

    register_post_type('listing', $args);
}
add_action('init', 'revpanda_register_listing_cpt');

//Adding Meta Boxes
function revpanda_add_listing_meta_boxes() {
    add_meta_box(
        'revpanda_listing_details',
        'Listing Details',
        'revpanda_render_listing_meta_box',
        'listing',
        'normal',
        'default'
    );
}
add_action('add_meta_boxes', 'revpanda_add_listing_meta_boxes');

//Rendering Meta Boxes fields
function revpanda_render_listing_meta_box($post) {
    // Retrieving existing values from cpt meta
    $bonus = get_post_meta($post->ID, 'bonus', true);
    $spins = get_post_meta($post->ID, 'free_spins', true);
    $rating = get_post_meta($post->ID, 'rating', true);
    $offer_type = get_post_meta($post->ID, 'offer_type', true);
    $affiliate_link = get_post_meta($post->ID, 'affiliate_link', true);
    $button_text = get_post_meta($post->ID, 'button_text', true);
    $review_link = get_post_meta($post->ID, 'review_link', true);

    // Display form fields in Admin Panel
    ?>
    <p><label><strong>Bonus(€):</strong><br />
        <input type="number" name="bonus" value="<?php echo esc_attr($bonus); ?>" style="width:100%;" />
    </label></p>

    <p><label><strong>Free Spins:</strong><br />
        <input type="number" name="free_spins" value="<?php echo esc_attr($spins); ?>" style="width:100%;" />
    </label></p>

    <p><label><strong>Rating:</strong><br />
        <select name="rating" style="width:100%;">
            <?php
            $options = ['1 ★', '1.5 ★', '2 ★★', '2.5 ★★', '3 ★★★', '3.5 ★★★', '4 ★★★★', '4.5 ★★★★', '5 ★★★★★'];
            foreach ($options as $option) {
                $selected = ($rating === $option) ? 'selected' : '';
                echo "<option value=\"$option\" $selected>$option</option>";
            }
            ?>
        </select>
    </label></p>

    <p><label><strong>Offer Type:</strong><br />
        <select name="offer_type" style="width:100%;">
            <?php
            $options = ['Hot', 'Recommended', 'New', 'Popular'];
            foreach ($options as $option) {
                $selected = ($offer_type === $option) ? 'selected' : '';
                echo "<option value=\"$option\" $selected>$option</option>";
            }
            ?>
        </select>
    </label></p>

    <p><label><strong>Affiliate Link:</strong><br />
        <input type="url" name="affiliate_link" value="<?php echo esc_attr($affiliate_link); ?>" style="width:100%;" />
    </label></p>

    <p><label><strong>Button Text:</strong><br />
        <select name="button_text" style="width:100%;">
            <?php
            $options = ['Claim Offer', 'Click Here', 'Play Now'];
            foreach ($options as $option) {
                $selected = ($button_text === $option) ? 'selected' : '';
                echo "<option value=\"$option\" $selected>$option</option>";
            }
            ?>
        </select>
    </label></p>

    <p><label><strong>Review Link:</strong><br />
        <input type="url" name="review_link" value="<?php echo esc_attr($review_link); ?>" style="width:100%;" />
    </label></p>
    <?php
}

//Saving meta box data
function revpanda_save_listing_meta($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (get_post_type($post_id) !== 'listing') return;
    // Sanitize and save
    $fields = [
        'bonus' => 'intval',
        'free_spins' => 'intval',
        'rating' => 'floatval',
        'offer_type' => 'sanitize_text_field',
        'affiliate_link' => 'esc_url_raw',
        'button_text' => 'sanitize_text_field',
        'review_link' => 'esc_url_raw',
    ];

    foreach ($fields as $field => $sanitize_callback) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $field, call_user_func($sanitize_callback, $_POST[$field]));
        }
    }
}
add_action('save_post', 'revpanda_save_listing_meta');
