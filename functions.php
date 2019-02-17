<?php
function cro_after_setup(){
    load_theme_textdomain( "cro" );
}
add_action( "after_setup_theme", "cro_after_setup" );