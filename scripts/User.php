<?php

namespace user;


class User {
    
    protected $firstname;
    protected $lastname;
    protected $userid;
    protected $username;

    public function getFirstname() {
        return $this->firstname;
    }

    public function getLastname() {
        return $this->lastname;
    }

    public function getUserid() {
        return $this->userid;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setFirstname($firstname) {
        $this->firstname = $firstname;
    }

    public function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    public function setUserid($userid) {
        $this->userid = $userid;
    }

    public function setUsername($username) {
        $this->username = $username;
    }    
}
