<?php
    $username="root";
    $password="";
    $database = "sistema_contable4";
    $port = 3306;
	//Conexion PDO
    $dsn="mysql:host=localhost;port=$port;dbname=$database";
   
    $connection=new PDO($dsn,$username,$password);
?>