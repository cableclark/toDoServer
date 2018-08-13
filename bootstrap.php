<?php 

include ('../includes/header.php');
require "../database/DB.php";
require "../controller/TaskController.php";

$config = require "../config.php";

$conn = new PDO ("mysql:host=127.0.0.1;dbname=ToDo;", "igor", "bigor");

$stmt = $conn->query("SELECT * FROM task");

while ($row = $stmt->fetch()) {
    echo $row['task']."<br />\n";
}



// $pdo = new PDO ("mysql:host=127.0.0.1;dbname=ToDo;", "igor", "bigor");
// $sql = "SELECT * FROM ToDo.task"; 

// foreach ($pdo->query($sql) as $red ) {
//     echo $red['task'];
// } 


// print_r($pdo);

// foreach ($data as $row) {
//     echo $row['task']."<br />\n";
// }