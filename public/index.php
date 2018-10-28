<?php
require_once __DIR__ . '/../src/main_controller.php';

$action = filter_input(INPUT_GET, 'action');

switch ($action) {
    case 'home':
     homepage_action();
     break;

    case 'signin':
    signin_action();
    break;

    case 'signup':
        signup_action();
        break;

    case 'profile':
        profile_action();
        break;
    case 'logout':
        logout_action();
        break;
    case 'error':
        error_action();
        break;
    case 'errorActivate':
        errorActivate_action();
        break;
    case 'success':
        success_action();
        break;
    case 'login':
        login_action();
        break;
    case 'forgot':
        forgot_action();
        break;
    case 'reset':
        reset_action();
        break;
    case 'reset_password':
        reset_password_action();
        break;
    case 'db':
        database_action();
        break;


    case 'main':
    default:
        index_action();
}