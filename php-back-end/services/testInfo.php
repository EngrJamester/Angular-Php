<?php
    class userinformation {

        public $name;
        public $username;
        public $password;
        public $usertype;

        public function __construct($name = '', $username = '', $password = '',$usertype ='') {
            $this->name = $name;
            $this->username = $username;
            $this->password = $password;
            $this->usertype = $usertype;
        }
    }
?>