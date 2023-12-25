<?php
include "../database/db.php";

$errMsg = '';
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])){

     $fullName = trim($_POST['fullName']);
     $email = trim($_POST['email']);
     $password = trim($_POST['password']);
     $password1 = trim($_POST['password1']);

     if($fullName === '' || $email === '' || $password === ''){
          $errMsg = "Не все поля заполнены!";
     }elseif (mb_strlen($fullName, 'UTF8') < 5){
          $errMsg = "Имя должен быть более 5-х символов";
     }elseif ($password !== $password1) {
          $errMsg = "Пароли в обеих полях должны соответствовать!";
     }else{
          $existence = selectOne('users', ['email' => $email]);
          if($existence['email'] === $email){
               $errMsg = "Пользователь с такой почтой уже зарегистрирован!";
          }else{
               $pass = password_hash($passF, PASSWORD_DEFAULT);
               $post = [
                    'Full_Name' => $fullName,
                    'Email' => $email,
                    'Password' => $pass
               ];
               $id = insert('Users', $post);
               $user = selectOne('Users', ['ID_User' => $ID_User] );

               $_SESSION['ID_User'] = $user['ID_User'];
               $_SESSION['Full_Name'] = $user['Full_Name'];

               if($_SESSION['Admin']){
                    header('Location: ../admin/admin.php');
               }else{
                    header('Location: ../html/index.php');
               }
          }
     }
}else{
     $login = '';
     $email = '';
}

//if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-log'])){

//     $email = trim($_POST['email']);
//     $pass = trim($_POST['password']);

//     if($email === '' || $pass === ''){
//          $errMsg = "Не все поля заполнены!";
//     }else{
//          $existence = selectOne('Users', ['Email' => $email]);
//          if($existence && password_verify($pass, $existence['Password'])){
//               $_SESSION['ID_User'] = $existence['ID_User'];
//               $_SESSION['Full_Name'] = $existence['Full_Name'];
               
//               if($_SESSION['Admin']){
//                    header('Location: ../admin/admin.php'); 
//               }else{
//                    header('Location: ../html/index.php');
//               }
//          }else{
//               $errMsg = "Почта либо пароль введены неверно";
//          }
//     }         
//}else{
//     $email = '';
//}


?>