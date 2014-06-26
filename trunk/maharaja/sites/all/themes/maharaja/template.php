<?php

/**
 * Add body classes if certain regions have content.
 */
function maharaja_new_preprocess_html(&$variables) {


    drupal_static_reset('drupal_add_css');
    drupal_static_reset('drupal_add_js');

    // Add conditional stylesheets for IE
    #drupal_add_css(path_to_theme() . '/css/ie.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'lte IE 7', '!IE' => FALSE), 'preprocess' => FALSE));
    #drupal_add_css(path_to_theme() . '/css/ie6.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'IE 6', '!IE' => FALSE), 'preprocess' => FALSE));
}

/*
 * This will help to remove Sytem Define Jsavascript
 */

function maharaja_new_js_alter(&$javascript) {
    $javascript['misc/jquery.js']['data'] = '//code.jquery.com/jquery-1.10.2.min.js'; // Swap out jQuery to use an updated version of the library
}

function maharaja_new_breadcrumb($variables) {
    $page_title = drupal_get_title();
    $breadcrumb = $variables['breadcrumb'];
    $output = '';
    if (!empty($breadcrumb)) {
        $output .= implode(' &raquo; ', $breadcrumb);
    }
    $output .= ' &raquo; ' . $page_title;
    return $output;
}

function maharaja_preprocess_page(&$vars, $hook) {
    if (isset($vars['node']->type)) {
        // If the content type's machine name is "my_machine_name" the file
        // name will be "page--my-machine-name.tpl.php".
        $vars['theme_hook_suggestions'][] = 'page__' . $vars['node']->type;
    }
    if (arg(0) == 'taxonomy' && arg(1) == 'term' && is_numeric(arg(2))) {
        $variables['theme_hook_suggestions'][] = 'page__taxonomy' ;
    }    
}


function maharaja_form_alter(&$form, &$form_state, $form_id) {
  if($form_id == "search_form") {
     $form['#type'] = 'hidden';
  }
}