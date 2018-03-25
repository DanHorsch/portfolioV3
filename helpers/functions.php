<?php

function breakText($text, $char = 200) {
  $text = $text . " ";
  $text = substr($text, 0, $char);
  $text = substr($text, 0, strrpos($text, " "));
  $text = $text . "...";
  return $text;
}
?>
