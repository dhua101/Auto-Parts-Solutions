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
            <li class="w3-hide-small w3-right">
            <form action="exitmain.php">
                <input type="submit" name="exit" value="x">
            </form></li>
            <li class="w3-opennav w3-right w3-hide-large">
                <a class="w3-hover-white w3-theme-l2" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-search"></i></a>
            </li>
            <a class="navbar-brand" href="home.php">Auto Solutions</a>
            <li><a href="catalog.php" class="w3-hover-white">Catalog</a></li>
            <li><a href="partsaccessories.php" class="w3-hover-white">Parts and Accessories</a></li>
            <li><a href="contact.php" class="w3-hover-white">Contact</a></li>
            <li class="w3-right"><a href="shoppingcart.php" class="w3-hover-brown" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
            <li class="w3-right" style="margin-top:15px; margin-left:350px; margin-right:50px;">
                <form action="#" method="POST">
                    <input type="text" id="search" name="search" placeholder="search item" id='search-text-input' style="width:350px; margin-top:0px;">
                </form></a>
            </li>
        </ul>
    </div>

    <nav class="w3-sidenav w3-collapse w3-theme-l3 w3-animate-left text-center" style="z-index:3;width:165px;margin-top:0px;" id="mySidenav">
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="close menu">
            <i class="fa fa-remove"></i>
        </a>
        <h4><b>Menu</b></h4>
        <h3>Model</h3>
        <p><a href="#"></a></p>
        <p><a href="#"></a></p>
        <p><a href="#"></a></p>
        <h3>Make</h3>
        <p><a href="bmwcatalog.php">BMW</a></p>
        <p><a href="hondacatalog.php">Honda</a></p>
        <p><a href="toyotacatalog.php">Toyota</a></p>
        <h3>Part</h3>
        <p><a href="wheelscatalog.php">Wheels</a></p>
        <p><a href="brakescatalog.php">Brakes</a></p>
        <p><a href="lightscatalog.php">Lights</a></p>
    </nav>

    <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

    <!-- Start Main -->
    <div class="w3-main" style="margin-left:150px; margin-top:50px;">

        <div class="container">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#summary">Summary</a></li>
                <li><a data-toggle="tab" href="#mastercard">Pay By Mastercard</a></li>
                <li><a data-toggle="tab" href="#visa">Pay By Visa</a></li>
            </ul>

            <div class="tab-content" style="border:1px solid black;">
                <div id="summary" class="tab-pane fade in active">
                    <div class="w3-panel">
            <div class="w3-threequarter border">
            <?php
                error_reporting(0);
                
                $submit = [
                    "submit1",
                    "submit2",
                    "submit3",
                    "submit4",
                    "submit5",
                    "submit6",
                    "submit7",
                    "submit8",
                    "submit9",
                    "submit10",
                    "submit11",
                    "submit12",
                    "submit13",
                    "submit14",
                    "submit15",
                    "submit16",
                    "submit17",
                    "submit18",
                    "submit19",
                    "submit20",
                    "submit21"
                ];

                $quantity = [
                    "quantity1",
                    "quantity2",
                    "quantity3",
                    "quantity4",
                    "quantity5",
                    "quantity6",
                    "quantity7",
                    "quantity8",
                    "quantity9",
                    "quantity10",
                    "quantity11",
                    "quantity12",
                    "quantity13",
                    "quantity14",
                    "quantity15",
                    "quantity16",
                    "quantity17",
                    "quantity18",
                    "quantity19",
                    "quantity20",
                    "quantity21"
                ];

                $x = 0;
                $y = 0;
                $sub = 0.00;
                $choices = array();

                echo "<div class='w3-threequarter'><div class='w3-center'>";
                echo "item";
                echo "</div></div>";
                echo "<div class='w3-quarter'><div class='w3-center'>";
                echo "price";
                echo "</div></div>";

                if (file_exists("data/cart.txt")) {
                    $file = fopen("data/cart.txt", "r");

                    while(!feof($file)) {
                        $sourceA = fgets($file);
                        $nameA = fgets($file);
                        $quantityA = fgets($file);
                        $priceA = fgets($file);

                        echo "<div class='w3-threequarter'><div class='w3-left'>";
                        echo "<img id='stuff' src=$sourceA> $nameA($quantityA)";
                        echo "</div></div>";
                        echo "<div class='w3-quarter'><div class='w3-left'>";
                        echo "$priceA";
                        echo "</div></div>";
                    }

                    fclose($file);
                }
                
                $list = file("data/purchase.txt");

                $sub = array_sum($list);
            ?>
            </div>
            <div class="w3-quarter border">
                <div class="w3-center">
                    <h5>Invoice</h5>
                </div>
                <div class="w3-twothird">
                    <p>Subtotal:</p>
                </div>
                <div class="w3-third">
                    <div class='w3-right'>
                    <p>$
                    <?=
                        $sub;

                        $filemoney = fopen("data/money.txt", "a");
                        $subtotal = "$" . $sub;
                        fputs($filemoney, $subtotal . PHP_EOL);
                        fclose($filemoney);
                    ?></p>
                    </div>
                </div>
                <div class="w3-twothird">
                    <p>HST:</p>
                </div>
                <div class="w3-third">
                    <div class='w3-right'>
                    <p>$
                    <?=
                        $tax = $sub * 0.13;

                        $filemoney = fopen("data/money.txt", "a");
                        $taxes = "$" . $tax;
                        fputs($filemoney, $taxes . PHP_EOL);
                        fclose($filemoney);

                        $filetax = fopen("data/tax.txt", "a");
                        $taxes1 = "$" . $tax;
                        $breaks = "=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=";
                        fputs($filetax, $taxes1 . PHP_EOL);
                        fputs($filetax, $breaks . PHP_EOL);
                        fclose($filetax);
                    ?></p>
                    </div>
                </div>
                <div class="w3-twothird">
                    <p>Total:</p>
                </div>
                <div class="w3-third">
                    <div class='w3-right'>
                    <p>$
                    <?=
                        $total = $sub + $tax;

                        $filemoney = fopen("data/money.txt", "a");
                        $totaltotal = "$" . $total;
                        fputs($filemoney, $totaltotal . PHP_EOL);
                        fclose($filemoney);
                    ?></p>
                    </div>
                </div>
            </div>
                    </div>
                </div>
                <div id="mastercard" class="tab-pane fade">
                    <div class="w3-panel">
            <?php
                $file = fopen("data/money.txt", "r");
                $lines = file("data/money.txt");
                $max = count($lines);
                echo "Total: " . $lines[$max-1] . "<br>";
                fclose($file);
            ?>

            <p>You decided to pay by Mastercard. Enter the Verification Number in the textbox:</p>

            <div class="col-xs-9">
            <form action="masterverification.php" method"get">
                Email:
                <input type="text" name="email"><br><br>
                Account Number (16 digits):
                <input type="text" name="account"><br><br>
                Expiry Date (YY-mm-dd):
                <input type="text" name="expire"><br><br>
                Postal Code (eg. A1B 2C3):
                <input type="text" name="postalcode"><br><br>
                Verification Number (3 digits):
                <input type="text" name="verify" style="width:50px">
                <input type="submit" name="submit" value="Submit">
            </form>
                </div>
                <div class="col-xs-3">
                    <img src="https://usshortcodedirectory.com/wp-content/uploads/2016/03/www.mastercard.com_.png" name="mastercard">
                </div>
                    </div>
                </div>
                <div id="visa" class="tab-pane fade">
                    <div class="w3-panel">
            <?php
                $file = fopen("data/money.txt", "r");
                $lines = file("data/money.txt");
                $max = count($lines);
                echo "Total: " . $lines[$max-1] . "<br>";
                fclose($file);
            ?>

            <p>You decided to pay by Visa. Enter the Verification Number in the textbox:</p>

                <div class="col-xs-9">
            <form action="visaverification.php" method"get">
                Email:
                <input type="text" name="email"><br><br>
                Account Number (16 digits): 
                <input type="text" name="account"><br><br>
                Expiry Date (YY-mm-dd):
                <input type="text" name="expire"><br><br>
                Postal Code (eg. A1B 2C3):
                <input type="text" name="postalcode"><br><br>
                Verification Number (3 digits):
                <input type="text" name="verify" style="width:50px">
                <input type="submit" name="submit" value="Submit">
            </form>
                </div>
                <div class="col-xs-3">
                    <img src="https://cdn3.iconfinder.com/data/icons/flat-icons-web/40/Visa-128.png" name="visa">
                </div>
                    </div>
                </div>
                
            </div>
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