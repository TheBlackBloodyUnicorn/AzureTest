<?php
/**
 * Created by PhpStorm.
 * User: 1508593
 * Date: 26/10/2015
 * Time: 13:43
 */
    $query = $_GET['query'];
    echo "Hello ". $query ."<br/>";

    $forename = $_POST['forename'];
    $surname = $_POST['surname'];
    $gender = $_POST['gender'];
    $superpower = $_POST['superpower'];
    echo $forename . $surname . $gender . $superpower;


?>
