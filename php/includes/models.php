<?php

    Class User {
        private $username;
        private $password;

        public function __construct($u, $p) {
            $this->username = $u;
            $this->password = $p;
        }

        public function getUsername() {
            return $this->username;
        }

        public function getPassword() {
            return $this->password;
        }

        public function setUsername($u) {
            $this->username = $u;
        }

        public function setPassword($p) {
            $this->password = $p;
        }

    }

    Class Article {

        private $id;
        private $date_time;
        private $title;
        private $desc;
        private $body;
        private $image;

        public function __construct($i, $dt, $t_en, $t_ukr, $d_en, $d_ukr, $b_en, $b_ukr) {
            $this->id = $i;
            $this->date_time = $dt;
            
            $this->title = array("en" => $t_en, "ua" => $t_ukr);
            $this->desc = array("en" => $d_en, "ua" => $d_ukr);
            $this->body = array("en" => $b_en, "ua" => $b_ukr);
            $image = NULL;
        }

        public function getId() {
            return $this->id;
        }
        public function getDateTime() {
            return $this->date_time;
        }
        public function getTitleEN() {
            return $this->title["en"];
        }
        public function getTitleUA() {
            return $this->title["ua"];
        }
        public function getDescEN() {
            return $this->desc["en"];
        }
        public function getDescUA() {
            return $this->desc["ua"];
        }
        public function getBodyEN() {
            return $this->body["en"];
        }
        public function getBodyUA() {
            return $this->body["ua"];
        }


        public function setId($id) {
            $this->id = $id;
        }
        public function setDateTime($date_time) {
            $this->date_time = $date_time;
        }
        public function setTitleEN($title) {
            $this->title["en"] = $title;
        }
        public function setTitleUA($title) {
            $this->title["ua"] = $title;
        }
        public function setDescEN($desc) {
            $this->desc["en"] = $desc;
        }
        public function setDescUA($desc) {
            $this->desc["ua"] = $desc;
        }
        public function setBodyEN($body) {
            $this->body["en"] = $body;
        }
        public function setBodyUA($body) {
            $this->body["ua"] = $body;
        }
    }

    class Project {
        
        private $name;

        public function __construct($n_en, $n_ua) {
            $this->name = array("en" => $n_en, "ua" => $n_ua);
        }

        public function getNameEN() {
            return $this->name["en"];
        }

        public function getNameUA() {
            return $this->name["ua"];
        }

        public function setNameEN($n) {
            $this->name["en"] = $n;
        }

        public function setNameUA($n) {
            $this->name["ua"] = $n;
        }
        
    }

    class Note {
        private $date_time;
        private $body;

        public function __construct($dt, $b_en, $b_ua) {
            $this->date_time = $dt;
            $this->body = array("en" => $b_en, "ua" => $b_ua);
        } 


        public function getDateTime() {
            return $this->date_time;
        } 

        public function getBodyEN() {
            return $this->body["en"];
        } 

        public function getBodyUA() {
            return $this->body["ua"];
        } 

        public function setDateTime($dt) {
            $this->date_time = $dt;
        } 

        public function setBodyEN($b) {
            $this->body["en"] = $b;
        } 

        public function setBodyUA($b) {
            $this->body["ua"] = $b;
        } 
    }
?>