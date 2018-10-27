<?php
require_once __DIR__ . '/../src/main_controller.php';

$action = filter_input(INPUT_GET, 'action');

switch ($action) {
    case 'home':
        homepage_action();
    case 'main':
    default:
        index_action();
}