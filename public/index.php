<?php 

require "../bootstrap.php";

$tasks= $database->selectAll("task");
    
require '../views/index.view.php';
   