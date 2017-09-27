<?php
require __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'tmhOAuthExample.php';
$tmhOAuth = new tmhOAuthExample();
function my_streaming_callback($data, $length, $metrics) {
  $file = __DIR__.'/metrics.txt';


  //$data is a string
  //echo gettype($data); //

  //$json = json_decode($data, true);
  //echo $json;

  echo $data;
  //echo json_decode($data, true);// .PHP_EOL;
  /*if (!is_null($metrics)) {
    if (!file_exists($file)) {
      $line = 'time' . "\t" . implode("\t", array_keys($metrics)) . PHP_EOL;
      file_put_contents($file, $line);
    }
    $line = time(oid)me() . "\t" . implode("\t", $metrics) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND);
  }*/
  return file_exists(dirname(__FILE__) . '/STOP');
}
/*
$twitter_feed = array();


$api_url = "https://api.twitter.com/1.1/statuses/filter.json/".$twitter['user'].
  ".json?include_entities=".$twitter['entities'].
  "&include_rts=".$twitter['retweet'].
  "&exclude_replies=".$twitter['exclude_replies'].
  "&contributor_details=".$twitter['contributor_details'].
  "&trim_user=".$twitter['trim_user'].
  "&count=".$twitter['count'];
 
// obtain the results 
 
$json = file_get_contents($api_url, true);
 
// decode the json response as a PHP array
 
$decode = json_decode($json, true); */

$code = $tmhOAuth->streaming_request(
  'POST',
  'https://stream.twitter.com/1.1/statuses/filter.json',
  array('follow'    => '202416362'),
  'my_streaming_callback'
);
$tmhOAuth->render_response();