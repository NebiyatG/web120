<!DOCTYPE html>
<html>
<head>
<title>(Nebiyat): WEB120 Portal Website</title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
   <script src="js/script.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/big.css" />
<link rel="stylesheet" href="css/form.css" />
    
</head>

<body>
<div class="wrapper">
<header>
  <h1><a href="index.php"><i class="logo fa "></i> Web development example and more</a></h1>
  <nav id="cssmenu">
      <ul>
         <li><a href="../index.php"><span><i class="fa fa-fw fa-bank"></i> WEB120 Portal</span></a></li>
         <li><a href="index.php"><span><i class="fa fa-fw fa-home"></i> Home</span></a></li>
         <li><a href="flexbox.php"><span>Flexbox</span></a></li>
         <li><a href="galleries.php"><span>Galleries</span></a></li>
         <li><a href="google.php"><span><i class="fa fa-fw fa-chevron-down"></i> Google</span></a>
            <ul>
               <li><a href="callander.php"><span>Calendar</span></a></li>
               <li><a href="map.php"><span>Map</span></a></li>
               <li><a href="youtube.php"><span>YouTube</span></a></li>
            </ul>
         </li>
         <li><a href="parallax.php"><span>Parallax</span></a></li>
         <li><a href="shoppingcarts.php"><span>Shopping Carts</span></a></li>
         <li><a href="siteapp.php"><span>Site vs App</span></a></li>
         <li><a href="webcam.php"><span>Web Cam</span></a></li>
      </ul>
</nav>
</header>
<!-- START LEFT COL -->
<section>
 <h2 class="pageID">Callander page</h2>
 
 <!-- My header.php include ends here -->
<!-- show/hide month calander based upon resolution-->
<div class='month-view embed-container'>
    <iframe src='https://calendar.google.com/calendar/embed?showTitle=0&height=600&wkst=1&bgcolor=%23FFFFFF&src
                 =seattlecentral.edu_drs4is26mn6c7do9809vdksp2o%40group.calendar.google.com&
                 color=%2342104A&src=en.usa%23holiday%40group.v.calendar.google.com&color=%23125A12&ctz=America%2FLos_Angeles' 
                 style='border-width:0' width='800' height='600' frameborder='0' scrolling='no'>   
              
    </iframe>
</div>


<div class='agenda-view embed-container'>
    <iframe src='https://calendar.google.com/calendar/embed?showTitle=0&mode=AGENDA&height=600&wkst=1&bgcolor=%23FFFFFF&src=seattlecentral.edu_drs4is26mn6c7do9809vdksp2o%40group.calendar.google.com&color=%2342104A&src=en.usa%23holiday%40group.v.calendar.google.com&color=%23125A12&ctz=America%2FLos_Angeles' style='border-width:0' width='800' height='600' frameborder='0' scrolling='no'>
    </iframe>
</div>
 <!-- show hide agender view calander based upon resolution-->


</section>
<!-- END LEFT COL -->

<!---end header---->
<!-- START RIGHT COL -->
<aside>
 
</aside>
<!-- END RIGHT COL -->
<!--START FOTTER INCLUDE HERE-->
   <!----start footer includes file--->
<!-- START Footer -->
<footer>
  <p><small>&copy; 2019 - (insert php date code here) by <a href="index.php" target="_blank">Nebiyat</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
</footer>
<!-- END Footer --> 

    <!-- JavaScript associated with the W3Schools.com Top Navigation Response Exercise --> 
    <script>
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
     </script>
</div>
<!-- END WRAPPER -->

</body>
</html>
 
    
 