<?php
require "config/config.php";
require "config/db.php";
  session_start();
$_SESSION['message'] = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$username =  $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $query);
if (!$row = $result->fetch_assoc()) {
  echo "Käyttäjänimi tai salasana on väärin!";
} else {
  $_SESSION['message'] = 'Kirjauduttu sisään';
  $_SESSION['username'] = $username;

  header("location: welcome.php");
}
}
?>

<style>
.alert {
-moz-box-sizing: border-box;
box-sizing: border-box;
padding: 4px 20px 4px 20px;
font-size: 13px;
line-height: 20px;
margin-bottom: 20px;
text-shadow: none;
position: relative;
background-color: #272e3b;
color: rgba(255, 255, 255, 0.7);
border: 1px solid #000;
box-shadow: 0 0 0 1px #363d49 inset, 0 5px 10px rgba(0, 0, 0, 0.75);
}
.alert-error {
color: #f00;
background-color: #360e10;
box-shadow: 0 0 0 1px #551e21 inset, 0 5px 10px rgba(0, 0, 0, 0.75);
}
.alert:empty{
display: none;
}
.alert-success {
color: #21ec0c;
background-color: #15360e;
box-shadow: 0 0 0 1px #2a551e inset, 0 5px 10px rgba(0, 0, 0, 0.75);
}
</style>
<?php include "inc/header.php" ?>
  </head>
  <body>
    <div class="container">
    <form class="form" action="login.php" method="post">
      <div class="form-group">
        <div class="alert alert-error"><?= $_SESSION['message'] ?></div>
         <label>Käyttäjätunnus</label>
         <input type="text" name="username" class="form-control" required>
          </div>
        <div class="form-group">
          <label>Salasana</label>
            <input type="password" name="password" class="form-control" required>
            </div>
            <input type="submit" class="btn btn-primary" name="submit" value="Kirjaudu">
            </form>
      </div>
  </body>
</html>
