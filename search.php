<?php
$xmlDoc = new DOMDocument();
/*
$xmlDoc->load("http://rss.msnbc.msn.com/id/3032091/device/rss/rss.xml");
*/
$xmlDoc->load("https://www.nbcnewyork.com/news/top-stories/?rss=y&summary=y");

$link=$xmlDoc->getElementsByTagName('item');
$q=$_GET["q"];
//lookup our links from the xml
if (strlen($q)>0) {
  $suggestion ="";
  for($i=0; $i<$link->length; $i++) {
    $title=$link->item($i) ->getElementsByTagName('title');
    $url=$link->item($i) ->getElementsByTagName('link');
    
    

    if($title->item(0)->nodeType==1) {
      //PLEASE find a matching link
      if(stristr($title->item(0)->childNodes->item(0)->nodeValue, $q)) {
        if($suggestion==""){
          $suggestion="<a href='" .
          $url->item(0)->childNodes->item(0)->nodeValue .
          "' target='_blank'>" .
          $title->item(0)->childNodes->item(0)->nodeValue .
          "</a>";
        } else {
          $suggestion= $suggestion . "<br /><br /><a href='" .
          $url->item(0)->childNodes->item(0)->nodeValue .
          "' target='_blank'>" .
          $title->item(0)->childNodes->item(0)->nodeValue .
          "</a>";
        }
      }
    }
  }
}
if($suggestion == ""){
  $response = "If you can't find a particular news story, feel free to check out NBC.com for all of their News stories!";

} else {
  $response = $suggestion;
}
echo $response;
?>