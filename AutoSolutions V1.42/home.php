<?php
    session_start();
    error_reporting(E_ALL ^ E_DEPRECATED);
    $stock = '';
    
    copy("data/absitem1.txt", "data/absitem1_backup.txt");
    copy("data/absitem2.txt", "data/absitem2_backup.txt");
    copy("data/absitem3.txt", "data/absitem3_backup.txt");
    copy("data/absitem4.txt", "data/absitem4_backup.txt");
    
    copy("data/brakesitem1.txt", "data/brakesitem1_backup.txt");
    copy("data/brakesitem2.txt", "data/brakesitem2_backup.txt");
    copy("data/brakesitem3.txt", "data/brakesitem3_backup.txt");
    copy("data/brakesitem4.txt", "data/brakesitem4_backup.txt");
    
    copy("data/headlightsitem1.txt", "data/headlightsitem1_backup.txt");
    copy("data/headlightsitem2.txt", "data/headlightsitem2_backup.txt");
    copy("data/headlightsitem3.txt", "data/headlightsitem3_backup.txt");
    copy("data/headlightsitem4.txt", "data/headlightsitem4_backup.txt");
    
    copy("data/lightsitem1.txt", "data/lightsitem1_backup.txt");
    copy("data/lightsitem2.txt", "data/lightsitem2_backup.txt");
    copy("data/lightsitem3.txt", "data/lightsitem3_backup.txt");
    
    copy("data/sumtiresitem1.txt", "data/sumtiresitem1_backup.txt");
    copy("data/sumtiresitem2.txt", "data/sumtiresitem2_backup.txt");
    copy("data/sumtiresitem3.txt", "data/sumtiresitem3_backup.txt");
    
    copy("data/taillightsitem1.txt", "data/taillightsitem1_backup.txt");
    copy("data/taillightsitem2.txt", "data/taillightsitem2_backup.txt");
    copy("data/taillightsitem3.txt", "data/taillightsitem3_backup.txt");
    
    copy("data/tiresitem1.txt", "data/tiresitem1_backup.txt");
    copy("data/tiresitem2.txt", "data/tiresitem2_backup.txt");
    copy("data/tiresitem3.txt", "data/tiresitem3_backup.txt");
    copy("data/tiresitem4.txt", "data/tiresitem4_backup.txt");
    
    copy("data/wintiresitem1.txt", "data/wintiresitem1_backup.txt");
    copy("data/wintiresitem2.txt", "data/wintiresitem2_backup.txt");
    copy("data/wintiresitem3.txt", "data/wintiresitem3_backup.txt");
    copy("data/wintiresitem4.txt", "data/wintiresitem4_backup.txt");
    
    copy("data/bmwitem1.txt", "data/bmwitem1_backup.txt");    
    copy("data/bmwitem2.txt", "data/bmwitem2_backup.txt");    
    copy("data/bmwitem3.txt", "data/bmwitem3_backup.txt");    
    copy("data/bmwitem4.txt", "data/bmwitem4_backup.txt");    
    copy("data/bmwitem5.txt", "data/bmwitem5_backup.txt");    
    copy("data/bmwitem6.txt", "data/bmwitem6_backup.txt");    
    copy("data/bmwitem7.txt", "data/bmwitem7_backup.txt");    
    copy("data/bmwitem8.txt", "data/bmwitem8_backup.txt");
    
    copy("data/hondaitem1.txt", "data/hondaitem1_backup.txt");    
    copy("data/hondaitem2.txt", "data/hondaitem2_backup.txt");    
    copy("data/hondaitem3.txt", "data/hondaitem3_backup.txt");    
    copy("data/hondaitem4.txt", "data/hondaitem4_backup.txt");    
    copy("data/hondaitem5.txt", "data/hondaitem5_backup.txt");    
    copy("data/hondaitem6.txt", "data/hondaitem6_backup.txt");    
    copy("data/hondaitem7.txt", "data/hondaitem7_backup.txt");    
    copy("data/hondaitem8.txt", "data/hondaitem8_backup.txt");
    
    copy("data/toyotaitem1.txt", "data/toyotaitem1_backup.txt");    
    copy("data/toyotaitem2.txt", "data/toyotaitem2_backup.txt");    
    copy("data/toyotaitem3.txt", "data/toyotaitem3_backup.txt");    
    copy("data/toyotaitem4.txt", "data/toyotaitem4_backup.txt");    
    copy("data/toyotaitem5.txt", "data/toyotaitem5_backup.txt");    
    copy("data/toyotaitem6.txt", "data/toyotaitem6_backup.txt");    
    copy("data/toyotaitem7.txt", "data/toyotaitem7_backup.txt");    
    copy("data/toyotaitem8.txt", "data/toyotaitem8_backup.txt");

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

    $sqlrename1 = "CREATE TABLE absstock_backup_tbl LIKE absstock_tbl";
    $sqlrename2 = "CREATE TABLE brakestock_backup_tbl LIKE brakestock_tbl";
    $sqlrename3 = "CREATE TABLE headlightsstock_backup_tbl LIKE headlightsstock_tbl";
    $sqlrename4 = "CREATE TABLE lightsstock_backup_tbl LIKE lightsstock_tbl";
    $sqlrename5 = "CREATE TABLE sumtiresstock_backup_tbl LIKE sumtiresstock_tbl";
    $sqlrename6 = "CREATE TABLE taillightsstock_backup_tbl LIKE taillightsstock_tbl";
    $sqlrename7 = "CREATE TABLE tiresstock_backup_tbl LIKE tiresstock_tbl";
    $sqlrename8 = "CREATE TABLE wintiresstock_backup_tbl LIKE wintiresstock_tbl";
    $sqlrename9 = "CREATE TABLE bmwstock_backup_tbl LIKE bmwstock_tbl";
    $sqlrename10 = "CREATE TABLE hondastock_backup_tbl LIKE hondastock_tbl";
    $sqlrename11 = "CREATE TABLE toyotastock_backup_tbl LIKE toyotastock_tbl";
    $sqlnewname1 = mysql_query($sqlrename1, $connection);
    $sqlnewname2 = mysql_query($sqlrename2, $connection);
    $sqlnewname3 = mysql_query($sqlrename3, $connection);
    $sqlnewname4 = mysql_query($sqlrename4, $connection);
    $sqlnewname5 = mysql_query($sqlrename5, $connection);
    $sqlnewname6 = mysql_query($sqlrename6, $connection);
    $sqlnewname7 = mysql_query($sqlrename7, $connection);
    $sqlnewname8 = mysql_query($sqlrename8, $connection);
    $sqlnewname9 = mysql_query($sqlrename9, $connection);
    $sqlnewname10 = mysql_query($sqlrename10, $connection);
    $sqlnewname11 = mysql_query($sqlrename11, $connection);

    $sqlnewdata1 = "INSERT INTO absstock_backup_tbl SELECT * FROM absstock_tbl";
    $sqlnewdata2 = "INSERT INTO brakestock_backup_tbl SELECT * FROM brakestock_tbl";
    $sqlnewdata3 = "INSERT INTO headlightsstock_backup_tbl SELECT * FROM headlightsstock_tbl";
    $sqlnewdata4 = "INSERT INTO lightsstock_backup_tbl SELECT * FROM lightsstock_tbl";
    $sqlnewdata5 = "INSERT INTO sumtiresstock_backup_tbl SELECT * FROM sumtiresstock_tbl";
    $sqlnewdata6 = "INSERT INTO taillightsstock_backup_tbl SELECT * FROM taillightsstock_tbl";
    $sqlnewdata7 = "INSERT INTO tiresstock_backup_tbl SELECT * FROM tiresstock_tbl";
    $sqlnewdata8 = "INSERT INTO wintiresstock_backup_tbl SELECT * FROM wintiresstock_tbl";
    $sqlnewdata9 = "INSERT INTO bmwstock_backup_tbl SELECT * FROM bmwstock_tbl";
    $sqlnewdata10 = "INSERT INTO hondastock_backup_tbl SELECT * FROM hondastock_tbl";
    $sqlnewdata11 = "INSERT INTO toyotastock_backup_tbl SELECT * FROM toyotastock_tbl";
    $sqlinsert1 = mysql_query($sqlnewdata1, $connection);
    $sqlinsert2 = mysql_query($sqlnewdata2, $connection);
    $sqlinsert3 = mysql_query($sqlnewdata3, $connection);
    $sqlinsert4 = mysql_query($sqlnewdata4, $connection);
    $sqlinsert5 = mysql_query($sqlnewdata5, $connection);
    $sqlinsert6 = mysql_query($sqlnewdata6, $connection);
    $sqlinsert7 = mysql_query($sqlnewdata7, $connection);
    $sqlinsert8 = mysql_query($sqlnewdata8, $connection);
    $sqlinsert9 = mysql_query($sqlnewdata9, $connection);
    $sqlinsert10 = mysql_query($sqlnewdata10, $connection);
    $sqlinsert11 = mysql_query($sqlnewdata11, $connection);

    mysql_close($connection);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Auto Solutions</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3-theme-yellow.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
    <script type="text/javascript" src="Image-Slider-LnR.js"></script>
    <link rel="stylesheet" type="text/css" href="Image-Slider-LnR.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        /* Variables */
        $text-color: black;
        $border-width: 1px;
        $max-image-width: 100%;
        $max-image-height: 100%;
        $quarter-image-width: 25%;
        $quarter-image-height: 25%;
        $half-image-width: 50%;
        $half-image-height: 50%;
        $thirdquarter-image-width: 75%;
        $thirdquarter-image-height: 75%;
        $left-align: left;
        $center-align: center;
        $right-align: right;

        /* Mixins */
        @mixin box-sizing($type) {
            -webkit-box-sizing: $type;
            -moz-box-sizing: $type;
            box-sizing: $type;
        }

        /* Banners */
        .banner {
            width: 100%;
            height: auto;
            padding: 10px;
            @include box-sizing(border-box);
            border: 1px solid black;
            text-align: center;
            margin-left: 15px;
        }
        .salebanner {
            @extend .banner;
            background: green;
        }
        .topic {
            border: 2px solid black;
            text-align: $left-align;
            margin-left: 25px;
        }

        /* Navigation */
        .nav-color {
            color: $text-color;
        }

        /* Margins */
        .topmargin {
            margin-top:25px;
        }
        .topbanmargin {
            margin-top: 85px;
        }

        /* Images */
        img#image1 {
            width: $max-image-width;
        }
        img#imageDisplay1 {
            width: $max-image-width;
        }
        .imground {
            border: 1px solid blue;
        }

        /* Search */
        #search{
            background: white url(https://d30y9cdsu7xlg0.cloudfront.net/png/6983-200.png) right no-repeat;
            padding-right: 25px;
            background-size: 20px 20px;
            width: 375px;
        }
        #button-holder{
            background-color:#f1f1f1;
            border-top:thin solid #e5e5e5;
            box-shadow:1px 1px 1px 1px #e5e5e5;
            cursor:pointer;
            float:left;
            height:27px;
            margin:11px 0 0 0;
            text-align:center;
            width:50px;
        }  
        #button-holder img{
            margin:4px;
            width:20px; 
        }
    </style>
</head>
<body>
    <div class="w3-top">
        <ul class="w3-navbar w3-white w3-top w3-left-align"style="height:100px">
            <li class="w3-hide-small"><img src="http://localhost/AutoSolutions/car_outline_modified_clip_art_19097.jpg" style="width:50%"></li>
            <li class="w3-hide-small w3-center" style="margin-top:40px;"><font color="brown">My Store:</font> 2079 Meadowgate Blvd | London, Ontario</li>
            <li class="w3-hide-small w3-right">
            <form action="exitmain.php">
                <input type="submit" name="exit" value="x">
            </form></li>
            <li class="w3-hide-small w3-right" style="margin-top:25px; margin-right:25px;"><a href="accountsignin.php">Account Sign In</a></li>
            <li class="w3-hide-small w3-right" style="margin-top:15px; margin-right:25px;">
                <div class="w3-dropdown-hover w3-right">
                    <button class="w3-btn w3-white"><font color="brown">Flyer</font></button>
                    <div class="w3-dropdown-content w3-border">
                        10% off when you spend $100 or more
                    </div>
                </div>
            </li>
            <li class="w3-hide-small w3-right" style="margin-top:-10px; margin-right:25px;">
                <div class="w3-dropdown-hover w3-right">
                    <button class="w3-btn w3-white"><font color="brown">Credit Card</font></button>
                    <div class="w3-dropdown-content w3-border">
                        <a href="#">apply online</a>
                        <a href="#">apply in store</a>
                    </div>
                </div>
            </li>
        </ul>
        <nav class="navbar navbar-default w3-theme" style="margin-top:100px;">
        <ul class="nav navbar-nav">
            <a class="navbar-brand" href="#">Auto Solutions</a>
            <li><a href="catalog.php" class="w3-hover-white nav-color">Catalog</a></li>
            <li><a href="partsaccessories.php" class="w3-hover-white nav-color">Parts and Accessories</a></li>
            <li><a href="information.php" class="w3-hover-white nav-color">Customer Info</a></li>
            <li><a href="contact.php" class="w3-hover-white nav-color">Contact</a></li>
            <li class="w3-right"><a href="shoppingcart.php" class="w3-hover-white" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
            <li class="w3-right" style="margin-top:15px; margin-left:350px; margin-right:50px;">
                <form action="searching.php" method="POST">
                    <input type="text" id="search" name="search" placeholder="search item" id='search-text-input' style="width:300px; margin-top:0px;">
                </form></a>
            </li>
        </ul>
        </nav>
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
    <div class="w3-main mainpage" style="margin-left:150px; margin-top:150px;">
        <div class="w3-panel w3-center">
            <img id="imageDisplay2" src="http://localhost/AutoSolutions/sale1.gif" style="width:100%" onload="setTimeout('document.getElementById(\'imageDisplay2\').src=\'http://localhost/AutoSolutions/sale1.gif?\'+new Date().getMilliseconds()',10000)">
        </div>

        <div class="w3-center">
            <h3>Ideas for A Great Roadtrip</h3>
        </div>
        
        <div class="w3-row">
            <div class="w3-quarter">
                <div class="w3-card-4" style="margin-left:25px;">
                    <div class="w3-panel w3-center">
                        <img src="http://thumbs.ebaystatic.com/images/g/-3cAAOSwEeFVNxwt/s-l225.jpg">

                        <p>Headlights</p>
                    </div>
                </div>
            </div>
            <div class="w3-quarter">
                <div class="w3-card-4" style="margin-left:25px;">
                    <div class="w3-panel w3-center">
                        <img src="http://thumbs.ebaystatic.com/images/g/kcsAAOSwu4BVwc4R/s-l225.jpg">

                        <p>Taillights</p>
                    </div>
                </div>
            </div>
            <div class="w3-quarter">
                <div class="w3-card-4" style="margin-left:25px;">
                    <div class="w3-panel w3-center">
                        <img src="http://thumbs.ebaystatic.com/images/g/rzoAAOSw8d9Uw2Uk/s-l225.jpg">

                        <p>Rear Taillamp Taillights</p>
                    </div>
                </div>
            </div>
            <div class="w3-quarter">
                <div class="w3-card-4" style="margin-left:25px;">
                    <div class="w3-panel w3-center">
                        <img src="http://thumbs.ebaystatic.com/images/g/llkAAOSwT5tWMoX1/s-l225.jpg">

                        <p>Wheels - Rims</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="banner topbanmargin w3-theme-d3" style="margin-top:-5px;">
            <font size="5" color="white"><b>4 DAYS ONLY!</font> <font color="white">MARCH 10-12, 2017</b> UP TO 15% OFF FOR ALL ITEMS IN STORE</font>
        </div>

        <div class="w3-panel">
            <img id="imageDisplay1" src="http://localhost/AutoSolutions/sale2.gif" style="width:100%" onload="setTimeout('document.getElementById(\'imageDisplay1\').src=\'http://localhost/AutoSolutions/sale2.gif?\'+new Date().getMilliseconds()',10000)">
        </div>

        <div class="banner topbanmargin w3-theme-d3" style="margin-top:-10px;">
            <font color="white"><b>APPLY FOR CREDIT CARD | SAVE 10% OFF FOR ALL CAR PARTS IN STORE</b></font>
        </div>

        <div class="topic" style="margin-top:20px;">
            <b>What's New????</b>
        </div>

        <div class="w3-panel imageround">
            <img src="http://localhost/AutoSolutions/sale3.jpg" style="width:100%;">
        </div>

        <div class="topic" style="margin-top:20px;">
            <b>Deals you don't want to Miss Out on!</b>
        </div>

        <div class="w3-panel imageround">
            <img src="http://localhost/AutoSolutions/sale4.jpg" style="width:100%;">
        </div>

        <div class="w3-panel w3-padding-16 w3-border" style="border:3px solid black;">
            <h3><center>Find parts for your automobile</center></h3>

            Select a vehicle:
            <form action="searching2.php" method="POST">
                <select id ="year" name="year" onchange="getmakename(this.options[this.selectedIndex].value)">
                    <option id="0" name="0" value="0">Select Year</option>
                    <option id="1" name="1" value="1">2016</option>
                    <option id="2" name="2" value="2">2015</option>
                    <option id="3" name="3" value="3">2014</option>
                </select>
                <select id="make" name="make" style="width:300px;" onchange="getmodelname(this.options[this.selectedIndex].value)">
                    <option id="0" name="0" value="0">Select Make</option>
                </select>
                <select id="model" name="model">
                    <option id="0" name="0" value="0">select Model</option>
                </select>
                <input type="submit" name="submit" value="Submit">
            </form>
        </div>

    <!-- End Main -->
    </div>
    
    <!-- Footer -->
    <footer class="w3-container w3-padding-32 w3-white" style="margin-left:150px;">
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
                
                <a href="adminsignin.php" class="w3-hover-white">Admin Section</a>
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

    function getmakename(year) {
        var selection = document.getElementById("make");

        var makes = [
            ["Select Make","Honda", "Nissan", "Toyota", "Chevy"],
            ["Select Make","Honda", "Nissan", "Toyota", "Chevy"],
            ["Select Make","Honda", "Nissan", "Toyota", "Chevy"]
        ];

        if((year >= 0) && (year <= makes.length)) {
            selection.options.length = 0;

            for(var i = 0; i < makes[year - 1].length; i++) {
                selection.options[selection.options.length] = new Option(makes[year - 1][i], i);
            }
        }
    }

    function getmodelname(make) {
        var selection = document.getElementById("model");

        var models = [
            ["Select Model", "Civic", "CR-V", "Odyssey", "CR-Z", "Insight"],
            ["Select Model", "GT-R", "370Z", "Cube", "Sentra", "Rogue"],
            ["Select Model", "Camry", "Yaris", "Corolla", "Tacoma"],
            ["Select Model", "Cobalt", "Corvette", "Bolt", "Camaro", "Cavalier"]
        ];

        if((make >= 0) && (make <= models.length)) {
            selection.options.length = 0;

            for(var i = 0; i < models[make - 1].length; i++) {
                selection.options[selection.options.length] = new Option(models[make - 1][i], i);
            }
        }
    }
    </script>
</body>
</html>