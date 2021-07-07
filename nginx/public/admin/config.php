<?php
// HTTP
define('HTTP_SERVER', 'http://localhost:4000/admin/');
define('HTTP_CATALOG', 'http://localhost:4000/');

// HTTPS
define('HTTPS_SERVER', 'http://localhost:4000/admin/');
define('HTTPS_CATALOG', 'http://localhost:4000/');

// DIR
define('DIR_APPLICATION', '/application/public/admin/');
define('DIR_SYSTEM', '/application/public/system/');
define('DIR_IMAGE', '/application/public/image/');
define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_CATALOG', '/application/public/catalog/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'mysql');
define('DB_USERNAME', 'opencart');
define('DB_PASSWORD', 'password');
define('DB_DATABASE', 'opencart');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');

// OpenCart API
define('OPENCART_SERVER', 'https://www.opencart.com/');
define('OPENCARTFORUM_SERVER', 'https://opencartforum.com/');
