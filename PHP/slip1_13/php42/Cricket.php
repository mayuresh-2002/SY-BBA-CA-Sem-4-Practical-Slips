<?php

 // Load xml file into xml_data variable

//$xml_data = simplexml_load_file("http://localhost/arprogram/cricket.xml") or

//die("Error: Object Creation failure");

  

$xml_data = simplexml_load_file("http://localhost:8080/SEM4/Cricket.xml") or

die("Error: Object Creation failure");

 // Use foreach loop to display data and for sub elements access,We will use children() function

foreach ($xml_data->children() as $data)

{

 //display each sub element in xml file

$run=$data->runs;

$wic=$data->wickets;

$name=$data->player;

if($run >=1200 && $wic >= 50)

{

echo "<br>------------------------------------";

echo "<br>".$name;

}

}

 ?>