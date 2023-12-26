<?php
include "../../modul/employees.php";
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
                    <a href="create.php" class="col-2 btn-success">Добавить</a>
                    <a href="index.php" class="col-2 btn-warning" >Управление</a>
                </div>
                <div class="row record-title">
                    <h3>Добавление сотрудника</h3>
                </div>
                <div class="row add-records">
                    <form action="create.php" method="post">
                              <div class = "err">
                              <p>
                              <?=$errMsg?>
                              </p>
                         </div>
                         <div class="col">
                              <label for="text">ФИО:</label>
                              <input type="text" class="form-control" value="<?=$login?>" id="text" name="fullName" required>  
                         </div>
                         <div class="col">
                              <label for="email">Email:</label>
                              <input type="email" class="form-control" value="<?=$email?>" id="email" name="email" required>  
                         </div>
                         <div class="col">
                              <label for="password">Пароль:</label>
                              <input type="password" class="form-control" id="password" name="password" required>  
                         </div>
                         <div class="col">
                              <label for="password">Повторите пароль:</label>
                              <input type="password" class="form-control" id="password" name="password1" required>  
                         </div>
                         <div class="form-check">
                              <input class="form-check-input" name="admin" type="checkbox" value="1" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">
                              Admin
                              </label>
                         </div>
                         <div class="col">
                              <button name = "employee-reg" class="btn btn-primary" type="submit">Создать</button>
                         </div>
                    </form>
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