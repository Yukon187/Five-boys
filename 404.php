<?php
/**
 * The template for displaying 404 pages (Not Found).
 * @package Fast Food Truck
 */
get_header(); ?>

<main role="main" id="skip_content" class="content_box">
    <div class="container">
        <div class="page-content pt-4 text-center">
            <h1><?php echo esc_html(get_theme_mod('fast_food_truck_page_not_found_heading',__('404 Not Found','fast-food-truck')));?></h1>
            <p class="text-404"><?php echo esc_html(get_theme_mod('fast_food_truck_page_not_found_text',__('Looks like you have taken a wrong turn. Dont worry it happens to the best of us.','fast-food-truck')));?></p>
            <?php if( get_theme_mod('fast_food_truck_page_not_found_button','Back to Home Page') != ''){ ?>
                <div class="read-moresec mt-3 mb-4 mx-0">
                    <a href="<?php echo esc_url( home_url() ); ?>" class="button py-2 px-3"><?php echo esc_html(get_theme_mod('fast_food_truck_page_not_found_button',__('Back to Home Page','fast-food-truck')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('fast_food_truck_page_not_found_button',__('Back to Home Page','fast-food-truck')));?></span></a>
                </div>
            <?php } ?>
        </div>
        <div class="clearfix"></div>
    </div>
</main>

<?php get_footer(); ?>