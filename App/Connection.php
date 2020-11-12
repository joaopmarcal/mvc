<?php

  namespace App;

  class Connection {

    public static function getDb(){
      try {

        $conn = new \PDO(
          "mysql:dbname=mvc;host=127.0.0.1:3308;charset=utf8",
          "root",
          ""
        );

        return $conn;

      } catch (\PDOException $e) {
        //tratar de alguma forma
      }
    }

  }

?>