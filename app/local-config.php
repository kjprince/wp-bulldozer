<?php
/*
This is a sample local-config.php file
In it, you *must* include the four main database defines

You may include other settings here that you only want enabled on your local development checkouts
*/

define( 'DB_NAME', 'wordpress' );
define( 'DB_USER', 'wp' );
define( 'DB_PASSWORD', 'wp' );
define( 'DB_HOST', '127.0.0.1' ); // Probably 'localhost'
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');


// ==================
//SETUP MULTISITE? 
// UNCOMMENT BELOW
// ==================
//define('WP_ALLOW_MULTISITE', true);

// ====================
// SETUP MULTISITE 
// ====================
// define('MULTISITE', true);
// define('SUBDOMAIN_INSTALL', true);
// $base = '/';
// define('DOMAIN_CURRENT_SITE', 'mu.rtcamp.net');
// define('PATH_CURRENT_SITE', '/');
// define('SITE_ID_CURRENT_SITE', 1);
// define('BLOG_ID_CURRENT_SITE', 1);


// ===================
// Define Memory Limit
// ===================
define('WP_MEMORY_LIMIT', '128M');
define('WP_MAX_MEMORY_LIMIT', '128M');

// ===========================
// Enable APC / Batcache
//
define( 'WP_CACHE', true );
// 
//=============================

// =====================
// EMPTY THE TRASH 
//
// define( 'EMPTY_TRASH_DAYS', 30 ); // 30 days
//
// =====================

// =====================
// Auto Optimize Database
//
// define( 'WP_ALLOW_REPAIR', true );
//
// =======================

// =======================================================
// Define site and blog URLs
//
// define( 'WP_SITEURL', 'http://example.com/wp' );
//
// define( 'WP_HOME', 'http://example.com' );
//
// =======================================================

// =====================
// Disable post revisions
// define( 'WP_POST_REVISIONS', false );
// ======================

// ==============================
// Force SSl for Admin and Login
// define( 'FORCE_SSL_LOGIN', true );
// ==================================

// ====================================================
// Disable Plugin and Theme Updating and Installation
//
// define( 'DISALLOW_FILE_MODS', true );
//
// ====================================================

// ====================================
// Disallow Editing From Dashboard
// Disables Plugin and Theme Editor
//
// define('DISALLOW_FILE_EDIT', true);
//
// ===================

// ==============================================================
// Table prefix
// Change this if you have multiple installs in the same database
// ==============================================================
//$table_prefix  = 'rs1_';