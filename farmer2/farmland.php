<?php
include 'database.php';

if(isset($_POST['submit']))
	{
	$land=$_POST['land'];
	$land1=$_POST['land1'];
	$land2=$_POST['land2'];
	$land3=$_POST['land3'];
	$land4=$_POST['land4'];
	$season=$_POST['season'];
	
	
	//echo $land;
	$stri="insert into farmland values($land,$land1,$land2,$land3,$land4,'$season')";
	$sql=$stri;
	
	if(!mysqli_query($conn,$sql))
{
	echo "Not inserted";
}
else
{
	echo "inserted";
}
	}

?>



<!DOCTYPE html>
<html>
<head>
	<title>landOptimization</title>


</head>
<body>
<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'hi', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="city.css">
<div class="container">
<form action="" method="post">
Enter total land in acres : <input type="text" name="land"><br>
Enter land in acres part1 : <input type="text" name="land1"><br>
Enter land in acres part2 : <input type="text" name="land2"><br>
Enter land in acres part3: <input type="text" name="land3"><br>
Enter land in acres part4: <input type="text" name="land4"><br>
Enter season: <input type="text" name="season"><br>
<div class="container">
<input type="submit" class="btn btn-warning" name="submit" id="submit">
</div>
</form>
</div>



</body>
</html>


