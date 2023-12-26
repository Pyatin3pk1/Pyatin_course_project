<?php
include "../../database/db.php";

$errMsg = '';

$employees = selectAll('Employee');

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['employee-reg'])){

     $fullName = trim($_POST['fullName']);
     $email = trim($_POST['email']);
     $password = trim($_POST['password']);
     $password1 = trim($_POST['password1']);
     

     $admin = trim($_POST['admin']) !== null ? 1 : 0;

     if($fullName === '' || $email === '' || $password === ''){
          $errMsg = "Не все поля заполнены!";
     }elseif (mb_strlen($fullName, 'UTF8') < 5){
          $errMsg = "Имя должен быть более 5-х символов";
     }elseif ($password !== $password1) {
          $errMsg = "Пароли в обеих полях должны соответствовать!";
     }else{
          $existence = selectOne('Employee', ['Email' => $email]);
          if($existence['Email'] === $email){
               $errMsg = "Пользователь с такой почтой уже зарегистрирован!";
          }else{
               $pass = password_hash($password, PASSWORD_DEFAULT);
               $employee = [
                    'Full_Name' => $fullName,
                    'Email' => $email,
                    'Password' => $pass,
                    'Admin' => $admin
               ];
               $ID_Employee = insert('Employee', $employee);
               $employee = selectOne('Employee', ['ID_Employee' => $ID_Employee] );
               header('Location: ../../admin/employee/index.php');
          }
     }
}else{
     $fullName = '';
     $email = '';
}