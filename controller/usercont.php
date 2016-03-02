<?php
include("../model/usersdb.php");

if($_POST['method'] == "create"){
    createUser();
}

if($_POST['method'] == "getUser"){
    readUser();   
}

if($_POST['method'] == "delete"){
    deleteUser();   
}

if($_POST['method'] == "update"){
    updateUser();   
}

if($_POST['method'] == "login"){
    getId();
}
//deleteUser();
//updateUser();

?>