<?php
require '../config/config.php';

    $method = $_GET['method'];
    $request = $_POST;
    switch ($method) {
        case "new":
            register($pdo,$request);
            break;
        case "delete":
            edit($pdo,$request);
            break;
    }
    function new($pdo, $request){
        
    }
?>