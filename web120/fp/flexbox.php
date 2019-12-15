<!DOCTYPE html>
<html>
<head>
<title>Nebiyat</title>
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
 <h2 class="pageID">Flexbox Research</h2>
 
 <!-- My header.php include ends here -->
<p>
The “Flexible Box” or “Flexbox” layout mode offers an alternative to Floatsfor defining the overall appearance of a web page. Whereas floats only let us horizontally position our boxes, flexbox gives us complete control over the alignment, direction, order, and size of our boxes.

The web is currently undergoing a major transition, so a little discussion around the state of the industry is warranted. For the last decade or so, floats were the sole option for laying out a complex web page.
</p>

<p>
The “Flexible Box” or “Flexbox” layout mode offers an alternative to Floatsfor defining the overall appearance of a web page. Whereas floats only let us horizontally position our boxes, flexbox gives us complete control over the alignment, direction, order, and size of our boxes.
</p>
<p>
Remember that these flexbox properties are just a language that lets you tell browsers how to arrange a bunch of HTML elements. The hard part isn’t actually writing the HTML and CSS code, it’s figuring out, conceptually (on a piece of paper), the behavior of all the necessary boxes to create a given layout.
</p>

<p>
As a result, they’re well supported even in legacy browsers, and developers have used them to build millions of web pages. This means you’ll inevitably run into floats during your web development career (so the previous chapter wasn’t a total waste).

</p>
 
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;There are three types of flexbox syntax in modern browsers. New syntax: display: flex and other properties shown in this e-book. This is supported by the latest versions of all browsers, including IE11 and Opera Mini.
CSS Flexbox model is optimized for UI Design. It is developed primarily to avoid overflowing parent element. It will shrink children when ancestor element size is constricted. It will fill the space by expanding child element's size when ancestor element size extends. Flex container shrink and expand behavior can break with min and max width / height property.

The flexbox specification is not yet finalized, so there’s naturally going to be some lag between the latest drafts and browser implementations. This article is not meant to point fingers at any parties for being behind; instead, it’s meant to help front-end developers do what we do best—manage browser inconsistencies.
 When flex items are too big to fit inside their container, those items are instructed (by the flex layout algorithm) to shrink, proportionally, according to their flex-shrink property. But contrary to what many browsers allow, they’re not supposed to shrink indefinitely.

</p>
 
 
</section>
<!-- END LEFT COL -->

<!---end header---->
<!-- START RIGHT COL -->
<aside>
 <h3>Work cited</h3>
    
    <p>
<a href="https://internetingishard.com/html-and-css/flexbox/
/">https://internetingishard.com/html-and-css/flexbox/
/</a><br>
</p>
     <p>
<a href="https://caniuse.com/#feat=flexbox
/
/">https://caniuse.com/#feat=flexbox
/
/</a><br>
</p>
    <p>
<a href="https://www.w3schools.com/css/css3_flexbox.asp">https://www.w3schools.com/css/css3_flexbox.asp/</a><br>
</p>
    <p>
<a href="https://philipwalton.com/articles/normalizing-cross-browser-flexbox-bugs//">https://philipwalton.com/articles/normalizing-cross-browser-flexbox-bugs//</a><br>
</p>

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
 
    
 