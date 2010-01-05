<?php
Configure::write('debug',0);
header('Content-Type: application/xml');
echo $content_for_layout;
?>
