<?php

session_start();
unset($_SESSION['user']['user']);
header('Location: ../authorization.php');