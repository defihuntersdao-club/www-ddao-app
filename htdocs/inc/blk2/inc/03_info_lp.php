<?php

$k = "lp_ddao_polygon_sushi";
$t = "";
$t .= "Polygon Sushiswap Liquidity";
$t .= "<img src=\"/images/polygon.svg\">";
$t .= "<img src=\"/images/ico2/sushi.svg\">";
$lps[$k][title] = $t;
$lps[$k][coin1] = "ddao";
$lps[$k][coin2] = "eth";

$k = "lp_gnft_polygon_sushi";
$t = "";
$t .= "Polygon Sushiswap Liquidity";
$t .= "<img src=\"/images/polygon.svg\">";
$t .= "<img src=\"/images/ico2/sushi.svg\">";
$lps[$k][title] = $t;
$lps[$k][coin1] = "gnft";
$lps[$k][coin2] = "eth";

$k = "lp_gnft_polygon_quick";
$t = "";
$t .= "Polygon Quickswap Liquidity";
$t .= "<img src=\"/images/polygon.svg\">";
$t .= "<img src=\"/images/ico/quickswap.svg\">";
$lps[$k][title] = $t;
$lps[$k][coin1] = "gnft";
$lps[$k][coin2] = "eth";

$k = "lp_ethereum_quick_gnft";
$t = "";
$t .= "Ethereum Sushiswap Liquidity";
$t .= "<img src=\"/images/ico2/weth.svg\">";
$t .= "<img src=\"/images/ico2/sushi.svg\">";
$lps[$k][title] = $t;
$lps[$k][coin1] = "gnft";
$lps[$k][coin2] = "eth";


foreach($lps as $pref=>$v2)
{
$t = $v2[coin1];
$c1 = $t;
$coin1 = strtoupper($t);

$t = $v2[coin2];
$c2 = $t;
$coin2 = strtoupper($t);

unset($list);
$list[tvl]	= "TVL \$";
$list[supply]	= "Total Supply";
$list[coin1]	= $coin1;
$list[coin2]	= $coin2;


print "<div class=\"col-12 col-md-12 col-lg-6\">";
print "<div class=\"grid-item\">";

print "<div class=title>";
print "<table class=\"w-100\">";
print "<tr><td colspan=2 class=h>";

print $v2[title];

print "<a href=# onclick=\"return false;\">";
print "<svg width=\"21\" height=\"21\" viewBox=\"0 0 21 21\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
<path d=\"M15.9082 16.1759H5.9082C5.44987 16.1759 5.07487 15.8009 5.07487 15.3425V5.34253C5.07487 4.8842 5.44987 4.5092 5.9082 4.5092H10.0749C10.5332 4.5092 10.9082 4.1342 10.9082 3.67586C10.9082 3.21753 10.53322.84253 10.0749 2.84253H5.07487C4.14987 2.84253 3.4082 3.59253 3.4082 4.5092V16.1759C3.4082 17.0925 4.1582 17.8425 5.07487 17.8425H16.7415C17.6582 17.8425 18.4082 17.0925 18.4082 16.1759V11.1759C18.4082 10.7175 18.0332 10.3425 17.5749 10.3425C17.1165 10.3425 16.7415 10.7175 16.741511.1759V15.3425C16.7415 15.8009 16.3665 16.1759 15.9082 16.1759ZM12.5749 3.67586C12.5749 4.1342 12.9499 4.5092 13.4082 4.5092H15.5665L7.9582 12.1175C7.6332 12.4425 7.6332 12.9675 7.9582 13.2925C8.2832 13.6175 8.8082 13.6175 9.1332 13.2925L16.7415 5.6842V7.84253C16.7415 8.30086 17.1165 8.67586 17.5749 8.67586C18.0332 8.67586 18.4082 8.30086 18.4082 7.84253V3.67586C18.4082 3.21753 18.0332 2.84253 17.5749 2.84253H13.4082C12.9499 2.84253 12.5749 3.21753 12.5749 3.67586Z\" fill=\"#636775\"/>
</svg>
";
print "</a>";
/*
print "Polygon Sushiswap Liquidity";
print "<img src=\"/images/polygon.svg\">";
print "<img src=\"/images/ico2/sushi.svg\">";
*/

print "</td></tr>";
print "<tr><td rowspan=2 class=l>";
print "<div class=coins>";
//print "<span>Liquidity</span><br>";
print "<div class=\"coin coin1\">";


switch($c1)
{
    case "ddao":

	print "<div class=\"ddao_img\">";
	$f = $www_dir."/images/ddao2_logo_v05.svg";
	$a = file_get_contents($f);
	print $a;
	print "</div>";
    break;
    case "gnft":
	print "<img src=/images/ico/gnft_1894.png>";
    break;
}
print $coin1;
//print "DDAO";
//print "LOGO";
print "</div>";
print "<div class=\"coin coin2\">";
print "<img src=/images/ico2/weth.svg>";
//print "ETH";
//$t = $v2[coin2];
//print strtoupper($t);
print $coin2;

print "</div>";
print "</div>";
print "</td>";
print "<td class=n>";

print "<div class=info>";

foreach($list as $k=>$v)
{
    print "<div class=\"row list\">";
	print "<div class=\"col-5 name\">";
	print $v.": ";
	print "</div>";

	print "<div class=\"col-7 value ".$k."_value\" id=\"".$pref."_".$v2[$k]."\">";
	print rand(9999,999999);
	print "</div>";
    print "</div>";
}
if(0)
{
print "TVL \$: ";
//print "<br>";
print "10 000";
print "<br>";
print "Total supply: ";
print "0.000001213123";
print "<br>";
print "ETH: 12";
print "<br>";
print "DDAO: 1123324";
print "</div>";
}
//print "DDAO liquidity";
/*
print "Polygon Sushiswap Liquidity";
print "<img src=\"/images/polygon.svg\">";
print "<img src=\"/images/ico2/sushi.svg\">";
*/
print "</td></tr><td class=comments>";
//print "on SUSHISWAP";
print "</td></tr>";
print "</tr>";
print "</table>";
print "</div>";


print "</div>";
print "</div>";
}

?>