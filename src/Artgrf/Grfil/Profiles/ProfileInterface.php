<?php

interface ProfileInterface { 
    public function getId() ; 
    public function save() ; 
    public function getProfileImage() ; 
    public function get($key) ; 
}
