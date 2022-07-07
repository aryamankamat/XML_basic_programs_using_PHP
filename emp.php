<?php

$xmldata = simplexml_load_file("emp.xml");
#var_dump($xmldata);

$records = $xmldata->employee;
#echo "\n Total records are = " . count($records);

echo "<pre>EmpNum    EmpName    Salary    Designation<pre/>";
foreach ($records as $val) {
    echo $val->emp_no . "      " . $val->emp_name . "      " . $val->sal . "      " . $val->designation . "<br/>";
}
