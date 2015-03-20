<?php

require_once('class.upload.php');

if($_FILES){
	if( ($_FILES["newfile"]["type"] == "image/png") || ($_FILES["newfile"]["type"] == "image/jpeg") || ($_FILES["newfile"]["type"] == "image/gif") || ($_FILES["newfile"]["type"] == "image/svg+xml") ){
	//print_r( $_FILES );
	$document = new Upload( $_FILES['newfile'] );
	if ($document->uploaded) {
		//save uploaded img with 200px width 

		$document->file_new_name_body = 'bordel_visuel';
			$document->image_resize = true;
			$document->image_x = 200;
			$document->image_ratio_y = true;
			$document->Process('thumb/');


		//save uploaded img @full resolution
		$document->file_new_name_body = 'bordel_visuel';
		$document->Process('img/');
			if ($document->processed) {
		     $document->Clean();
		     header('Location: index.php');
				exit;
		   } else {
		     echo 'error : ' . $document->error;
		   }
		}
	} else {
		echo 'Mauvais type de fichier, ca fichier... :/  ';
	}
}
