<?php
$inputFile="sample1.txt";
$outputFile="rev1.txt";
$data=File_get_contents($inputFile);
$reverse=strrev($data);
File_put_contents($outputFile,$reverse);
echo"contents reversed successfully.";
?>