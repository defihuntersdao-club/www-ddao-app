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
$conf_menu[pool][$k][type] = "Live";
$conf_menu[pool][$k][type_text] = "Live Now";
$conf_menu[pool][$k][interval] = "-";
$conf_menu[pool][$k][start_date] = "Sep. 26, 2022";
//$conf_menu[pool][$k][ended] = 1;

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

if(1)
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

$k = "fund1";
$conf_menu[stepn][$k][name] = "Stepn Fund 1.0";
$conf_menu[stepn][$k][type] = "live";
$conf_menu[stepn][$k][type_text] = "NOW LIVE";
$conf_menu[stepn][$k][interval] = "-";
$conf_menu[stepn][$k][start_date] = "May. 25, 2022";
$conf_menu[stepn][$k][min]	= 20;


switch($_SERVER['HTTP_HOST'])
{
    case "app-test.defihuntersdao.club":
    case "app-test2.defihuntersdao.club":
    case "app-test3.defihuntersdao.club":
    case "app-team-test.defihuntersdao.club":
	$api = "https://api-test2.defihuntersdao.club/";
	$js_debug = 1;
    break;
    default:
    $api = "https://api.defihuntersdao.club/";
}

?>