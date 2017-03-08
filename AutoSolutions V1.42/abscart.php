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
        $image = "http://thumbs.ebaystatic.com/images/g/qe8AAOSw2GlXGdqe/s-l225.jpg";
        $name = "2 PCS Front Left and Right ABS Wheel Speed Sensor";
        $price = 17.90 * $quantity;

        $file1r = fopen("data/absitem1.txt", "r");
        $stock = fgets($file1r);
        if($stock == 0) {
            $stock += 100;
        }
        $stock -= $quantity;
        $_SESSION['stock1'] = $stock;
        fclose($file1r);

        $sqlstock = "SELECT stock_quantity FROM absstock_tbl WHERE stock_id='1'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE absstock_tbl SET stock_quantity='$stock' WHERE stock_id='1'";
        mysql_query($sqlupdate, $connection);

        $file1w = fopen("data/absitem1.txt", "w");
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
        $image = "http://thumbs.ebaystatic.com/images/g/N6MAAOSw8w1X2MoY/s-l225.jpg";
        $name = "2x Front Left and Right ABS Wheel Speed Sensor";
        $price = 17.29 * $quantity;

        $file2r = fopen("data/absitem2.txt", "r");
        $stock = fgets($file2r);
        if($stock == 0) {
            $stock += 100;
        }
        $stock -= $quantity;
        $_SESSION['stock2'] = $stock;
        fclose($file2r);

        $sqlstock = "SELECT stock_quantity FROM absstock_tbl WHERE stock_id='2'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE absstock_tbl SET stock_quantity='$stock' WHERE stock_id='2'";
        mysql_query($sqlupdate, $connection);

        $file2w = fopen("data/absitem2.txt", "w");
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
        $image = "http://thumbs.ebaystatic.com/images/g/3JMAAOSwHsRYCokm/s-l225.jpg";
        $name = "ABS Pump Brake Control Module OEM";
        $price = 99.99 * $quantity;

        $file3r = fopen("data/absitem3.txt", "r");
        $stock = fgets($file3r);
        if($stock == 0) {
            $stock += 100;
        }
        $stock -= $quantity;
        $_SESSION['stock3'] = $stock;
        fclose($file3r);

        $sqlstock = "SELECT stock_quantity FROM absstock_tbl WHERE stock_id='3'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE absstock_tbl SET stock_quantity='$stock' WHERE stock_id='3'";
        mysql_query($sqlupdate, $connection);

        $file2w = fopen("data/absitem3.txt", "w");
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
        $image = "http://thumbs.ebaystatic.com/images/g/7G8AAOSwqu9U0IrB/s-l225.jpg";
        $name = "ABS Wheel Speed Sensor Front Left";
        $price = 18.99 * $quantity;

        $file4r = fopen("data/absitem4.txt", "r");
        $stock = fgets($file4r);
        if($stock == 0) {
            $stock += 100;
        }
        $stock -= $quantity;
        $_SESSION['stock4'] = $stock;
        fclose($file4r);

        $sqlstock = "SELECT stock_quantity FROM absstock_tbl WHERE stock_id='4'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE absstock_tbl SET stock_quantity='$stock' WHERE stock_id='4'";
        mysql_query($sqlupdate, $connection);

        $file4w = fopen("data/absitem4.txt", "w");
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