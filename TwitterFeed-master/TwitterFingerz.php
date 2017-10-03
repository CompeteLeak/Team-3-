<html>
<head>
<!-- Title -->
<title>Twitter Fingerz</title>

<script 

type="text/javascript">




</script>
<link rel="stylesheet" href="table_design.css">
<h1><font color = “#4099FF”><center>Twitter-Fingerz</center></font></h1>

<h2><center>by Anisha Carter, Taylor Clark, Dominique Collins, Julian Mathis, Sydney Parker, and Dorian Wood<center></h2>
</head>

<body>

	<?php require __DIR__. '../../../vendor/autoload.php';
	   // connect to mongodb
	    $m =  new MongoDB\Client;

		
	   echo "Connection to database successfully" ."<br>" . PHP_EOL;
	   
	   //select a database
	   $db = $m->test;
	   echo "Database test selected" . "<br>" . PHP_EOL;
	?>

	

<!-- Scrollable box the stream of tweets will be displayed in -->


<!-- Start the Twitter Stream in a new Window --> 


<h1>Stream</h1>
<form action="tmhOAuth/StreamAccess.php" method="post" target="_blank" id="stream">
</form>

<button type="submit" form="stream" value="stream">Start Stream</button>


<br>


<div id="searchbox">

<!--Search Box for User-->
<form action="mongoSearch.php" method="get">
<input type="submit">
<input type="text" name="name"><br>

</form>

</div>


</body>

</html>
