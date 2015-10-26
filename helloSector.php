<!DOCTYPE html>
<htlm>
    <head>
    </head>

    <body>


        <?php
        $query = $_GET['query'];
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

            switch($query){
                case "before2010":
                    $sql_query = "SELECT * FROM marvelMovies? WHERE yearReleased < 2010";
                    echo "test";
                    break;
                case "after2010":
                    $sql_query = "SELECT * FROM marvelMovies? WHERE yearReleased > 2010";
                    break;
                case "oscar":
                    $sql_query = "SELECT * FROM marvelMovies? WHERE notes LIKE '%oscar%'";
                    break;
                case "marvelstudio":
                    $sql_query = "SELECT * FROM marvelMovies? WHERE productionStudio = 'Marvel Studio'";
                    break;

            }

            // execute the SQL query
            $result = $db->query($sql_query);

            while($row = $result->fetch_array()){
                echo "<p>" . $row['title'] . "</p>";
            }

            $result->close();
            // close connection to database
            $db->close();



        ?>


    </body>

</htlm>