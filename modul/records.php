<?php
include "../../database/db.php";

$errMsg = '';
$ID_Employee = '';
$Title = '';
$Office = '';

$records = selectAll('Record');


if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add-record'])){
    $ID_Employee = trim($_POST['ID_Employee']);
    $Title = trim($_POST['Title']);
    $Office = trim($_POST['Office']);
    if($ID_Employee === '' || $Title === '' || $Office === ''){
        $errMsg = "Не все поля заполнены!";
    }elseif (mb_strlen($Title, 'UTF8') < 5){
        $errMsg = "Заголовок записи должен быть более 5 символов";
    }else{
          $record = [
               'ID_Employee' => $ID_Employee,
               'Title' => $Title,
               'Office' => $Office,
          ];
          $ID_Record = insert('Record', $record);
          $record = selectOne('Record', ['ID_Record' => $ID_Record] );
          header('Location: ../../admin/record/index.php');
    }
}else{
     $ID_Employee = '';
     $Title = '';
     $Office = '';
}


// Апдейт категории
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])){
    $record = selectOne('Record', ['ID_Record' => $_GET['id']]);
    $id = $record['id'];
    $ID_Employee = $record['ID_Employee'];
    $Title = $record['Title'];
    $Office = $record['Office'];
}

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit-record'])){
    $id = $_POST['id'];
    $ID_Employee = trim($_POST['ID_Employee']);
    $Title = trim($_POST['Title']);
    $Office = trim($_POST['Office']);
    if($ID_Employee === '' || $Title === '' || $Office === ''){
        $errMsg = "Не все поля заполнены!";
    }elseif (mb_strlen($Title, 'UTF8') < 5){
        $errMsg = "Заголовок записи должен быть более 5 символов";
    }else{
        // Подключение к базе данных
        $conn = mysqli_connect('localhost', 'root', '', 'MakeAppointment');

        // Проверка подключения к базе данных
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Обновление записи в таблице
        $sql = "UPDATE Record SET ID_Employee = '$ID_Employee', Title = '$Title', Office = '$Office' WHERE id = '$id'";
        if (mysqli_query($conn, $sql)) {
            mysqli_close($conn);
            header('Location: ../../admin/record/index.php');
        } else {
            $errMsg = "Ошибка при обновлении записи: " . mysqli_error($conn);
        }
    }
}else{
     $ID_Employee = $_POST['ID_Employee'];
     $Title = $_POST['Title'];
     $Office = $_POST['Office'];
}

// Удаление категории
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['delete_id'])){
    $id = $_GET['delete_id'] -1;
    $conn = mysqli_connect('localhost', 'root', '', 'MakeAppointment');

// Удаление записи из таблицы
    $sql = "DELETE FROM Record WHERE id = '$id'";
    if (mysqli_query($conn, $sql)) {
        mysqli_close($conn);
        header('Location: ../../admin/record/index.php');
    } else {
        $errMsg = "Ошибка при удалении записи: " . mysqli_error($conn);
    }
}