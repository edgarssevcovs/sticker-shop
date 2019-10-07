<?php
session_start();
include('config.php');

$user_id = $_SESSION['user']['id'];
$product_id = $_GET['id'];

            // Create connection
            $conn = new mysqli($host, $user, $pass, $db);

            // Check connection
            if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            } 
            $sql = "INSERT INTO cart (user_id, product_id) VALUES ('$user_id', '$product_id')";

            if (mysqli_query($conn, $sql)) {
                header('location: index.php');
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            $conn->close();
         
      ?>