<?php
include("../model/dbconnector.php");

function update_item(){
    global $db;

    $query = "INSERT INTO item (title, description) VALUES ('".$_POST['title']."', '".$_POST['description']."')";
    $result = $db->query($query);
}

function create_item(){
    global $db;

    $query = "INSERT INTO item (title, description, img) VALUES ('".$_POST['title']."', '".$_POST['desc']."', '".$_POST['img']."')";
    $result = $db->query($query);
}

function read_item(){
    global $db;

    $query = "SELECT * FROM item";
    $result = $db->query($query);
    echo json_encode($result->fetchAll());
//    echo "<table>";
//
//while ($row_users = $result->fetchAll()) {
//    //output a row here
//    echo "<tr><td>".($row_users['title'])."</td></tr>";
//}

//echo "</table>";

}
?>