<?php

print "<div class=\"row grid-wrap justify-content-center info_wallet_ddao\">";
//print "<div class=\"bg-wrap\">";

//-----------------------------------------------------
$key = "ddao_tokens";
//$pref = "weth_ddao_sushi";
unset($th);
$th[i] = "";
$th[v] = "Vesting<br>aDDAO";
$th[w] = "Wallet<br>DDAO";

//$th[g1] = "Lobster";
//$th[g2] = "Shark";
//$th[g3] = "Whale";
//$th[g2] = "Shark";



$th[s] = "Staking";

$th[l] = "Liquidity<br>SLP";

print "<div class=\"col-12 col-md-12 col-lg-6\">";
//print "<div class=\"col-12\">";
print "<div class=\"grid-item\">";
//print "<div class=\"blk blk_shadow\">";
//print "asdf";
//print "<div class=h>DDAO</div>";
print "<div class=title>";
print "<table class=\"\">";
print "<tr><td rowspan=2 class=l>";
$f = $www_dir."/images/ddao2_logo_v05.svg";
$a = file_get_contents($f);
print $a;
//print "LOGO";
print "</td><td class=n>";
print "DDAO tokens";
print "</td></tr><td class=c>";
//print "DEFIHUNTERSDAO.CLUB token";
//print "Polygon network Tokens";
print "Tokens on Polygon network ";
print "<img src=/images/polygon.svg>";
print "</td></tr>";
print "</tr>";
print "</table>";
print "</div>";
//-----------
unset($kname);
$kname[tkn] = "Token's";
$kname[unlock] = "Unlocked";
//$kname[] = "on USD";
$kname[usd] = "in \$";
$kname[act] = "&nbsp;";

print "<div class=data>";
print "<table class=\"\">";
print "<tr>";
reset($th);
foreach($th as $k=>$v)
{
    print "<th class=\"$k\">$v</th>";
}
print "</tr>";

//$l = count($kname);
reset($name);
foreach($kname as $i=>$v2)
//for($i=0;$i<$l;$i++)
{
print "<tr class=\"tr_$i\">";
reset($th);
foreach($th as $k=>$v)
{
    $val = "-";
    switch($i)
    {
	case "act":
	    $val = "";
	    $val .= "<div class=btn>";
	    $val .= "<button class=\"btn btn-primary\" data-fancybox data-bs-toggle=\"modal\" data-bs-target=\"#lp_change\">More</button>";
	    $val .= "</div>";
	    
	break;
    }
    switch($k)
    {
	case "i":
	$val = $kname[$i];
	break;
    }
    if($k == "i" && $i == "act")
    {
//	$val = "more";
	$val = "";
//	$val .= "<button class=\"btn btn-primary\">";
//	$val .= "<span>";
//	$val .= '<svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M1.16016 1.42017L6.00097 6.26099L10.8418 1.42017" stroke="#3D8AFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </svg>';
//	$val .= "</span>";
//	$val .= "</button>";
    }

    print "<td class=\"$k data_".$key."_".$i."_".$k." \">$val</td>";
}
print "</tr>";
}

print "</table>";
print "</div>";

print "</div>";
print "</div>";
//-----------------------------------------------------
$key = "ddao_grp";
//$pref = "weth_ddao_sushi";
unset($th);
$th[i] = "";
//$th[v] = "Vesting";
$th[h] = "Hamster";

$th[g1] = "Lobster";
$th[g2] = "Shark";
$th[g3] = "Whale";
//$th[g2] = "Shark";

$costs[h] = "400 MATIC";
$costs[g1] = "3 000 DDAO";
$costs[g2] = "12 000 DDAO";
$costs[g3] = "30 000 DDAO";


//$th[s] = "Staking";

//$th[l] = "Liquidity";

print "<div class=\"col-12 col-md-12 col-lg-6\">";
//print "<div class=\"col-12\">";
print "<div class=\"grid-item\">";
//print "<div class=\"blk blk_shadow\">";
//print "asdf";
//print "<div class=h>DDAO</div>";
print "<div class=title>";
print "<table class=\"\">";
print "<tr><td rowspan=2 class=l>";
$f = $www_dir."/images/ddao2_logo_v05.svg";
$a = file_get_contents($f);
print $a;
//print "LOGO";
print "</td><td class=n>";
print "DDAO groups";
print "</td></tr><td class=c>";
//print "DEFIHUNTERSDAO.CLUB token";
//print "DDAO usability actives";
print "Presence in groups by the number of tokens in staking";
print "</td></tr>";
print "</tr>";
print "</table>";
print "</div>";
//-----------
unset($kname);
$kname[tkn] = "Token's";
//$kname[] = "on USD";
$kname[cost] = "Cost";
$kname[usd] = "in \$";
//$kname[act] = "&nbsp;";

print "<div class=data>";
print "<table class=\"\">";
print "<tr>";
reset($th);
foreach($th as $k=>$v)
{
    //$val = $v;
    $img = "/images/dot.gif";
    $case = strtolower($v);
    switch($case)
    {
	case "hamster":
	    $img = "/images/hamster3.png";
	break;
	case "lobster":
	    $img = "/images/lobster.png";
	break;
	case "shark":
	    $img = "/images/shark.png";
	break;
	case "whale":
	    $img = "/images/whale.png";
	break;
	
    }
    $v = "<img src=\"$img\"><br>$v";
//    $v = $case;
    print "<th class=\"$k\">$v</th>";
}
print "</tr>";

//$l = count($kname);
reset($name);
foreach($kname as $i=>$v2)
//for($i=0;$i<$l;$i++)
{
print "<tr class=\"tr_$i\">";
reset($th);
foreach($th as $k=>$v)
{
    $val = "-";
    switch($i)
    {
	case "act":
	    $val = "";
	    $val .= "<div class=btn>";
	    $val .= "<button class=\"btn btn-primary\" data-fancybox data-bs-toggle=\"modal\" data-bs-target=\"#lp_change\">More</button>";
	    $val .= "</div>";
	    
	break;
	case "cost":
	    $val = $costs[$k];
	break;
    }
    switch($k)
    {
	case "i":
	$val = $kname[$i];
	break;
    }
    if($k == "i" && $i == "act")
    {
//	$val = "more";
	$val = "";
//	$val .= "<button class=\"btn btn-primary\">";
//	$val .= "<span>";
//	$val .= '<svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M1.16016 1.42017L6.00097 6.26099L10.8418 1.42017" stroke="#3D8AFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </svg>';
//	$val .= "</span>";
//	$val .= "</button>";
    }

    print "<td class=\"$k data_".$key."_".$i."_".$k." \">$val</td>";
}
print "</tr>";
}

print "</table>";
print "</div>";

print "</div>";
print "</div>";

print "</div>";


?>