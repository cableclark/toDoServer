<?php

class DB {

    public static function connection () {
        try {
            return new PDO ("mysql:host=127.0.0.1;dbname=ToDo;", "igor", "bigor");

        }
        catch (PDOException $e) {
            return $e->getMessage();
        }

    }
}