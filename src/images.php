<?php
// Example: Overlay two images
$base_image = imagecreatefromjpeg('base.jpg');
$overlay_image = imagecreatefrompng('overlay.png');
imagecopy($base_image, $overlay_image, 0, 0, 0, 0, imagesx($overlay_image), imagesy($overlay_image));
imagejpeg($base_image, 'output.jpg');