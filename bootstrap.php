<?php 

include ('../includes/header.php');
require "../database/DB.php";
require "../database/QueryBuilder.php";


$database = new QueryBuilder(DB::connection());


if (isset($_GET["id"])) {
        
        $id = htmlspecialchars($_GET["id"]);
        $database->delete($id);
        header("Location: index.php");
    }





