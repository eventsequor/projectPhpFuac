<?php
require_once  "model/ConectionMongoDB.php";
$user='ederPhp';
$password = '12345';
$ConectionDB = new ConectionMongoDB($user,$password);
if($ConectionDB->insertUser("eventsequor7@gmail.com","12345")==true){
    echo "insertado";
}else{
    echo "Ya existe";
}

/*
include_once 'model/UserSession.php';


$userSession = new UserSession();

if(isset($_SESSION['user'])){
    //echo "hay sesion";
    $user->setUser($userSession->getCurrentUser());
    include_once 'view/home.php';

}else if(isset($_POST['email']) && isset($_POST['password'])){
    
    $userForm = $_POST['email'];
    $passForm = $_POST['password'];
    $loginError = false;
    include_once 'view/login.php';
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

/*
}else{
    //echo "login";
    include_once 'view/home.php';
}
*/