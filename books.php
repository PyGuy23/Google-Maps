<?php

$mydoc = 'books.xml';
$mydoc = realpath($mydoc);


$doc = new DOMDocument('1.0');

$doc->formatOutput = true;

$doc->load($mydoc);

$root = $doc->documentElement;

$root = $doc->createElement('book');
$root = $doc->appendChild($root);

$title = $doc->createElement('title');
$title = $root->appendChild($title);

$text = $doc->createTextNode('This is the title');

$text = $title->appendChild($text);

echo 'wrote' . $doc->save($mydoc) . 'bytes';


?>