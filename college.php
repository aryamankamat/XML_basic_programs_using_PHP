<?php

$xml = new DOMDocument("1.0", "UTF-8");
$xml->formatOutput = true;

$root = $xml->createElement("College");
$xml->appendChild($root);

$coll = $xml->createElement("cname", "ICCS");
$root->appendChild($coll);
$city = $xml->createElement("city", "Pune");
$root->appendChild($city);
$rank = $xml->createElement("rank", "A");
$root->appendChild($rank);


$coll = $xml->createElement("cname", "ST.xevier");
$root->appendChild($coll);
$city = $xml->createElement("city", "Mumbai");
$root->appendChild($city);
$rank = $xml->createElement("rank", "B");
$root->appendChild($rank);


$coll = $xml->createElement("cname", "Spicer");
$root->appendChild($coll);
$city = $xml->createElement("city", "Pune");
$root->appendChild($city);
$rank = $xml->createElement("rank", "C");
$root->appendChild($rank);

echo "<xmp>" . $xml->saveXML() . "</xmp>";


$ans = $xml->save("College.xml");
if ($ans == True) {
    echo "\n File is created...";
} else {
    echo "\n Sorry, File cannot be created...";
}
