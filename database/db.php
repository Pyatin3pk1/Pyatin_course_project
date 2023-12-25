<?php
session_start();
include "../database/connect.php";


function dbCheckError($query){
     $errInfo = $query->errorInfo();
     if ($errInfo[0] !== PDO::ERR_NONE){
          echo $errInfo[2];
          exit();
     }
     return true;
}

function selectOne($table, $params = []){
     global $pdo;
     $sql = "SELECT * FROM $table";

     if(!empty($params)){
          $i = 0;
          foreach ($params as $key => $value) {
               if(!is_numeric($values)){
                    $values = "'".$values."'";
               }
               if($i === 0){
                    $coll = $coll . "$key";
                    $mask = $mask . "'" ."$value" . "'";
               }else{
                    $coll = $coll . ", $key";
                    $mask = $mask . ", '" ."$value" . "'";
               }
               $i++;
          }
     }
     $query = $pdo->prepare($sql);
     $query->execute($params);
     dbCheckError($query);
     return $query->fetch();
}
function insert($table, $params){
     global $pdo;
     $i = 0;
     $coll ='';
     $mask ='';
     foreach ($params as $key => $value) {
          if($i === 0){
               $coll = $coll . "$key";
               $mask = $mask ."'" . "$value" . "'";
          }else{
               $coll = $coll . ", $key";
               $mask = $mask . ", '" . "$value" . "'";
          }
          $i++;
     }

     $sql = "INSERT INTO $table ($coll) VALUES ($mask)";

     $query = $pdo->prepare($sql);
     $query->execute($params);
     dbCheckError($query);
     return $pdo->lastInsertId();
}