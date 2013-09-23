target:
	echo 'compiling css'
	compass compile
	echo 'compiling projects'
	php build.php