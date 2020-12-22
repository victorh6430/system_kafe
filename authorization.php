<?php

session_start();
 if ($_SESSION['user']['user']){
    header('Location: index.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Food</title>
    <link rel="stylesheet" href="css/styleModal.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="menu">
    <ul class="menu_list">
        <li ><a href="registration.php">Реєстрація</a></li>
        <li class="register_link" >Авторизація</li>
    </ul>
</div>

<!-Forma regis--->

<div id="login">
    <form action="model/loginUser.php" method="POST">
        <fieldset class="clearfix">
            <p><span class="fontawesome-user"></span><input type="text" name="login" value="Логин" onBlur="if(this.value == '') this.value = 'Логин'" onFocus="if(this.value == 'Логин') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
            <p><span class="fontawesome-lock"></span><input type="password" name="password" value="Пароль" onBlur="if(this.value == '') this.value = 'Пароль'" onFocus="if(this.value == 'Пароль') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
            <p><input type="submit" value="Авторизація"></p>
            <?php
            if(isset($_SESSION['message'])){
                echo '<p class="message">'.$_SESSION['message'].'</p>';
            }
            unset($_SESSION['message']);

            ?>
        </fieldset>

    </form>
    <!--    <p>Нет аккаунта? &nbsp;&nbsp;<a href="#">Регистрация</a><span class="fontawesome-arrow-right"></span></p>-->
</div>

<!--<script src="js/main.js"></script>-->
</body>
</html>