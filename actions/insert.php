<?php
    include_once("connection.php");
  
    $sql = "INSERT INTO db_bookings (name, contact,email) VALUES ('$name', '$email', '$contact')";
    if (mysqli_query($conn, $sql)) {
        
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>