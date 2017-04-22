<html>
  <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Let's Discuss</title>
    <link rel="stylesheet" href="main.css">
      </head>


  <body id="b">




<div class="jumbotron text-center" id="jumbo">
  <h1>Build A Community</h1>
  <p>Find the solutions for Real World Problems</p>
</div>

  <div class="container" id="wraper">
   <div class="row">


     <div class="col-sm-6">
       <h3>New Message</h3>
       <p>

         <div id='newmessage'>

           <?php
           session_start();
           if(isset($_POST['username'])){
             $_SESSION['username']= $_POST['username'];
            }

           if(isset($_POST['message'])){
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

                 $message=mysqli_real_escape_string($con,$_POST['message']);
                 $username=mysqli_real_escape_string($con,$_SESSION['username']);

                 $sql = "INSERT INTO chat (message, username)
                 VALUES ('$message', '$username')";

                 if (mysqli_query($con, $sql)) {
                     echo 'Message Sent ! '.'<br/>'.'You said : '.$_POST['message'];
                 } else {
                     echo "Error: " . $sql . "<br>" . mysqli_error($con);
                 }

                 mysqli_close($con);
               }

            ?>
            <form action="#" method="POST">
              <div id="divform" class="form-group">

                <label id="Chathere" for="comment">Chat here : </label>
                <textarea name="message" class="form-control" rows="5" id="comment"></textarea>
                <button type="submit" id="butt" class="btn btn-success">Submit</button>
              </div>
            </form>
          </div>
        </p>



     </div>


    <div class="col-sm-6">
      <h3>Messages</h3>
      <p>

        <div id='messages'>
          <?php
          include 'messages.php';
          ?>
        </div>
      </p>
    </div>


  </div>
</div>


<!-- FOOTER -->
<footer id="foot">
  <p><a href="#">Back to top</a></p>
  <p>&copy; 2017 Made by Apoorv &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
</footer>

  </body>
</html>
