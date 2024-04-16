<?php 
define("BDD","bonbons");
function connect(){
    
    try{
        $connect = new PDO("mysql:host=localhost;dbname=".BDD,"root","", array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    }
    catch(PDOException $e){
        echo "problme de connexion à la BDD<br>". $e->getMessage();
    }
    return $connect;
    }
?>