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



$th[s] = "Staking<br>DDAO";

$th[l] = "Liquidity<br>lpDDAO";

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

$kname[lock] = "Locked";
$kname[unlock] = "Unlocked";
//$kname[] = "on USD";
//$kname[usd] = "in \$";
//$kname[act] = "&nbsp;";
$kname[metamask] = "Add to";

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
    $clas = "";
    switch($i)
    {
	case "act":
	    switch($k)
	    {
		case "v":
	    $val = "";
	    $val .= "<div class=btn>";
	    $val .= "<a href=\"/#/claim\" class=\"btn btn-primary\">Claim's</a>";
	    $val .= "</div>";

		break;

		case "w":
	    $val = "";
	    $val .= "<div class=btn>";
	    $val .= "<button class=\"btn btn-primary\" data-fancybox data-bs-toggle=\"modal\" data-bs-target=\"#modal_buy_ddao\">Buy</button>";
	    $val .= "</div>";

		break;

		case "s":
	    $val = "";
	    $val .= "<div class=btn>";
	    $val .= "<a href=\"/#/staking\" class=\"btn btn-primary\">Stake</a>";
//	    $val .= "<button class=\"btn btn-primary\">Coming soon</button>";
	    $val .= "</div>";

		break;

		case "l1":
		break;

	    default:
	    $val = "";
	    $val .= "<div class=btn>";
//	    $val .= "<button class=\"btn btn-primary\" data-fancybox data-bs-toggle=\"modal\" data-bs-target=\"#lp_change\">More $k</button>";
	    $val .= "<button class=\"btn btn-primary\">Coming soon</button>";
	    $val .= "</div>";
	    }
	    
	break;
	case "tkn":
	    switch($k)
	    {
		case "v":
		    $clas = "balance_addao";
		break;
		case "w":
		    $clas = "ddao_balance";
		break;
		case "s":
		    $clas = "stake_ddao_lock_unlock";
		break;
	    }
	break;
	case "unlock":
	    switch($k)
	    {
		case "v":
		    $clas = "ddao_vesting_aviable";
		break;
		case "w":
//		    $clas = "ddao_balance";
		break;
		case "s":
		    $clas = "stake_ddao_lock_amount";
		break;
	    }
	break;
	case "lock":
	    switch($k)
	    {
		case "v":
		    $clas = "balance_vesting";
		break;

		case "w":
//		    $clas = "ddao_balance";
		break;
		case "s":
//		    $clas = "stake_ddao_lock_amount";
		break;
	    }
	break;
	case "metamask":
	    switch($k)
	    {
		case "v":
		    $img = "https://raw.githubusercontent.com/defihuntersdao-club/www-ddao-app/main/htdocs/images/aDDAO2.svg";
		    $val = "<span style=\"cursor:pointer;\" class=\"tooltip-test\" title=\"Click for add aDDAO to Metamask\" data-toggle=\"tooltip\" data-placement=\"bottom\" onclick=\"metamask_add_token('0xca1931c970ca8c225a3401bb472b52c46bba8382','aDDAO',18,'$img');\"><img src=\"/images/ico/metamask.svg\" style=\"width:20px;\"></span>";
		break;
		case "w":
		    $img = "https://raw.githubusercontent.com/defihuntersdao-club/www-ddao-app/main/htdocs/images/DDAO_metamask.svg";
		    $val = "<span style=\"cursor:pointer;\" class=\"tooltip-test\" title=\"Click for add DDAO to Metamask\" data-toggle=\"tooltip\" data-placement=\"bottom\" onclick=\"metamask_add_token('0x90F3edc7D5298918F7BB51694134b07356F7d0C7','DDAO',18,'$img');\"><img src=\"/images/ico/metamask.svg\" style=\"width:20px;\"></span>";
		break;
		case "s":
		    $img = "https://raw.githubusercontent.com/defihuntersdao-club/www-ddao-app/main/htdocs/images/stddao4.svg";
		    $addr = "glob['api_wallet_info']['stake_ddao_lock_contract']";
		    $val = "<span style=\"cursor:pointer;\" class=\"tooltip-test\" title=\"Click for add stDDAO to Metamask\" data-toggle=\"tooltip\" data-placement=\"bottom\" onclick=\"metamask_add_token($addr,'stDDAO',18,'$img');\"><img src=\"/images/ico/metamask.svg\" style=\"width:20px;\"></span>";
		break;
		case "l":
		    $img = "https://raw.githubusercontent.com/defihuntersdao-club/www-ddao-app/main/htdocs/images/lpDDAO3.svg";
		    $addr = "glob['api_wallet_info']['stake2_contract']";
		    $val = "<span style=\"cursor:pointer;\" class=\"tooltip-test\" title=\"Click for add lpDDAO to Metamask\" data-toggle=\"tooltip\" data-placement=\"bottom\" onclick=\"metamask_add_token($addr,'lpDDAO',18,'$img');\"><img src=\"/images/ico/metamask.svg\" style=\"width:20px;\"></span>";
		break;
	    }
//	    print "<span class=\"tooltip-test\" title=\"Click this for add token to Metamask\" data-toggle=\"tooltip\" data-placement=\"bottom\" onclick=\"metamask_add_token(glob['api_wallet_info']['stake_ddao_lock_contract'],'stDDAO',18,'https://raw.githubusercontent.com/defihuntersdao-club/www-ddao-app/main/htdocs/images/stddao4.svg');\"><img src=\"/images/ico/metamask.svg\" style=\"width:28px;\"></span>";
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

    print "<td class=\"$k data_".$key."_".$i."_".$k." $clas\">$val</td>";
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
//$kname[usd] = "in \$";
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
    $clas = "";
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
	case "tkn":
	    switch($k)
	    {
		case "h";
		    $clas = "my_hamsters_count";
		break;
		default:
		//$val = $k;
	    }
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

    print "<td class=\"$k data_".$key."_".$i."_".$k." $clas\">$val</td>";
}
print "</tr>";
}

print "</table>";
print "<pre>";
print "\n<br>Balance  stDDAO : ";
print "<b class=\"balance_stddao\"></b>";
print "\n<br>Balance  lpDDAO : ";
print "<b class=\"balance_lpddao\"></b>";
print "\n<br>Balance vesting: ";
print "<b class=\"balance_vesting\"></b>";
print "\n<br>Balance Summary: ";
print "<b class=\"balance_summary\"></b>";
print "</pre>";

print "</div>";

print "</div>";
print "</div>";

print "</div>";


?>