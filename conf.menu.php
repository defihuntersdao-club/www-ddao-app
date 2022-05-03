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
$t[] = "claim-dbayc.defihuntersdao.club";


if(in_array($_SERVER['HTTP_HOST'],$t))
{
$k = "ddao_team";
$conf_menu[claim][$k][name] = "DDAO Team";
$conf_menu[claim][$k][type] = "live";
$conf_menu[claim][$k][type_text] = "Live";
$conf_menu[claim][$k][interval] = "24 month";
$conf_menu[claim][$k][start_date] = "Mar. 1, 2022";

$k = "ddao_dbayc";
$conf_menu[claim][$k][name] = "DDAO dBayc";
$conf_menu[claim][$k][type] = "live";
$conf_menu[claim][$k][type_text] = "Live";
$conf_menu[claim][$k][interval] = "6 month";
$conf_menu[claim][$k][start_date] = "May 7, 2022";
}

$k = "defiyeld";
$conf_menu[pool][$k][name] = "DefiYeld";
$conf_menu[pool][$k][type] = "type-soon";
$conf_menu[pool][$k][type_text] = "Comming soon";
$conf_menu[pool][$k][interval] = "-";
$conf_menu[pool][$k][start_date] = "Jan. 1, 2022";

$k = "gbc";
$conf_menu[pool][$k][name] = "GBC.ai";
$conf_menu[pool][$k][type] = "type-soon";
$conf_menu[pool][$k][type_text] = "Comming soon";
$conf_menu[pool][$k][interval] = "-";
$conf_menu[pool][$k][start_date] = "Feb. 8, 2022";

$k = "sabai";
$conf_menu[pool][$k][name] = "Sabai Ecoverse";
$conf_menu[pool][$k][type] = "type-soon";
$conf_menu[pool][$k][type_text] = "Comming soon";
$conf_menu[pool][$k][interval] = "-";
$conf_menu[pool][$k][start_date] = "Mar. 11, 2022";

$k = "eywa";
$conf_menu[pool][$k][name] = "Eywa.fi";
$conf_menu[pool][$k][type] = "type-soon";
$conf_menu[pool][$k][type_text] = "Comming soon";
$conf_menu[pool][$k][interval] = "-";
$conf_menu[pool][$k][start_date] = "Mar. 24, 2022";


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