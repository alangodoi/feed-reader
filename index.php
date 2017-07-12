<?php

// *** Auto Multiple feeds ***
// $totalRegistros = 0;
// $urls = array();

// count urls from database
// $podcasts = new Podcasts(); //model
// $totalRegistros = $podcasts->contarTodos();

// get links and add to an array
// $podcasts->getAllPodcastsToAdd();
// while ($obj = $podcasts->getRow()) {
  // $urls[$obj->id]["url"] = $obj->url;
// }

// foreach ($urls as $key => $value) {
//   foreach ($value as $id => $url) {
//     $feed = simplexml_load_file($url);
//     echo '<h2><img style="vertical-align: middle; width: 100px; height: 100px;" src="'.$feed->channel->image->url.'" /> '.$feed->channel->title.'</h2>';
//     foreach($feed->channel->item as $item) {
//       echo '<a href="'.$item->link.'">'.$item->title.'</a><br />';
//     }
//   }
// }

// *** Manual Multiple feeds ***
$urls = array();
$totalRegistros = 3;
$urls["1"]["url"] = "http://hipsters.tech/feed/podcast/";
$urls["2"]["url"] = "http://hipsters.tech/feed/podcast/";
$urls["3"]["url"] = "http://hipsters.tech/feed/podcast/";
foreach ($urls as $key => $value) {
  foreach ($value as $id => $url) {
    $feed = simplexml_load_file($url);
    echo '<h2><img style="vertical-align: middle; width: 100px; height: 100px;" src="'.$feed->channel->image->url.'" /> '.$feed->channel->title.'</h2>';
    foreach($feed->channel->item as $item) {
      echo '<a href="'.$item->link.'">'.$item->title.'</a><br />';
    }
  }
}


// *** Manual Single feed ***
// $url = "http://hipsters.tech/feed/podcast/";
//
// foreach ($url as $key => $value) {
//   $feed = simplexml_load_file($value);
//
//   echo '<h2><img style="vertical-align: middle; width: 100px; height: 100px;" src="'.$feed->channel->image->url.'" /> '.$feed->channel->title.'</h2>';
//   foreach($feed->channel->item as $item) {
//     echo '<a href="'.$item->link.'">'.$item->title.'</a><br />';
//     $i++;
//   }
// }

 ?>

