<!DOCTYPE html>
<html>
<head>
    <title>Auto Solutions</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3-theme-yellow.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">

    <style>
        img {
            width: 50%;
        }
    </style>
</head>
<body>
    <div class="w3-top">
        <ul class="w3-navbar w3-theme w3-top w3-left-align">
            <li class="w3-opennav w3-right w3-hide-large">
                <a class="w3-hover-white w3-theme-l2" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-search"></i></a>
            </li>
            <li class="w3-hide-small"><a href="home.html" class="w3-theme-l2">Auto Solutions</a></li>
            <li class="w3-hide-small"><a href="#" class="w3-hover-white">About Auto Solutions</a></li>
            <li class="w3-hide-small"><a href="catalog.php" class="w3-hover-white">Catalog</a></li>
            <li class="w3-hide-small"><a href="partsaccessories.php" class="w3-hover-white">Parts and Accessories</a></li>
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
        <div class="w3-panel w3-center">
            <img src="http://www.autosolutionscars.com/assets/images/fp-logo-color.jpg">
        </div>
    <!-- End Main -->
    </div>

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
    </script>
</body>
</html>