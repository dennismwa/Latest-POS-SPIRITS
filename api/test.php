<?php
/**
 * Standalone API Test
 * api/test.php
 * 
 * Access this file directly to test if the API folder is accessible
 */

header('Content-Type: application/json');

// Basic test without requiring auth
$response = [
    'success' => true,
    'message' => 'API folder is accessible!',
    'timestamp' => date('Y-m-d H:i:s'),
    'server' => $_SERVER['SERVER_SOFTWARE'] ?? 'Unknown',
    'php_version' => PHP_VERSION,
    'request_method' => $_SERVER['REQUEST_METHOD'],
    'request_uri' => $_SERVER['REQUEST_URI'],
    'get_params' => $_GET,
    'post_params' => array_keys($_POST)
];

echo json_encode($response, JSON_PRETTY_PRINT);
exit;