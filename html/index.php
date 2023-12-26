<?php
include '../database/db.php';
$records = selectAll('Record');

?>
<!DOCTYPE html>
<html lang="ru">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
     <link rel="stylesheet" href="../css/style.css">
     <title>Журнал</title>
</head>
<body>
     <?php include ("../Composit/header.php"); ?>
     <section class="record">
          <div class="header-block">
               <h1>Запись</h1>
          </div>
          <?php foreach($records as $record): ?>
               <div class="block">
                    <div class="block-info">
                         <h2><?=$record['Title'];?></h2>
                         <p>Кабинет: <?= $record['Office']?></p>  
                    </div>
                    <button id ="btn" class="button-appointment">Записаться</button>
               </div>
          <?php endforeach; ?>
     </section>
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