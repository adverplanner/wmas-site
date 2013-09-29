<?php

$base = "/new_site/";
$base = "/";
if (isset($_REQUEST['url'])) {
  $_REQUEST['url'] = str_replace($base, "/", $_REQUEST['url']);
}

function load_file($url) {
  $url = "content/".$url;
  if (file_exists($url)) {
    echo file_get_contents($url);
  } else {
    if (strpos($url, "make/category") > -1) {
      load_file("make.html");
    }
    else if ($url === "") {
      load_file("home.html");
    }
    else {
      header("HTTP/1.0 404 Not Found");
      // 404
      load_file("404.html");
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

