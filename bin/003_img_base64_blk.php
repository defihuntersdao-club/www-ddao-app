#!/usr/bin/php
<?php
include "../conf.php";
include "net.php";
//error_reporting(65535);

$link[1] = "https://etherscan.io/token/";
$link[56] = "https://bscscan.com/token/";
$link[136] = "https://polygonscan.com/token/";

$link2[eth] = "https://etherscan.io/token/";
$link2[bsc] = "https://bscscan.com/token/";
$link2[matic] = "https://polygonscan.com/token/";

$chain_name[1] = "eth";
$chain_name[56] = "bsc";
$chain_name[137] = "matic";

$svg = file_get_contents("stat.svg");

$f = "001_load_tokenlists.php.json";
$a = file_get_contents($f);
$mas = json_decode($a,192);

$f = "002_download_images.php.json";
$a = file_get_contents($f);
$f_mas = json_decode($a,1);

//print_r($f_mas);die;
/*
ksort($mas[abbr]);
foreach($mas[abbr] as $v2)
{
//    if(!isset($link[$v2[chainId]]))continue;
    $mas2[] = $v2;
}
*/
foreach($mas[chain_id] as $chain_id=>$v3)
{
foreach($v3 as $addr2=>$v2)
{
    $net = $net_name[$chain_id];
    if(!$net)continue;
    $t = $net."_".$addr2;
    $t = strtolower($t);
    $mas2[$t] = $v2;
    $n2 = $v2[symbol]."_".$net;
    $names[$n2] = $t;
}
}
ksort($names);
//print_r($names);die;
//print_r($mas2);die;
$kolvo = count($mas2);
print "KOLVO: $kolvo\n";
$num = 3;
$len = ceil($kolvo/$num);
print "LEN: $len\n";
$nn = 0;

//die;

    $o .= "<div class=\"blk_token\">";
    $o .= "<div class=\" row\">";
//    $o .= "<div class=\" blk\">";
    $o .= "<div class=\"col-10 titl\">";
//    $o .= "<span class=\"glob-info__label h\">";
    $o .= "Addons token";
    $o .= "<span id=addons_tkn_count>&nbsp</span>";
//    $o .= "</span>";
    $o .= "</div>";
    $o .= "<div class=\"col-2 titl r\">";
    $o .= "<span onclick=show_more_tokens2()>";
$ff = __DIR__."/refresh.svg";
$fa = file_get_contents($ff);
    $o .= $fa;
//    $o .= "<img src=/images/refresh.svg class=refr>";
    $o .= "</span>";
    $o .= "<span class=zero onclick=zero_balances(this)>";
    $o .= "Show zero balance";
    $o .= "</span>";
    $o .= "</div>";
    $o .= "</div>";
    $o .= "<div class=\" row\">";
    $o .= "<div class=\"col-12 col-sm-12 col-xl-4\">";
//foreach($mas2 as $v2)
foreach($names as $name_id)
{
$v2 = $mas2[$name_id];
$nn++;
if($nn>=$len)
{
$nni++;
$nn=0;
    $o .= "</div>";
    $o .= "<div class=\"col-12 col-sm-12 col-xl-4\">";
}
//    if(!isset($link[$v2[chainId]]))continue;

    $t = $v2[address];
    $addr = $t;
    $addr = strtolower($addr);
    $t = strtolower($t);
    $f = $www_dir.$f_mas[$name_id];
//print $name_id."\n";
//print $f."\n";die;
    $t = pathinfo($f);
    $ext = $t[extension];
    $ext = strtolower($ext);
    switch($ext)
    {
	case "jpg":
	    $s = "data:image/jpeg;base64, ";
	break;
	case "png":
	    $s = "data:image/png;base64, ";
	break;
	case "svg":
	    $s = "data:image/svg;base64, ";
	break;
	
    }
    $a = file_get_contents($f);
    $a = base64_encode($a);
    $s .= $a;


$tt = $name_id;
$tt = explode("_",$tt);
$net = $tt[0];

    $o .= "<div class=\"tkn row r tkn_row d-none\" id=\"row_$name_id\">";
    $o .= "<div class=\"col-5 tkn_name\">";
    $o .= $v2[symbol];
//    $o .= "</div>";
//    $o .= "<div class=\"col-3\">";
    $o .= "&nbsp;";
    $o .= "&nbsp;";
    $o .= "<img class=tkn_img src=\"$s\">\n";
    $o .= "<img class=tkn_img2 src=\"/images/net/$net.svg\">\n";
    $o .= "</div>";
//    $o .= "<div class=\"col-1 tkn_txt\">";
//    $o .= "\$";
//    $o .= "</div>";
    $o .= "<div class=\"col-5\">";
//    $o .= "<span class=\"tkn_count\" id=\"tkn_".$chain_name[$v2[chainId]]."_$addr\">";
    $o .= "<span class=\"tkn_count\" id=\"tkn_".$name_id."\">";
    $o .= "0";
    $o .= "</span>";
    $o .= "</div>";

    $o .= "<div class=\"col-1 tkn_link\">";
    $u = $link2[$net].$addr;
    $u2 = "#";
    if($u)$u2 = $u;
//    $u = $v2[chainId]."_".$addr;
    $o .= "<a href=\"$u2\" class=tkn_a target=_blank onclick=\"this.href='$u?a='+login_get();\">";
    $o .= $svg;
    $o .= "</a>";
    $o .= "</div>";

    $o .= "<div class=\"col-1\">";
    $o .= "</div>";
    $o .= "</div>\n";
}
    $o .= "</div>";
    $o .= "</div>";
    $o .= "</div>";

$f = __FILE__.".inc";
file_put_contents($f,$o);
print "\nEND\n";