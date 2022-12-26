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

$k = "lp_matic_sushi_gnft";
$t = "";
$t .= "Polygon Sushiswap Liquidity ";
$t .= "<img src=\"/images/polygon.svg\">";
$t .= "<img src=\"/images/ico2/sushi.svg\">";
$lps[$k][title] = $t;
$lps[$k][coin1] = "gnft";
$lps[$k][coin2] = "eth";
$lps[$k][info]  = "https://app.sushi.com/analytics/pools/0x03b67a0ce884e806673cc92e9a1c4a77d5bc770b?chainId=137";

$k = "lp_matic_quick_gnft";
$t = "";
$t .= "Polygon Quickswap Liquidity ";
$t .= "<img src=\"/images/polygon.svg\">";
$t .= "<img src=\"/images/ico/quickswap.svg\">";
$lps[$k][title] = $t;
$lps[$k][coin1] = "gnft";
$lps[$k][coin2] = "usdc";
$lps[$k][info]  = "https://quickswap.exchange/#/analytics/v2/pair/0x3fd0cc5f7ec9a09f232365bded285e744e0446e2";

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