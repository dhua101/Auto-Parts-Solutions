<?php
    session_start();
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
        .banner {
            width: 100%;
            height: auto;
            padding: 10px;
            -webkit-box-sizing:border-box;
            -moz-box-sizing:border-box;
            border: 1px solid black;
            text-align: center;
        }

        .salebanner {
            width: 100%;
            height: auto;
            padding: 10px;
            -webkit-box-sizing:border-box;
            -moz-box-sizing:border-box;
            border: 1px solid black;
            text-align: center;
            background: green;
        }

        .topmargin {
            margin-top:25px;
        }

        .topbanmargin {
            margin-top: 85px;
        }
        img {
            width: 50%;
        }

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
            <a class="navbar-brand" href="home.php">Auto Solutions</a>
            <li><a href="catalog.php" class="w3-hover-white">Catalog</a></li>
            <li><a href="partsaccessories.php" class="w3-hover-white">Parts and Accessories</a></li>
            <li><a href="contact.php" class="w3-hover-white">Contact</a></li>
            <li class="w3-right"><a href="shoppingcart.php" class="w3-hover-brown" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
            <li class="w3-right" style="margin-top:15px; margin-left:350px; margin-right:50px;">
                <form action="searching.php" method="POST">
                    <input type="text" id="search" name="search" placeholder="search item" id='search-text-input' style="width:425px; margin-top:0px;">
                </form></a>
            </li>
        </ul>
        </nav>
    </div>

    <nav class="w3-sidenav w3-collapse w3-theme-l3 w3-animate-left text-center" style="z-index:3;width:165px;margin-top:-49px;" id="mySidenav">
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
    <div class="w3-main" style="margin-left:200px; margin-top:200px;">

        <div class="col-xs-3">
            <div class="row">
                <div class="col-xs-6">
                    Table Name
                </div>
                <div class="col-xs-6">
                    # of Records
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6">
                    <a href="employee_absstock_selection.php" name="absstock">absstock_tbl</a>
                    <a href="employee_bmwstock_selection.php" name="bmwstock">bmwstock_tbl</a>
                    <a href="employee_brakestock_selection.php" name="brakestock">brakestock_tbl</a>
                    <a href="employee_headlightsstock_selection.php" name="headlightsstock">headlightsstock_tbl</a>
                    <a href="employee_hondastock_selection.php" name="hondastock">hondastock_tbl</a>
                    <a href="employee_lightsstock_selection.php" name="lightsstock">lightsstock_tbl</a>
                    <a href="employee_sumtiresstock_selection.php" name="sumtiresstock">sumtiresstock_tbl</a>
                    <a href="employee_taillightsstock_selection.php" name="taillightsstock">taillightsstock_tbl</a>
                    <a href="employee_tiresstock_selection.php" name="tiresstock">tiresstock_tbl</a>
                    <a href="employee_toyotastock_selection.php" name="toyotastock">toyotastock_tbl</a>
                    <a href="employee_wintiresstock_selection.php" name="wintiresstock">wintiresstock_tbl</a>
                </div>
                <div class="col-xs-6">
<?php 
    error_reporting(0);

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

    // Select the database
    mysql_select_db("autosolution_db");

    $sqlabsstockcount = "SELECT COUNT(*) as total1 FROM absstock_tbl";
    $sqlabsstockcountquery = mysql_query($sqlabsstockcount, $connection);
    $count1 = mysql_fetch_assoc($sqlabsstockcountquery);
    echo $count1['total1'] . "<br>";

    $sqlbmwstockcount = "SELECT COUNT(*) as total2 FROM bmwstock_tbl";
    $sqlbmwstockcountquery = mysql_query($sqlbmwstockcount, $connection);
    $count2 = mysql_fetch_assoc($sqlbmwstockcountquery);
    echo $count2['total2'] . "<br>";

    $sqlbrakestockcount = "SELECT COUNT(*) as total3 FROM brakestock_tbl";
    $sqlbrakestockcountquery = mysql_query($sqlbrakestockcount, $connection);
    $count3 = mysql_fetch_assoc($sqlbrakestockcountquery);
    echo $count3['total3'] . "<br>";

    $sqlheadlightsstockcount = "SELECT COUNT(*) as total4 FROM headlightsstock_tbl";
    $sqlheadlightsstockcountquery = mysql_query($sqlheadlightsstockcount, $connection);
    $count4 = mysql_fetch_assoc($sqlheadlightsstockcountquery);
    echo $count4['total4'] . "<br>";

    $sqlhondastockcount = "SELECT COUNT(*) as total5 FROM hondastock_tbl";
    $sqlhondastockcountquery = mysql_query($sqlhondastockcount, $connection);
    $count5 = mysql_fetch_assoc($sqlhondastockcountquery);
    echo $count5['total5'] . "<br>";

    $sqllightsstockcount = "SELECT COUNT(*) as total6 FROM lightsstock_tbl";
    $sqllightsstockcountquery = mysql_query($sqllightsstockcount, $connection);
    $count6 = mysql_fetch_assoc($sqllightsstockcountquery);
    echo $count6['total6'] . "<br>";

    $sqlsumtiresstockcount = "SELECT COUNT(*) as total7 FROM sumtiresstock_tbl";
    $sqlsumtiresstockcountquery = mysql_query($sqlsumtiresstockcount, $connection);
    $count7 = mysql_fetch_assoc($sqlsumtiresstockcountquery);
    echo $count7['total7'] . "<br>";

    $sqltaillightsstockcount = "SELECT COUNT(*) as total8 FROM taillightsstock_tbl";
    $sqltaillightsstockcountquery = mysql_query($sqltaillightsstockcount, $connection);
    $count8 = mysql_fetch_assoc($sqltaillightsstockcountquery);
    echo $count8['total8'] . "<br>";

    $sqltiresstockcount = "SELECT COUNT(*) as total9 FROM tiresstock_tbl";
    $sqltiresstockcountquery = mysql_query($sqltiresstockcount, $connection);
    $count9 = mysql_fetch_assoc($sqltiresstockcountquery);
    echo $count9['total9'] . "<br>";

    $sqltoyotastockcount = "SELECT COUNT(*) as total10 FROM toyotastock_tbl";
    $sqltoyotastockcountquery = mysql_query($sqltoyotastockcount, $connection);
    $count10 = mysql_fetch_assoc($sqltoyotastockcountquery);
    echo $count10['total10'] . "<br>";

    $sqlwintiresstockcount = "SELECT COUNT(*) as total11 FROM wintiresstock_tbl";
    $sqlwintiresstockcountquery = mysql_query($sqlwintiresstockcount, $connection);
    $count11 = mysql_fetch_assoc($sqlwintiresstockcountquery);
    echo $count11['total11'] . "<br>";
?>
                </div>
            </div>
        </div>
        <div class="col-xs-3">
            <div class="row">
                <div class="col-xs-6">
                    Table Name
                </div>
                <div class="col-xs-6">
                    # of Records
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6">
                    <a href="employee_account_selection.php" name="account">account_tbl</a>
                    <a href="employee_information_selection.php" name="information">information_tbl</a>
                </div>
                <div class="col-xs-6">
<?php 
    error_reporting(0);

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

    // Select the database
    mysql_select_db("autosolution_db");

    $sqlaccountcount = "SELECT COUNT(*) as total12 FROM account_tbl";
    $sqlaccountcountquery = mysql_query($sqlaccountcount, $connection);
    $count12 = mysql_fetch_assoc($sqlaccountcountquery);
    echo $count12['total12'] . "<br>";

    $sqlinformationcount = "SELECT COUNT(*) as total13 FROM information_tbl";
    $sqlinformationcountquery = mysql_query($sqlinformationcount, $connection);
    $count13 = mysql_fetch_assoc($sqlinformationcountquery);
    echo $count13['total13'] . "<br>";
?>
                </div>
            </div>
        </div>
        <div class="col-xs-6">
                        <h3>SQL Statement</h3>
                        <form method="post" action="employee_sql_statement.php">
                            Mode: SELECT
                            <br>
                            Fields:
                            <input type="text" id="fields" name="fields">
                            <br>
                            (separate each field by comma ",");
                            <br>
                            Table Select:
                            <br>
                            <select name="tables">
                                <option name="any" value="any">Select a table</option>
                                <option name="absstock_tbl" value="absstock_tbl">absstock_tbl</option>
                                <option name="bmwstock_tbl" value="bmwstock_tbl">bmwstock_tbl</option>
                                <option name="brakestock_tbl" value="brakestock_tbl">brakestock_tbl</option>
                                <option name="headlightsstock_tbl" value="headlightsstock_tbl">headlightsstock_tbl</option>
                                <option name="hondastock_tbl" value="hondastock_tbl">hondastock_tbl</option>
                                <option name="lightsstock_tbl" value="lightsstock_tbl">lightsstock_tbl</option>
                                <option name="sumtiresstock_tbl" value="sumtiresstock_tbl">sumtiresstock_tbl</option>
                                <option name="taillightsstock_tbl" value="taillightsstock_tbl">taillightsstock_tbl</option>
                                <option name="tiresstock_tbl" value="tiresstock_tbl">tiresstock_tbl</option>
                                <option name="toyotastock_tbl" value="toyotastock_tbl">toyotastock_tbl</option>
                                <option name="wintiresstock_tbl" value="wintiresstock_tbl">wintiresstock_tbl</option>
                            </select>
                            <br>
                            Condition:
                            <input type="text" name="condition">
                            <br>
                            <br>
                            <input type="submit" id="runsql" class="btn btn-default" name="runsql" value="Run SQL">
                        </form>
                        <form method="post" action="employee_sql_insert_statement.php">
                            Mode: INSERT
                            <br>
                            Table Select:
                            <br>
                            <select name="tables">
                                <option name="any" value="any">Select a table</option>
                                <option name="absstock_tbl" value="absstock_tbl">absstock_tbl</option>
                                <option name="bmwstock_tbl" value="bmwstock_tbl">bmwstock_tbl</option>
                                <option name="brakestock_tbl" value="brakestock_tbl">brakestock_tbl</option>
                                <option name="headlightsstock_tbl" value="headlightsstock_tbl">headlightsstock_tbl</option>
                                <option name="hondastock_tbl" value="hondastock_tbl">hondastock_tbl</option>
                                <option name="lightsstock_tbl" value="lightsstock_tbl">lightsstock_tbl</option>
                                <option name="sumtiresstock_tbl" value="sumtiresstock_tbl">sumtiresstock_tbl</option>
                                <option name="taillightsstock_tbl" value="taillightsstock_tbl">taillightsstock_tbl</option>
                                <option name="tiresstock_tbl" value="tiresstock_tbl">tiresstock_tbl</option>
                                <option name="toyotastock_tbl" value="toyotastock_tbl">toyotastock_tbl</option>
                                <option name="wintiresstock_tbl" value="wintiresstock_tbl">wintiresstock_tbl</option>
                            </select>
                            <br>
                            Values:
                            <input type="text" name="values">
                            <br>
                            (each value goes like this 'value1', 'value2'...)
                            <br>
                            <br>
                            <input type="submit" id="runsql2" class="btn btn-default" name="runsql2" value="Run SQL">
                        </form>
                        <form method="post" action="employee_sql_update_statement.php">
                            Mode: UPDATE
                            <br>
                            Fields and Values:
                            <input type="text" id="fields" name="fields">
                            <br>
                            (fields should be like this field1='value1');
                            <br>
                            Table Select:
                            <br>
                            <select name="tables">
                                <option name="any" value="any">Select a table</option>
                                <option name="absstock_tbl" value="absstock_tbl">absstock_tbl</option>
                                <option name="bmwstock_tbl" value="bmwstock_tbl">bmwstock_tbl</option>
                                <option name="brakestock_tbl" value="brakestock_tbl">brakestock_tbl</option>
                                <option name="headlightsstock_tbl" value="headlightsstock_tbl">headlightsstock_tbl</option>
                                <option name="hondastock_tbl" value="hondastock_tbl">hondastock_tbl</option>
                                <option name="lightsstock_tbl" value="lightsstock_tbl">lightsstock_tbl</option>
                                <option name="sumtiresstock_tbl" value="sumtiresstock_tbl">sumtiresstock_tbl</option>
                                <option name="taillightsstock_tbl" value="taillightsstock_tbl">taillightsstock_tbl</option>
                                <option name="tiresstock_tbl" value="tiresstock_tbl">tiresstock_tbl</option>
                                <option name="toyotastock_tbl" value="toyotastock_tbl">toyotastock_tbl</option>
                                <option name="wintiresstock_tbl" value="wintiresstock_tbl">wintiresstock_tbl</option>
                            </select>
                            <br>
                            Condition:
                            <input type="text" name="condition">
                            <br>
                            <br>
                            <input type="submit" id="runsql" class="btn btn-default" name="runsql3" value="Run SQL">
                        </form>
                        <form method="post" action="employee_sql_delete_statement.php">
                            Mode: DELETE
                            <br>
                            Table Select:
                            <br>
                            <select name="tables">
                                <option name="any" value="any">Select a table</option>
                                <option name="absstock_tbl" value="absstock_tbl">absstock_tbl</option>
                                <option name="bmwstock_tbl" value="bmwstock_tbl">bmwstock_tbl</option>
                                <option name="brakestock_tbl" value="brakestock_tbl">brakestock_tbl</option>
                                <option name="headlightsstock_tbl" value="headlightsstock_tbl">headlightsstock_tbl</option>
                                <option name="hondastock_tbl" value="hondastock_tbl">hondastock_tbl</option>
                                <option name="lightsstock_tbl" value="lightsstock_tbl">lightsstock_tbl</option>
                                <option name="sumtiresstock_tbl" value="sumtiresstock_tbl">sumtiresstock_tbl</option>
                                <option name="taillightsstock_tbl" value="taillightsstock_tbl">taillightsstock_tbl</option>
                                <option name="tiresstock_tbl" value="tiresstock_tbl">tiresstock_tbl</option>
                                <option name="toyotastock_tbl" value="toyotastock_tbl">toyotastock_tbl</option>
                                <option name="wintiresstock_tbl" value="wintiresstock_tbl">wintiresstock_tbl</option>
                            </select>
                            <br>
                            Condition:
                            <input type="text" name="condition">
                            <br>
                            <br>
                            <input type="submit" id="runsql" class="btn btn-default" name="runsql4" value="Run SQL">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xs-12" style="margin-left:200px">
                <div class="w3-panel">
                    <h3>SQL Results</h3>
                    <div id="content">
                        <h3>Inventory and Stock</h3>
<?php
    error_reporting(0);

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

    // Select the database
    mysql_select_db("autosolution_db");

    $sqlstockcount = "SELECT COUNT(*) as total FROM absstock_tbl";
    $sqlstockcountquery = mysql_query($sqlstockcount, $connection);
    $count = mysql_fetch_assoc($sqlstockcountquery);
    echo "Number of Records: " . $count['total'];
?>
                        <table>
<?php
    error_reporting(0);

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

    // Select the database
    mysql_select_db("autosolution_db");

    $sqlstock = "SELECT * FROM absstock_tbl";
    $sqlstockquery = mysql_query($sqlstock, $connection);

    echo "<tr><th style='border:1px solid black'>Stock ID</th><th style='border:1px solid black'>Stock Item</th><th style='border:1px solid black'>Stock Quantity</th></tr>";

    while($row = mysql_fetch_assoc($sqlstockquery, MYSQL_ASSOC)) {
        echo "<tr>";
        echo "<td style='border:1px solid black'>" . $row['stock_id'] . "</td><td style='border:1px solid black'>" . $row['stock_item'] . "</td><td style='border:1px solid black'>" . $row['stock_quantity'] . "</td>";
        echo "</tr>";
    }

    mysql_close($connection);
?>
                        </table>
                    </div>
                </div>
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