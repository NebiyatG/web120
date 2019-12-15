<!--START FOTTER INCLUDE HERE-->
<!doctype html>
<html>
<head>
<title>Contact Nebiyat</title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/portal.css" />
<link rel="stylesheet" href="css/form.css" />
    
</head>

<body>
<div class="wrapper">
<header>
  <h1><a href="index.php"><i class="logo fa fa-pencil-square-o"></i> Nebiyat SCC WEB120 Portal</a></h1>
  <nav>
    <ul class="topnav" id="myTopnav">
      <li><a href="index.php">Welcome</a></li><li><a href="big/index.php">Big</a></li><li><a href="aia.php">AIA</a></li><li><a href="ux.php">Google Doc (UX)</a></li><li><a href="http://harp.nebiyatgidey.com/fp/big/">Final Project</a></li><li><a href="contactme.php" class="selected">Contact Nebiyat</a></li><!-----FUNCTION NAME---->
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>
<!-- START LEFT COL -->
<section>
 <h2 class="pageID">Contact Nebiyat</h2>
 
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
<!--
<aside>
 <h3>Right Column</h3>
 <p>Lorem Ipsum place holder text goes here for now</p>
 <p>Lorem Ipsum place holder text goes here for now</p>
</aside>
-->
<!-- END RIGHT COL -->
<!--START FOTTER INCLUDE HERE-->
   <!----start footer includes file--->
<!-- START Footer -->
<footer>
  <p><small>&copy; 2019 - <a href="index.php" target="_blank">Nebiyat</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
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
 
    
 