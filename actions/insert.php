<?php
    include_once("connection.php");
    $name = $_POST['username'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    //INSERT INTO `db_bookings` (`id`, `name`, `contact`, `email`, `date`, `time`) VALUES (NULL, 'prashant', '9810022992', 'pras@gmail.com', '2022-03-21', '19:00:00');
  
    $sql = "INSERT INTO db_bookings (id, name, contact, email, date, time) VALUES (NULL, '$name', '$number', '$email', '$date', '$time')";
    if (mysqli_query($conn, $sql)) {
        
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>