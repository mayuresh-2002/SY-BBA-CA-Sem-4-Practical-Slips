<?php

  $xml=simplexml_load_file("CricketTeam.xml") or die("cannnot load");

 $xmlstring=$xml->asXML();

 echo $xmlstring;                         

?>