

compass compile


# move assets over
rm -R build/assets
cp -R assets build/assets


# run the project build script
php projects.php