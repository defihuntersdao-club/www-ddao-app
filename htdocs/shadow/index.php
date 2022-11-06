<?php
include "../../conf.php";

unset($o);
$whats = $_GET[a];

$whats = basename($whats);
$f = __DIR__."/inc/$whats.php";
if(file_exists($f))
include $f;

if(!isset($o))
{
    $o[error] = "No data exists";
}

$txt = json_encode($o,192);
print $txt;

?>