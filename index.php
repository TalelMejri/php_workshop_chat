<?php
    
    $pdo=new PDO("mysql:host=localhost;dbname=chatphp","root","");

    $messages=$pdo->query("select * from messages");
    $data=$messages->fetchAll();

    include("layout.phtml");



?>