<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
     <link rel="stylesheet" href="../../css/admin.css">
     <title>Журнал</title>
</head>
<body>
     <?php include ("../../Composit/header-admin.php"); ?>
     
    <div class="conteiner-rec">
        <div class="row">
            <div class="sidebar col-3">
                <ul>
                <li>
                        <a href="../record/index.php">Запись</a>
                    </li>
                    <li>
                        <a href="../employee/index.php">Пользователи</a>
                    </li>
                </ul>
            </div>
            <div class="record col-8">
                <div class="button row">
                    <a href="create.php" class="col-2 btn-success">Создать</a>
                    <a href="index.php" class="col-2 btn-warning" >Управление</a>
                </div>
                <div class="row record-title">
                    <?php 
                    
                    ?>
                    <h2>Управление пользователями</h2>
                    <div class="col-2">ID_Employee</div>
                    <div class="col-2">ФИО</div>
                    <div class="col-2">Email</div>
                    <div class="col-2">Пароль</div>
                    <div class="col-1">Роль</div>
                    <div class="col-2">Управление</div>
                </div>
                <?php foreach ($records as $key => $record): ?>
                <div class="row records">
                    <div class="id col-2"><?=$key + 1; ?></div>
                    <div class="fullName col-3"><?=$record['Full_Name']; ?></div>
                    <div class="email col-3"><$record['Email']; ?></div>
                    <div class="password col-3"><$record["Password"]; ?></div>
                    <div class="roll. col-3"><$record["fullName"]; ?></div>
                    <div class="cabinet col-2">21</div>
                    <div class="red col-2"><a href = "">edit</a></div>
                    <div class="del col-2"><a href = "">delete</a></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
     
     <footer>
          <div class="footer-content container">
          <div class="footer-content-block">
               <h2 class="logo"> <a href="index.php">ЗП</a></h2>
          <p>
               Какае-то информация, которая должна что-то объястнять пользователям.
          </p>
          <span>©Абра-кадабра 2023. Все права защищены</span>
          </div>
          <div class="footer-content-block">
          <h2 >
               Телефон:
          </h2>
          <span>
               +7(837)23 342 2
          </span>
          <h2>
               Электроная почта:
          </h2>
          <span>
               company@gmail.ru
          </span>
          <h2>
               Адрес:
          </h2>
          <span>
               г.Оренбург ул. Чкалова д. 26
          </span>
          </div>
          </div>
     </footer>
     <script src="../script/record.js"></script>
</body>
</html>