<?php
$file = 'version';
$my_file = file_get_contents("$file");
header('Location: '.$my_file.'/app.apk');
die();
?>