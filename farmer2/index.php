<?php

include 'database.php';
	session_start();
	if(isset($_POST['submit']))
	{
	$mob=$_POST['username'];
	$password=$_POST['password'];
	
	//echo $first;
	$stri="select * from farmer where mobile=".$mob." "."and password=".$password;
	$sql=$stri;
	
	$_SESSION['mobile'] = $mob;

	//echo $stri;
	
	//$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	header('Location:home.php');
	exit();
}
else{
	echo "incorrect userame/password";
}
	
	/*if(!mysqli_query($conn,$sql))
{
	echo "incorrect userame/password";
}
else
{
	echo "hell yes";
	header('Location:home.php');
	exit();
	
	
	
}*/
	}
	

?>

<!DOCTYPE html>
<html>
<head>
	<title>First page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'hi', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

	<div class="container">
		<h1> Welcome to Seller Login</h1>
	</div>

	<div id="login-overlay" class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">LOGIN</h4>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-xs-6">
                      <div class="well">
                          <form id="loginForm" method="POST" action="" novalidate="novalidate">
                              <div class="form-group">
                                  <label for="username" class="control-label">Enter Registered Mobile Number </label>
                                  <input type="text" class="form-control" id="username" name="username" value="" required="" title="Please enter you Registered Mobile Number" placeholder="98102XXXXX">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="password" class="control-label">Password/OTP</label>
                                  <input type="password" class="form-control" id="password" name="password" value="" required="" title="Please enter your password">
                                  <span class="help-block"></span>
                              </div>
                              <div id="loginErrorMsg" class="alert alert-error hide">Wrong username or password</div>
                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox" name="remember" id="remember"> Remember login
                                  </label>
                                  <p class="help-block">(if this is a private computer)</p>
                              </div>
                              <button type="submit" name="submit" class="btn btn-success btn-block">Login</button>
                              <a href="home.php" class="btn btn-default btn-block">Help to login</a>
                          </form>
                      </div>
                  </div>
                  <div class="col-xs-6">
                      <p class="lead">Register now for <span class="text-success">FREE</span></p>
                      <ul class="list-unstyled" style="line-height: 2">
                          <li><span class="fa fa-check text-success"></span> Sell your Plantations</li>
                          <li><span class="fa fa-check text-success"></span> Buy Crops in Bulk</li>
                          <li><span class="fa fa-check text-success"></span> Know about major Plant Diseases</li>
                          <li><span class="fa fa-check text-success"></span> Closest Fruit/Vegetable Markets</li>
                          <li><span class="fa fa-check text-success"></span> & much more</li>
                          
                      </ul>
                      <p><a href="FRegister.php" class="btn btn-info btn-block">Register now!</a></p>
                  </div>
              </div>
          </div>
      </div>
  </div>

</body>
</html>