
 <?php 
Search Results for : echo $_GET["name"]; <br>

require __DIR__. '../../../vendor/autoload.php';
//Connect to MongoDB client
  $m =  new MongoDB\Client;

	   //select a database
	   $db = $m->test;
	   
	   //Select collection
	   $collection = $db->mycol;
	   $cursor =  $collection->find();
	   foreach($cursor as $doc){
	   //$file = fopen("tweets.csv", "w");
	   if(strpos($doc["text"], $_GET["name"]) != false)
		   echo '"'.$doc["Screen Name"].'","'.$doc["text"] ."<br>" . PHP_EOL;
		//	fputcsv($file,explode(',', $str));
}


?>
