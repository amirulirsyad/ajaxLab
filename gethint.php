<?php
// Array with names
$a = ["Civic","City","Accord",
"HR-V","CR-V","Pilot","Passport",
"Odyssey","Ridgeline","City Hatchback"];

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";
$option_hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
      if ($option_hint === "") {
        $option_hint = "<option>".$name."</option>";
      } else {
        $option_hint .= "<option>".$name."</option>";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
//echo $hint === "" ? "no suggestion" : $hint;
echo $option_hint === "" ? "<option>no suggestion</option>" : $option_hint;
?>
