<?php

require_once '../config/connect.php';

if ($connect === false) {
    die("ОШИБКА: Невозможно подключиться. " . mysqli_connect_error());
}

$result = mysqli_query($connect, "SELECT * FROM table_place ORDER BY id DESC LIMIT 1;");



$row_kafe = array();
while ($row_kafe_user = mysqli_fetch_assoc($result)) {
    $row_kafe[] = $row_kafe_user;
}


echo json_encode($row_kafe);


?>
