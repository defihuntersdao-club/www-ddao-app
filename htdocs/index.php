<?php

include "../conf.php";

//print $www_dir;
$d = $www_dir;
$d .= "inc/";
//print "D: $d\n";
$h = opendir($d);
while($f = readdir($h))
{

//print $f."\n";
    
    $tf = $d.$f;
    $t = pathinfo($d.$f);
    if($t[extension] == "php")
    {
	$inc_mas[$tf] = $f;
    }
}
asort($inc_mas);

foreach($inc_mas as $incer=>$f)
{
    
    $t = str_replace(".php","",$f);
    print "<!-- $t -->\n";
    include $incer;
}

?>