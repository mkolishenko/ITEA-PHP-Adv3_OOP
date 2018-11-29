<?php
/**
 * Created by PhpStorm.
 * User: maksym
 * Date: 29.11.18
 * Time: 19:47
 */

class Person
{

    const MAX_POSSIBLE_AGE = 50;

    private $username;
    private $email;
    private $age;



    public function __construct($username, $email)
    {
        $this->username = $username;
        $this->email = $email;
    }


    public function getUsername()
    {
        return $this->username;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        if ($age > self::MAX_POSSIBLE_AGE)
        {
            echo "Cannot create person with provided age".$age;
            return;
        }
        $this->age = $age;
    }


}