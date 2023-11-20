<?php

class Users {
    private $username;
    private $email;
    private $password;
    public static $count = 0;

   function __construct($username, $email, $password)
   {
    $this->username = $username;
    $this->email = $email;
    $this->password = $password;
    self::$count++;
   }

   public function getPassword():string {
    return $this->password;
   }

   public function setPassword(string $password): void {
    $this->password = $password;
   }

   public function getUsername():string {
    return $this->username;
   }

   public function setUsername(string $username): void {
    $this->username = $username;
   }

   public function getEmail():string {
    return $this->email;
   }

   public function setEmail(string $email): void {
    $this->email = $email;
   }
}

$pera = new Users("Pera", "pera@mail.com", "12345");
$mika = new Users("Mika", "mika@mail", "9876");
$zika = new Users("Zika", "zika@mail", "5678");

print_r($pera);
print_r($mika);
print_r($zika);

echo users::$count;