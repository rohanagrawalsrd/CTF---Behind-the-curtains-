<?php
$page = $_GET['page'] ?? 'home';

if (strpos($page, 'php://') === false && strpos($page, '/') === false) {
    $page = __DIR__ . "/pages/" . $page . ".php";
}

include($page);
?>
