<?php
define('DB-NAME', 'wordpress');
define('DB-USER', 'root');
define('DB-PASSWORD', 'root');
define('DB_HOST', 'mysql');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

define('AUTH_KEY', 'Freyda');
define('SECURE_AUTH_KEY', 'Freyda');
define('LOGGED_IN_KEY', 'Freyda');
define('NONCE_KEY', 'Freyda');
define('AUTH_SALT', 'Freyda');
define('SECURE_AUTH_SALT', 'Freyda');
define('LOGGED_IN_SALT', 'Freyda');
define('NONCE_SALT', 'Freyda');

$table_prefix = 'wp_';

define('WP_DEBUG', false);
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}
require_once ABSPATH . 'wp-settings.php';
