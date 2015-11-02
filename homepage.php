<?php
/**
 * Created by PhpStorm.
 * User: 1508593
 * Date: 02/11/2015
 * Time: 13:29
 */
if (isset($_COOKIE['name'])) {
    echo "You are " . $_COOKIE['name'];
}
if (isset($_COOKIE['access_level'])) {
    displayAccessLevelInformation($_COOKIE['access_level']);
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