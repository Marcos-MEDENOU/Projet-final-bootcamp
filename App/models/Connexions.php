<?php
    namespace App\Models;

    class Connexions {
        public function connect() {
            /**
             * $DB_HOST 
             */
            $DB_HOST = "localhost";
            /**
             * $DB_NAME
             */

            $DB_NAME = "electrobest_project";
            /**
             * $USERNAME
             */
            $USERNAME = "root";
            /**
             * $PASSWORD
             */
            $PASSWORD = "";
            $dsn = "mysql:host=$DB_HOST;dbname=$DB_NAME;charset=utf8mb4";
            try {
                /**
                 * Connect to database
                 */
                $conn = new \PDO($dsn, $USERNAME, $PASSWORD);
                return $conn;
            }catch(\PDOException $e) {
                die('Erreur connexion:'.$e->getMessage());
            }
        }
}
?>
