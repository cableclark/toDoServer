<?php 
require "../bootstrap.php";
if (isset($_POST["new"])) {
        $task = htmlspecialchars($_POST["new"]);  
        $database->insert($task);
        header("Location: ../public/index.php");
    }
