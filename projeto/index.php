<?php
require 'vendor\autoload.php';
use Symfony\Component\Finder\Finder;


$finder = new Finder();

$files = $finder->files()->in('exemplos')->name('*.php');
foreach ($files as $file) {

	    var_dump($file->getRealPath());

}

// $finder->files()->in('exemplos')->name('*.php')->contains(...) as $file 

?>