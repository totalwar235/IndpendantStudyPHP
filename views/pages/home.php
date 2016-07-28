
<p>Hello there <?php 
                    if(!$_SESSION['logged']){
                        echo 'login please...';
                    } else {
                        echo  $_SESSION['userName'];
                    }
                ?>
!</p>

<p>You successfully landed on the home page. Congrats!</p>

<p>this is made in HTML5, CSS/Bootstrap, Javascript and PHP</p>