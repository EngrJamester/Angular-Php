<?php
require_once '../classes/DBConfig.php';
require_once '../classes/userinformation.php';

class DBHelper {

    public static function resetDB() {

      

    }

    public static function getUserInformation() {
        try{
            $userinfo = array();

            $db_users = DBConfig::query('SELECT * FROM users');
            foreach ($db_users as $db_user) {
                $user_details = new userinformation($db_user->name, $db_user->username, $db_user->password,$db_user->usertype);
                array_push($userinfo, $user_details);
            }
    
            return $userinfo;
        }catch (PDOException $pe){
            die("Could not connect to the database :" . $pe->getMessage());
        }
    }

 

}