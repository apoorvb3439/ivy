<?php
session_start();
if(isset($_SESSION['message'])){
echo 'newmessage !!!';

    $servername = "mysql.hostinger.in";
    $username_s = "u314438850_chat";
    $password = "8mgOTG30zVmU";
    $dbname = "u314438850_chat";

    // Create connection
    $con = mysqli_connect($servername, $username_s, $password, $dbname);
    if (!$con)
      {
      die('Could not connect: ' . mysqli_connect_error());
      }

      $message=mysqli_real_escape_string($con,$_SESSION['message']);
      $username=mysqli_real_escape_string($con,$_SESSION['username']);

      $sql = "INSERT INTO chat (message, username)
      VALUES ('$message', '$username')";

      if (mysqli_query($con, $sql)) {
          echo "New record created successfully";
      } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($con);
      }

      mysqli_close($con);
}

?>
