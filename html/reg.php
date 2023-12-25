<?php
include '../modul/sheck.php';
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
         <form action="../html/reg.php" method="post">
               <h3>Регистрация</h3>
               <div class = "err">
                    <p>
                      <?=$errMsg?>
                    </p>
               </div>
               <div class="input-group">
                    <label for="text">ФИО:</label>
                    <input type="text" value="<?=$login?>" id="text" name="fullName" required>  
               </div>
                <div class="input-group">
                    <label for="email">Email:</label>
                    <input type="email" value="<?=$email?>" id="email" name="email" required>  
                </div>
               <div class="input-group">
                    <label for="password">Пароль:</label>
                    <input type="password" id="password" name="password" required>  
               </div>
               <div class="input-group">
                    <label for="password">Повторите пароль:</label>
                    <input type="password" id="password" name="password1" required>  
               </div>
               <div class="input-group">
                    <button type="submit" name = "button-reg">Зарегестрироваться</button>
               </div>
               <div class="aut-reg">У вас уже существует аккаунт?
                    <a href="../html/login.php" class="aut">Авторизация</a>
               </div>
         </form>
     </div>
    </div>
 </div>
</body>
</html>