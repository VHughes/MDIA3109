<?php
    //echo "YOU've FOUND ME";
    var_dump($_POST);
    var_dump($_FILES);
    
    //if the directory doesn't exist
    if(!is_dir("../profpics/".$_POST['userid'])){
        mkdir("../profpics/".$_POST['userid'], 0755);
    }

    $filename = substr(md5(rand()), 0, 20);
    move_uploaded_file($_FILES["images"]["tmp_name"][0], "../profpics/".$_POST['userid']."avatar.jpg");


    include("../model/msgdb.php");
    //do the database
?>