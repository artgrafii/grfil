<?php

interface ProviderInterface {
    
    public function create(array $profile) ; 

    public function update(array $profile) ; 

    public function getProfile($user_key) ;  

}
