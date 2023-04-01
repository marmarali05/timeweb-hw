<?php

session_start();

if (!empty($_POST['login_name'])) {
    $loginName = $_POST['login_name'];
    setcookie('loginName',  $loginName);
    header("Location: /index.php", TRUE, 307);
} else {
    echo 'Логин на задан!';
}

//var_dump($_COOKIE);

?>