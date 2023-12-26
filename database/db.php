<?php
session_start();
include "connect.php";

function tt($value){
     echo '<pre>';
     print_r($value);
     echo '</pre>';
     exit();
}

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
         foreach ($params as $key => $value){
             if (!is_numeric($value)){
                 $value = "'".$value."'";
             }
             if ($i === 0){
                 $sql = $sql . " WHERE $key=$value";
             }else{
                 $sql = $sql . " AND $key=$value";
             }
             $i++;
         }
     }
 
     $query = $pdo->prepare($sql);
     $query->execute();
     dbCheckError($query);
     return $query->fetch();
 }

 function selectAll($table, $params = []){
     global $pdo;
     $sql = "SELECT * FROM $table";
 
     if(!empty($params)){
         $i = 0;
         foreach ($params as $key => $value){
             if (!is_numeric($value)){
                 $value = "'".$value."'";
             }
             if ($i === 0){
                 $sql = $sql . " WHERE $key=$value";
             }else{
                 $sql = $sql . " AND $key=$value";
             }
             $i++;
         }
     }
 
     $query = $pdo->prepare($sql);
     $query->execute();
     dbCheckError($query);
     return $query->fetchAll();
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

function update($table, $id, $params){
    global $pdo;
    $i = 0;
    $str = '';
    foreach ($params as $key => $value) {
        if ($i === 0){
            $str = $str . $key . " = '" . $value . "'";
        }else {
            $str = $str .", " . $key . " = '" . $value . "'";
        }
        $i++;
    }

    $sql = "UPDATE $table SET $str WHERE id = $id";
    $query = $pdo->prepare($sql);
    $query->execute($params);
    dbCheckError($query);

}

// Обновление строки в таблице
function delete($table, $id){
    global $pdo;
    //DELETE FROM `topics` WHERE id = 3
    $sql = "DELETE FROM $table WHERE id =". $id;
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);

}