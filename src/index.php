<?php
echo "<h2>Welcome to LFI Challenge</h2>";
echo "<p>Try <code>?file=home</code> or <code>?file=about</code></p>";

$file = isset($_GET['file']) ? $_GET['file'] : 'home';

/*
 * Friendly page mapping
 */
if (strpos($file, 'php://') === false && strpos($file, '/') === false) {
    $file = __DIR__ . "/pages/" . $file . ".php";
}

/*
 * INTENTIONALLY VULNERABLE:
 * - Allows php://filter
 * - Allows directory traversal
 */
include($file);
?>
