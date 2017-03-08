<?php
    error_reporting(E_ALL ^ E_DEPRECATED);

    unlink('data/cart.txt');
    unlink('data/purchase.txt');
    unlink('data/money.txt');
    unlink('data/emails.txt');
    unlink('data/things.txt');

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

    mysql_select_db("autosolution_db");

    $sqldropping1 = "DROP TABLE stock_backup_tbl";
    $sqldroptable1 = mysql_query($sqldropping1, $connection);

    mysql_close($connection);

    header('Location: home.php');
?>