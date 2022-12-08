<?php
/**
 * Plugin Name: Topbar
 * Plugin URI: http://localhost/testsitewp
 * Description: This will add a welcome bar at the top of the page.
 * version: 1.0.0
 * Author: Dennis
 * Author URI: http://localhost/testsitewp
 **/

 //Add bar after the opening body
 add_action('wp_body_open', 'tb_head');

 Function tb_head()
{
    echo '<h3 class="tb">Welkom</h3>';
}

//Add CSS aan de topbar
add_action('wp_print_styles', 'tb_css');

function tb_css()
{
    Echo '
      <style>
      h3.tb {color: #fff; marrgin: 0; padding: 7px; text-align: center; background: darkgreen}
      </style>
    
    ';
}
    
