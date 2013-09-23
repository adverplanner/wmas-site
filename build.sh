echo 'compiling css'
compass compile

# move assets over
echo 'clearing assets'
rm -R build/content/make
echo 'copyied assets'

# run the project build script
echo 'compiling projects'
php projects.php