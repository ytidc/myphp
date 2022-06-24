<?php
$text = file_get_contents('https://json.555jiexi.net:5555/?url='.$_GET['url']);
exit($text);

?>
