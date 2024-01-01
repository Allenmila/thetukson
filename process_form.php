<?php
//establish database connection
    $conn = new mysqli("localhost", "root","","customers");
//checking connection
    if($conn->connect_error){
        die("connection failed:" .$conn->connect_error);
    }
    //retriving form data
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $department = $_POST['department'];
    $package = $_POST['package'];
    $dae = $_POST['dae'];
    $dates = $_POST['dates'];
   
    //inserting data into database
    $sql = "INSERT INTO booking (fullName,email,phone,department,package,dae,dates) VALUES ('$fullName','$email','$phone','$department','$package','$dae','$dates')";

    if($conn->query($sql)===TRUE){
        echo "Record inserted successfully";
    } else {
        echo "Error: " .$sql ."<br>" .$conn->error;
    }

    $conn->close();
?>