<?php
#$xml = new DOMDocument("1.0","UTF-8");
$xml = new DOMDocument();
$xml->xmlVersion = "1.0";
$xml->encoding = "UTF-8";

$xml->formatOutput = true; #For proper formatted output

$root = $xml->createElement("student"); #creating root element
$root->setAttribute("roll", 101);
$xml->appendChild($root);

$stud_name = $xml->createElement("name", "Aryaman"); #creating child tags
$root->appendChild($stud_name);

$stud_city = $xml->createElement("city", "Pune");
$root->appendChild($stud_city);

echo "<xmp>" . $xml->saveXML() . "</xmp>";

$ans = $xml->save("Student.xml"); #saves the file in same directory
if ($ans == true)
    echo "File Created...";
else
    echo "Unable to create  the file...";
