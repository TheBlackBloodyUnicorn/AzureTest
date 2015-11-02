<?php
session_start();
/**
 * Created by PhpStorm.
 * User: 1508593
 * Date: 02/11/2015
 * Time: 13:29
 */
if (isset($_SESSION['name'])) {
    echo "You are " . $_SESSION['name'];
}
if (isset($_SESSION['access_level'])) {
    displayAccessLevelInformation($_SESSION['access_level']);
}


function displayAccessLevelInformation($accessLevel) {
    if ($accessLevel == "standarduser") {
        echo "<p>You are currently logged in as a standard user</p>";
    }
elseif ($accessLevel == "root") {
        echo "<p>You are currently logged in as a root user</p>";
        echo "<p>You now have access to additional administrative features</p>";
    }
}