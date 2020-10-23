<?php
function str2hex($str) {
  $hex = bin2hex($str);
  return '\x'.wordwrap($hex, 2, '\x', true);
}

function str2dec($str) {
  $chars = str_split($str);
  $res = "";
  foreach($chars as $char) {
    $res .= '\\'.decoct(ord($char));
  }
  return $res;
}

$string = $argv[1];
$mid = strlen($string) / 2;
$first = substr($string, 0, $mid);
$last = substr($string, $mid);
print str2hex($first).str2dec($last);
?>
