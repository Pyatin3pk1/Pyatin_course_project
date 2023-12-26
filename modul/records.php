<?php
include "../../database/db.php";

$errMsg = '';
$ID_Employee = '';
$Title = '';
$Office = '';

//$topics = selectAll('topics');


// Код для формы создания категории
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add-record'])){
    $ID_Employee = trim($_POST['ID_Employee']);
    $Title = trim($_POST['Title']);
    $Office = trim($_POST['Office']);
    $Office = trim($_POST['Office']);
     tt($_POST);
    if($ID_Employee === '' || $Title === '' || $Office === ''){
        $errMsg = "Не все поля заполнены!";
    }elseif (mb_strlen($Title, 'UTF8') < 5){
        $errMsg = "Заголовок записи должен быть более 5 символов";
    }else{
          $record = [
               'ID_Employee' => $_SESSION['ID_Employee'],
               'Title' => $Title,
               'Office' => $Office,
               'Img' => $_POST['Img']
          ];
          tt($record);
          $ID_Record = insert('Record', $record);
          $topic = selectOne('Record', ['ID_Record' => $ID_Record] );
          header('Location: ../../admin/record/index.php');
    }
}else{
     $Title = '';
     $Office = '';
}


//// Апдейт категории
//if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])){
//    $id = $_GET['id'];
//    $topic = selectOne('topics', ['id' => $id]);
//    $id = $topic['id'];
//    $name = $topic['name'];
//    $description = $topic['description'];
//}

//if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['topic-edit'])){
//    $name = trim($_POST['name']);
//    $description = trim($_POST['description']);

//    if($name === '' || $description === ''){
//        $errMsg = "Не все поля заполнены!";
//    }elseif (mb_strlen($name, 'UTF8') < 2){
//        $errMsg = "Категория должна быть более 2-х символов";
//    }else{
//        $topic = [
//            'name' => $name,
//            'description' => $description
//        ];
//        $id = $_POST['id'];
//        $topic_id = update('topics', $id, $topic);
//        header('location: ' . BASE_URL . 'admin/topics/index.php');
//    }
//}

//// Удаление категории
//if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['del_id'])){
//    $id = $_GET['del_id'];
//    delete('topics', $id);
//    header('location: ' . BASE_URL . 'admin/topics/index.php');
//}