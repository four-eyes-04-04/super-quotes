<?php
require 'classes/Generate.php';
require 'classes/Make.php';

$generate = new Generate(new RecursiveDirectoryIterator(__dir__. '\\raw'));
$collection = $generate->getCollection();
$authors = $generate->getAuthors();