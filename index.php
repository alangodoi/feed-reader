<?php

$i = 0;
$url = "http://hipsters.tech/feed/podcast/";
$rss = simplexml_load_file($url);

echo '<h2><img style="vertical-align: middle; width: 100px; height: 100px;" src="'.$rss->channel->image->url.'" /> '.$rss->channel->title.'</h2>';
foreach($rss->channel->item as $item) {
  echo '<a href="'.$item->link.'">'.$item->title.'</a><br />';
  $i++;
}
 ?>
