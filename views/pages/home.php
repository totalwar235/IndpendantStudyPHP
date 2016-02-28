
<p>Hello there <?php 
                    if($curUser == null){
                        echo $first_name . ' ' . $last_name;
                    } else {
                        echo  $curUser.getUserName();
                    }
                ?>
!</p>

<p>You successfully landed on the home page. Congrats!</p>

<p>This website is a attempt to recreate steam</p>

<p>this is made in HTML5, CSS/Bootstrap, Javascript and PHP</p>