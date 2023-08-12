<?php
    include_once("dbconnection.php");

    $email=$_POST['email'];
    $p_number=$_POST['p_number'];
    $title=$_POST['title'];
    $description=$_POST['description'];
    $image=$_POST['image'];
    $id=rand();

    //database connection

    $sql = "insert into projects values ('$id', '$email', '$p_number', '$title', '$description', '$image')";
   
    if($conn->query($sql)===TRUE){
        echo "Registration Successfully...";
        sleep(5);
        header("Location:portfolioindex.html");
        die();
    }
    else{
        echo "Error inserting data";
    } 
    $conn->close();
?>