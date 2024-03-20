<?php

require_once("./utils/next_id.php");

class User
{
    private $id;
    private $name;
    private $email;
    private $password;
    private $active;

    public function __construct($nameP, $emailP, $passwordP, $active = true)
    {
        $this->id = createId();
        $this->name = $nameP;
        $this->email = $emailP;
        $this->password = $passwordP;
        $this->active = $active;
    }

    public function add($userData)
    {
        array_push($userData, $this);
        return $userData;
    }

    public function update()
    {
    }

    public function show($idP)
    {
    }

    public function delete($idP)
    {
    }

    public static function list($userData)
    {
        echo "Lista de usuários<br><hr>";
        foreach ($userData as $value) {
            echo "Nome: " . $value->name . "<br>";
            echo "E-mail: " . $value->email . "<br>";
            echo $value->active ? "Status: Ativo!" : "Status: Inativo!" . "<br>";
            echo "<br><hr>";
        }
    }
}
