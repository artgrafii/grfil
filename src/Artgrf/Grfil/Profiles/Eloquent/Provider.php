<?php

class Provider implements ProviderInterface {

    protected $model = 'Artgrf\Grfil\Profiles\Eloquent\Profile' ;

    public function __construct()
    {

    }

    public function create(array $profile)
    { 
        $profile = $this->createModel() ; 
        $profile->fill($profile) ; 
        $profile->save() ; 

        return $profile ; 
    }

    public function getEmptyProfile()
    {
        return $this->createModel() ; 
    } 

    public function getProfileByUserId($user_id)
    { 
        $model = $this->createModel() ; 

        $profile = $model->newQuery->where($model->) ; 

        if( ! $profile ) 
        { 
            throw new ProfileNotFoundException("Profile could not be found with a user_id") ; 
        }

        return $profile ; 
    }

    public function createModel()
    { 
        $class = '\\'.ltrim($this->model, '\\') ; 

        return new $class ; 
    }
}
