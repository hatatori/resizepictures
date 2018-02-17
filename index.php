<?php

	$name = "lampada.jpg";

	$img = imagecreatefromjpeg("imgs/$name");

	$imgSizes = getimagesize("imagens/$name");

	$old_width = $imgSizes[0];
	$old_height = $imgSizes[1];

	$scale = 100/$old_width;

	$new_width = floor($old_width*$scale);
	$new_height = floor($old_height*$scale);

	$tp = imagecreatetruecolor($new_width,$new_height);

	imagecopyresampled($tp,$img,0,0,0,0,$new_width,$new_height,$old_width,$old_height);

	imagejpeg($tp, "imgs_mini/$name",100);

?>