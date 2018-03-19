<?php
// Array with names
$a[] = "Rijst";
$a[] = "Pasta";
$a[] = "Thee";
$a[] = "Koffie";
$a[] = "Melk";
$a[] = "Cola";
$a[] = "Patat";
$a[] = "Hamburger";
$a[] = "Pizza";
$a[] = "Hotdog";
$a[] = "Sushi";
$a[] = "Vis";
$a[] = "Wortel";
$a[] = "Komkommer";
$a[] = "Aardappelen";
$a[] = "Granen";
$a[] = "Brood";
$a[] = "Worst";
$a[] = "Kaas";
$a[] = "Fanta";
$a[] = "Bier";
$a[] = "Wodka";
$a[] = "Ice tea";
$a[] = "Stokbrood";
$a[] = "Yogurt";
$a[] = "Ijs";
$a[] = "Taart";
$a[] = "Scones";
$a[] = "Lolly";
$a[] = "Koek";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

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
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>