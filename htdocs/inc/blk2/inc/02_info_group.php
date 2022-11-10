<?php
//print "!!!!!!!!!!!!!!!!!!!!!!!!";
//print "<div class=\"row grid-wrap justify-content-center $item\">";
//print "<div class=\"bg-wrap\">";

//-----------------------------------------------------
if(0)
{
$key = "ddao";
$pref = "weth_ddao_sushi";
unset($th);
$th[i] = "";
$th[v] = "Vesting";
$th[w] = "Wallet";

$th[s] = "Staking";
$th[l] = "Liquidity";

print "<div class=\"col-12 col-md-6 col-lg-6\">";
print "<div class=\"grid-item\">";
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
print "DDAO";
print "</td></tr><td class=c>";
print "DEFIHUNTERSDAO.CLUB token";
print "</td></tr>";
print "</tr>";
print "</table>";
print "</div>";
//-----------
unset($kname);
$kname[tkn] = "Token";
//$kname[] = "on USD";
$kname[usd] = "on \$";
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

}
//-----------------------------------------------------
$key = "gnft_quick";
unset($th);
$th[i] = "";
//$th[v] = "Vesting";
$th[w] = "Wallet";

$th[s] = "Staking";
$th[l] = "Liquidity";

print "<div class=\"col-12 col-md-6 col-lg-6\">";
print "<div class=\"grid-item\">";
//print "asdf";
//print "<div class=h>DDAO</div>";
print "<div class=title>";
print "<table class=\"\">";
print "<tr><td rowspan=2 class=l>";
//$f = $www_dir."/images/ddao2_logo_v05.svg";
//$a = file_get_contents($f);
//print $a;
//print "LOGO";
print "<img src=/images/ico/gnft_1894.png>";
print "</td><td class=n>";
print "GNFT";
print "<img src=/images/ico/quickswap.svg>";
print "</td></tr><td class=c>";
print strtoupper("nftindex.tech");
print " governance token";
print "</td></tr>";
print "</tr>";
print "</table>";
print "</div>";

//-----------
unset($kname);
$kname[tkn] = "Token";
//$kname[] = "on USD";
$kname[usd] = "on \$";
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
//print "<tr>";
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
	    $val .= "<button class=\"btn btn-primary\">More</button>";
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


    print "<td class=\"$k data_".$key."_".$i."_".$k."\">$val</td>";
}
print "</tr>";
}

print "</table>";
print "</div>";


print "</div>";
print "</div>";
//-----------------------------------------------------
//-----------------------------------------------------
$key = "gnft_sushi";
unset($th);
$th[i] = "";
//$th[v] = "Vesting";
$th[w] = "Wallet";

$th[s] = "Staking";
$th[l] = "Liquidity";

print "<div class=\"col-12 col-md-6 col-lg-6\">";
print "<div class=\"grid-item\">";
//print "asdf";
//print "<div class=h>DDAO</div>";
print "<div class=title>";
print "<table class=\"\">";
print "<tr><td rowspan=2 class=l>";
//$f = $www_dir."/images/ddao2_logo_v05.svg";
//$a = file_get_contents($f);
//print $a;
//print "LOGO";
print "<img src=/images/ico/gnft_1894.png>";
print "</td><td class=n>";
print "GNFT";
print "<img src=/images/ico/sushiswap.svg>";
print "</td></tr><td class=c>";
print strtoupper("nftindex.tech");
print " governance token";
print "</td></tr>";
print "</tr>";
print "</table>";
print "</div>";

//-----------
unset($kname);
$kname[tkn] = "Token";
//$kname[] = "on USD";
$kname[usd] = "on \$";
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
//print "<tr>";
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
	    $val .= "<button class=\"btn btn-primary\">More</button>";
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


    print "<td class=\"$k data_".$key."_".$i."_".$k."\">$val</td>";
}
print "</tr>";
}

print "</table>";
print "</div>";


print "</div>";
print "</div>";
//-----------------------------------------------------


$key = "ddao";
unset($th);
$th[i] = "";
$th[w] = "Wallet";
$th[s] = "Staking";
$th[l] = "Liquidity";

print "<div class=\"col-12 col-md-6 col-lg-6\">";
print "<div class=\"grid-item\">";
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
print "DDAO";
print "</td></tr><td class=c>";
print "DAO NFT Hunters ";
print "<nobr>(free access to DISCORD)</nobr>";
print "</td></tr>";
print "</tr>";
print "</table>";
print "</div>";

print "<div class=humster>";
print "<img src=/images/humster.png>";
print "</div>";
print "<div class=humster_balance>My hamster's: 0</div>";
//print "<div class=link_buy>";
//print "<button class=\"art-button-2 btn btn-primary \">Buy HUMSTER</button>";
$type = "buy_humster";
print "<div class=\"btn_action d-none\" id=".$type."_aviable>DDD</div>";
print "
                                                        <div class=\"grid-item__button\">
                                                                <a href=\"#\" class=\"art-button-2 btn btn-primary wallet_connect\">
                                                                        Connect a wallet
                                                                </a>
                                                                <a href=\"#\" class=\"art-button-2 btn btn-primary wallet_action d-none\" id=btn_".$type." onclick=\"return btn_click_action(this);\">
                                                                        ...
                                                                </a>
                                                        </div>
";

/*
//print "</div>";
$a = "400";
$a *= 10**18;
$a = view_number("4",21,"0");
$a = strrev($a);

//$a = gmp_mul($a,10**18);
$a = gmp_dechex($a);
$a = "0x".$a;
//$a = gmp_strval($a);
print $a;
*/

print "</div>";
print "</div>";
//-----------------------------------------------------




//print "</div>";