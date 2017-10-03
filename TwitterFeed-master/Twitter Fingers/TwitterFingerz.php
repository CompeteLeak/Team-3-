
<html>
<head>
<script type="text/javascript" src="table.js"></script>
<link rel="stylesheet" href="table_design.css">
<h1><font color = “#4099FF”><center>Twitter-Fingerz</center></font></h1>
<h2><center>by Anisha Carter, Taylor Clark, Dominique Collins, Julian Mathis, Sydney Parker, and Dorian Woods<center></h2>
<!--||-->
</head>
<body>
	<table><center>
	<thead>
		<TD><font color = black><center>USER</center></font></TD><TD><font color = black><center>TWEETS</center></font></TD>
	</thead>
		<?php require "TFtesting.php"; ?>
	</center></table>
	<a class="twitter-timeline" data-height="500" href="https://twitter.com/MarketWatch/lists/finance-twitter">A Twitter List by MarketWatch</a> 
	<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
	<?php
	   // connect to mongodb
	  require "MDBTesting.php";
	?>
</body>

</html>
