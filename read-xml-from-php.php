<?php


$xmlData = simplexml_load_file("MyXMLFile1.xml");
#var_dump($xmlData);

$records = $xmlData->student;
#var_dump($records);
#echo "Total records = " . count($records);

#method1
// echo "<br/>" . "Name    city " . "<br/>";
// echo "-----------------------<br/>";
// echo $records[0]->name . " " . $records[0]->city . "<br/>";
// echo $records[1]->name . " " . $records[1]->city . "<br/>";
// echo $records[2]->name . " " . $records[2]->city . "<br/>";


#method2
// echo "<br/>" . "Name    city " . "<br/>";
// echo "----------------------------<br/>";
// for ($i = 0; $i < count($records); ++$i) {
//     echo $records[$i]->name . " " . $records[$i]->city . "<br/>";
// }



#method3
// echo $records[0]->attributes()->roll . "<br/>";
// echo $records[1]->attributes()->roll . "<br/>";

#methods4
// echo "<pre>Roll  Name  City <br/></pre>";
// for ($i = 0; $i < count($records); ++$i) {
//     echo $records[$i]->attributes()->roll . "  " . $records[$i]->name . "  " . $records[$i]->city . "<br/>";
// }
