<?php
/**
Plugin Name: Tilt Photo Hover Effect
Plugin URI: http://scarab13.com
Description: 3 Highly Customizable Artistic Photo Hover Effects | Insert and customize it in seconds by visual UI directly from the editor.
Version: 1.4
Author: scarab13designs, taniafi786
Author URI: http://scarab13.com/
License: GPLv2 or later
 */
//free version

/* Plugin Prefix: 'TPHE_' prefix is derived from [T]ilt [P]hoto [H]over [E]ffect. */

/* Set-up Hooks. */
add_filter( 'plugin_action_links', 'TPHE_plugin_action_links', 10, 2 );
//Display a Settings link on the main Plugins page. 
function TPHE_plugin_action_links( $links, $file ) {
if ( $file == plugin_basename( __FILE__ ) ) {
	// add a link to pro plugin
		$links[] = '<a href="http://scarab13.com/tilteffect" target="_blank" title="Upgrade to PRO"><span class="dashicons dashicons-awards"></span></a>';
	}
	return $links;
}
// define plugin path
define( 'TPHE_PLUGIN_DIR', untrailingslashit( plugins_url( basename( plugin_dir_path( __FILE__ ) ), basename( __FILE__ ) ) ));

// Includes css files of libraries
function tphe_scripts() {
    wp_enqueue_style( 'style-demo', TPHE_PLUGIN_DIR.'/css/demo.css' );
    wp_enqueue_style( 'style-normalize', TPHE_PLUGIN_DIR.'/css/normalize.css');
    wp_enqueue_style( 'style-tilteffect',TPHE_PLUGIN_DIR.'/css/tilteffect.css');
}
add_action( 'wp_enqueue_scripts', 'tphe_scripts' );

// Include tilt js
add_action('wp_footer','tphe_tiltjs');

function tphe_tiltjs() {
    wp_enqueue_script( 'script-tiltfx', TPHE_PLUGIN_DIR.'/js/tiltfx.js');
}

function tphe_effect( $atts ) {

    // shortcode default attributes
    $a = shortcode_atts( array(
        'url' => TPHE_PLUGIN_DIR.'/sample-image/default.jpg',
        'effect' => 'one',
        'grayscale' => 'no',
        'move_x' => '-15',
        'move_y' => '-15',
        'move_z' => '20',
        'rotate_x' => '15',
        'rotate_y' => '15',
        'rotate_z'  => '10',
        'opacity'  => '0.5',
        'extra_imgs' => '4',
        'overflow'  => 'visible',
        'width' => '300px',
        'height' => '300px',
        'fitscreen' => 'no',
        'link' => '#',
        'border' => '1px',
        'target' => '_self'
    ), $atts );

    // Default tilt class
    $class = 'tilt-effect';

    // Apply specific class for grayscale
    if($a['grayscale'] == 'yes' )
        $filter_effect = 'grid__img--example-3';
    else
        $filter_effect = 'grid__img--border';

    $move_x = $a['move_x'];
    $move_y = $a['move_y'];
    $move_z = $a['move_z'];
    $rotate_x = $a['rotate_x'];
    $rotate_y = $a['rotate_y'];
    $rotate_z = $a['rotate_z'];
    $opacity = $a['opacity'];
    $extraImgs = $a['extra_imgs'];
    $overflow = 'overflow:'.$a['overflow'].';';
    $width = 'width:'.$a['width'].';';
    $height = 'height:'.$a['height'];
    $fitscreen = $a['fitscreen'];
    $link = $a['link'];
    $border = 'solid '.$a['border'].' #000 !important';
    $target = $a['target'];

    // Add random id for adjust fit screen to specific image
    $rand_id = 'rand-'.rand(100,99999);

    // Apply some style for fitscreen image
    if($fitscreen == 'yes') {
        ?>
        <style>
            <?php echo '.'.$rand_id.' ' ?>.tilt__back,
            <?php echo '.'.$rand_id.' ' ?>.tilt__front {
                background-size: 100% 100%;
            }
        </style>
        <?php
    }

    ?>
    <style>
        <?php echo '.'.$rand_id.' ' ?>.tilt__back,
        <?php echo '.'.$rand_id.' ' ?>.tilt__front {
            border: <?php echo $border;?>
        }
    </style>
    <?php

 $data_tilt = "data-tilt-options='{ \"extraImgs\" : $extraImgs, \"opacity\" : $opacity, \"movement\": { \"perspective\" : 500, \"translateX\" : $move_x, \"translateY\" : $move_y, \"translateZ\" : $move_z, \"rotateX\" : $rotate_x, \"rotateY\" : $rotate_y } }'";
   

    $img_url = $a['url']; // Image URL given by attribute
    $img_class = 'one'; // Apply effect given by attribute

    // Create HTML for displaying image with effect on frontend
    $img = '<ul class="grid grid--xray">
			 <li class="grid__item '.$rand_id.'" style="'.$width.'">
			  <div class="grid__img '.$filter_effect.'" style="'.$overflow.$width.$height.'">';
                if($link != '#')
                    $img .= '<a href="'.$link.'" target="'.$target.'"><img src="'.$img_url.'" class="'.$class.'" '.$data_tilt.' /></a>';
                else if($link == '#')
                    $img .= '<img src="'.$img_url.'" class="'.$class.'" '.$data_tilt.' />';
              $img .= '</div>
             </li>
            </ul>';

    return $img;
}

// shortcode to display images with some effects
add_shortcode( 'tphe_effect', 'tphe_effect' );

add_action('admin_head', 'tphe_addMediaButton');
function tphe_addMediaButton() {
    global $typenow;
    // check user permissions
    if ( !current_user_can('edit_posts') && !current_user_can('edit_pages') ) {
    return;
    }
    // verify the post type
    if( ! in_array( $typenow, array( 'post', 'page' ) ) )
        return;
    // check if WYSIWYG is enabled
    if ( get_user_option('rich_editing') == 'true') {
        add_filter("mce_external_plugins", "tphe_addTinyMcePlugin");
        add_filter('mce_buttons', 'tphe_addMediaTcButton');
    }
}function tphe_addTinyMcePlugin($plugin_array) {
    $plugin_array['tphe_TcButton'] = TPHE_PLUGIN_DIR.'/js/button.js'; // BUTTON SCRIPT HERE
    return $plugin_array;
}
function tphe_addMediaTcButton($buttons) {
   array_push($buttons, "tphe_TcButton");
   return $buttons;
}