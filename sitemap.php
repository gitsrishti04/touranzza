<?php
// sitemap.php - place in your root directory

header('Content-Type: application/xml; charset=utf-8');

$baseUrl = 'https://touranzza.com'; // Change this
$baseDir = __DIR__;

// Files and folders to exclude from sitemap
$exclude = [
    'sitemap.php',
    'router.php',
    '404.php',
    'header.php',
    'footer.php',
    'navbar.php',
    'config.php',
    'sidebar.php',
    'db.php',
    // Add any partials/includes you don't want indexed
];

function scanPages($dir, $baseDir, $exclude) {
    $urls = [];
    $files = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS),
        RecursiveIteratorIterator::SELF_FIRST
    );

    foreach ($files as $file) {
        if ($file->isDir()) continue;
        if ($file->getExtension() !== 'php') continue;

        $realPath = $file->getRealPath();
        $relativePath = str_replace($baseDir, '', $realPath);
        $relativePath = str_replace('\\', '/', $relativePath); // Windows fix

        $filename = basename($relativePath);

        // Skip excluded files
        if (in_array($filename, $exclude)) continue;

        // Skip files in excluded folders (e.g. includes/, partials/)
        if (preg_match('#/(PHPMailer-master|includes|partials|components|admin|assets)/#', $relativePath)) continue;

        // Convert file path to URL
        if ($filename === 'index.php') {
            // /about/index.php → /about/
            $url = str_replace('/index.php', '/', $relativePath);
        } else {
            // /contact.php → /contact
            $url = str_replace('.php', '', $relativePath);
        }

        $lastmod = date('Y-m-d', filemtime($realPath));

        $urls[] = [
            'url'     => $url,
            'lastmod' => $lastmod,
        ];
    }

    return $urls;
}

$pages = scanPages($baseDir, $baseDir, $exclude);

// Sort: homepage first, then alphabetically
usort($pages, function($a, $b) {
    if ($a['url'] === '/') return -1;
    if ($b['url'] === '/') return 1;
    return strcmp($a['url'], $b['url']);
});

echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

foreach ($pages as $page) {
    $loc = htmlspecialchars($baseUrl . $page['url']);
    echo "
    <url>
        <loc>{$loc}</loc>
        <lastmod>{$page['lastmod']}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>" . ($page['url'] === '/' ? '1.0' : '0.7') . "</priority>
    </url>";
}

echo '
</urlset>';
?>