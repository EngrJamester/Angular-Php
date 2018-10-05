<?php
    
    class DBConfig {


        private static $DB_SERVER_PDO = 'mysql:host=localhost;dbname=dbtest';
        private static $DB_USERNAME = 'root';
        private static $DB_PASSWORD = 'root';

        private static $db = null;


        protected static function connect() {
            self::$db = new PDO( self::$DB_SERVER_PDO, self::$DB_USERNAME, self::$DB_PASSWORD);
        }

        public static function query($sql){
            $statement = self::execute($sql);
            return $statement->fetchAll(PDO::FETCH_CLASS);
        }

        public static function execute($sql) {
            if (self::$db === null) {
                self::connect();
            }
            $statement = self::$db->prepare($sql);
            $statement->execute();
            return $statement;
        }
       
    }
