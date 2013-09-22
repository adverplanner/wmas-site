<?php
require_once("includes/Markdown.php");

function get_content($name) {
  return json_decode(file_get_contents("content/".$name.".json"));
}

function get_markdown($name) {
  return str_replace("\n","",Michelf\Markdown::defaultTransform(file_get_contents("content/".$name.".md")));
}

function set_default($obj, $key, $value) {
  if (!isset($obj->$key)) {
    $obj->$key = $value;
  }
  return $obj;
}

function get_project($slug) {
  $projects = get_content("projects");
  $project = $projects->$slug;
  if (!isset($project->content))
    $project->content = get_markdown("projects/".$slug);
  return $project;
}
?>