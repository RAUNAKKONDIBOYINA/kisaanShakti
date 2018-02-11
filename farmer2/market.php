<html>
<body>

<?php  
error_reporting(0);
$get=json_decode(file_get_contents('http://ip-api.com/json/'),true);
date_default_timezone_set($get['timezone']);
$url='https://visualize.data.gov.in/?inst=9ef84268-d588-465a-a308-a864a43d0070&embed=1';
//echo $url;
$data=json_decode(file_get_contents($url),true);
print_r($data);

//$temp=$data['main']['temp'];

echo '<br>';
//echo $_POST["name1"],' - ';
//print_r($data);


?>



</body>
</html>
