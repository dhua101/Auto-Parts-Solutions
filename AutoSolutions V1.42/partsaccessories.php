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

        table, th, td {
            border: 1px solid black;
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
            <li><a href="#" class="w3-hover-white">Parts and Accessories</a></li>
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
        <div class="container">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#selection">Selection</a></li>
                <li><a data-toggle="tab" href="#Tires">Tires</a></li>
                <li><a data-toggle="tab" href="#Lights">lights</a></li>
            </ul>

            <div class="tab-content" style="border:1px solid black;">
                <div id="selection" class="tab-pane fade in active">
                    <p>Make a selection of parts or accessories for your vehicle.</p>
                </div>
                <div id="Tires" class="tab-pane fade">
                    <div class="w3-accordion w3-light-grey">
                        <button onclick="openModel('Winter')" class="w3-btn-block w3-theme-l3 w3-left-align">
                            Winter Tires
                        </button>
                        <div id="Winter" class="w3-accordion-content w3-container">
                            <div class="w3-center">
                                <h3>Winter Tires</h3>
                                <p>Combat the snowy and icy roads with these Winter Tires.</p>
                            </div>

                <div class="w3-row">
                    <div class="w3-quarter">
                        <div class="w3-card-4">
                            <div class="w3-panel w3-center">
                                <img src="https://ll-us-i5.wal.co/asr/5a66f3fb-d169-4923-8cf6-958be175381a_1.c0fea01dea5e017769189a598736001f.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF">

                                <p name="item1">General Altimax Arctic Tire 195/65R15SL 91Q BW</p>
                                <p>Price: $73.33</p>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#item1">Add to Cart</button>

        <div id="item1" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <img src="https://ll-us-i5.wal.co/asr/5a66f3fb-d169-4923-8cf6-958be175381a_1.c0fea01dea5e017769189a598736001f.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF">

                        <p name="item1">General Altimax Arctic Tire 195/65R15SL 91Q BW</p>
                        <p name="vehicle1">Car/Minivan</p>
                        <p>Price: $73.33</p>
                        <form action="wintirescart.php"method="get">
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
                                <img src="https://ll-us-i5.wal.co/asr/e675d772-6631-440c-ac01-dac0f8ae51a5_1.e1c416104c52b8a19fc03b3f032d7ec6.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF">

                                <p name="item2">General Altimax Arctic Tire 195/60R15SL 88Q BW</p>
                                <p>Price: $68.60</p>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#item2">Add to Cart</button>

        <div id="item2" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <img src="https://ll-us-i5.wal.co/asr/e675d772-6631-440c-ac01-dac0f8ae51a5_1.e1c416104c52b8a19fc03b3f032d7ec6.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF">

                        <p name="item2">General Altimax Arctic Tire 195/60R15SL 88Q BW</p>
                        <p name="vehicle2">Car/Minivan</p>
                        <p>Price: $68.60</p>
                        <form action="wintirescart.php"method="get">
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
                                <img src="https://ll-us-i5.wal.co/asr/aa7d3d8e-c03f-4c2b-8f08-4acf9494835f_1.cb97ad7a058895b71f31664ea40a458e.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF">

                                <p name="item3">Firestone Winterforce Tire 225/60R16 98S BW</p>
                                <p>Price: $89.99</p>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#item3">Add to Cart</button>

        <div id="item3" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <img src="https://ll-us-i5.wal.co/asr/aa7d3d8e-c03f-4c2b-8f08-4acf9494835f_1.cb97ad7a058895b71f31664ea40a458e.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF">

                        <p name="item3">Firestone Winterforce Tire 225/60R16 98S BW</p>
                        <p name="vehicle3">Passenger</p>
                        <p>Price: $89.99</p>
                        <form action="wintirescart.php"method="get">
                            Quantity: 
                            <input type="text" name="quantity3" style="width:50px" id="quantity3"><br>
                            <input type="submit" name="submit" value="Add to Cart" id="item3">
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
                                <img src="https://ll-us-i5.wal.co/asr/8e2ffd73-16da-4702-b60a-f225670eec5a_1.4d4d4029bcb020779691426abe702dbc.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF">

                                <p name="item4">Hankook I*Pike Rw11 P235/65R18 Tire 104T</p>
                                <p>Price: $126.10</p>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#item4">Add to Cart</button>

        <div id="item4" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <img src="https://ll-us-i5.wal.co/asr/8e2ffd73-16da-4702-b60a-f225670eec5a_1.4d4d4029bcb020779691426abe702dbc.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF">

                        <p name="item4">Hankook I*Pike Rw11 P235/65R18 Tire 104T</p>
                        <p name="vehicle4">Car/Minivan</p>
                        <p>Price: $126.10</p>
                        <form action="wintirescart.php"method="get">
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
                    </div>
                    <div class="w3-accordion w3-light-grey">
                        <button onclick="openModel('Summer')" class="w3-btn-block w3-theme-l3 w3-left-align">
                            Summer Tires
                        </button>
                        <div id="Summer" class="w3-accordion-content w3-container">
                            <div class="w3-center">
                                <h3>Summer Tires</h3>
                                <p>These Summer Tires will should bring the road trip to new levels.</p>
                            </div>

                <div class="w3-row">
                    <div class="w3-quarter">
                        <div class="w3-card-4">
                            <div class="w3-panel w3-center">
                                <img src="https://ll-us-i5.wal.co/asr/f2a770c4-786d-44a5-ab8b-9dc583825143_1.a74d027e4211d3b6394ef2ecd9936e9d.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF">

                                <p name="item5">Nexen Roadian HP SUV Tire 255/50R20XL</p>
                                <p>Price: $127.02</p>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#item5">Add to Cart</button>

        <div id="item5" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <img src="https://ll-us-i5.wal.co/asr/f2a770c4-786d-44a5-ab8b-9dc583825143_1.a74d027e4211d3b6394ef2ecd9936e9d.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF">

                        <p name="item5">Nexen Roadian HP SUV Tire 255/50R20XL</p>
                        <p name="vehicle5">Light Truck/SUV</p>
                        <p>Price: $127.02</p>
                        <form action="sumtirescart.php"method="get">
                            Quantity: 
                            <input type="text" name="quantity1" style="width:50px" id="quantity1"><br>
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
                                <img src="https://ll-us-i5.wal.co/asr/acfbcdaf-e41a-493b-9f3b-98b1c443b0dc_1.866cf47e4aaf4ba005f5562dd018a57f.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF">

                                <p name="item6">Dunlop SP Sport 7000 Tire P215/60R16 94H</p>
                                <p>Price: $110</p>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#item6">Add to Cart</button>

        <div id="item6" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <img src="https://ll-us-i5.wal.co/asr/acfbcdaf-e41a-493b-9f3b-98b1c443b0dc_1.866cf47e4aaf4ba005f5562dd018a57f.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF">

                        <p name="item6">Dunlop SP Sport 7000 Tire P215/60R16 94H</p>
                        <p name="vehicle6">Car/Minivan</p>
                        <p>Price: $110</p>
                        <form action="sumtirescart.php"method="get">
                            Quantity: 
                            <input type="text" name="quantity2" style="width:50px" id="quantity2"><br>
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
                                <img src="https://ll-us-i5.wal.co/asr/3b90c5c3-495f-486a-842c-2fc7a950b9d1_1.31be56adfcec95b61e8aa9c3ef4e8daa.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF">

                                <p name="item7">Pirelli Scorpion STR Tire P275/55R20 111T</p>
                                <p>Price: $169.85</p>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#item7">Add to Cart</button>

        <div id="item7" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <img src="https://ll-us-i5.wal.co/asr/3b90c5c3-495f-486a-842c-2fc7a950b9d1_1.31be56adfcec95b61e8aa9c3ef4e8daa.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF">

                        <p name="item7">Pirelli Scorpion STR Tire P275/55R20 111T</p>
                        <p name="vehicle7">Light Truck/SUV</p>
                        <p>Price: $169.85</p>
                        <form action="sumtirescart.php"method="get">
                            Quantity: 
                            <input type="text" name="quantity3" style="width:50px" id="quantity3"><br>
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
                    </div>
                </div>
            </div>
        </div>
            <div id="Lights" class="tab-pane fade">
                <div class="w3-row">
                    <div class="w3-quarter">
                        <div class="w3-card-4">
                            <div class="w3-panel w3-center">
                                <img src="http://s7d5.scene7.com/is/image/CanadianTire/0202838_1?defaultImage=image_na_EN&wid=160&hei=160&op_sharpen=1">

                                <p name="item8">Sylvania Xtravision Halogen Headlight Bulb, 2-pk</p>
                                <p>Price: $30.99</p>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#item8">Add to Cart</button>

        <div id="item8" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <img src="http://s7d5.scene7.com/is/image/CanadianTire/0202838_1?defaultImage=image_na_EN&wid=160&hei=160&op_sharpen=1">

                        <p name="item8">Sylvania Xtravision Halogen Headlight Bulb, 2-pk</p>
                        <p name="vehicle8"></p>
                        <p>Price: $30.99</p>
                        <form action="lightscart.php"method="get">
                            Quantity: 
                            <input type="text" name="quantity1" style="width:50px" id="quantity1"><br>
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
                    <div class="w3-quarter">
                        <div class="w3-card-4">
                            <div class="w3-panel w3-center">
                                <img src="http://s7d5.scene7.com/is/image/CanadianTire/0202889_1?defaultImage=image_na_EN&wid=160&hei=160&op_sharpen=1">

                                <p name="item9">Sylvania Silverstar Ultra Halogen Headlight Bulb, 2-pk</p>
                                <p>Price: $59.99</p>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#item9">Add to Cart</button>

        <div id="item9" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <img src="http://s7d5.scene7.com/is/image/CanadianTire/0202889_1?defaultImage=image_na_EN&wid=160&hei=160&op_sharpen=1">

                        <p name="item9">Sylvania Silverstar Ultra Halogen Headlight Bulb, 2-pk</p>
                        <p name="vehicle9"></p>
                        <p>Price: $59.99</p>
                        <form action="lightscart.php"method="get">
                            Quantity: 
                            <input type="text" name="quantity2" style="width:50px" id="quantity2"><br>
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
                                <img src="http://s7d5.scene7.com/is/image/CanadianTire/0202832_1?defaultImage=image_na_EN&wid=160&hei=160&op_sharpen=1">

                                <p name="item10">Sylvania SilverStar® Halogen Headlight Bulb, 2-pk</p>
                                <p>Price: $49.99</p>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#item10">Add to Cart</button>

        <div id="item10" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <img src="http://s7d5.scene7.com/is/image/CanadianTire/0202832_1?defaultImage=image_na_EN&wid=160&hei=160&op_sharpen=1">

                        <p name="item10">Sylvania SilverStar® Halogen Headlight Bulb, 2-pk</p>
                        <p name="vehicle10"></p>
                        <p>Price: $49.99</p>
                        <form action="lightscart.php"method="get">
                            Quantity: 
                            <input type="text" name="quantity3" style="width:50px" id="quantity3"><br>
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

    function openModel(id) {
        var x = document.getElementById(id);
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }

    function getSelection(selection) {
        var selectedText = selection.options[selection.selectedIndex].innerHTML;
    }
    </script>
</body>
</html>