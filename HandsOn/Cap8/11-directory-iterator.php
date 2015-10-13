<?php

$dir = new DirectoryIterator('/tmp');
// new GlobIterator('/tmp/*.php');
foreach($dir as $entry) {
	echo $entry->getFilename(), '<br />';
}