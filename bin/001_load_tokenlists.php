#!/usr/bin/php
<?php

include "../conf.php";
$urls[1] = "https://extendedtokens.uniswap.org/";
$urls[] = "https://tokens.pancakeswap.finance/pancakeswap-extended.json";
$urls[] = "https://raw.githubusercontent.com/defihuntersdao-club/token-list/main/token_list.json";

$kolvo = count($urls);
$f = __FILE__.".count";
$a = file_get_contents($f);
if($a != $kolvo)
file_put_contents($f);

foreach($urls as $nn=>$url)
{
$f = __FILE__.".$nn";
$t = filemtime($f);
if(time() > ($t+3600))
{
$a = file_get_contents($url);
file_put_contents($f,$a);
}
else
$a = file_get_contents($f);

print $a;

$a = json_decode($a,1);
    foreach($a[tokens] as $v2)
    {
	$o[chain_id][$v2[chainId]][$v2[address]] = $v2;
	$o[abbr][$v2[symbol]] = $v2;
    }
}

$txt = json_encode($o,192);
$f = __FILE__.".json";
file_put_contents($f,$txt);
