<?php
require_once '../services/testConfig.php';
require_once '../services/testInfo.php';

class testHelper {


    public static function getUserInformation() {

        try{
            //doubled Line
            $userinfo = array();

            $db_users = testConfig::query('SELECT * FROM users');
            foreach ($db_users as $db_user) {
                $user_details = new userinformation($db_user->name, $db_user->username, $db_user->password,$db_user->usertype);
                array_push($userinfo, $user_details);
            }
    
            return $userinfo;
        
        }catch (PDOException $e){
            echo 'Error: '.$e->getMessage();
            exit();
        }
        
    }
}