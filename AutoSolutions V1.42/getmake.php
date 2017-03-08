<?php
    session_start();
    error_reporting(E_ALL ^ E_DEPRECATED);
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
    echo "Connection Successful<br>";

    mysql_select_db("autosolution_db");

    $yearid = mysql_real_escape_string($_REQUEST['year']);

    if($yearid == 2016) {
        $sql = "SELECT id, make_name FROM 2016_vehicle_makes_tbl ORDER BY ASC";
        $query = mysql_query($sql, $connection);
        $make_arr = array();

        echo "
        <select id='make' name='make' style='width:300px;'>
            <option id='0' name='0' value='0'>Select Make</option>";

        while($row = mysql_fetch_array($query)) {
            echo "<option id='" . $row['id'] . "' name= '" . $row['id'] . "' value='" . $row['id'] . "'>" . $row['make_name'] . "</option>";
        }

        echo "</select>";
    }
?>