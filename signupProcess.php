<?php 

if(isset($_POST['save'])){
    require_once("signupConfig.php");
    $sc = new signupConfig();
    $sc->setFirstName($_POST['firstname']);
    $sc->setLastName($_POST['lastname']);
    $sc->setAddress($_POST['address']);
    $sc->insertData();
};

?>