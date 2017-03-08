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
        $image = "https://ll-us-i5.wal.co/asr/5a66f3fb-d169-4923-8cf6-958be175381a_1.c0fea01dea5e017769189a598736001f.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF";
        $name = "General Altimax Arctic Tire 195/65R15SL 91Q BW";
        $price = 73.33 * $quantity;

        $file1r = fopen("data/wintiresitem1.txt", "r");
        $stock = fgets($file1r);
        if($stock == 0) {
            $stock += 100;
        }
        $stock -= $quantity;
        $_SESSION['stock1'] = $stock;
        fclose($file1r);

        $sqlstock = "SELECT stock_quantity FROM wintiresstock_tbl WHERE stock_id='1'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE wintiresstock_tbl SET stock_quantity='$stock' WHERE stock_id='1'";
        mysql_query($sqlupdate, $connection);

        $file1w = fopen("data/wintiresitem1.txt", "w");
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
        $image = "https://ll-us-i5.wal.co/asr/e675d772-6631-440c-ac01-dac0f8ae51a5_1.e1c416104c52b8a19fc03b3f032d7ec6.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF";
        $name = "General Altimax Arctic Tire 195/60R15SL 88Q BW";
        $price = 68.60 * $quantity;

        $file2r = fopen("data/wintiresitem2.txt", "r");
        $stock = fgets($file2r);
        if($stock == 0) {
            $stock += 100;
        }
        $stock -= $quantity;
        $_SESSION['stock2'] = $stock;
        fclose($file2r);

        $sqlstock = "SELECT stock_quantity FROM wintiresstock_tbl WHERE stock_id='2'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE wintiresstock_tbl SET stock_quantity='$stock' WHERE stock_id='2'";
        mysql_query($sqlupdate, $connection);

        $file2w = fopen("data/wintiresitem2.txt", "w");
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
        $image = "https://ll-us-i5.wal.co/asr/aa7d3d8e-c03f-4c2b-8f08-4acf9494835f_1.cb97ad7a058895b71f31664ea40a458e.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF";
        $name = "Firestone Winterforce Tire 225/60R16 98S BW";
        $price = 89.99 * $quantity;

        $file3r = fopen("data/wintiresitem3.txt", "r");
        $stock = fgets($file3r);
        if($stock == 0) {
            $stock += 100;
        }
        $stock -= $quantity;
        $_SESSION['stock3'] = $stock;
        fclose($file3r);

        $sqlstock = "SELECT stock_quantity FROM wintiresstock_tbl WHERE stock_id='3'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE wintiresstock_tbl SET stock_quantity='$stock' WHERE stock_id='3'";
        mysql_query($sqlupdate, $connection);

        $file2w = fopen("data/wintiresitem3.txt", "w");
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
        $image = "https://ll-us-i5.wal.co/asr/8e2ffd73-16da-4702-b60a-f225670eec5a_1.4d4d4029bcb020779691426abe702dbc.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF";
        $name = "Hankook I*Pike Rw11 P235/65R18 Tire 104T";
        $price = 126.10 * $quantity;

        $file4r = fopen("data/wintiresitem4.txt", "r");
        $stock = fgets($file4r);
        if($stock == 0) {
            $stock += 100;
        }
        $stock -= $quantity;
        $_SESSION['stock4'] = $stock;
        fclose($file4r);

        $sqlstock = "SELECT stock_quantity FROM wintiresstock_tbl WHERE stock_id='4'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE wintiresstock_tbl SET stock_quantity='$stock' WHERE stock_id='4'";
        mysql_query($sqlupdate, $connection);

        $file4w = fopen("data/wintiresitem4.txt", "w");
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