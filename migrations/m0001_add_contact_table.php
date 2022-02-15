<?php


class m0001_initial{

     public function up(){
        $db = \app\core\Application::$app->db;
        $SQL = "CREATE TABLE contacts (
                id INT AUTO_INCREMENT PRIMARY KEY,
                email VARCHAR(255) NOT NULL,
                subject VARCHAR(255) NOT NULL,
                body VARCHAR(255) NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )  ENGINE=INNODB;";
        $db->pdo->exec($SQL);
     }

     public function down(){
         $db = \app\core\Application::$app->db;
         $SQL = "DROP TABLE users";
         $db->pdo->exec($SQL);
     }
}