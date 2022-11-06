#!/usr/bin/php
<?php
include "../conf.php";
include "net.php";

$f = "001_load_tokenlists.php.json";
$a = file_get_contents($f);
$a = json_decode($a,1);


$d = __DIR__;
$d = dirname($d);
$d1 = $d;
$d = $d1."/htdocs/images/tkns/";
foreach($a[chain_id] as $chain_id=>$v3)
{
foreach($v3 as $addr2=>$v2)
{
$name = $v2[symbol];
$net = $net_name[$chain_id];
if(!$net)continue;
$nn++;
    $t = $v2[logoURI];
    $t = explode("?",$t,2);
    $t = $t[0];
    $t = pathinfo($t);
    $ext = $t[extension];
    $ext = strtolower($ext);
    $ext = str_replace("jpeg","jpg",$ext);
    $addr = $v2[address];
    $addr = strtolower($addr);
    $f = $d.$net."_".$addr.".".$ext;
//    print $name." ".$f."\n";
//    $e[] = "wget \"$v2[logoURI]\" -O $f";
    $t = pathinfo($f);
    $t2 = str_replace($www_dir,"",$f);
    $f_mas[$t[filename]] = $t2;
    if(!file_exists($f))
    {
    print "Download[$nn]: $v2[logoURI]\n";
    $a = file_get_contents($v2[logoURI]);
    if($a)
    {
    print "Save to: $f\n";
    file_put_contents($f,$a);
    }
    }
}
}
$txt = json_encode($f_mas,192);
print $txt;
$f = __FILE__.".json";
file_put_contents($f,$txt);

