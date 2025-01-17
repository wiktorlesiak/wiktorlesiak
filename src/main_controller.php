<?php
/**
 * Main Controller
 */

define('DB_HOST', 'localhost');
define('DB_NAME', 'wiktorlesiak');
define('DB_USER', 'root');
define('DB_PASS', 'root');


function index_action()
{
    require_once __DIR__ . '/../templates/index.php';
}
function signin_action()
{
    require_once __DIR__ . '/../templates/login/signin.php';
}

function signup_action()
{
    require_once __DIR__ . '/../templates/login/signup.php';
}
function profile_action()
{
    require_once __DIR__ . '/../templates/login/profile.php';

}
function logout_action()
{
    require_once __DIR__ . '/../templates/login/logout.php';
}

    function error_action()
    {
        require_once __DIR__ . '/../templates/login/error.php';
    }

    function errorActivate_action()
    {
        require_once __DIR__ . '/../templates/login/errorActivate.php';
    }

    function verify_action()
    {
        require_once __DIR__ . '/../templates/login/verify.php';
    }

    function success_action()
    {
        require_once __DIR__ . '/../templates/login/success.php';
    }

    function forgot_action()
    {
        require_once __DIR__ . '/../templates/login/forgot.php';
    }

    function login_action()
    {
        require_once __DIR__ . '/../templates/login/login.php';
    }

    function reset_action()
    {
        require_once __DIR__ . '/../templates/login/reset.php';
    }

    function reset_password_action()
    {
        require_once __DIR__ . '/../templates/login/reset_password.php';
    }
    function post_action()
    {
    require_once __DIR__ . '/../templates/login/reset_password.php';
    }
    function database_action()
    {
        require_once __DIR__ . '/../templates/login/config.php';
}


/*ADMIN FUNCTION*/
function admin_action()
{
    require_once __DIR__ . '/../templates/admin/admin.php';
}
function add_user_action()
{
    require_once __DIR__ . '/../templates/admin/add_user.php';
}

function delete_user_action()
{
    require_once __DIR__ . '/../templates/admin/delete_user.php';
}
function edit_user_action()
{
    require_once __DIR__ . '/../templates/admin/edit_user.php';
}

function add_update_action()
{
    require_once __DIR__ . '/../templates/admin/add_update.php';
}

function delete_update_action()
{
    require_once __DIR__ . '/../templates/admin/delete_update.php';
}
function edit_update_action()
{
    require_once __DIR__ . '/../templates/admin/edit_update.php';
}
function action_blog()
{
    require_once __DIR__ . '/../templates/blog.php';
}
/*END ADMIN FUNCTION*/


