<?php
include("../model/itemdb.php");


if($_POST['method'] == "update"){
    update_item();
    
}

if($_POST['method'] == "create"){
    create_item();
    
}

if($_POST['method'] == "read"){
    read_item();
    
}

?>