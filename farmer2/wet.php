<!DOCTYPE html>
<html>
<head>
	<title>Weather</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="city.css">
</head>
<body>

<div class="container">
<form action="" method="post">
Enter City : <input type="text" name="name1"><br>
<div class="container">
<input type="submit" class="btn btn-warning" id="submit">
</div>
</form>
</div>






<script type="text/javascript" src="city.js"></script>
</body>
</html>
<?php  
error_reporting(0);
$get=json_decode(file_get_contents('http://ip-api.com/json/'),true);
date_default_timezone_set($get['timezone']);
$url='https://api.openweathermap.org/data/2.5/weather?q='.$_POST["name1"].'&units=metric&appid=9e91ec239c87aebe08e82e1314463919';

//$url2='https://api.openweathermap.org/data/2.5/forecast?q='.$_POST["name1"].',ind&appid=9e91ec239c87aebe08e82e1314463919';
//echo $url2;
$data=json_decode(file_get_contents($url),true);

//$data2=json_decode($url2,true);
//print_r($data);

$temp=$data['main']['temp'];

$humidity=$data['main']['humidity'];

$clouds=$data['clouds']['all'];
//echo $clouds;
//echo '<br>';
$cloudsname=$data['clouds']['name'];
echo $cloudsname;

$rain=$data['rain']['3h'];

$weather=$data['weather'][0]['description'];

$weather2=$data['weather'][0]['main'];

/*echo '<br>';
echo $temp;
echo '<br>';
echo $humidity;
echo '<br>';
echo $clouds;
echo '<br>';
print_r($weather);
echo '<br>';
echo '<br>';
//print_r($weather2);
//print_r($rain);


//echo $_POST["name1"],' - ';

//print_r($data);



*/

?>

<!DOCTYPE html>
<html>
<head>
	<title>Print</title>
</head>
<body>
<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'hi', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	<h1>Temperature:<?php echo $temp ?></h1>
		<h1>Cloud%:<?php echo $clouds ?></h1>
			<h1>Humidity:<?php echo $humidity ?></h1>
				<h1>Weather: <?php echo $weather ?></h1>

</body>
</html>