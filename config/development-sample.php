<?php
// Debug config
define('SAVEQUERIES', true);
define('SCRIPT_DEBUG', true);
define('WP_DEBUG', true);

// Deployment config
# define('AUTOMATIC_UPDATER_DISABLED', true);
# define('DISABLE_WP_CRON', false);
define('DISALLOW_FILE_EDIT', true);
define('DISALLOW_FILE_MODS', false);

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
define('WP_SITEURL', WP_HOME . '/wp');
define('WP_CONTENT_DIR', dirname( ABSPATH ) . '/content');
define('WP_CONTENT_URL', WP_HOME . '/content');
# define('WP_ALLOW_MULTISITE', false);
# define('WPLANG', 'de_DE');
