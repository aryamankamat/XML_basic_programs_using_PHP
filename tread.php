<?php

$xmldata = simplexml_load_file("1.xml");

$record = $xmldata->student;
#var_dump($recod);
#echo "\n Total records are = " . count($recod);

// echo $recod[0]->attributes()->roll . "<br/>";
// echo $recod[1]->attributes()->roll . "<br/>";

// echo "<pre>Roll   Name   College <pre/>";
// for ($i = 0; $i < count($record); $i++) {
//     echo $record[$i]->attributes()->roll . "   " . $record[$i]->name . "   " . $record[$i]->college . "<br/>";
// }

// echo "<pre>Roll   Name   College <pre/>";
// foreach ($record as $val) {
//     echo $val->attributes()->roll . "   " . $val->name . "   " . $val->college . "<br/>";
// }
