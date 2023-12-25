<?php
include ('../database/db.php');
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Record Log</title>
</head>
<body>
    <?php include ("../Composit/header.php"); ?>
        <section class="record">
            <div class="header-block">
                <h1>Журнал записей</h1>
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