<?php
    error_reporting(0);

    //$servername = "127.0.0.1:3306";
    $servername = "localhost";
    $username = "dhua3";
    $password = "OpTicGen101";

    // Create the connection
    $connection = mysql_connect($servername, $username, $password);

    // Check the connection
    if(!$connection) {
        die("Connection Failed");
    }

    // Select the database
    mysql_select_db("wholenewyear_2_db");

    if(isset($_POST['runsql2'])) {
        $sqltable = $_POST['tables'];
        $sqlvalue = $_POST['values'];
    }
    $sqlstatement = "INSERT INTO $sqltable(stock_item, stock_quantity) VALUES ($sqlvalue)";
    $sqlquery = mysql_query($sqlstatement, $connection);

    mysql_close($connection);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>