<?php
// HTTP
define("HTTP_SERVER", getenv('HTTP_SERVER_ADMIN'));
define("HTTP_CATALOG", getenv('HTTP_CATALOG'));

// HTTPS
define("HTTPS_SERVER", getenv('HTTPS_SERVER_ADMIN'));
define("HTTPS_CATALOG", getenv('HTTPS_CATALOG'));

// DIR
const DIR_APPLICATION = '/app/upload/admin/';
const DIR_SYSTEM = '/app/upload/system/';
const DIR_IMAGE = '/app/upload/image/';
const DIR_STORAGE = '/app/storage/';
const DIR_CATALOG = '/app/upload/catalog/';
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
define("DB_DRIVER", getenv('DB_DRIVER'));
define("DB_HOSTNAME", getenv('DB_HOSTNAME'));
define("DB_USERNAME", getenv('DB_USERNAME'));
define("DB_PASSWORD", getenv('DB_PASSWORD'));
define("DB_DATABASE", getenv('DB_DATABASE'));
define("DB_PORT", getenv('DB_PORT'));
const DB_PREFIX = 'oc_';

// OpenCart API
const OPENCART_SERVER = 'https://www.opencart.com/';
const OPENCARTFORUM_SERVER = 'https://opencartforum.com/';
