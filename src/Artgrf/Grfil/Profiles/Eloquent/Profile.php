<?php

class Profile extends Model implements ProfileInterface {
    
    protected $table = 'profiles' ; 

    public function getId() 
    {
        return $this->getKey() ; 
    } 

    public function get()
    { 
        return $this ; 
    }

    public function getProfileImage()
    { 
        return $this->profile_image ; 
    }

    public function save(array $options = array())
    {
        $this->validate() ; 

        return parent::save($options) ; 
    } 
}
