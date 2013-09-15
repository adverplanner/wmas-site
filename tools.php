<?php
function get_content($name) {
  return json_decode(file_get_contents("content/".$name.".json"));
}
function set_default($obj, $key, $value) {
  if (!isset($obj->$key)) {
    $obj->$key = $value;
  }
  return $obj;
}
?>