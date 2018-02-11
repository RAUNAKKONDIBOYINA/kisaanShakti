<?php
	include 'database.php';
	
	if(isset($_POST['submit']))
	{
		$first=$_POST['first'];
	$last=$_POST['last'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$zip=$_POST['zip'];
	$mob=$_POST['mob'];
	$password=$_POST['password'];
	
	//echo $first;
	$stri="insert into farmer values('$first','$last','$address','$city','$state',$zip,$mob,$password)";
	$sql=$stri;
	
	if(!mysqli_query($conn,$sql))
{
	//echo "Not inserted";
}
else
{
	//echo "inserted";
}
	}
	
	

?>
<!DOCTYPE html>
<html>
<head>
	<title>Farmer Registration</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>

<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'hi', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<div class="container">
    <h1 class="well">Registration Form</h1>
	<div class="col-lg-12 well">
	<div class="row">
				<form method="POST" action="">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>First Name</label>
								<input type="text" name="first" placeholder="Enter First Name Here.." class="form-control">
							</div>
							<div class="col-sm-6 form-group">
								<label>Last Name</label>
								<input type="text" name="last" placeholder="Enter Last Name Here.." class="form-control">
							</div>
						</div>					
						<div class="form-group">
							<label>Address</label>
							<textarea placeholder="Enter Address Here.." rows="3" name="address" class="form-control"></textarea>
						</div>	
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>City</label>
								<input type="text" name="city" placeholder="Enter City Name Here.." class="form-control">
							</div>	
							<div class="col-sm-4 form-group">
								<label>State</label>
								<input type="text" name="state" placeholder="Enter State Name Here.." class="form-control">
							</div>	
							<div class="col-sm-4 form-group">
								<label>Zip</label>
								<input type="text" name="zip" placeholder="Enter Zip Code Here.." class="form-control">
							</div>		
						</div>
												
					<div class="form-group">
						<label>Phone Number</label>
						<input type="text" name="mob" placeholder="Enter Phone Number Here.." class="form-control">
					</div>		
					<div class="form-group">
						<label>Password</label>
						<input pattern=".{4,}" type="password" name="password" inputmode="numeric" required title="Minimum 4 characters"</input>		
						</div>		
					<br>
					
					<button type="submit" class="btn btn-lg btn-info" name="submit" >Submit</button>			
					</div>
				</form> 
				</div>
	</div>
	</div>
</body>
</html>