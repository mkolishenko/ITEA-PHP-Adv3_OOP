<?php
/**
 * Created by PhpStorm.
 * User: maksym
 * Date: 29.11.18
 * Time: 19:47
 */

class Person
{
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
}