<?php
 //CONNECT TO MYSQL DATABASE USING MYSQLI
    $hostname ='localhost';
    $dbname   ='tasks_v2';
    $usernmae  ='root';
    $password  ='';

 $connexion = mysqli_connect($hostname,$usernmae,$password,$dbname);

 if(!$connexion){
    die('Connexion base donneé is failed :'.mysqli_connect_errno());
 }
 global $connexion; 
?>