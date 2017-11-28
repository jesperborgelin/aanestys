<?php
session_start();


?>


<?php include "inc/header.php"?>
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
  </head>
  <body>
      <?php if (isset($_SESSION['username'])): ?>
    <div class="container">

    <div class="well">
      <div class="alert alert-success"><?= $_SESSION['message'] ?></div>
      <h1>Tervetuloa, <?= $_SESSION['username']; ?> </h1>
      <h2>Haluatko lisätä uuden äänestyksen?</h2>
      <a class="btn btn-primary" href="lisaa.php">Lisää äänestys</a>
      <a class="btn btn-primary" href="index.php">Katso muita äänestyksiä</a>
        </div>
    </div>
  <?php else: ?>
    <h1>Et ole kirjautunut sisään</h1>
<?php endif; ?>
  </body>
</html>
