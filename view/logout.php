<?php
include_once '../model/UserSession.php';
$userSession = new UserSession();
$userSession->closeSession();

header("Location: home.php");
