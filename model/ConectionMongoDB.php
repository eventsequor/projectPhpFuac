<?php
require_once __DIR__ . "/../vendor/autoload.php";
class ConectionMongoDB
{
    private string $user;
    private string $password;
    private string $nameDefaultDB;
    private $conectorMoongoDB;
    private $collection;

    public function __construct(string $user, string $password)
    {
        $this->user = $user;
        $this->password = $password;
        $this->nameDefaultDB = "wordpress";
        $this->conectorMoongoDB = new MongoDB\Client(
            'mongodb+srv://' . $this->user . ':' . $this->password . '@cluster0.uiyar.mongodb.net/' . $this->nameDefaultDB . '?retryWrites=true&w=majority'
        );
        $db = $this->conectorMoongoDB->wordpress;
        $this->collection = $db->users;
    }

    public function findUser($userEmailFind)
    {
        try {
            $variable = $this->collection->findOne(array('userEmail' => $userEmailFind));
            $data = $variable->jsonSerialize();
            if ($data->userEmail == $userEmailFind) {
                return true;
            }
        } catch (\Throwable $th) {
            return false;
        }
    }

    public function updateUser()
    {
    }

    public function insertUser($userEmail, $password)
    {
        if (!$this->findUser($userEmail)) {
            $newUser = array(
                'userEmail' => $userEmail,
                'password' => password_hash($password, PASSWORD_DEFAULT, [25])
            );
            $this->collection->insertOne($newUser);
            return true;
        } else {
            return false;
        }
    }

    public function deleteUser()
    {
        /* $hash1 = password_hash($password, PASSWORD_DEFAULT, [25]);
        echo $hash1;
        echo "\n";
        if (password_verify($password, $hash1)) {
            echo "Password correcto";
        }*/
    }
}
