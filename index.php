<?php
include("resize.php");

// *** 1) Initialise / load image
$resizeObj = new resize('images/destroyer.png');

// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
$resizeObj -> resizeImage(200, 200, 'crop');

// *** 3) Save image ('image-name', 'quality [int]')
$resizeObj -> saveImage('destroyer.png', 100);
print_r($resizeObj);

?>

