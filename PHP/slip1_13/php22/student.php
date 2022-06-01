<?php     

        $dom=new DomDocument();

        $dom->load("student.xml");

        print $dom->saveXML()."<br>";

        print $dom->save("newfile.doc");

?>