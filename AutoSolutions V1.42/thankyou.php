<!DOCTYPE html>
<html>
<head>
    <title>Auto Solutions</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3-theme-yellow.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        .border {
            border-style: solid;
            border-width: 3px;
        }
    </style>
</head>
<body>
    <div class="w3-top">
        <ul class="w3-navbar w3-theme w3-top w3-left-align">
            <li class="w3-opennav w3-right w3-hide-large">
                <a class="w3-hover-white w3-theme-l2" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-search"></i></a>
            </li>
            <li class="w3-hide-small"><a href="home.php" class="w3-theme-l2">Auto Solutions</a></li>
            <li class="w3-hide-small"><a href="#" class="w3-hover-white">About Auto Solutions</a></li>
            <li class="w3-hide-small"><a href="#" class="w3-hover-white">Catalog</a></li>
            <li class="w3-hide-small"><a href="#" class="w3-hover-white">Parts and Accessories</a></li>
            <li class="w3-hide-small"><a href="#" class="w3-hover-white">Contact</a></li>
        </ul>
    </div>

    <nav class="w3-sidenav w3-collapse w3-theme-l3 w3-animate-left" style="z-index:3;width:150px;margin-top:-2px;" id="mySidenav">
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="close menu">
            <i class="fa fa-remove"></i>
        </a>
        <h4><b>Menu</b></h4>
        <p>Parts</p>
        <a href="#" class="w3-hover-black">Wheels</a>
        <a href="#" class="w3-hover-black">Suspensions</a>
        <a href="#" class="w3-hover-black">Brakes</a>
        <a href="#" class="w3-hover-black">Headlights</a>
        <a href="#" class="w3-hover-black">Fog Lights</a>
        <a href="#" class="w3-hover-black">Tail Lights</a>
    </nav>

    <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

    <!-- Start Main -->
    <div class="w3-main" style="margin-left:150px; margin-top:41px;">

        <div class="container">
            <p>Thank you for shopping here at Auto Parts Solutions. Here is your recipt. Please save a copy for your reference.</p>
            
            <div class="w3-panel">
                <?php
                    error_reporting(E_ALL ^ E_DEPRECATED);

                    $filer = fopen("data/things.txt", "r");
                    $sale = fopen("data/sale.txt", "a");
                    $buyer = fopen('data/buyer.txt', 'a');
                    $datebuy = date("M d, Y H:i:sa");
                    $dateday = date ("M d, Y");
                    $items_num = 0;
                    
                    $quantity = '';
                    $file = fopen('data/cart.txt', 'a');
                    $purchase = fopen('data/purchase.txt', 'a');
                    $stuff = fopen("data/things.txt", "a");
                    $stock = '';
                    $sold_quantity = 0;

                    fwrite($buyer, $datebuy . PHP_EOL);
                    fwrite($sale, $datebuy . PHP_EOL);

                    while(!feof($filer)) {
                        $name = fgets($filer);
                        $quantity = fgets($filer);
                        $price = fgets($filer);

                        echo "<div class='w3-threequarter'><div class='w3-left'>";
                        echo "$name($quantity)";
                        echo "</div></div>";
                        echo "<div class='w3-quarter'><div class='w3-right'>";
                        echo "$price";
                        echo "</div></div>";

                        fwrite($buyer, $name . PHP_EOL);
                        fwrite($buyer, $quantity . PHP_EOL);
                        fwrite($buyer, $price . PHP_EOL);

                        fwrite($sale, $name . PHP_EOL);
                        fwrite($sale, $quantity . PHP_EOL);
                        fwrite($sale, $price . PHP_EOL);

                        $items_num += $quantity;
                    }
                        
                    $breaks = "=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=";
                    fwrite($sale, $breaks . PHP_EOL);
                    fwrite($buyer, $breaks . PHP_EOL);

                    fclose($filer);
                    fclose($sale);
                    fclose($buyer);
                    
                ?>
            </div>

            <div class="w3-panel">
                <div class="w3-container w3-right">
                    <?=
                        error_reporting(E_ALL ^ E_DEPRECATED);
                        $filemoney = fopen("data/money.txt", "r");

                        $submoney = fgets($filemoney);
                        $taxmoney = fgets($filemoney);
                        $totalmoney = fgets($filemoney);

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

                        echo "Subtotal: $submoney <br>";
                        echo "HST: $taxmoney <br>";
                        echo "Total: $totalmoney <br>";

                        $sqlinsert = "INSERT INTO sales_tbl(total_items, total_price, total_tax, date_purchase) VALUES('$items_num','$totalmoney', '$taxmoney', '$datebuy')";

                        if(!mysql_query($sqlinsert, $connection)) {
                            die("New Record Creation Failed");
                        }

                        fclose($filemoney);
                        mysql_close($connection);
                    ?>
                </div>
            </div>

            <div class="w3-panel">
                <p>We'll email you the comfirmation right away. We'll also email you when it's available to pick up at your email (
                <?php
                    $fileemail = fopen("data/emails.txt", "r");
                    $email = fgets($fileemail);

                    echo "$email";

                    fclose($fileemail);
                ?>
                )</p>
            </div>

            <p>Done? Click the button to go back to the homepage.</p>
            <form action="close.php">
                <input type="submit" name="submit" value="Close">
            </form>
        </div>

    <!-- End Main -->
    </div>
    
    <!-- Footer -->
    <footer class="w3-container w3-padding-32 w3-theme-d1" style="margin-left:150px;">
        <div class="w3-center">
            <div class="w3-panel">
                <h4>Follow Us</h4>
                <a class="w3-btn-floating w3-theme-l3" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
                <a class="w3-btn-floating w3-theme-l3" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
                <a class="w3-btn-floating w3-theme-l3" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
                <a class="w3-btn-floating w3-theme-l3 w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>

                <div style="position:relative;bottom:50px;z-index:1;" class="w3-tooltip w3-right">
                    <span class="w3-text w3-padding w3-red w3-hide-small">Go To Top</span>   
                    <a class="w3-btn w3-theme" href="#"><span class="w3-xlarge">
                    <i class="fa fa-chevron-circle-up"></i></span></a>
                </div>

                <br>

                <a href="contact.php">Contact us</a>
            </div>
        </div>
    </footer>

    <script>
    // Get the Sidenav
    var mySidenav = document.getElementById("mySidenav");

    // Get the DIV with overlay effect
    var overlayBg = document.getElementById("myOverlay");

    // Toggle between showing and hiding the sidenav, and add overlay effect
    function w3_open() {
        if (mySidenav.style.display === 'block') {
            mySidenav.style.display = 'none';
            overlayBg.style.display = "none";
        } else {
            mySidenav.style.display = 'block';
            overlayBg.style.display = "block";
        }
    }

    // Close the sidenav with the close button
    function w3_close() {
        mySidenav.style.display = "none";
        overlayBg.style.display = "none";
    }

    function myFunction(id) {
        var x = document.getElementById(id);
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
    </script>
</body>
</html>