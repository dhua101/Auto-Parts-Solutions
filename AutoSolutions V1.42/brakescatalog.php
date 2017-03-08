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
        <p><a href="#">Brakes</a></p>
        <p><a href="lightscatalog.php">Lights</a></p>
    </nav>

    <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

    <!-- Start Main -->
    <div class="w3-main" style="margin-left:150px; margin-top:150px;">

        <div class="w3-container w3-center">
            <h1>Brakes Catalog</h1>
            <h4>Parts for Brakes are available here.</h4>
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