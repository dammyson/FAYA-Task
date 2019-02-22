<?php 
$name = $_POST["name"];
$url = $_POST["alltex"];
$data = file_get_contents($url);
$strMain = htmlentities($data);
$strFind = $name;

echo highlightStr($strMain, $strFind, '#FF0000');

function highlightStr($haystack, $needle, $highlightColorValue)
{
     // return $haystack if there is no highlight color or strings given, nothing to do.
    if (strlen($highlightColorValue) < 1 || strlen($haystack) < 1 || strlen($needle) < 1) {
        return $haystack;
    }
   
    $haystack = print str_replace(
    array("&lt;". $needle, $needle."&gt"),
    array('<span style="color:'.$highlightColorValue.';  background-color: Blue;"> &lt;'. $needle.'</span>', '<span style="color:'.$highlightColorValue.';  background-color: Blue;">'. $needle.'&gt</span>'),
   $haystack
);
    
  return $haystack;
} 


?>