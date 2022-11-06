<?php

require_once("signupConfig.php");

$record = new signupConfig();

if(isset($_GET['id'], $_GET["req"])){
    if($_GET['req'] == "delete"){
        $record->setId($_GET['id']);
        $record->delete();
    }
}

?>