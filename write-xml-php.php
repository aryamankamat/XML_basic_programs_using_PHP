<?php

$xml = new DOMDocument('1.0', 'UTF-8');
#var_dump($xml);

$xml->formatOutput = true;
$root = $xml->createElement("students");
$xml->appendChild($root);

$stud_node = $xml->createElement("student");
$root->appendChild($stud_node);

$stud_name = $xml->createElement("name","Sindhu");
$stud_node->appendChild($stud_name);
$stud_city = $xml->createElement("city","Pune");
$stud_node->appendChild($stud_city);

echo "<xmp>" . $xml->saveXML() . "</xmp>";
