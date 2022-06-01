<?php

header("Content-type: text/plain");

$url = 'http://www.college.com/Science/CS.php';

 

$url=parse_url($url);

echo 'Scheme : '.$url['scheme']."\n";

echo 'Host : '.$url['host']."\n";

echo 'Path : '.$url['path']."\n";

//var_dump($http_response_header);

?>