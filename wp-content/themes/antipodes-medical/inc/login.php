<?php

/* `Customize the login logo url. By default, it goes to wordpress.org
----------------------------------------------------------------------------------------------------*/

add_filter('login_headerurl', function ($url) {
    return get_site_url();
});

/* `Customize the login logo
----------------------------------------------------------------------------------------------------*/

add_action('login_head', function () {
    echo '<style type="text/css">
     #login h1 a {
	   background-image:url(' . get_bloginfo('stylesheet_directory') . '/images/login-logo.svg) !important;
	   background-size: 150px 150px !important; height: 150px !important; width: 150px !important;
     }
 </style>';
});