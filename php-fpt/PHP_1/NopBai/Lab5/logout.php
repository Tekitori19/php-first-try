<?php

if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    $params = session_get_cookie_params();
    setcookie('PHPSESSID', '', time() - 86400, $params['path'], $params['domain']);
}

header("Location: login.php");