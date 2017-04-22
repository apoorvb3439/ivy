<!DOCTYPE html>
<html lang="en">
<head>
  <title> IVY </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="jumbotron text-center">
    <h1>Build A Community</h1>
    <p>Find the solutions for Real World Problems</p>
  </div>

<div class="container">
  <h2>Chat with Your Buddies in Real Time</h2>
  <form method="POST" action="chatroom.php">
    <div class="form-group">
      <label for="Name">Name:</label>
      <input type="text" name="username" class="form-control" id="text" placeholder="Enter Name">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
  </form>
</div>

<!-- FOOTER -->
<footer>
  <p class="float-right"><a href="#">Back to top</a></p>
  <p>&copy; 2017 Made by Apoorv &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
</footer>

</body>
</html>
