<form action="/quary12/?controller=pages&action=home" method="post">
    <label for="user">user: 
        <input id="user" class="loginBox" type="text" value="<?php echo $first_name ?>"/>
    </label>
    
    <br/>
    
    <label for="passwrd">password: 
        <input id="passwrd" class="loginBox" type="password" />
    </label>
    
    <br/>
    
    <button type="submit">Login</button>
</form>
