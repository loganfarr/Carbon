<?php

/**
 * @file
 * Template overrides as well as (pre-)process and alter hooks for the
 * Boilerplate theme.
 */

/**
 * Add information about the number of sidebars
 */
function boilerplate_preprocess_html(&$variables) {
    // Code borrowed/adapted from D7 core.
    // Classes originally added by D7 core, then removed by Omega 4 and now put back (ish) by this function.
    // NOTE: D7 core used hyphens in class names, we need to use different classes so we're
    // replacing hyphens with underscores (make sure your CSS is expecting this).
    if (!empty($variables['page']['sidebar_first']) && !empty($variables['page']['sidebar_second'])) {
        $variables['classes_array'][] = 'has-two-sidebars';
    }
    elseif (!empty($variables['page']['sidebar_first'])) {
        $variables['classes_array'][] = 'has-sidebar-first';
    }
    elseif (!empty($variables['page']['sidebar_second'])) {
        $variables['classes_array'][] = 'has-sidebar-second';
    }
    else {
        $variables['classes_array'][] = 'no-sidebars';
    }
}