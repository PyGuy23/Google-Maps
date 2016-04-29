<?php
$xml = <<< XML
<?xml version="1.0" encoding="utf-8"?>
<book-title>
 <id>931-435-56</id>
 <author>Linus Torvalds</author>
 <year-published>1993</year-published>
 <title>Kernel Programming for Linux</title>
</book-title>
XML;

$dom = new DOMDocument;
$dom->loadXML($xml);
$books = $dom->getElementsByTagName('title');
foreach ($books as $id) {
    echo $id->nodeValue, PHP_EOL;
}
?>