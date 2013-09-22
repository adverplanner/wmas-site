<?php
 exec("rm -rf build/make");
 // exec("mkdir build");
 exec("mkdir build/make");

require_once("includes/tools.php");

function build_project($slug) {
    ob_start();
    require("single_project.haml.php");
    $output = ob_get_clean();
    $new_filename = "build/make/".$slug;
    file_put_contents($new_filename.".haml", $output);
    exec("haml $new_filename.haml $new_filename.html");
    exec("rm $new_filename.haml");
    echo $slug.".html created\n";
}

foreach (get_content("projects") as $slug => $project) {
    build_project($slug);
}

