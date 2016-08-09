<?php
// preenche uma string com outra string

$text = "The Beatles";

print str_pad($text, 15, "*", STR_PAD_LEFT) . "<br>\n";
print str_pad($text, 20, "*", STR_PAD_BOTH) . "<br>\n";
print str_pad($text, 30, "*") . "<br>\n";
