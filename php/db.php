<?php
//PDO
$pdo=new PDO("mysql:host=localhost;dbname=chatApp","admin","123456");
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

//insert Record
function insertData($sql,$params=[]){
    global $pdo;
    $statement=$pdo->prepare($sql);
    return $statement->execute($params);
}

///get DataAll
function getAll($sql,$params=[]){
    global $pdo;
    $statement=$pdo->prepare($sql);
    $statement->execute($params);
    return $statement->fetchAll(PDO::FETCH_OBJ);
}

//get DataOnce
function getOne($sql,$params=[]){
    global $pdo;
    $statement=$pdo->prepare($sql);
    $statement->execute($params);
    return $statement->fetch(PDO::FETCH_OBJ);
}
/// query
function update($sql,$params=[]){
    global $pdo;
    $statement=$pdo->prepare($sql);
    return $statement->execute($params);
}



