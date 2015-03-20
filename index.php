<?php
	include("upload.php");
?>
<html>
	<head>
		<meta charset="utf-8">
        <meta name="description" content="Bordel Visuel par Guillaume Deschryver">
		<title>Bordel Visuel</title>
		<meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1"/>
		<link rel="stylesheet" href="reset.css" type="text/css" media="all">
		<link rel="stylesheet" href="style.css" type="text/css" media="all">
		<link href='http://fonts.googleapis.com/css?family=Advent+Pro:400,700' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<span>
			<a href="index.php"><h1>Bordel Visuel</h1></a>
			<p>Upload ci-dessous une image, et participe ainsi à cette magnifique mosaique d'images.</p>
			<form enctype="multipart/form-data" action="upload.php" method="post">
				<label for="myfile">Upload : </label>
				<input type="file" name="newfile" id="myfile" required="required">
				</br>
				<input type="submit" id="submit" value="Envoyer">
			</form>
		</span>
		<ul>
			<?php
			$img = 'img';
			$files =  scandir($img);

			foreach($files as $f) {
					if (($f != ".") && ($f != "..")) {
					echo  '<li><a href="img/' . $f . '" target="_blank" style="background: url(thumb/' . $f . '); background-size:cover;" </a></li>';
				}
			}
			?>
		</ul>
	</body>
</html>
