<?php
/*
This is a sample local-config.php file
In it, you *must* include the four main database defines

You may include other settings here that you only want enabled on your local development checkouts
*/

define( 'DB_NAME', 'redswan13' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', 'root );
define( 'DB_HOST', 'localhost' ); // Probably 'localhost'


// ==================
//SETUP MULTISITE? 
// UNCOMMENT BELOW
// ==================
define('WP_ALLOW_MULTISITE', true);

// ===================
// Define Memory Limit
// ===================
define('WP_MEMORY_LIMIT', '128M');
define('WP_MAX_MEMORY_LIMIT', '128M');

// ==============================================================
// Table prefix
// Change this if you have multiple installs in the same database
// ==============================================================
$table_prefix  = 'rs1_';