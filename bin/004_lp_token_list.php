#!/usr/bin/php
<?php

error_reporting(0);
$now_time = time();

$f_ver = __FILE__.".ver";
$f_time = __FILE__.".time";

$time = file_get_contents($f_time);
//file_put_contents($f_time,$t);


//$o[name] = "DeFi Hanters DAO token list";
$o[name] = "DDAO LP token list";
$o[timestamp] = date("Y-m-d",$time)."T".date("H:i:s",$time)."+02:00";
$timestamp = date("Y-m-d",$now_time)."T".date("H:i:s",$now_time)."+02:00";

$a = file_get_contents($f_ver);
$o[version] = json_decode($a,1);

//$o[keywords][1] = "https://nftindex.tech/";
//$o[keywords][] = "https://defihuntersdao.club/";


//$o[tags][] = "GOVERNANCE TOKEN";
//$o[tags][] = "NFT Index";
//$o[tags][] = "METAVERSE Index";
$o[logoURI] = "https://raw.githubusercontent.com/defihuntersdao-club/defihuntersdao-logo/main/DDAO_Logo_200x200.png";

//$n = "nfti";
$n = 0;
$tkns[$n][address] 	= strtolower("0x3fd0CC5f7Ec9A09F232365bDED285e744E0446e2");
$tkns[$n][chainId] 	= 137;
$tkns[$n][name]		= "SLP GNFT/USDC";
$tkns[$n][symbol]	= "SlpGnftUsdc";
$tkns[$n][decimals]	= 18;
$tkns[$n][logoURI]	= "https://res.cloudinary.com/sushi-cdn/image/fetch/f_auto,c_limit,w_48,q_auto/https://app.sushi.com/images/logo.svg";
// https://app-test.defihuntersdao.club/images/ico/uni.svg

$n++;
$tkns[$n][address] 	= strtolower("0x03B67a0cE884E806673CC92e9A1C4A77D5BC770B");
$tkns[$n][chainId] 	= 137;
$tkns[$n][name]		= "SLP GNFT/WETH";
$tkns[$n][symbol]	= "SlpGnftEth";
$tkns[$n][decimals]	= 18;
$tkns[$n][logoURI]	= "https://res.cloudinary.com/sushi-cdn/image/fetch/f_auto,c_limit,w_48,q_auto/https://app.sushi.com/images/logo.svg";
// https://app-test.defihuntersdao.club/images/ico/uni.svg

$n++;
$tkns[$n][address] 	= strtolower("0xbCaD06fdFcEa3FD7D082b14F47A6757e11c5846c");
$tkns[$n][chainId]	= 1;
$tkns[$n][name]		= "ULP GNFT/WETH";
$tkns[$n][symbol]	= "UlpGnftEth";
$tkns[$n][decimals]	= 18;
$tkns[$n][logoURI]	= "https://app-test.defihuntersdao.club/images/ico/uni.svg";

$n++;
$tkns[$n][address] 	= strtolower("0xfC067766349d0960bdC993806EA2E13fcFC03C4D");
$tkns[$n][chainId] 	= 137;
$tkns[$n][name]		= "SLP DDAO/WETH";
$tkns[$n][symbol]	= "SlpDdaoEth";
$tkns[$n][decimals]	= 18;
$tkns[$n][logoURI]	= "https://res.cloudinary.com/sushi-cdn/image/fetch/f_auto,c_limit,w_48,q_auto/https://app.sushi.com/images/logo.svg";
// https://app-test.defihuntersdao.club/images/ico/uni.svg

$n++;
$tkns[$n][address] 	= strtolower("0xE29778b55E62E39CAEFC458E5c4d33080C9b8F44");
$tkns[$n][chainId] 	= 137;
$tkns[$n][name]		= "SLP DDAO/USDC";
$tkns[$n][symbol]	= "SlpDdaoUsdc";
$tkns[$n][decimals]	= 18;
$tkns[$n][logoURI]	= "https://res.cloudinary.com/sushi-cdn/image/fetch/f_auto,c_limit,w_48,q_auto/https://app.sushi.com/images/logo.svg";
// https://app-test.defihuntersdao.club/images/ico/uni.svg


$o[tokens] = $tkns;


$t = pathinfo(__FILE__);
$f = __DIR__."/".$t[filename].".json";
$b = json_encode($o,192);
$a = file_get_contents($f);
print $a;
print "\n==========a =======\n";
print $b;
print "\n==========b =======\n";
print md5($a)."\n";
print md5($b)."\n";
if(md5($a) != md5($b))
{



$o[version][minor]++;
$o[timestamp] = $timestamp;

$t = json_encode($o[version],192);
file_put_contents($f_ver,$t);

file_put_contents($f_time,$now_time);

$b = json_encode($o,192);

file_put_contents($f,$b);
//print $a;
}
print_r($o);
