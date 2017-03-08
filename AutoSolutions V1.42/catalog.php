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
            <li class="w3-hide-small w3-right">
            <form action="exitmain.php">
                <input type="submit" name="exit" value="x">
            </form></li>
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
                <form action="#" method="POST">
                    <input type="text" id="search" name="search" placeholder="search item" id='search-text-input' style="width:425px; margin-top:0px;">
                </form></a>
            </li>
        </ul>
        </nav>
    </div>

    <nav class="w3-sidenav w3-collapse w3-theme-l3 w3-animate-left text-center" style="z-index:3;width:165px;margin-top:1px;" id="mySidenav">
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
    <div class="w3-main" style="margin-left:150px; margin-top:150px;">

        <div class="w3-container w3-center">
            <h1>Catalog</h1>
            <h4>Where vehicles meet their match.</h4>
        </div>

        <div class="w3-accordion w3-light-grey">
            <button onclick="myFunction('ABS')" class="w3-btn-block w3-theme-l3 w3-left-align">
                Anti-Lock Brake System (ABS)
            </button>
            <div id="ABS" class="w3-accordion-content w3-container">
                <div class="w3-row">
                    <div class="w3-quarter">
                        <div class="w3-card-4">
                            <div class="w3-panel w3-center">
                                <img src="http://thumbs.ebaystatic.com/images/g/qe8AAOSw2GlXGdqe/s-l225.jpg">

                                <p name="item1">2 PCS Front Left and Right ABS Wheel Speed Sensor</p>
                                <p name="vehicle">Vehicle: Chevy GMC/Cadillac</p>
                                <p>Price: $17.90</p>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#item1">Add to Cart</button>

        <div id="item1" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">2 PCS Front Left and Right ABS Wheel Speed Sensor</h4>
                    </div>
                    <div class="modal-body">
                        <img src="http://thumbs.ebaystatic.com/images/g/qe8AAOSw2GlXGdqe/s-l225.jpg">

                        <p name="item1">2 PCS Front Left and Right ABS Wheel Speed Sensor</p>
                        <p name="vehicle1">Vehicle: Chevy GMC/Cadillac</p>
                        <p>Price: $17.90</p>
                        <form action="abscart.php"method="get">
                            Quantity: 
                            <input type="text" name="quantity1" style="width:50px" id="quantity1"><br>
                            <input type="submit" name="submit" value="Add to Cart" id="item1">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
                            </div>
                        </div>
                    </div>
                    <div class="w3-quarter">
                        <div class="w3-card-4">
                            <div class="w3-panel w3-center">
                                <img src="http://thumbs.ebaystatic.com/images/g/N6MAAOSw8w1X2MoY/s-l225.jpg">

                                <p name="item2">2x Front Left and Right ABS Wheel Speed Sensor</p>
                                <p name="vehicle2">Chevy GMC</p>
                                <p>Price: $17.29</p>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#item2">Add to Cart</button>

        <div id="item2" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <img src="http://thumbs.ebaystatic.com/images/g/N6MAAOSw8w1X2MoY/s-l225.jpg">

                        <p name="item2">2x Front Left and Right ABS Wheel Speed Sensor</p>
                        <p name="vehicle2">Vehicle: Chevy GMC</p>
                        <p>Price: $17.29</p>
                        <form action="abscart.php"method="get">
                            Quantity: 
                            <input type="text" name="quantity2" style="width:50px" id="quantity2"><br>
                            <input type="submit" name="submit" value="Add to Cart" id="item2">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
                            </div>
                        </div>
                    </div>
                    <div class="w3-quarter">
                        <div class="w3-card-4">
                            <div class="w3-panel w3-center">
                                <img src="http://thumbs.ebaystatic.com/images/g/3JMAAOSwHsRYCokm/s-l225.jpg">

                                <p name="item3">ABS Pump Brake Control Module OEM</p>
                                <p name="vehicle3">Vehicle: Toyota Corolla Matrix 4WD</p>
                                <p>Price: $99.99</p>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#item3">Add to Cart</button>

        <div id="item3" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <img src="http://thumbs.ebaystatic.com/images/g/3JMAAOSwHsRYCokm/s-l225.jpg">

                        <p name="item3">ABS Pump Brake Control Module OEM</p>
                        <p name="vehicle3">Vehicle: Toyota Corolla Matrix 4WD</p>
                        <p>Price: $99.99</p>
                        <form action="abscart.php"method="get">
                            Quantity: 
                            <input type="text" name="quantity3" style="width:50px" id="quantity3"><br>
                            <input type="submit" name="submit" value="Add to Cart" id="item4">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
                            </div>
                        </div>
                    </div>
                    <div class="w3-quarter">
                        <div class="w3-card-4">
                            <div class="w3-panel w3-center">
                                <img src="http://thumbs.ebaystatic.com/images/g/7G8AAOSwqu9U0IrB/s-l225.jpg">

                                <p name="item4">ABS Wheel Speed Sensor Front Left</p>
                                <p name="vehicle4">Vehicle: Honda Odyssey</p>
                                <p>Price: $18.99</p>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#item4">Add to Cart</button>

        <div id="item4" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <img src="http://thumbs.ebaystatic.com/images/g/7G8AAOSwqu9U0IrB/s-l225.jpg">

                        <p name="item4">ABS Wheel Speed Sensor Front Lef</p>
                        <p name="vehicle4">Vehicle: Honda Odyssey</p>
                        <p>Price: $18.99</p>
                        <form action="abscart.php"method="get">
                            Quantity: 
                            <input type="text" name="quantity4" style="width:50px" id="quantity4"><br>
                            <input type="submit" name="submit" value="Add to Cart" id="item4">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button onclick="myFunction('Brakes')" class="w3-btn-block w3-theme-l3 w3-left-align">
                Brakes
            </button>
            <div id="Brakes" class="w3-accordion-content w3-container">
                <div class="w3-row">
                    <div class="w3-quarter">
                        <div class="w3-card-4">
                            <div class="w3-panel w3-center">
                                <img src="http://thumbs.ebaystatic.com/images/g/qkcAAOSwA3dYJnMm/s-l225.jpg">

                                <p name="item5">2 Complete Front and Rear Pair Disc Brake Rotors and 8 Ceramic Pads</p>
                                <p name="vehicle5">Vehicle: All Vehicles</p>
                                <p>Price: $105.60</p>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#item5">Add to Cart</button>

        <div id="item5" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <img src="http://thumbs.ebaystatic.com/images/g/qkcAAOSwA3dYJnMm/s-l225.jpg">

                        <p name="item5">2 Complete Front and Rear Pair Disc Brake Rotors and 8 Ceramic Pads</p>
                        <p name="vehicle5">Vehicle: All Vehicles</p>
                        <p>Price: $105.60</p>
                        <form action="brakecart.php"method="get">
                            Quantity: 
                            <input type="text" name="quantity5" style="width:50px" id="quantity5"><br>
                            <input type="submit" name="submit" value="Add to Cart" id="item5">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
                            </div>
                        </div>
                    </div>
                    <div class="w3-quarter">
                        <div class="w3-card-4">
                            <div class="w3-panel w3-center">
                                <img src="http://thumbs.ebaystatic.com/images/g/EpgAAOSwcLxYLL1-/s-l225.jpg">

                                <p name="item6">Set of 4 Performance Drilled and Slotted Brake Rotors</p>
                                <p name="vehicle6">Vehicle: All Vehicles</p>
                                <p>Price: $84.78</p>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#item6">Add to Cart</button>

        <div id="item6" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <img src="http://thumbs.ebaystatic.com/images/g/EpgAAOSwcLxYLL1-/s-l225.jpg">

                        <p name="item6">Set of 4 Performance Drilled and Slotted Brake Rotors</p>
                        <p name="vehicle6">Vehicle: All Vehicles</p>
                        <p>Price: $84.78</p>
                        <form action="brakecart.php"method="get">
                            Quantity: 
                            <input type="text" name="quantity6" style="width:50px" id="quantity6"><br>
                            <input type="submit" name="submit" value="Add to Cart" id="item6">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
                            </div>
                        </div>
                    </div>
                    <div class="w3-quarter">
                        <div class="w3-card-4">
                            <div class="w3-panel w3-center">
                                <img src="http://thumbs.ebaystatic.com/images/g/oIAAAOSwXyVYJke8/s-l225.jpg">

                                <p name="item7">4 Performance Drilled Slotted Brake Rotors and 8 Ceramic Pads</p>
                                <p name="vehicle7">Vehicle: All Vehicles</p>
                                <p>Price: $290.14</p>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#item7">Add to Cart</button>

        <div id="item7" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <img src="http://thumbs.ebaystatic.com/images/g/oIAAAOSwXyVYJke8/s-l225.jpg">

                        <p name="item7">4 Performance Drilled Slotted Brake Rotors and 8 Ceramic Pads</p>
                        <p name="vehicle7">Vehicle: All Vehicles</p>
                        <p>Price: $290.14</p>
                        <form action="brakecart.php"method="get">
                            Quantity: 
                            <input type="text" name="quantity7" style="width:50px" id="quantity7"><br>
                            <input type="submit" name="submit" value="Add to Cart" id="item7">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
                            </div>
                        </div>
                    </div>
                    <div class="w3-quarter">
                        <div class="w3-card-4">
                            <div class="w3-panel w3-center">
                                <img src="http://thumbs.ebaystatic.com/images/g/JMMAAOSwcLxYJj2W/s-l225.jpg">

                                <p name="item8">Performance Drilled and Slotted Rotors Pair and Premium Ceramic Brake Pads</p>
                                <p name="vehicle8">Vehicle: All Vehicles</p>
                                <p>Price: $61.56</p>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#item8">Add to Cart</button>

        <div id="item8" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <img src="http://thumbs.ebaystatic.com/images/g/JMMAAOSwcLxYJj2W/s-l225.jpg">

                        <p name="item8">Performance Drilled and Slotted Rotors Pair and Premium Ceramic Brake Pads</p>
                        <p name="vehicle8">Vehicle: All Vehicles</p>
                        <p>Price: $61.56</p>
                        <form action="brakecart.php"method="get">
                            Quantity: 
                            <input type="text" name="quantity8" style="width:50px" id="quantity8"><br>
                            <input type="submit" name="submit" value="Add to Cart" id="item8">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button onclick="myFunction('Wheels')" class="w3-btn-block w3-theme-l3 w3-left-align">
                Wheels
            </button>
            <div id="Wheels" class="w3-accordion-content w3-container">
                <div class="w3-row">
                    <div class="w3-quarter">
                        <div class="w3-card-4">
                            <div class="w3-panel w3-center">
                                <img src="http://thumbs.ebaystatic.com/images/g/llkAAOSwT5tWMoX1/s-l225.jpg">

                                <p name="item9">Silver Wheels Rims (Set: 4)</p>
                                <p name="vehicle9">Vehicle: All Vehicles</p>
                                <p>Price: $900.00</p>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#item9">Add to Cart</button>

        <div id="item9" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <img src="http://thumbs.ebaystatic.com/images/g/llkAAOSwT5tWMoX1/s-l225.jpg">

                        <p name="item9">Silver Wheels Rims (Set: 4)</p>
                        <p name="vehicle9">Vehicle: All Vehicles</p>
                        <p>Price: $900.00</p>
                        <form action="tirescart.php"method="get">
                            Quantity: 
                            <input type="text" name="quantity9" style="width:50px" id="quantity9"><br>
                            <input type="submit" name="submit" value="Add to Cart" id="item9">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
                            </div>
                        </div>
                    </div>
                    <div class="w3-quarter">
                        <div class="w3-card-4">
                            <div class="w3-panel w3-center">
                                <img src="http://thumbs.ebaystatic.com/images/g/2gAAAOSw4GVYIjN9/s-l225.jpg">

                                <p name="item10">NANKANG Noble Sport Tires (set: 4)</p>
                                <p name="vehicle10">Vehicle: All Vehicles</p>
                                <p>Price: $252.00</p>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#item10">Add to Cart</button>

        <div id="item10" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <img src="http://thumbs.ebaystatic.com/images/g/2gAAAOSw4GVYIjN9/s-l225.jpg">

                        <p name="item10">NANKANG Noble Sport Tires (set: 4)</p>
                        <p name="vehicle10">Vehicle: All Vehicles</p>
                        <p>Price: $252.00</p>
                        <form action="tirescart.php"method="get">
                            Quantity: 
                            <input type="text" name="quantity10" style="width:50px" id="quantity10"><br>
                            <input type="submit" name="submit" value="Add to Cart" id="item10">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
                            </div>
                        </div>
                    </div>
                    <div class="w3-quarter">
                        <div class="w3-card-4">
                            <div class="w3-panel w3-center">
                                <img src="http://thumbs.ebaystatic.com/images/g/SJIAAOSw42JWEKRd/s-l225.jpg">

                                <p name="item11">Vision Warrior Black Machined 6 Lug Wheels Rims (set: 4)</p>
                                <p name="vehicle11">Vehicle: Chevy, GMC, and Toyota</p>
                                <p>Price: $418.00</p>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#item11">Add to Cart</button>

        <div id="item11" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <img src="http://thumbs.ebaystatic.com/images/g/SJIAAOSw42JWEKRd/s-l225.jpg">

                        <p name="item11">Vision Warrior Black Machined 6 Lug Wheels Rims (set: 4)</p>
                        <p name="vehicle11">Vehicle: Chevy, GMC, and Toyota</p>
                        <p>Price: $418.00</p>
                        <form action="tirescart.php"method="get">
                            Quantity: 
                            <input type="text" name="quantity11" style="width:50px" id="quantity11"><br>
                            <input type="submit" name="submit" value="Add to Cart" id="item11">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
                            </div>
                        </div>
                    </div>
                    <div class="w3-quarter">
                        <div class="w3-card-4">
                            <div class="w3-panel w3-center">
                                <img src="http://thumbs.ebaystatic.com/images/g/-ngAAOSwnbZYIluI/s-l225.jpg">

                                <p name="item12">COOPER Discoverer Tires (set: 4)</p>
                                <p name="vehicle12">Vehicle: All Vehicles</p>
                                <p>Price: $444.00</p>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#item12">Add to Cart</button>

        <div id="item12" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <img src="http://thumbs.ebaystatic.com/images/g/-ngAAOSwnbZYIluI/s-l225.jpg">

                        <p name="item12">COOPER Discoverer Tires (set: 4)</p>
                        <p name="vehicle12">Vehicle: All Vehicles</p>
                        <p>Price: $444.00</p>
                        <form action="tirescart.php"method="get">
                            Quantity: 
                            <input type="text" name="quantity12" style="width:50px" id="quantity12"><br>
                            <input type="submit" name="submit" value="Add to Cart" id="item12">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button onclick="myFunction('Headlights')" class="w3-btn-block w3-theme-l3 w3-left-align">
                Headlights
            </button>
            <div id="Headlights" class="w3-accordion-content w3-container">
                <div class="w3-row">
                    <div class="w3-quarter">
                        <div class="w3-card-4">
                            <div class="w3-panel w3-center">
                                <img src="http://thumbs.ebaystatic.com/images/g/-3cAAOSwEeFVNxwt/s-l225.jpg">

                                <p name="item13">Pickup Black Halo Projector LED Headlights</p>
                                <p name="vehicle13">Vehicle: Toyota Tacoma</p>
                                <p>Price: $132.04</p>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#item13">Add to Cart</button>

        <div id="item13" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <img src="http://thumbs.ebaystatic.com/images/g/-3cAAOSwEeFVNxwt/s-l225.jpg">

                        <p name="item13">Pickup Black Halo Projector LED Headlights</p>
                        <p name="vehicle13">Vehicle: Toyota Tacoma</p>
                        <p>Price: $132.04</p>
                        <form action="headlightscart.php"method="get">
                            Quantity: 
                            <input type="text" name="quantity13" style="width:50px" id="quantity13"><br>
                            <input type="submit" name="submit" value="Add to Cart" id="item13">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
                            </div>
                        </div>
                    </div>
                    <div class="w3-quarter">
                        <div class="w3-card-4">
                            <div class="w3-panel w3-center">
                                <img src="http://thumbs.ebaystatic.com/images/g/d2sAAOSwYlJW3gSj/s-l225.jpg">

                                <p name="item14">Angel Eye Halo LED Projector Black Headlights</p>
                                <p name="vehicle14">Vehicle: Dodge RAM</p>
                                <p>Price: $191.02</p>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#item14">Add to Cart</button>

        <div id="item14" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <img src="http://thumbs.ebaystatic.com/images/g/d2sAAOSwYlJW3gSj/s-l225.jpg">

                        <p name="item14">Angel Eye Halo LED Projector Black Headlights</p>
                        <p name="vehicle14">Vehicle: Dodge RAM</p>
                        <p>Price: $191.02</p>
                        <form action="headlightscart.php"method="get">
                            Quantity: 
                            <input type="text" name="quantity14" style="width:50px" id="quantity14"><br>
                            <input type="submit" name="submit" value="Add to Cart" id="item14">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
                            </div>
                        </div>
                    </div>
                    <div class="w3-quarter">
                        <div class="w3-card-4">
                            <div class="w3-panel w3-center">
                                <img src="http://thumbs.ebaystatic.com/images/g/u3IAAOSwuAVWxs~n/s-l225.jpg">

                                <p name="item15">Black Crystal Headlights</p>
                                <p name="vehicle15">Vehicle: 2006-2008 Dodge Ram</p>
                                <p>Price: $124.03</p>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#item15">Add to Cart</button>

        <div id="item15" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <img src="http://thumbs.ebaystatic.com/images/g/u3IAAOSwuAVWxs~n/s-l225.jpg">

                        <p name="item15">Black Crystal Headlights</p>
                        <p name="vehicle15">Vehicle: 2006-2008 Dodge Ram</p>
                        <p>Price: $124.03</p>
                        <form action="headlightscart.php"method="get">
                            Quantity: 
                            <input type="text" name="quantity15" style="width:50px" id="quantity15"><br>
                            <input type="submit" name="submit" value="Add to Cart" id="item15">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
                            </div>
                        </div>
                    </div>
                    <div class="w3-quarter">
                        <div class="w3-card-4">
                            <div class="w3-panel w3-center">
                                <img src="http://thumbs.ebaystatic.com/images/g/1WsAAOSw5ZBWHswf/s-l225.jpg">

                                <p name="item16">Headlights Headlamps Pair Set</p>
                                <p name="vehicle16">Vehicle: Pontiac Grand Prix</p>
                                <p>Price: $87.90</p>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#item16">Add to Cart</button>

        <div id="item16" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <img src="http://thumbs.ebaystatic.com/images/g/1WsAAOSw5ZBWHswf/s-l225.jpg">

                        <p name="item16">Headlights Headlamps Pair Set</p>
                        <p name="vehicle16">Vehicle: Pontiac Grand Prix</p>
                        <p>Price: $87.90</p>
                        <form action="headlightscart.php"method="get">
                            Quantity: 
                            <input type="text" name="quantity16" style="width:50px" id="quantity16"><br>
                            <input type="submit" name="submit" value="Add to Cart" id="item16">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button onclick="myFunction('Taillights')" class="w3-btn-block w3-theme-l3 w3-left-align">
                Taillights
            </button>
            <div id="Taillights" class="w3-accordion-content w3-container">
                <div class="w3-row">
                    <div class="w3-quarter">
                        <div class="w3-card-4">
                            <div class="w3-panel w3-center">
                                <img src="http://thumbs.ebaystatic.com/images/g/rzoAAOSw8d9Uw2Uk/s-l225.jpg">

                                <p name="item17">Taillight Taillamp Brake Light Left Driver Side Rear</p>
                                <p name="vehicle17">Vehicle: 07-09 Nissan Sentra</p>
                                <p>Price: $41.55</p>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#item17">Add to Cart</button>

        <div id="item17" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <img src="http://thumbs.ebaystatic.com/images/g/rzoAAOSw8d9Uw2Uk/s-l225.jpg">

                        <p name="item17">Taillight Taillamp Brake Light Left Driver Side Rear</p>
                        <p name="vehicle17">Vehicle: 07-09 Nissan Sentra</p>
                        <p>Price: $41.55</p>
                        <form action="taillightscart.php"method="get">
                            Quantity: 
                            <input type="text" name="quantity17" style="width:50px" id="quantity17"><br>
                            <input type="submit" name="submit" value="Add to Cart" id="item17">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
                            </div>
                        </div>
                    </div>
                    <div class="w3-quarter">
                        <div class="w3-card-4">
                            <div class="w3-panel w3-center">
                                <img src="http://thumbs.ebaystatic.com/images/g/kcsAAOSwu4BVwc4R/s-l225.jpg">

                                <p name="item18">Replacement Rear Brake Tail lights</p>
                                <p name="vehicle18">Vehicle: 2004-2008 Ford F-150 Pickup</p>
                                <p>Price: $67.98</p>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#item18">Add to Cart</button>

        <div id="item18" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <img src="http://thumbs.ebaystatic.com/images/g/kcsAAOSwu4BVwc4R/s-l225.jpg">

                        <p name="item18">Replacement Rear Brake Tail lights</p>
                        <p name="vehicle18">Vehicle: 2004-2008 Ford F-150 Pickup</p>
                        <p>Price: $67.98</p>
                        <form action="taillightscart.php"method="get">
                            Quantity: 
                            <input type="text" name="quantity18" style="width:50px" id="quantity18"><br>
                            <input type="submit" name="submit" value="Add to Cart" id="item18">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
                            </div>
                        </div>
                    </div>
                    <div class="w3-quarter">
                        <div class="w3-card-4">
                            <div class="w3-panel w3-center">
                                <img src="http://thumbs.ebaystatic.com/images/g/y4UAAOSwAYtWKfRi/s-l225.jpg">

                                <p name="item19">Tail Lights LED Rear Lamp Brake</p>
                                <p name="vehicle19">Vehicle: 2015-2016 GMC Cadillac Escalade</p>
                                <p>Price: $499.99</p>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#item19">Add to Cart</button>

        <div id="item19" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <img src="http://thumbs.ebaystatic.com/images/g/y4UAAOSwAYtWKfRi/s-l225.jpg">

                        <p name="item19">Tail Lights LED Rear Lamp Brake</p>
                        <p name="vehicle19">Vehicle: 2015-2016 GMC Cadillac Escalade</p>
                        <p>Price: $499.99</p>
                        <form action="taillightscart.php"method="get">
                            Quantity: 
                            <input type="text" name="quantity3" style="width:50px" id="quantity3"><br>
                            <input type="submit" name="submit" value="Add to Cart" id="item19">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
                            </div>
                        </div>
                    </div>
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