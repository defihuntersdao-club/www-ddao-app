<?php

// tape-ended live tape-soon

$k = "ddao_seed";
$conf_menu[claim][$k][name] = "DDAO Seed";
$conf_menu[claim][$k][type] = "live";
$conf_menu[claim][$k][interval] = "24 month";



$k = "ddao_private1";
$conf_menu[claim][$k][name] = "DDAO Private1";
$conf_menu[claim][$k][type] = "live";
$conf_menu[claim][$k][interval] = "18 month";

$k = "ddao_private2";
$conf_menu[claim][$k][name] = "DDAO Private2";
$conf_menu[claim][$k][type] = "live";
$conf_menu[claim][$k][interval] = "12 month";

unset($t);
$t[] = "app-test.defihuntersdao.club";
$t[] = "app-team.defihuntersdao.club";

if(in_array($_SERVER['HTTP_HOST'],$t))
{
$k = "ddao_team";
$conf_menu[claim][$k][name] = "DDAO Team";
$conf_menu[claim][$k][type] = "live";
$conf_menu[claim][$k][interval] = "24 month";
}

?>