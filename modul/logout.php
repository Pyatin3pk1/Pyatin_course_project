<?php
session_start();
unset($_SESSION['ID_Employee']);
unset($_SESSION['ID_User']);
unset($_SESSION['Full_Name']);
header('Location: ../html/index.php');
?>