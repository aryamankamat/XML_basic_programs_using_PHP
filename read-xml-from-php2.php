<?php

$xmlString = "<?xml version='1.0' encoding='UTF-8'?>
<students>
  <student roll='101'>
    <name>Sindhu</name>
    <city>Vizag</city>
  </student>
  <student roll='102'>
    <name>Rahul</name>
    <city>Mysore</city>
  </student>
</students>
";

$xmlData = simplexml_load_string($xmlString);
$Records = $xmlData->student;
echo "<pre>Roll  Name  city <br/></pre>";
echo "----------------------------<br/>";
for ($i=0; $i <count($Records); $i++) 
{ 
    echo $Records[$i]->attributes()->roll . "  " . $Records[$i]->name . "  " . $Records[$i]->city . "<br/>";
}
