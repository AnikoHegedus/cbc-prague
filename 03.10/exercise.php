<?php

header("Content-type: image/png");
/*$im = imagecreate(310, 350);
$background_color = imagecolorallocate($im, 0, 100, 100);*/
/*$text_color = imagecolorallocate($im, 14, 233, 91);*/
/*imagestring($im, 5, 5, 5, "Sample text", $text_color);*/
/*$color = imagecolorallocate($im, 14, 233, 91);
imageline($im, 0, 0, 100, 100, $color);
imageline($im, 100, 150, 100, 250, $color);
imageline($im, 150, 250, 70, 20, $color);
imagepng($im);*/

$size = getimagesize("dog.jpg");
$original = imagecreatefromjpeg("dog.jpg");
$ratio = $size[0] / $size[1];
imagejpeg($original);

$new = imagecreatetruecolor(200, 200 / $ratio);

imagecopyresampled($new, $original, 0, 0, 0, 0, 200, 200 / $ratio, $size[0], $size[1]);

$text_color = imagecolorallocate($new, 100, 150, 150);
imagestring($new, 5, 5, 5, "Sample text", $text_color);

imagejpeg($new, "dog_new.jpg");
imagejpeg($new);