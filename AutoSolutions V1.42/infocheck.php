<?php
    session_start();
    error_reporting(E_ALL ^ E_DEPRECATED);
    $file = fopen('data/customerinfo.txt', 'a');

    // get the information for database access
    //$servername = "127.0.0.1:3306";
    $servername = "localhost";
    $username = "dhua3";
    $password = "OpTicGen101";

    // Create the connection
    $connection = mysql_connect($servername, $username, $password);

    // select the database
    mysql_select_db("autosolution_db");

    // get the data from the form
    $firstname = $_GET['firstname'];
    $lastname = $_GET['lastname'];
    $address1 = $_GET['address1'];
    $address2 = $_GET['address2'];
    $city = $_GET['city'];
    $provstate = $_GET['provstate'];
    $country = $_GET['country'];
    $postalzip = $_GET['postalzip'];
    $email = $_GET['email'];
    $phone = $_GET['phone'];
    $extra = $_GET['extra'];
    $date = date("M d, Y H:i:sa");
    
    // check if the data is in the database table
    $sql = "SELECT id FROM information_tbl WHERE firstname=$firstname AND lastname=$lastname";
    $selection = mysql_query($sql, $connection);

    if($selection == 0) {
        $sqlinsert = "INSERT INTO information_tbl(first_name, last_name, address_first, address_second, city, province, country, postal_zip, email, phone, extra, date_info) VALUES('$firstname', '$lastname', '$address1', '$address2', '$city', '$provstate', '$country', '$postalzip', '$email', '$phone', '$extra', '$date')";

        if(!mysql_query($sqlinsert)) {
            die("New Record Creation Failed");
        }

        $breaks = "=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=";

        fputs($file, $firstname . PHP_EOL);
        fputs($file, $lastname . PHP_EOL);
        fputs($file, $address1 . PHP_EOL);
        fputs($file, $address2 . PHP_EOL);
        fputs($file, $city . PHP_EOL);
        fputs($file, $provstate . PHP_EOL);
        fputs($file, $country . PHP_EOL);
        fputs($file, $email . PHP_EOL);
        fputs($file, $phone . PHP_EOL);
            
        fputs($file, $breaks . PHP_EOL);
    }

    fclose($file);
    mysql_close($connection);
    header("location: home.php");
?>