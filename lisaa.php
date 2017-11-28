<?php
require "config/config.php";
require "config/db.php";
session_start();


$aanestyksetTBL = 'aanestykset';
$aanestyspisteetTBL = 'aanestys_pisteet';
$aanestys_vaihtoehdotTBL = 'aanestys_vaihtoehdot';





 ?>
<?php include "inc/header.php"; ?>
   </head>
   <body>
     <?php if (isset($_SESSION['username'])): ?>
       <div class="container">
         <h1>Lisää äänestys</h1>

         <form class="form" action="lisaa.php" method="post">
           <div class="form-group">
              <label>Äänestyksen aihe</label>
              <input type="text" name="nimi" class="form-control" required>
               </div>
             <div class="form-group">
               <h1>Vaihtoehdot</h1>
               <br>
                <label>Vaihtoehto 1</label>
                 <input class="form-control" name="vaiht1" type="text">
                 <br>
                 <label>Vaihtoehto 2</label>
                  <input class="form-control" name="vaiht2" type="text">
                  <br>
                 <input class="btn btn-primary" type="button" name="" value="Lisää vaihtoehtoja">

         </form>
       </div>
     <?php endif; ?>
   </body>
 </html>
