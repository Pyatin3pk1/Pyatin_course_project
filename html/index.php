<?php
include '../database/db.php';
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
          <div class="block">
               <div class="block-info">
                    <img src="../img/Иванов.png" alt="">
                    <h3>Голубев Павел Иванович</h3>
                    <p>Кабинет: 123</p>  
               </div>
               <button id ="btn" class="button-appointment">Записаться</button>
          </div>
          <div class="block">
               <div class="block-info">
                    <img src="../img/Петров.png" alt="">
                    <h3>Петров Дмитрий Сергеевич</h3>
                    <p>Кабинет: 234</p>
               </div>
               <button id ="btn" class="button-appointment">Записаться</button>
          </div>
          <div class="block">
               <div class="block-info">
                    <img src="../img/Сидоров.png" alt="">
                    <h3>Сидоров Михаил Сидорович</h3>
                    <p>Кабинет: 345</p>
               </div>
               <button id ="btn" class="button-appointment">Записаться</button>
          </div>
          <div class="block">
               <div class="block-info">
                    <img src="../img" alt="">
                    <h3>Заборов Алексей Павлович</h3>
                    <p>Кабинет: 111</p>
               </div>
               <button id ="btn" class="button-appointment">Записаться</button>
          </div>
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
</body>
</html>