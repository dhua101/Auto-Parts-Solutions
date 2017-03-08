<?php
    session_start();
    error_reporting(E_ALL ^ E_DEPRECATED);
    $quantity = '';
    $file = fopen('data/cart.txt', 'a');
    $purchase = fopen('data/purchase.txt', 'a');
    $stuff = fopen("data/things.txt", "a");
    $stock = '';

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

    mysql_select_db("autosolutions_db");

    if(isset($_GET['quantity1'])) {
        $quantity = $_GET['quantity1'];
        $image = "http://thumbs.ebaystatic.com/images/g/qkcAAOSwA3dYJnMm/s-l225.jpg";
        $name = "2 Complete Front and Rear Pair Disc Brake Rotors and 8 Ceramic Pads";
        $price = 105.60 * $quantity;

        $file1r = fopen("data/brakesitem1.txt", "r");
        $stock = fgets($file1r);
        if($stock == 0) {
            $stock += 100;
        }
        $stock -= $quantity;
        $_SESSION['stock1'] = $stock;
        fclose($file1r);

        $sqlstock = "SELECT stock_quantity FROM brakestock_tbl WHERE stock_id='1'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE brakestock_tbl SET stock_quantity='$stock' WHERE stock_id='1'";
        mysql_query($sqlupdate, $connection);

        $file1w = fopen("data/brakesitem1.txt", "w");
        fwrite($file1w, $stock);
        fclose($file1w);

        fwrite($file, $image . PHP_EOL);
        fwrite($file, $name . PHP_EOL);
        fwrite($file, $quantity . PHP_EOL);
        fwrite($file, $price . PHP_EOL);
        
        fwrite($purchase, $price . PHP_EOL);

        fwrite($stuff, $name . PHP_EOL);
        fwrite($stuff, $quantity . PHP_EOL);
        fwrite($stuff, $price . PHP_EOL);
    } else if(isset($_GET['quantity2'])) {
        $quantity = $_GET['quantity2'];
        $image = "http://thumbs.ebaystatic.com/images/g/EpgAAOSwcLxYLL1-/s-l225.jpg";
        $name = "Set of 4 Performance Drilled and Slotted Brake Rotors";
        $price = 84.78 * $quantity;

        $file2r = fopen("data/brakesitem2.txt", "r");
        $stock = fgets($file2r);
        if($stock == 0) {
            $stock += 100;
        }
        $stock -= $quantity;
        $_SESSION['stock2'] = $stock;
        fclose($file2r);

        $sqlstock = "SELECT stock_quantity FROM brakestock_tbl WHERE stock_id='2'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE brakestock_tbl SET stock_quantity='$stock' WHERE stock_id='2'";
        mysql_query($sqlupdate, $connection);

        $file2w = fopen("data/brakesitem2.txt", "w");
        fwrite($file2w, $stock);
        fclose($file2w);

        fwrite($file, $image . PHP_EOL);
        fwrite($file, $name . PHP_EOL);
        fwrite($file, $quantity . PHP_EOL);
        fwrite($file, $price . PHP_EOL);
        
        fwrite($purchase, $price . PHP_EOL);

        fwrite($stuff, $name . PHP_EOL);
        fwrite($stuff, $quantity . PHP_EOL);
        fwrite($stuff, $price . PHP_EOL);
    } else if(isset($_GET['quantity3'])) {
        $quantity = $_GET['quantity3'];
        $image = "http://thumbs.ebaystatic.com/images/g/oIAAAOSwXyVYJke8/s-l225.jpg";
        $name = "4 Performance Drilled Slotted Brake Rotors and 8 Ceramic Pads";
        $price = 290.14 * $quantity;

        $file3r = fopen("data/brakesitem3.txt", "r");
        $stock = fgets($file3r);
        if($stock == 0) {
            $stock += 100;
        }
        $stock -= $quantity;
        $_SESSION['stock3'] = $stock;
        fclose($file3r);

        $sqlstock = "SELECT stock_quantity FROM brakestock_tbl WHERE stock_id='3'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE brakestock_tbl SET stock_quantity='$stock' WHERE stock_id='3'";
        mysql_query($sqlupdate, $connection);

        $file2w = fopen("data/brakesitem3.txt", "w");
        fwrite($file3w, $stock);
        fclose($file3w);

        fwrite($file, $image . PHP_EOL);
        fwrite($file, $name . PHP_EOL);
        fwrite($file, $quantity . PHP_EOL);
        fwrite($file, $price . PHP_EOL);
        
        fwrite($purchase, $price . PHP_EOL);

        fwrite($stuff, $name . PHP_EOL);
        fwrite($stuff, $quantity . PHP_EOL);
        fwrite($stuff, $price . PHP_EOL);
    } else if(isset($_GET['quantity4'])) {
        $quantity = $_GET['quantity4'];
        $image = "http://thumbs.ebaystatic.com/images/g/JMMAAOSwcLxYJj2W/s-l225.jpg";
        $name = "Performance Drilled and Slotted Rotors Pair and Premium Ceramic Brake Pads";
        $price = 61.56 * $quantity;

        $file4r = fopen("data/brakesitem4.txt", "r");
        $stock = fgets($file4r);
        if($stock == 0) {
            $stock += 100;
        }
        $stock -= $quantity;
        $_SESSION['stock4'] = $stock;
        fclose($file4r);

        $sqlstock = "SELECT stock_quantity FROM brakestock_tbl WHERE stock_id='4'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE brakestock_tbl SET stock_quantity='$stock' WHERE stock_id='4'";
        mysql_query($sqlupdate, $connection);

        $file4w = fopen("data/brakesitem4.txt", "w");
        fwrite($file4w, $stock);
        fclose($file4w);

        fwrite($file, $image . PHP_EOL);
        fwrite($file, $name . PHP_EOL);
        fwrite($file, $quantity . PHP_EOL);
        fwrite($file, $price . PHP_EOL);
        
        fwrite($purchase, $price . PHP_EOL);

        fwrite($stuff, $name . PHP_EOL);
        fwrite($stuff, $quantity . PHP_EOL);
        fwrite($stuff, $price . PHP_EOL);
    }

    fclose($file);
    fclose($purchase);
    fclose($stuff);
    mysql_close($connection);
    
    header('Location: catalog.php');
?>