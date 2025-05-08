<?php

    require_once 'myconnect.php';
    // here the code get the unique id passed to the page via the URL.
    $id = isset($_GET{ 'id'}) ? $_GET{ 'id'} : 'No ID provided ';
    //Now the query returns the record of the culture with the Culture_ID = id
   $sql = "DELETE FROM culture where Culture_ID = " . $id;

     
    if($conn->query($sql) === TRUE){
        echo "Record deleted successfully";
    }
    else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    header("Refresh:1; url=culture.php");

?>