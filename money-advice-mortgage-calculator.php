<?php
/*
Plugin Name: Money Advice Mortagege Calculator
Plugin URI: https://www.linkedin.com/in/sagar-roy-3445b5119/
Description: This is a Mortgage Calculator Plugin for Wordpress. Using this calculator you can find monthly repayment and interest rate. 
Version: 1.1
Author: Sagar Roy
Author URI: https://www.linkedin.com/in/sagar-roy-3445b5119/
Text Domian: money_advice
*/


if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}



// Register Admin Page for Plugin

function money_advice_mortgage_custom_menu()
{
    add_menu_page(
        "money_advice_calc",  // Page title
        "Money Mortgage Calculator", // menu title
        "manage_options", // admin level
        "money-advice-mortgage-calculator", // slug
        "money_advice_mortgage_admin_view" // output function
    );
}

add_action("admin_menu", "money_advice_mortgage_custom_menu");

function money_advice_mortgage_admin_view()
{
    include_once plugin_dir_path(__FILE__).'admin-view/admin-panel-output.php';
    
}







//adding styles  worpress admin

if(!function_exists("money_advice_mortgage_calc_admin_assests")) :
	function money_advice_mortgage_calc_admin_assests() {
		global $pagenow;

		$current_page = get_current_screen();

		if( 
            (isset($_GET["page"]) && $_GET["page"] === 'money-advice-mortgage-calculator')
		) { 
			wp_enqueue_style(
                "money_advice_bootstrap",
                "//cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css", 
            );
		}

	}
    
//end of adding styles and scripts for wordpress admin.

add_action('admin_enqueue_scripts', 'money_advice_mortgage_calc_admin_assests', 1);

endif;






//Assets For Output

function money_advice_morgage_custom_assets(){
    
    //Bootstrap
    
    wp_enqueue_style(
        "money_advice_bootstrap",
        "//cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
    );
    
    // Range Slider Css

    wp_enqueue_style(
        "money_advice_slider_css",
        plugins_url('assets/css/rSlider.min.css',__FILE__),
        "money_advice_bootstrap"
    );
    
    // Main CSs

    wp_enqueue_style(
        "money_advice_style",
        plugins_url('style.css',__FILE__),
        "[money_advice_bootstrap, money_advice_slider_css]"
    );
    

}


add_action("wp_enqueue_scripts" , "money_advice_morgage_custom_assets");





// Create Shortcodes



add_shortcode('money_advice_calculator', "money_advice_calculator_shortcode");

function money_advice_calculator_shortcode($params){
    
       // Jquery

    
       wp_enqueue_script(
        "money_advice_jquery",
        "//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js", 
        "",
        null,
        true
        
    );


    //Slider js

    wp_enqueue_script(
        "money_advice_slider_js",
        plugins_url('assets/js/rSlider.min.js',__FILE__),
        "money_advice_jquery",
        null,
        true
        
    );

    //  JS


    wp_enqueue_script(
        "money_advice_custom_js",
        plugins_url('custom.js',__FILE__),
        "[money_advice_jquery,money_advice_slider_js]",
        null,
        true
        
    );



    
    
    
    
    $values = shortcode_atts(

        array(
            "first_url" => "#",
            "second_url" => "#",
            "third_url" => "#"
        ),
        $params,

    );
    


 



    ob_start();
    include_once plugin_dir_path(__FILE__).'tamplets/calc.php';

    // PLUGIN_DIR_PATH."/tamplets/calc.php";
    return ob_get_clean();
}









