<!DOCTYPE html>
<html>
<head>
<title>Nebiyat's WEB120 Portal Website</title>
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
   <!-- BEGIN WRAPPER -->
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
 <h2 class="pageID">Welcome</h2>
 
 <!-- My header.php include ends here -->
 
 	<!-- START HTML FORM -->
	<form action="index.php" method="post">
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
			How Did You Hear About Us?:<br />
			<select name="How_Did_You_Hear_About_Us?" required="required" title="How You Heard is required" tabindex="30">
				<option value="">Choose How You Heard</option>
				<option value="Phone">Phone</option>
				<option value="Web">Web</option>
				<option value="Magazine">Magazine</option>
				<option value="A Friend">A Friend</option>
				<option value="Other">Other</option>
			</select>
		</label>
	</div>
	
	<div>	
		<fieldset>
			<legend>What Services Are You Interested In?</legend>
			<input type="checkbox" name="Interested_In[]" value="New Website" tabindex="40" /> New Website <br />
			<input type="checkbox" name="Interested_In[]" value="Website Redesign" /> Website Redesign <br />
			<input type="checkbox" name="Interested_In[]" value="Special Application" /> Special Application <br />
			<input type="checkbox" name="Interested_In[]" value="Lollipops" /> Complimentary Lollipops <br />
			<input type="checkbox" name="Interested_In[]" value="Other" /> Other <br />
		</fieldset>
	</div>
	
		<div>	
		<fieldset>
			<legend>Would you like to join our mailing list?</legend>
			<input type="radio" name="Join_Mailing_List?" value="Yes" 
			required="required" title="Mailing list is required" tabindex="50"  
			/> Yes <br />
			<input type="radio" name="Join_Mailing_List?" value="No" /> No <br />
		</fieldset>
	</div>
	<div>	
		<label>
			Comments:<br /><textarea name="Comments" cols="36" rows="4" placeholder="Your comments are important to us!" tabindex="60"></textarea>
		</label>
	</div>	
	<div></div>
    <div class="g-recaptcha" data-sitekey="6LfVLsUUAAAAAEwdd7YsNARN76uOUD8GuZcbIjxX"></div>
	<div>
		<input type="submit" value="submit" />
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
<h3>Basic Website Desigh Cycle</h3>
<p>Linked resources that help what Form is </p>
<p><a href="https://developer.mozilla.org/en-US/docs/Learn/HTML/Forms/Your_first_HTML_form">What are HTML forms</a></p>
<p><a href="https://developer.mozilla.org/en-US/docs/Learn/HTML/Forms/Sending_and_retrieving_form_data">Sending form data</a></p>
<p><a href="https://developer.mozilla.org/en-US/docs/Learn/HTML/Forms/Advanced_styling_for_HTML_forms">Advanced styling for HTML forms</a></p>
</aside>
<!-- END RIGHT COL -->
<!--START FOTTER INCLUDE HERE-->
   <!----start footer includes file--->
<!-- START Footer -->
<footer>
  <p><small>&copy; 2019 <?=date("Y")?> by <a href="index.php" target="_blank">Nebiyat</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
</footer>
<!-- END Footer --> 

    <!-- JavaScript associated with the W3Schools.com Top Navigation Response Exercise --> 

</div>
<!-- END WRAPPER -->

</body>
</html>