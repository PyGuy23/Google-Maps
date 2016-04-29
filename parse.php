<?php



$doc = new DomDocument();

$rss = $doc->createElement('rss');
$channel = $doc->createElement('channel');


$c_title = $doc->createElement('title', 'RSS Sample using DOM Document');
$c_link = $doc->createElement('link', 'http://localhost');
$c_description = $doc->createElement('description', 'Tutorial on Document Dom XML Parsing');

$c_language = $doc->createElement('language', 'en');

$doc->appendChild($rss);
$rss->appendChild($channel);


$channel->appendChild($c_title);
$channel->appendChild($c_link);
$channel->appendChild($c_description);
$channel->appendChild($c_language);


	$doc->createElement('item');
		$doc->createElement('title');
		$doc->createElement('link');
		$doc->createElement('description');

header('content-type: text/xml');

echo $doc->saveXML();

?>