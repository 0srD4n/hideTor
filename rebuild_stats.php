<?php
/**
 * MyBB Statistics Rebuild Script
 * This file will rebuild your forum's statistics
 */

// Include necessary files
define('IN_MYBB', 1);
require_once './global.php';
require_once MYBB_ROOT . 'inc/functions_rebuild.php';

// Check if user has admin access - optional security check
if ($mybb->usergroup['cancp'] != 1) {
    die("You don't have permission to run this script.");
}

// Rebuild the statistics
rebuild_stats();

// Update the cache
$cache->update_stats();

echo "Forum statistics have been successfully rebuilt. <a href='index.php'>Return to the forum</a>";
?> 