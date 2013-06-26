<?php 


//Add thumbnail support
add_theme_support( 'post-thumbnails' );

//Add menu support
add_theme_support( 'menus' );

// filter the Gravity Forms button type
add_filter("gform_submit_button", "form_submit_button", 10, 2);
function form_submit_button($button, $form){
    return "<button class='button btn' id='gform_submit_button_{$form["id"]}'><span>Submit</span></button>";
}

?>