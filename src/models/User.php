<?php

class User
{
    private $email;
    private $password;
    private $user_name;
    private $name;
    private $surname;

    public function __construct(string $email, string $password, string $user_name, string $name, string $surname)
    {
        $this->email = $email;
        $this->password = $password;
        $this->user_name = $user_name;
        $this->name = $name;
        $this->surname = $surname;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    public function getUserName(): string
    {
        return $this->user_name;
    }

    public function setUserName(string $user_name)
    {
        $this->user_name = $user_name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function setSurname(string $surname)
    {
        $this->surname = $surname;
    }
}