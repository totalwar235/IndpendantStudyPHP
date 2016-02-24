<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home</title>
  <script src="nav.js"></script>
  <link rel="stylesheet" href="main.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
    <body class="whole">
        <div class="row main">
            <header>
                <a href="/quary12/">
                    <h1>Front Page</h1>
                </a>
            </header>

          <article>
              <section>
                  <?php echo 'php works' ?>
              </section>
          </article>

          <article class="col-md-8 col-lg-8 body">
            <section>
              <?php 
                    require'routes.php';
              ?>
            </section>
          </article>

          <article class="col-md-4 col-lg-4 user">
              <?php
                    if($user == null){
                        require 'views/pages/login.php';
                    }else{
                        require 'views/pages/account.php';
                    }
              ?>
              <!--<a href="?controller=pages&action=login"></a>-->
          </article>
        </div>
    <footer>Made by Reed/Totalwar235 in 2016</footer>
    </body>
</html>
