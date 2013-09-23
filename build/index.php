<?php

function load_file($url) {
  $url = "content/".$url;
  if (file_exists($url)) {
    echo file_get_contents($url);
  } else {
    if (strpos($url, "make/category") > -1) {
      load_file("make.html");
    }
    else {
      // 404
      echo "404";
    }
  }
}

if (isset($_REQUEST['url'])) {
  load_file($_REQUEST['url'].".html");
}
else {
  load_file("home.html");
}
?>

