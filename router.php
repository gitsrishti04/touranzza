<?php
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$baseDir = __DIR__;

// 1. If it's a directory, look for index.php
if (is_dir($baseDir . $uri)) {
    $indexFile = rtrim($baseDir . $uri, '/') . '/index.php';
    if (file_exists($indexFile)) {
        require_once $indexFile;
        exit;
    }
}

// 2. If the file exists directly (image, css, etc.), serve it
if (file_exists($baseDir . $uri) && !is_dir($baseDir . $uri)) {
    return false;
}

// 3. Check for .php extension (for extensionless URLs)
$phpFile = rtrim($baseDir . $uri, '/') . '.php';
if (file_exists($phpFile)) {
    require_once $phpFile;
    exit;
}

// 4. Default to standard PHP server behavior (404 etc.)
return false;
?>
