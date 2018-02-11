<?php
include 'database.php';

	
	
	//echo $first;
	$stri="select * from farmland";
	$sql=$stri;
	
	$result = $conn->query($sql);
	$land;
	$land1;
	$land2;
	$land3;
	$land4;

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
	$land=$row['land'];
	$land1=$row['land1'];
	$land2=$row['land2'];
	$land3=$row['land3'];
	$land4=$row['land4'];
	$season=$row['season'];
	
	
    }
} else {
echo "0 results";}

//$conn->close();

?>

<!DOCTYPE html>
<html lang="en-US">
<body>
<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'hi', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<h1>PIE CHARTS OF VARIOUS FARMERS' INPUT</h1>

<div id="piechart"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['crop', 'acres'],
  ['carrot', <?php echo $land1 ?>],
  ['raddish', <?php echo $land2 ?>],
  ['tomato',<?php echo $land3 ?>],
  ['onion', <?php echo $land4 ?>]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'land optimization', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>

</body>
</html>