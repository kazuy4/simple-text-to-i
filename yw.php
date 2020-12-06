<?php
// author : NuLLByte31337
// simple code
echo "Your Text : ";
$text = trim(fgets(STDIN));
$preg = strtolower(preg_replace("/[aiueo]/i", "i", $text));
echo "Output : " . $preg . "\n";
?>
