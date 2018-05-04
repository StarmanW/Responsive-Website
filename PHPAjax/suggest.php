<?php

//List of names
$names = [
    "Arthur", "Andy", "Anderson", "Amberly", "Beverly", 
    "Michelle Ann", "Samuel Jackson", "Xander Oxgot", 
    "Zion Charlie", "Kelly Holly", "Chong Ah Lun", 
    "Daniel Craig", "James Willy", "William Zend", 
    "Rasmus", "Larry John", "David Jack", "Oosman Jim", 
    "Tenderson Arm"
];

//Get query string
$name = $_REQUEST['name'];
$suggestions = "";

if ($name !== "") {
    $len = strlen($name);
    foreach ($names as $nm) {
        if (preg_match("/^.*" . preg_quote($name) . ".*$/i", $nm)) {
            if ($suggestions === "") {
                $suggestions = $nm;
            } else {
                $suggestions .= "<br>$nm";
            }
        }
    }
}

echo $suggestions === "" ? "No such names found." : $suggestions;
?>