<?php

// tape-ended live tape-soon

$k = "ddao_seed";
$conf_menu[claim][$k][name] = "DDAO Seed";
$conf_menu[claim][$k][type] = "live";
$conf_menu[claim][$k][type_text] = "Live";
$conf_menu[claim][$k][interval] = "24 month";
$conf_menu[claim][$k][start_date] = "Mar. 1, 2022";


$k = "ddao_private1";
$conf_menu[claim][$k][name] = "DDAO Private1";
$conf_menu[claim][$k][type] = "live";
$conf_menu[claim][$k][type_text] = "Live";
$conf_menu[claim][$k][interval] = "18 month";
$conf_menu[claim][$k][start_date] = "Mar. 1, 2022";

$k = "ddao_private2";
$conf_menu[claim][$k][name] = "DDAO Private2";
$conf_menu[claim][$k][type] = "live";
$conf_menu[claim][$k][type_text] = "Live";
$conf_menu[claim][$k][interval] = "12 month";
$conf_menu[claim][$k][start_date] = "Mar. 1, 2022";

unset($t);
$t[] = "app-test.defihuntersdao.club";
$t[] = "app-test2.defihuntersdao.club";
$t[] = "app-test3.defihuntersdao.club";
$t[] = "app-team.defihuntersdao.club";
$t[] = "app-team-test.defihuntersdao.club";


if(in_array($_SERVER['HTTP_HOST'],$t))
{

$k = "ddao_team";
$conf_menu[claim][$k][name] = "DDAO Team";
$conf_menu[claim][$k][type] = "live";
$conf_menu[claim][$k][type_text] = "Live";
$conf_menu[claim][$k][interval] = "24 month";
$conf_menu[claim][$k][start_date] = "Mar. 1, 2022";

$test_block_enable = 1;
}

unset($t);
$t[] = "dbayc.defihuntersdao.club";
$t[] = "app-test.defihuntersdao.club";
if(in_array($_SERVER['HTTP_HOST'],$t))
{
$k = "ddao_dbayc";
$conf_menu[claim][$k][name] = "DDAO dBayc";
$conf_menu[claim][$k][type] = "live";
$conf_menu[claim][$k][type_text] = "Live";
$conf_menu[claim][$k][interval] = "6 month";
$conf_menu[claim][$k][start_date] = "May 7, 2022";
}

if(0)
{
$k = "ddao_learn";
$conf_menu[pool][$k][name] = "DDAO test";
$conf_menu[pool][$k][type] = "live";
$conf_menu[pool][$k][type_text] = "Live NOW";
$conf_menu[pool][$k][interval] = "-";
$conf_menu[pool][$k][start_date] = "May. 19, 2022";
}

$k = "xdao";
$conf_menu[pool][$k][name] = "XDAO";
$conf_menu[pool][$k][type] = "tape-end";
$conf_menu[pool][$k][type_text] = "ended";
$conf_menu[pool][$k][interval] = "-";
$conf_menu[pool][$k][start_date] = "Sep. 26, 2022";
$conf_menu[pool][$k][ended] = 1;

$k = "tmm";
$conf_menu[pool][$k][name] = "Take My Muffin";
$conf_menu[pool][$k][type] = "tape-ended";
$conf_menu[pool][$k][type_text] = "Ended";
$conf_menu[pool][$k][interval] = "-";
$conf_menu[pool][$k][start_date] = "Aug. 8, 2022";
$conf_menu[pool][$k][ended] = 1;

$k = "gearz";
$conf_menu[pool][$k][name] = "GEARZ NFT";
$conf_menu[pool][$k][type] = "tape-ended";
$conf_menu[pool][$k][type_text] = "ENDED";
$conf_menu[pool][$k][interval] = "-";
$conf_menu[pool][$k][start_date] = "Jul. 26, 2022";
$conf_menu[pool][$k][ended] = 1;

$k = "metatg";
$conf_menu[pool][$k][name] = "Meta Tycoon";
$conf_menu[pool][$k][type] = "tape-ended";
$conf_menu[pool][$k][type_text] = "ENDED";
$conf_menu[pool][$k][interval] = "-";
$conf_menu[pool][$k][start_date] = "Jul. 7, 2022";

$k = "eywa";
$conf_menu[pool][$k][name] = "Eywa.fi";
$conf_menu[pool][$k][type] = "type-soon";
$conf_menu[pool][$k][type_text] = "Comming soon";
$conf_menu[pool][$k][interval] = "-";
$conf_menu[pool][$k][start_date] = "Mar. 24, 2022";

$k = "sabai";
$conf_menu[pool][$k][name] = "Sabai Ecoverse";
$conf_menu[pool][$k][type] = "type-soon";
$conf_menu[pool][$k][type_text] = "Comming soon";
$conf_menu[pool][$k][interval] = "-";
$conf_menu[pool][$k][start_date] = "Mar. 11, 2022";

$k = "gbc";
$conf_menu[pool][$k][name] = "GBC.ai";
$conf_menu[pool][$k][type] = "type-soon";
$conf_menu[pool][$k][type_text] = "Comming soon";
$conf_menu[pool][$k][interval] = "-";
$conf_menu[pool][$k][start_date] = "Feb. 8, 2022";


$k = "defiyeld";
$conf_menu[pool][$k][name] = "DefiYeld";
$conf_menu[pool][$k][type] = "type-soon";
$conf_menu[pool][$k][type_text] = "Comming soon";
$conf_menu[pool][$k][interval] = "-";
$conf_menu[pool][$k][start_date] = "Jan. 1, 2022";

/*
$k = "ddao_lock";
$conf_menu[stake][$k][name] = "DDAO Staking";
$conf_menu[stake][$k][type] = "live";
$conf_menu[stake][$k][type_text] = "NOW LIVE";
$conf_menu[stake][$k][interval] = "-";
$conf_menu[stake][$k][start_date] = "May. 21, 2022";
*/

if($test_block_enable)
{
$k = "ddao_learn";
$conf_menu[stake][$k][name] = "stDDAO learn staking";
//$conf_menu[stake][$k][type] = "live";
//$conf_menu[stake][$k][type_text] = "NOW LIVE";
$conf_menu[stake][$k][type] = "type-soon";
$conf_menu[stake][$k][type_text] = "Comming soon";
$conf_menu[stake][$k][interval] = "-";
$conf_menu[stake][$k][start_date] = "May. 21, 2022";
}

/*
$k = "fund1";
$conf_menu[stepn][$k][name] = "Stepn Fund 1.0";
$conf_menu[stepn][$k][type] = "live";
$conf_menu[stepn][$k][type_text] = "NOW LIVE";
$conf_menu[stepn][$k][interval] = "-";
$conf_menu[stepn][$k][start_date] = "May. 25, 2022";
$conf_menu[stepn][$k][min]	= 20;
*/

$k = "d20221020";
$conf_menu[pitch][$k][name] = "October's Pitch Day";
$conf_menu[pitch][$k][skip_addr] = 1;




//$conf_menu[pitch][$k][type] = "live";
$flag = 0;
if(time() > strtotime("2022-10-20 00:00:00"))$flag = 1;
if(time() > strtotime("2022-10-21 00:00:00"))$flag = 2;
switch($flag)
{
    case "1":
    $conf_menu[pitch][$k][type] = "live";
    $conf_menu[pitch][$k][type_text] = "LIVE";
    break;
    case "2":
    $conf_menu[pitch][$k][type] = "tape-ended";
    $conf_menu[pitch][$k][type_text] = "ENDED";
    break;
    default:
    $conf_menu[pitch][$k][type] = "type-soon";
    $conf_menu[pitch][$k][type_text] = "COMMING SOON";

}
$conf_menu[pitch][$k][interval] = "-";
$conf_menu[pitch][$k][start_date] = "Oct. 20, 2022";
$conf_menu[pitch][$k][comments] = "

<p>
<b>When:</b><br>
On October 20, a pitch day will be held as part of <a href=https://defihuntersdao.club/ target=_blank>DDAO Hunters</a>

<p>
<b>Whats:</b><br>
1300 active investors will choose by voting the most promising project
<p><b>Rewards</b>:
<br>-Angel investments
<br>-Interview on the <a href=https://youtube.com/channel/UCpf4lgYwAf6H0MfWTiyqVNw>Pro Blockchain Media Live</a> channel
<br>-A permanent discount of -30% on any type of integration into <a href=https://pro-blockchain.com/tariff/en/ target=_blank>Pro Blockchain Media</a>
<br>
<p><b>The cost of participation - $ 3000</b>
<br>We accept applications until October 18
";
//$conf_menu[pitch][$k][min]	= 20;

$k = "interface";
$conf_menu[settings][$k][name] = "APP Interface";
$conf_menu[settings][$k][type] = "live";
//$conf_menu[settings][$k][type_text] = "WWW";
$conf_menu[settings][$k][skip_addr] = 1;
$conf_menu[settings][$k][start_date] = "October 2022";
//$conf_menu[settings][$k][interval] = "-";
//$conf_menu[settings][$k][start_date] = "May. 25, 2022";
//$conf_menu[settings][$k][min]	= 20;
$conf_menu[settings][$k][comments] = "
<div class=\"grid-item__info\">
<div>
<div class=label>Upper Info Panel<br>Show/Hide</div>
<div class=value>".html_checkbox("upanel")."</div>
</div>

<div>
<div class=label>Theme<br>Light/Dark</div>
<div class=value>".html_checkbox("theme",0)."</div>
</div>
</div>
";

$k2 = "info";
$k = "wallet";
$conf_menu[$k2][$k][name] = "Wallet Balances";
//$conf_menu[$k2][$k][skip_addr] = 1;
$conf_menu[$k2][$k][skip_detail] = 1;
$conf_menu[$k2][$k][btn_action] = 1;

$k = "group";
$conf_menu[$k2][$k][name] = "DDAO Groups";
//$conf_menu[$k2][$k][skip_addr] = 1;
$conf_menu[$k2][$k][skip_detail] = 1;
$conf_menu[$k2][$k][btn_action] = 1;


switch($_SERVER['HTTP_HOST'])
{
    case "app-test.defihuntersdao.club":
    case "app-test2.defihuntersdao.club":
    case "app-test3.defihuntersdao.club":
    case "app-team-test.defihuntersdao.club":
	$api = "https://api-test2.defihuntersdao.club/";
	$api2 = "https://api-v02-test.defihuntersdao.club/";
	$js_debug = 1;
    break;
    default:
	$api	= "https://api.defihuntersdao.club/";
	$api2 	= "https://api-v02.defihuntersdao.club/";
}

?>