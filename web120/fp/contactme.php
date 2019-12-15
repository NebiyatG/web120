<!--START FOTTER INCLUDE HERE-->
<!doctype html>
<html>
<head>
<head>
<title>Welcome to Medhane-Alem Church</title>
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
  <h1><a href="index.php"><i class="logo fa "></i> Welcome to Medhane-Alem Church</a></h1>
  <nav id="cssmenu">
      <ul>
         <li><a href="index.php"><span><i class="fa fa-fw fa-home"></i> Home</span></a></li>
         <li><a href="media.php"><span><i class="fa fa-fw fa-chevron-down"></i> Media</span></a>
            <ul>
               <li><a href="facebookpage.php"><span>Galleries</span></a></li>
               <li><a href="youtube.php"><span>YouTube</span></a></li>
            </ul>
        <li><a href="map.php"><span>Map</span></a></li>
        <li><a href="contactme.php"><span>Contact</span></a></li> 
        
        </ul>
</nav>
</header>
<!-- START LEFT COL -->
<section>
 <h2 class="pageID">Contact us </h2>
 
 <!-- My header.php include ends here -->
 	<!-- START HTML FORM -->
	<form action="contactme.php" method="post">
	<div>
		<label>
			Name:<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="44" autofocus />
		</label>
	</div>
	<div>	
		<label>
			Email:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
		</label>
	</div>
	<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
	<div>	
		<label>
			Comments:<br /><textarea name="Comments" cols="36" rows="4" placeholder="Your comments are important to us!" tabindex="30"></textarea>
		</label>
	</div>	
	<div></div>
    <div class="g-recaptcha" data-sitekey="6LfVLsUUAAAAAEwdd7YsNARN76uOUD8GuZcbIjxX"></div> 
	<div>
		<input type="submit" value="send" />
	</div>
    </form>
	<!-- END HTML FORM -->
    <script type="text/javascript"
        src="https://www.google.com/recaptcha/api.js?hl=en">
    </script>
 
</section>
<!-- END LEFT COL -->

<!---end header---->
<!-- START RIGHT COL -->
    
    
    
<aside>
    <h2><u>Contact Info</u></h2>
<h3>
    8445 Rainier Ave S<br>
    Seattle, WA 98118<br>  
    <a href="tel:12069343800">(206)720-0181</a>
    </h3>
</aside>
<!-- END RIGHT COL -->
<!--START FOTTER INCLUDE HERE-->
   <!----start footer includes file--->
<!-- START Footer -->
<footer>
  <p><small>&copy; 2019  <a href="index.php" target="_blank">Medhane-Alem Church</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
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
</body>
</html>
 
    
 