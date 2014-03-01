<?php
/*
This is a sample local-config.php file

In it, you *must* include the four main database defines

You may include other settings here that you only want enabled on your local development checkouts

This file should be ignored in your .gitignore file
*/

define( 'DB_NAME', 'wp013' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', 'root' );
define( 'DB_HOST', 'localhost:/var/run/mysqld/mysqld.sock' ); // Probably 'localhost' I'm using sockets
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

// =======================================================
// DEFINE SITE AND BLOG URLS - IMPORTANT!
// =======================================================
define( 'WP_SITEURL', 'http://wordpress.dev/wp' );
define( 'WP_HOME', 'http://wordpress.dev/' );

// ========================
// Custom Content Directory
// ========================
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content' );

// ==============================================================
// Table prefix
// Change this if you have multiple installs in the same database
// ==============================================================
$table_prefix  = 'rs1_';

// ======================
// ENABLE MULTISITE? 
// ======================
define('WP_ALLOW_MULTISITE', true);

// ====================
// SETUP MULTISITE 
// ====================
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
$base = '/';
define('DOMAIN_CURRENT_SITE', 'wordpress.dev');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

// ================================
// Enable CACHING - Batcache / APC
//=================================
define( 'WP_CACHE', true );

// ====================================
// ENABLE MULTI SITE DOMAIN MAPPING
// ====================================
define( 'SUNRISE', 'on' );

// =======================
// Define Memory Limit
// =======================
define('WP_MEMORY_LIMIT', '128M');
define('WP_MAX_MEMORY_LIMIT', '128M');

// =====================
// EMPTY THE TRASH 
// =====================
// define( 'EMPTY_TRASH_DAYS', 30 ); // 30 days

// =======================
// Auto Optimize Database
// =======================
// define( 'WP_ALLOW_REPAIR', true );



// ==========================
// DISABLE POST REVISIONS
// ==========================
// define( 'WP_POST_REVISIONS', false );

// ==================================
// FORCE SSL FOR ADMIN AND LOGIN
// ==================================
// define( 'FORCE_SSL_LOGIN', true );

// ================================================
// DISABLE PLUGIN AND THEME UPDATING AND INSTALL
// ================================================
// define( 'DISALLOW_FILE_MODS', true );

// ====================================
// Disallow Editing From Dashboard
// Disables Plugin and Theme Editor
// ====================================
// define('DISALLOW_FILE_EDIT', true);

// ======================
// BOOTSTRAP WORDPRESS 
// ======================
if ( !defined( 'ABSPATH' ) )
define( 'ABSPATH', dirname( __FILE__ ) . '/wp/' );
require_once( ABSPATH . 'wp-settings.php' );
// =====================