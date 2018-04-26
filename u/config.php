<?php

return array(
	/* This is a secure key that only you should know, an added layer of security for the image upload */
    'secure_key' => 'somerandomlongstringoftextforkey',

    /* This is the url your output will be, usually http://www.domain.com/u/, also going to this url will be the gallery page */
    'output_url' => 'http://bdg.tamz.us/u/',

    /* This is a redirect url if the script is accessed directly */
    'redirect_url' => 'http://bdg.tamz.us',

    /* This is a list of IPs that can access the gallery page (Leave empty for universal access) */
    'allowed_ips' => array('192.168.0.0', '0.0.0.0','192.168.80.4'),

    /* Page title of the gallery page */
    'page_title' => 'Bax Upload Site',

    /* Heading text at the top of the gallery page */
    'heading_text' => 'BDG Uploads',
);