<html>
  <head>
    <meta http-equiv="refresh" content="15">
    <title></title>
  </head>
  <body>
    <?php


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

$query="SELECT * FROM chat ORDER BY timestamp DESC";
    $result = mysqli_query($con,$query);
    $i=1;
while (($row=mysqli_fetch_row($result))&&($i<=8)) {
  $i=$i+1;
  echo $row['3'].' says '.$row['1'].' at '.$row['2'].'<br/>';
}
mysqli_free_result($result);


    mysqli_close($con);


     ?>
  </body>
</html>
