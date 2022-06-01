<?php
    $xml=simplexml_load_file(“cricket.xml”)or die(“cannotnload”);
    $xmlstring=$xml->asXML();
    Echo $xmlstring;
?>