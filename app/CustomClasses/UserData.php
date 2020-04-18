<?php


namespace App\CustomClasses;



class UserData
{
    public $name, $age, $email, $gender, $profile, $degree,$sport,$show,$social,$role = "";

    public function __construct()
    {
        $this->name = request('name');

        $this->age = request('age');

        $this->email = request('email');

        $this->gender = request('gender');

        $this->profile = request()->file('fileToUpload')->store('public/images');

        $this->degree = request('degree');

        $this->sport = request('fsport');

        $this->show  = request('fshow');

        $this->social = request('ss');

        $this->role = request('role');
    }
    
    public function SocialUsage()
    {
        return round(count($this->social)/6*100,2);
    }
}
