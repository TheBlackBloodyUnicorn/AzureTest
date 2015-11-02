<!DOCTYPE html>
<htlm>
    <head>
    </head>

    <body>

    <?php

    $username = "Mike";
    $password = "mysecretpassword";

    ?>

    <form method="post" action="homepage.php">
        <?php
        echo '
        <p><input type="text" name="login" value="'.$username.'" placeholder="Username or Email"></p>
        <p><input type="password" name="password" value="'.$password.'" placeholder="Password"></p>
        <p class="remember_me">
            <label>
                <input type="checkbox" name="remember_me" id="remember_me">
                Remember me on this computer
            </label>
        </p>
        <p class="submit"><input type="submit" name="commit" value="Login"></p>'
        ?>
    </form>

        <?php
        setcookie('name',$username);
        setcookie('access_level','standarduser');
        ?>


    </body>

</htlm>