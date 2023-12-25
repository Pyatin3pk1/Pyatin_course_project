<?php
include "../modul/sheck.php";
?>

<!DOCTYPE html>
<html lang="ru">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../css/style.css">
     <title>Login</title>
</head>
<body> 
<div class="container-log">
    <div class="container-blur">
        <div class="login-container">
        <h3>Авторизация</h3>
        <div class = "err">
            <p>
                <?=$errMsg?>
            </p>
        </div>
        <form action="../html/login.php" method="post">
            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" value="<?=$email?>" id="email" name="email" required>  
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>  
            </div>
            <div class="input-group">
               <button type="submit" name = "button-log"> Войти</button>
           </div>
           <div class="aut-reg">У вас не существует аккаунт?
            <a href="reg.php" class="aut">Регистрация</a>
           </div>
         </form>
     </div>
    </div>
 </div>
</body>
</html>