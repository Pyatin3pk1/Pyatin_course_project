<?php
include "../../modul/records.php";
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
                <div class="row add-records">
                    <form action="edit.php" method="post" enctype="myltipart/form-data">
                    <input type="hidden" name="id" value="<?=$id; ?>">
                         <div class="row record-title">
                              <h3>Редактирование записи</h3>
                         </div>
                         <div class = "err">
                              <p>
                                   <?=$errMsg?>
                              </p>
                         </div>
                         <div class="col">
                         <label for="content" class="form-label">ID_Employee</label>
                              <input type="text" name="ID_Employee" value="<?=$record['ID_Employee']?>" class="form-control" aria-label="Введите имя сотрудника">
                         </div>
                         <div class="col">
                              <label for="content" class="form-label">Заголовок</label>
                              <input type="text" value="<?=$record['Title']?>"name="Title" class="form-control" id="content" placeholder="Введите кабинет для записи">
                         </div>
                         <div class="col">
                              <label for="content" class="form-label">Кабинет</label>
                              <input type="text" name="Office" value="<?=$record['Office']?>" class="form-control" id="content" placeholder="Введите кабинет для записи">
                         </div>
                         <div class="col">
                              <button class="btn btn-primary" name="edit-record" type="submit">Сохранение записи</button>
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