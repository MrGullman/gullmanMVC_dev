<?php
// DB Params
define('DB_HOST', 'localhost'); // Host URL
define('DB_USER', 'root');  // Username
define('DB_PASS', '1234');  // Password
define('DB_NAME', 'mvcpagination_dev');  // DB Name
define('DB_CHAR', 'utf8mb4');

// App Root
define('APPROOT', dirname(dirname(__FILE__)));
// URL Root
define('URLROOT', 'http://localhost/mvcpagination_dev01'); // Change to your own root
// Document Root
define('DOCROOT', $_SERVER['DOCUMENT_ROOT']);
// Site Name
define('SITENAME', 'Gullman MVC Dev');   // Change to your Sitename

mb_internal_encoding('UTF-8');

// Pagination Settings
define('ITEMLIMIT', 5);
define('PAGINATIONLINKS', 3);

// Setup start Controller and Method
define('BASE_CONTROLLER', 'Pages');
define('BASE_METHOD', 'index');


//////////////////////////////////////////////////////
//      Kod nedanför är för framtida utveckling     //
//////////////////////////////////////////////////////

// MVC Settings
define('SITE_TITLE', 'Gullman MVC Framework');  // This will be used if no sitetitle is set
define('DEFAULT_LAYOUT', 'default');    // If no layout is set, use this layout
define('CURRENT_USER_SESSION_NAME', 'ffkmmdDGHYYfkdrrXGg446ss3GfCDe');   // Session name for logged in uer
define('REMEMBER_ME_COOKIE_NAME', 'ASDFasdVGH5efDSfe5gDfdw3s');     // Cookie name for logged in user
define('REMEMBER_ME_COOKIE_EXPIRY', 604800);    // Time in seconds for remember me cookie to live(30days)


