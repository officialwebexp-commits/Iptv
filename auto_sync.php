<?php

require_once "auth.php";
require_once "config.php";

// GitHub Raw M3U URL
$url = "https://raw.githubusercontent.com/Officialwebexp-commits/Iptv/main/iptv.m3u";

// Local file path
$localFile = __DIR__ . "/playlist/iptv.m3u";

// Download latest playlist
$data = @file_get_contents($url);

if ($data === false) {
    die("Failed to download playlist.");
}

// Save locally
file_put_contents($localFile, $data);

// Run parser automatically
require_once "parser.php";

echo "Auto Sync Completed Successfully";