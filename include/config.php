<?php
/*
|-----------------------------------------------------------------
|    EASY BUSINESS
|-----------------------------------------------------------------
| Author: Yoel Monsalve
| mail:   yymonsalve@gmail.com
| web:    (futurely) www.yoelmonsalve.com
|
| (C) Yoel Monsalve. 2020-2021. All rights reserved.
|
|
| _________________________________________________________________
| *** Based in the original project of ***
|
|--------------------------------------------------------------------------
| OWSA-INV V2
|--------------------------------------------------------------------------
| Author: Siamon Hasan
| Project Name: OSWA-INV
| Version: v2
| Official page: http://oswapp.com/
| facebook Page: https://www.facebook.com/oswapp
|

*/
define( 'DB_HOST', 'localhost' );    // Set database host
define( 'DB_NAME', 'u279387406_eb_v1_0_2' );    // Set database name
define( 'DB_USER', 'u279387406_eb_admin' );     // Set database user
define( 'DB_PASS', 'ciscoE.22' );        // Set database password

/* TimeZone */
date_default_timezone_set("America/New_York");    // UTC-4

session_write_close( );
session_start();
?>
