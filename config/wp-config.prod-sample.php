<?php
// Debug config
ini_set('display_errors', 0);
define('WP_DEBUG', false);
define('SCRIPT_DEBUG', false);

// Deployment config
define('DISABLE_WP_CRON', true);
define('DISALLOW_FILE_EDIT', true);
define('DISALLOW_FILE_MODS', true);

// Database config
define('DB_NAME', 'database_name_here');
define('DB_USER', 'username_here');
define('DB_PASSWORD', 'password_here');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');
$table_prefix = 'wp_';

// Salts
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

// Site config
define('WP_HOME', 'https://your_site.com');
define('WP_SITEURL', 'https://your_site.com/wp');
define('WP_CONTENT_URL', WP_HOME . '/content');
define('WP_CONTENT_DIR', dirname( ABSPATH ) . '/content');
define('WPLANG', 'de_DE');
define('WP_ALLOW_MULTISITE', false);
