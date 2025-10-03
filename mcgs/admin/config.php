<?php
// config.php - Application configuration
define('APP_NAME', 'Medical Card Generation System');
define('APP_VERSION', '2.0');
define('UPLOAD_DIR', 'uploads/');
define('MAX_FILE_SIZE', 2097152); // 2MB in bytes
define('ALLOWED_EXTENSIONS', ['jpg', 'jpeg', 'png']);

// Security settings
define('SESSION_TIMEOUT', 1800); // 30 minutes
define('MAX_LOGIN_ATTEMPTS', 5);
define('LOGIN_LOCKOUT_TIME', 900); // 15 minutes

// Create uploads directory if it doesn't exist
if (!file_exists(UPLOAD_DIR)) {
    mkdir(UPLOAD_DIR, 0755, true);
}

// Ensure .htaccess exists in uploads directory
$htaccess_content = "Options -Indexes
Options -ExecCGI
AddHandler cgi-script .php .pl .py .jsp .asp .sh .cgi
";
file_put_contents(UPLOAD_DIR . '.htaccess', $htaccess_content);
?>