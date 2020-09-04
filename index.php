<?php

/*
require_once  "model/ConectionMongoDB.php";
$user = 'ederPhp';
$password = '12345';
$ConectionDB = new ConectionMongoDB($user, $password);
if ($ConectionDB->verifyCredentials("eventsequor4@gmail.com", "123456")) {
    echo "insertado- existe";
} else {
    echo "Ya existe";
}*/


include_once 'model/UserSession.php';
include_once 'model/ConectionMongoDB.php';
$userDB = 'ederPhp';
$passwordDB = '12345';
$userSession = new UserSession();
$conectionDB = new ConectionMongoDB($userDB, $passwordDB);

if (isset($_SESSION['user'])) {
    //echo "hay sesion";
    if (!$conectionDB->verifyExistUser($userSession->getCurrentUser())) {
        $userSession->closeSession();
    }

    //$user->setUser($userSession->getCurrentUser());
    header("Location:view/home.php");
} else if (isset($_POST['email']) && isset($_POST['password'])) {

    $userForm = $_POST['email'];
    $passForm = $_POST['password'];
    if ($conectionDB->verifyCredentials($userForm, $passForm)) {
        $userSession->setCurrentUser($userForm);
        echo "login correcto";
        header("Location:view/home.php");
    } else {
        $salida = "?e=true";
        header("Location:view/login.php" . $salida);
    }

    //include_once 'view/login.php';
    /* if($user->userExists($userForm, $passForm)){
        //echo "Existe el usuario";
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);

        include_once 'vistas/home.php';
    }else{
        //echo "No existe el usuario";
        $errorLogin = "Nombre de usuario y/o password incorrecto";
        include_once 'vistas/login.php';
    }*/
} else {
    //echo "login";
    header("Location:view/home.php");
}
