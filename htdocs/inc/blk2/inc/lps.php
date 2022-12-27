<?php
$k = "lp_matic_sushi_ddao";
$t = "";
$t .= "Polygon Sushiswap Liquidity ";
$t .= "<img src=\"/images/polygon.svg\">";
$t .= "<img src=\"/images/ico2/sushi.svg\">";
$lps[$k][title] = $t;
$lps[$k][coin1] = "ddao";
$lps[$k][coin2] = "eth";
$lps[$k][info]  = "https://app.sushi.com/analytics/pools/0xfc067766349d0960bdc993806ea2e13fcfc03c4d?chainId=137";
$lps[$k][lp]	= "https://app.sushi.com/legacy/add/0x7ceB23fD6bC0adD59E62ac25578270cFf1b9f619/0x90F3edc7D5298918F7BB51694134b07356F7d0C7?chainId=137";

$k = "lp_matic_sushi_gnft";
$t = "";
$t .= "Polygon Sushiswap Liquidity ";
$t .= "<img src=\"/images/polygon.svg\">";
$t .= "<img src=\"/images/ico2/sushi.svg\">";
$lps[$k][title] = $t;
$lps[$k][coin1] = "gnft";
$lps[$k][coin2] = "eth";
$lps[$k][info]  = "https://app.sushi.com/analytics/pools/0x03b67a0ce884e806673cc92e9a1c4a77d5bc770b?chainId=137";
$lps[$k][lp]	= "https://app.sushi.com/legacy/add/0x7ceB23fD6bC0adD59E62ac25578270cFf1b9f619/0xE58e8391BA17731C5671F9c6E00e420608Dca10e?chainId=137";

$k = "lp_matic_quick_gnft";
$t = "";
$t .= "Polygon Quickswap Liquidity ";
$t .= "<img src=\"/images/polygon.svg\">";
$t .= "<img src=\"/images/ico/quickswap.svg\">";
$lps[$k][title] = $t;
$lps[$k][coin1] = "gnft";
$lps[$k][coin2] = "usdc";
$lps[$k][info]  = "https://quickswap.exchange/#/analytics/v2/pair/0x3fd0cc5f7ec9a09f232365bded285e744e0446e2";
$lps[$k][lp]	= "https://quickswap.exchange/#/pools/v2?currency0=0x2791bca1f2de4661ed88a30c99a7a9449aa84174&currency1=0xe58e8391ba17731c5671f9c6e00e420608dca10e";

$k = "lp_eth_uni_gnft";
$t = "";
$t .= "Ethereum UniswapV2 Liquidity ";
$t .= "<img src=\"/images/ico2/weth.svg\">";
$t .= "<img src=\"/images/ico2/uni.svg\">";
$lps[$k][title] = $t;
$lps[$k][coin1] = "gnft";
$lps[$k][coin2] = "eth";
$lps[$k][info]  = "https://v2.info.uniswap.org/pair/0xbcad06fdfcea3fd7d082b14f47a6757e11c5846c";
?>