<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home</title>
  <link rel="stylesheet" href="main.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
    <body class="whole">
        <div class="row main">
            <header>
                <a href="/quary12/?controller=pages&action=home">
                    <h1>Front Page</h1>
                </a>
            </header>

          <article class="col-md-8 col-lg-8 body">
            <section>
              <?php 
                    require'routes.php';
              ?>
            </section>
          </article>

          <article class="col-md-4 col-lg-4 user">
              <ul >
                  <li><a href="/quary12/?controller=pages&action=home">Home</a></li>
                  <li><a href="/quary12/?controller=pages&action=notes">Notes</a></li>
                  <?php 
                    if($_SESSION['logged']){
                        echo '<li><a class="Lside col-md-6 col-lg-6" href="/quary12/?controller=pages&action=login">Login</a>';
                        echo '<a class="Rside col-md-6 col-lg-6" href="/quary12/?controller=pages&action=logout">Log out</li></a>';
                    } else{
                        echo '<li><a href="/quary12/?controller=pages&action=login">Login</a></li>';
                    }
                  ?>
                  
                  <li><a href="/quary12/?controller=pages&action=signUp">Sign up</a></li>
              </ul>
          </article>
        </div>
    <footer>Made by Reed/Totalwar235 in 2016</footer>
    </body>
</html>
