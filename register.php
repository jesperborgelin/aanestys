<?php
require "config/config.php";
require "config/db.php";
$_SESSION['message'] = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if ($_POST['password'] == $_POST['c_password']) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$password = mysqli_real_escape_string($conn, $_POST['password']); //md5

    $_SESSION['username'] =  $username;
    $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    //If succesful
    if(mysqli_query($conn, $query)) {
    $_SESSION['message'] = "Rekisteröiminen onnistui";
    header("location: welcome.php");
    }
    else {
      $_SESSION['message'] = "Rekisteröityminen epäonnistui";
    }
  }
  else {
    $_SESSION['message'] = "Salasanat eivät täsmää";
  }
}



 ?>

<?php include "inc/header.php" ?>
     <title></title>
   </head>
   <body>
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
     <div class="container">
       <h1>Rekisteröidy</h1>
     <form class="form" action="register.php" method="post">
       <div class="form-group">
          <div class="alert alert-error"><?= $_SESSION['message'] ?></div>
       				<label>Käyttäjätunnus</label>
       				<input type="text" name="username" class="form-control" required>
       			</div>
       			<div class="form-group">
       				<label>Sähköposti</label>
       				<input type="text" name="email" class="form-control" required>
       			</div>
       			<div class="form-group">
       				<label>Salasana</label>
       				<input type="password" name="password" class="form-control" required>
       			</div>
            <div class="form-group">
              <label>Vahvista salasana</label>
              <input type="password" name="c_password" class="form-control" required>
            </div>
       			<input type="submit" name="submit" value="Rekisteröidy" class="btn btn-primary">
       		</form>
       	</div>
     </form>
     </div>
   </body>
 </html>
