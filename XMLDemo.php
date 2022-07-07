<?php
$xml = new DOMDocument("1.0","UTF-8");

$xml->formatOutput = true ;

$root = $xml->createElement("students");
$xml->appendChild($root);


$stud_node = $xml->createElement("student");
$stud_node->setAttribute("roll","101");
$root->appendChild($stud_node);
$stud_name = $xml->createElement("name","Sindhu");
$stud_node->appendChild($stud_name);
$stud_city = $xml->createElement("city","Vizag");
$stud_node->appendChild($stud_city);


$stud_node = $xml->createElement("student");
$stud_node->setAttribute("roll","102");
$root->appendChild($stud_node);
$stud_name = $xml->createElement("name","Rahul");
$stud_node->appendChild($stud_name);
$stud_city = $xml->createElement("city","Mysore");
$stud_node->appendChild($stud_city);

echo "<xmp>" . $xml->saveXML() . "</xmp>";
$ans = $xml->save("MyXmlFile1.xml");
if($ans)
    echo "File created...";
else    
    echo "Faile to create a file... ";
