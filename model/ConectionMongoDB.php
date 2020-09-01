<?php
require_once __DIR__ . "/../vendor/autoload.php";
class ConectionMongoDB
{
    private string $user;
    private string $password;
    private string $nameDefaultDB;
    private $conectorMoongoDB;

    public function __construct(string $user, string $password)
    {
        $this->user = $user;
        $this->password = $password;
        $this->nameDefaultDB = "users";
        $this->conectorMoongoDB = new MongoDB\Client(
            'mongodb+srv://' . $this->user . ':' . $this->password . '@cluster0.uiyar.mongodb.net/' . $this->nameDefaultDB . '?retryWrites=true&w=majority'
        );
    }

    public function findUser(){
        

        //seleccionar
        $db = $this->conectorMoongoDB->wordpress;

        $coleccion = $db->createCollection("mi_coleccion");

        echo "Coleccion Creada Exitosamente";
        echo "<h1>Listo</h1>";
    }

    public function updateUser(){

    }

    public function insertUser(){

    }

    public function deleteUser(){

    }
}
