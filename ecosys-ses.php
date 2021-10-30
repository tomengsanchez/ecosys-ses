<?php
/**
 * Plugin Name:       Ecosys SES Monitoring
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Ecosys SES monitoring system
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Ecosys Tech Team
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       ecosys-ses
 * Domain Path:       /languages
 * 
 */


// add_menupage

// Enqueue
$valid_pages = array('ecosys-ses','ecosys-scm');
if(!empty($_GET['page'])){
    if(in_array($_GET['page'],$valid_pages)){

        add_action('admin_enqueue_scripts',function(){
            wp_enqueue_style('ecosys-ses-bs-css', plugin_dir_url(__FILE__) . '/css/bootstrap.css');
            wp_enqueue_script('ecosys-ses-bs-js', plugin_dir_url(__FILE__) . '/js/bootstrap.js');
            
        });
    }
}



add_action('admin_menu',function(){
    add_menu_page('Ecosys SES','Ecosys SES','manage_options','ecosys-ses','ses_main_function','');
    add_submenu_page('ecosys-ses','Global Search','Global Search','manage_options','global-search','ecosys_ses_global_search');

    add_menu_page('Ecosys SCM','Ecosys SCM','manage_options','ecosys-scm','scm_main_function','');
    add_submenu_page('ecosys-scm','Add Projects','Add Projects','manage_options','scm-add-projects','ecosys_scm_add_projects');
        
});

function ses_main_function(){
    ?>
        <ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="#">Home</a></li>
  <li role="presentation"><a href="#">Profile</a></li>
  <li role="presentation"><a href="#">Messages</a></li>
</ul>
    <?php
}
function scm_main_function(){
    echo "1212";
}
function ecosys_ses_global_search(){
    echo "Global Search";
}
function ecosys_scm_add_projects(){
    echo "Add Projects";
}
 ?>
