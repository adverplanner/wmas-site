<?php
// exec("rm -rf build");
// exec("mkdir build");
// exec("mkdir build/make");

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


foreach (scandir("content/projects") as $slug) {
    if ($slug !== "." && $slug !== "..") {
        $slug = str_replace(".md", "", $slug);
        build_project($slug);
    }
}

