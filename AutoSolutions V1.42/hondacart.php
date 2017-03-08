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

    mysql_select_db("autosolution_db");

    if(isset($_GET['quantity1'])) {
        $quantity = $_GET['quantity1'];
        $image = 'http://thumbs.ebaystatic.com/images/g/c-YAAOxy3NBSgve6/s-l225.jpg';
        $name = 'HFP Style Front Lip (Urethane) Fits 06-08 Honda Civic 2dr';
        $price = 59.99 * $quantity;

        $file1r = fopen("data/hondaitem1.txt", "r");
        $stock = fgets($file1r);
        $stock -= $quantity;
        $_SESSION['stock1'] = $stock;
        fclose($file1r);

        $sqlstock = "SELECT stock_quantity FROM hondastock_tbl WHERE stock_id='1'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE hondastock_tbl SET stock_quantity='$stock' WHERE stock_id='1'";
        mysql_query($sqlupdate, $connection);

        $file1w = fopen("data/hondaitem1.txt", "w");
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
        $image = 'http://thumbs2.ebaystatic.com/d/l225/m/meA9Jq5ID96DPB-ydz7UWlA.jpg';
        $name = '06-11 Honda Civic 4Drs Sedan FD2 Mugen RR Spoiler Wing ABS Plastic FA2 Si';
        $price = 89.99 * $quantity;

        $file2r = fopen("data/hondaitem2.txt", "r");
        $stock = fgets($file2r);
        $stock -= $quantity;
        $_SESSION['stock2'] = $stock;
        fclose($file2r);

        $sqlstock = "SELECT stock_quantity FROM hondastock_tbl WHERE stock_id='2'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE hondastock_tbl SET stock_quantity='$stock' WHERE stock_id='2'";
        mysql_query($sqlupdate, $connection);

        $file2w = fopen("data/hondaitem2.txt", "w");
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
        $image = 'http://thumbs3.ebaystatic.com/d/l225/m/m8HbiVMBUVdTd18ndHyW9ow.jpg';
        $name = '2006-2011 H-Performance Style PU Add-On Side Skirt Lip For Honda Civic 2Dr Coupe';
        $price = 149.99 * $quantity;

        $file3r = fopen("data/hondaitem3.txt", "r");
        $stock = fgets($file3r);
        $stock -= $quantity;
        $_SESSION['stock3'] = $stock;
        fclose($file3r);

        $sqlstock = "SELECT stock_quantity FROM hondastock_tbl WHERE stock_id='3'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE hondastock_tbl SET stock_quantity='$stock' WHERE stock_id='3'";
        mysql_query($sqlupdate, $connection);

        $file3w = fopen("data/hondaitem3.txt", "w");
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
        $image = 'http://thumbs1.ebaystatic.com/d/l225/m/mcO6Df7LMaJOIoPVcJ7wAmQ.jpg';
        $name = 'For 06-11 Honda Civic Sedan HFP Rear Bumper Lip Spoiler PU';
        $price = 115.50 * $quantity;

        $file4r = fopen("data/hondaitem4.txt", "r");
        $stock = fgets($file4r);
        $stock -= $quantity;
        $_SESSION['stock4'] = $stock;
        fclose($file4r);

        $sqlstock = "SELECT stock_quantity FROM hondastock_tbl WHERE stock_id='4'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE hondastock_tbl SET stock_quantity='$stock' WHERE stock_id='4'";
        mysql_query($sqlupdate, $connection);

        $file4w = fopen("data/hondaitem4.txt", "w");
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
    } else if(isset($_GET['quantity5'])) {
        $quantity = $_GET['quantity5'];
        $image = 'http://thumbs1.ebaystatic.com/d/l225/m/mAxbz2YUUyGdCacPwE36CZQ.jpg';
        $name = '2003-2007 Honda Accord 2Dr Coupe/4Dr Sedan Halo Projector LED Headlights Black';
        $price = 127.98 * $quantity;

        $file5r = fopen("data/hondaitem5.txt", "r");
        $stock = fgets($file5r);
        $stock -= $quantity;
        $_SESSION['stock5'] = $stock;
        fclose($file5r);

        $sqlstock = "SELECT stock_quantity FROM hondastock_tbl WHERE stock_id='5'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE hondastock_tbl SET stock_quantity='$stock' WHERE stock_id='5'";
        mysql_query($sqlupdate, $connection);

        $file5w = fopen("data/hondaitem5.txt", "w");
        fwrite($file5w, $stock);
        fclose($file5w);

        fwrite($file, $image . PHP_EOL);
        fwrite($file, $name . PHP_EOL);
        fwrite($file, $quantity . PHP_EOL);
        fwrite($file, $price . PHP_EOL);
        
        fwrite($purchase, $price . PHP_EOL);

        fwrite($stuff, $name . PHP_EOL);
        fwrite($stuff, $quantity . PHP_EOL);
        fwrite($stuff, $price . PHP_EOL);
    } else if(isset($_GET['quantity6'])) {
        $quantity = $_GET['quantity6'];
        $image = 'http://thumbs2.ebaystatic.com/d/l225/m/md6aADeKVhVo6nPzltb7wcQ.jpg';
        $name = '2003-2007 Honda Accord 2/4Dr Sedan Coupe Headlights Lamps Left+Right Aftermarket';
        $price = 74.99 * $quantity;

        $file6r = fopen("data/hondaitem6.txt", "r");
        $stock = fgets($file6r);
        $stock -= $quantity;
        $_SESSION['stock6'] = $stock;
        fclose($file6r);

        $sqlstock = "SELECT stock_quantity FROM hondastock_tbl WHERE stock_id='6'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE hondastock_tbl SET stock_quantity='$stock' WHERE stock_id='6'";
        mysql_query($sqlupdate, $connection);

        $file6w = fopen("data/hondaitem6.txt", "w");
        fwrite($file6w, $stock);
        fclose($file6w);

        fwrite($file, $image . PHP_EOL);
        fwrite($file, $name . PHP_EOL);
        fwrite($file, $quantity . PHP_EOL);
        fwrite($file, $price . PHP_EOL);
        
        fwrite($purchase, $price . PHP_EOL);

        fwrite($stuff, $name . PHP_EOL);
        fwrite($stuff, $quantity . PHP_EOL);
        fwrite($stuff, $price . PHP_EOL);
    } else if(isset($_GET['quantity7'])) {
        $quantity = $_GET['quantity7'];
        $image = 'http://thumbs.ebaystatic.com/images/g/EbEAAOSwIgNXktVG/s-l225.jpg';
        $name = '2003-2007 Honda Accord 2/4Dr Sedan Coupe Headlights Lamps Left+Right Aftermarket';
        $price = 74.99 * $quantity;

        $file7r = fopen("data/hondaitem7.txt", "r");
        $stock = fgets($file7r);
        $stock -= $quantity;
        $_SESSION['stock7'] = $stock;
        fclose($file7r);

        $sqlstock = "SELECT stock_quantity FROM hondastock_tbl WHERE stock_id='7'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE hondastock_tbl SET stock_quantity='$stock' WHERE stock_id='7'";
        mysql_query($sqlupdate, $connection);

        $file7w = fopen("data/hondaitem7.txt", "w");
        fwrite($file7w, $stock);
        fclose($file7w);

        fwrite($file, $image . PHP_EOL);
        fwrite($file, $name . PHP_EOL);
        fwrite($file, $quantity . PHP_EOL);
        fwrite($file, $price . PHP_EOL);
        
        fwrite($purchase, $price . PHP_EOL);

        fwrite($stuff, $name . PHP_EOL);
        fwrite($stuff, $quantity . PHP_EOL);
        fwrite($stuff, $price . PHP_EOL);
    } else if(isset($_GET['quantity8'])) {
        $quantity = $_GET['quantity8'];
        $image = 'http://thumbs.ebaystatic.com/images/g/2K8AAOSweWVXdNi8/s-l225.jpg';
        $name = 'For 2008-2012 Honda Accord 2Dr Coupe Black Dual Halo LED Projector Headlights';
        $price = 230.28 * $quantity;

        $file8r = fopen("data/hondaitem8.txt", "r");
        $stock = fgets($file8r);
        $stock -= $quantity;
        $_SESSION['stock8'] = $stock;
        fclose($file8r);

        $sqlstock = "SELECT stock_quantity FROM hondastock_tbl WHERE stock_id='8'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE hondastock_tbl SET stock_quantity='$stock' WHERE stock_id='8'";
        mysql_query($sqlupdate, $connection);

        $file8w = fopen("data/hondaitem8.txt", "w");
        fwrite($file8w, $stock);
        fclose($file8w);

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
    
    header('Location: home.php');
?>