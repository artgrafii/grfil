<?php namespace Artgrf\Grfil ; 

class Grfil { 
    protected $profileProvider = null ; 

    public function __construct(
        ProfileProviderInterface $profileProvider = null
    )
    { 
        $this->profileProvider = $profileProvider ? : new ProfileProvider ; 
    }

    public function create(array $profile)
    {
        $profile = $this->profileProvider->create($profile) ; 

        return $this->profile = $profile ; 
    }

    public function update(array $profile)
    {

    } 

    public function getProfile()
    {

    }
}
