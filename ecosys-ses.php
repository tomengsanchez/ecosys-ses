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
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */

// add_menupage
add_action('admin_menu',function(){
    add_menu_page('Ecosys SES','Ecosys Socio Economic Survey','manage_options','ecosys-ses','ses_main_function','');
    add_submenu_page('ecosys-ses','Global Search','Global Search','manage_options','global-search','ecosys_ses_global_search');

    add_menu_page('Ecosys SCM','Ecosys Stakeholder Consultation Meetings','manage_options','ecosys-scm','scm_main_function','');
    add_submenu_page('ecosys-scm','Add Projects','Add Projects','manage_options','scm-add-projects','ecosys_scm_add_projects');
    
});
function ses_main_function(){
    echo "Hi";
}

function scm_main_function(){
    echo "Hi";
}

function ecosys_ses_global_search(){
    echo "12";
}

function ecosys_scm_add_projects(){
    echo "fuck";
}
 ?>
