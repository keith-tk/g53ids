<html>
	<head>
		<title>PHP Test</title>
	</head>
	<body>
	</body>
	<?php echo '<p>Hello World</p>'?>
	<?php echo "my first cloud app";
	$link = mysql_connect('aa1h1zomr7xslqd.csmp8yhb8dto.ap-southeast-1.rds.amazonaws.com:3306', 'root', 'rootroot');
	if (!$link) {
	die('Could not connect: ' . mysql_error());
	}
	echo "<br>";
	echo 'Connected successfully';
	mysql_close($link); ?>
	</body>
</html>