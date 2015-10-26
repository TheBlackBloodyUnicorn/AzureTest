<!DOCTYPE html>
<htlm>
    <head>
    </head>

    <body>
        <p>Where do you want to say hello ?</p>
        <p><a href="http://blackunicorn.azurewebsites.net/helloPrinter.php?query=Mars">Mars</a></p>
        <p><a href="http://blackunicorn.azurewebsites.net/helloPrinter.php?query=Earth">Earth</a></p>
        <p><a href="http://blackunicorn.azurewebsites.net/helloPrinter.php?query=Uranus">Uranus</a></p>

        <form action="helloPrinter.php" method="post">
            <label>Forename</label><input type=“text” name=“forename”>
            <label>Surname</label><input type=“text” name=“surname”>
            <input type="radio" name="gender" value="male" checked> Male
            <input type="radio" name="gender" value="female"> Female
            <input type="checkbox" name="superpower" value="Fly"> I have a bike<br>
            <input type="checkbox" name="superpower" value="fire"> I have a car<br>
            <input type="submit" value="Submit">
        </form>

        <?php



    ?>

    </body>

</htlm>