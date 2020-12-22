<?php

session_start();
require_once '../config/connect.php';


$login = $_POST['login'];
$password = $_POST['password'];


if (preg_match('/^([a-z]|\d|_)+$/i', $login)) {
    $query = mysqli_query($connect, "SELECT COUNT(id) as cnt FROM users WHERE userAdmin='".mysqli_real_escape_string($connect   , $_POST['login'])."'");
    $usr = mysqli_fetch_array($query, MYSQLI_ASSOC);
    if($usr['cnt'] > 0)
    {
        $_SESSION['message'] = "Вже є такий логін!!!! Шановний ,будь креативним!";
        header('Location: ../registration.php');
    }else{

        $password = md5($password);
        mysqli_query($connect, "INSERT INTO `users` (`id`,`userAdmin`,`passwordAdmin`)VALUE (NULL,'$login','$password')");
        $_SESSION['message'] = "Ви успішно зареєструвалися";
        header('Location: ../authorization.php');

    }

} else {
    $_SESSION['message'] = "Пароль не повинен мати пробіли та має складатися з букв латинського алфавіту та цифр";
    header('Location: ../registration.php');
}










