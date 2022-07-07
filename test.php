<?php

$xml = new DOMDocument("1.0", "UTF-8");
$xml->formatOutput = true;

$root = $xml->createElement("Students");
$xml->appendChild($root);

$stud = $xml->createElement("student");
$root->appendChild($stud);

$stud->setAttribute("roll", 15);

// $s_r = $xml->createElement("roll", 15);
// $stud->appendChild($s_r);
$s_n = $xml->createElement("name", "Aryaman");
$stud->appendChild($s_n);
$s_c = $xml->createElement("college", "ICCS");
$stud->appendChild($s_c);


$stud = $xml->createElement("student");
$root->appendChild($stud);

$stud->setAttribute("roll", 11);

// $s_r = $xml->createElement("roll", 11);
// $stud->appendChild($s_r);
$s_n = $xml->createElement("name", "Kamat");
$stud->appendChild($s_n);
$s_c = $xml->createElement("college", "ST.xevier");
$stud->appendChild($s_c);
echo "<xmp>" . $xml->saveXML() . "</xmp>";

#To save a file.
$ans = $xml->save("1.xml");
if ($ans) {
    echo "\n file is created";
} else {
    echo "file is not created.";
}
