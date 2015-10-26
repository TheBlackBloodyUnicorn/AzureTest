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
            <label>Forename</label><input type="text" name="forename">
            <label>Surname</label><input type="text" name="surname">
            <input type="radio" name="gender" value="male" > Male
            <input type="radio" name="gender" value="female"> Female
            <input type="checkbox" name="superpower" value="Fly"> fly<br>
            <input type="checkbox" name="superpower" value="fire"> fire<br>
            <input type="submit" value="Submit">
        </form>

        <?php
            // connect to your Azure server and select database (remember you connection details are all on the azure portal
            $db = new mysqli(
            "eu-cdbr-azure-west-c.cloudapp.net",
            "b02fc634d48153",
            "e7728b35",
            "db1508593"
            );
            // test if connection was established, and print any errors
            if($db->connect_errno){
             die('Connectfailed['.$db->connect_error.']');
            }

            $sql_query = "SELECT * FROM superheros?WHERE superpower LIKE '%laser%'";
            // execute the SQL query
            $result = $db->query($sql_query);

            while($row = $result->fetch_array()){
                echo "<p>" . $row['superheroName'] . "</p>";
            }

            $result->close();
            // close connection to database
            $db->close();



        ?>


    </body>

</htlm>