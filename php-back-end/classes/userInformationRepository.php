<?php

require_once '../classes/DBHelper.php';

class userInformationRepository {


    public static function getUserInformation() {
        
        return DBHelper::getUserInformation();
    }

    
}