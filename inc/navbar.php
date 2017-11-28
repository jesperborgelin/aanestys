<nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <a class="navbar-brand" href="<?php echo ROOT_URL; ?>">Äänestyssovellus</a>
      </button>
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <?php if (isset($_SESSION['username'])): ?>
            <a href="logout.php" class="btn btn-primary">Kirjaudu ulos</a>
            <a style="color:white">Kirjauduttu sisään nimellä : <?php echo $_SESSION['username']; ?></a>
            <?php else: ?>
            <a href="register.php" class="btn btn-primary">Rekisteröidy</a>
            <a href="login.php" class="btn btn-primary">Kirjaudu sisään</a>
            <?php endif; ?>
          </li>
        </ul>
      </div>
    </nav>
