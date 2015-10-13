<?php
$dir = new RecursiveDirectoryIterator('/tmp');
$iterator = new RecursiveIteratorIterator($dir);

foreach($iterator as $entry) {
	echo $entry->getFilename(), '<br />';
 }
