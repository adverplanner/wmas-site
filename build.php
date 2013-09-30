<?php


$dir = scandir(".");
foreach ($dir as $folder) {
    if (strpos($folder, ".haml.php") > -1) {
        $file = str_replace(".haml.php", "", $folder);
        echo "Building $file\n";
        exec("php $file.haml.php > $file.haml");
        exec("haml $file.haml  build/content/$file.html");
        exec("rm $file.haml");
    }
}


require_once("includes/tools.php");

function build_project($slug) {
    // only perform is build is older than md
    ob_start();
    require("single_project.haml.php");
    $output = ob_get_clean();
    $new_filename = "build/content/make/".$slug;
    file_put_contents($new_filename.".haml", $output);
    exec("haml $new_filename.haml $new_filename.html");
    exec("rm $new_filename.haml");
    echo $slug.".html created\n";
}

foreach (get_content("projects") as $slug => $project) {
    build_project($slug);
}

echo "Compressing images\n";
exec("/Applications/ImageOptim.app/Contents/MacOS/ImageOptim build/assets/img/avatars/*");
exec("/Applications/ImageOptim.app/Contents/MacOS/ImageOptim build/assets/img/awards/*");
exec("/Applications/ImageOptim.app/Contents/MacOS/ImageOptim build/assets/img/clients/*");
exec("/Applications/ImageOptim.app/Contents/MacOS/ImageOptim build/assets/img/featured/*");
exec("/Applications/ImageOptim.app/Contents/MacOS/ImageOptim build/assets/img/press/*");
exec("/Applications/ImageOptim.app/Contents/MacOS/ImageOptim build/assets/img/projects/*");
echo "Build script complete!\n";

