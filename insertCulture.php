<?php

    require_once 'myconnect.php';

    $Culture_Name = $_REQUEST['Culture_NameText'];
    $image = $_REQUEST['imageText'];


    $sql = "INSERT INTO Culture (Culture_Name, Image) VALUES ('$Culture_Name', '$image')";

    echo $sql;
    if($conn->query($sql) === TRUE){
        echo "New record created successfully";
    }
    else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    header("Refresh:1; url=culture.php");

?>