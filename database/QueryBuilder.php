<?php 

class QueryBuilder
{
    protected $pdo;

    public function __construct ($pdo) {

        $this->pdo = $pdo;
    }


    public function selectAll ($table) {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }   

    public function delete ($id) {
        $statement = $this->pdo->prepare("Delete from task where id ={$id}");
        $statement->execute();
    }  

    public function insert ($task) {
        $statement = $this->pdo->prepare('INSERT INTO `task` (`task`) values (:task);');

        $statement->bindValue(':task', $task);
        $inserted = $statement->execute();
    } 
    
}

   
   
