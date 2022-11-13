<?php

include "01_info_wallet_ddao.php";

$net_name[matic] = "Polygon";
$net_name[eth]	= "Ethereum";
$net_name[bsc]	= "BSC";
//print "<div class=\"row\">";
//print "<div class=\"bg-wrap glob-info\">";
//print "<div class=\"bg-wrap\">";
//print "<div class=\"wrap\">";

//    print "&nbsp; <span class=\"glob-info__label\">Address:</span> ";
//    print "<span class=\"wallet-id glob-info__name\"></span>";

//    print "<br>";

unset($coins);
$k = "matic";
$nets[$k] 	= "Polygon";
//$coins[$k][ddao] = "DDAO";
//$coins[$k][gnft] = "GNFT";
$coins[$k][matic] = "MATIC";
$coins[$k][usdc] = "USDC";
$coins[$k][usdt] = "USDT";
$coins[$k][dai]  = "DAI";


$k = "bsc";
$nets[$k] 	= "BSC";
$coins[$k][BNB] = "BNB";
$coins[$k][usdc] = "USDC";
$coins[$k][usdt] = "USDT";
$coins[$k][busd] = "BUSD";
$coins[$k][dai] = "DAI";

$k = "eth";
$nets[$k] 	= "Ethereuim";
$coins[$k][eth] = "ETH";
$coins[$k][usdc] = "USDC";
$coins[$k][usdt] = "USDT";
$coins[$k][dai]  = "DAI";
//$coins[$k][gnft] = "GNFT";

$l = count($coins);
$cols = floor(12/$l);
$m = 4;

//    print "<div class=\"row wrap-infoblock-1\">";
//    print "<div class=\"row\" style=\"border:solid 1px green;\">";
//    print "<div class=\"row\">";
//	print "<div class=\"col-12 col-sm-12 col-xl-4\">";
//	    print "<div class=\"custom-table custom-table_gray\">";
		print "<div class=\"row coins\">";
//		    print "<div class=\"col-12 text-center \">";
//	    print "ddd";
//		    print "</div>";
	foreach($coins as $net=>$v2)
	{
	    print "<div class=\"col-12 col-sm-12 col-xl-$cols net\">";
	    print "<div class=\"blk blk_shadow\">";
		print "<div class=\"col-12 text-center th\">";
		print "<div class=h>";
//		print $net;
		print "<img src=/images/net/$net.svg>";
		print " ".$net_name[$net];
//		print "<span class=\"balance_".$net."_all\"></span>";
		print "</div>";
		print "</div>";

		print "<div class=\"col-12 text-center line\">";
		print "<div class=row>";
		print "<div class=\"col-4 l\">";
		print "Address :";
		print "</div>";
		print "<div class=\"col-8 r\">";
		print "<span class=\"wallet-id\"";
		print "</span>";
		print "</div>";
		print "</div>";
		print "</div>";

	    $nn = 0;
	    foreach($v2 as $coin=>$name)
	    {
		print "<div class=\"col-12 text-center line\">";
		print "<div class=row>";
		print "<div class=\"col-4 l\">";
		print "$name ";
		print "<img src=/images/coin/".strtolower($name).".svg class=coin>";
//		print "</div>";
//		print "<div class=\"col-2 \">";
		print "&nbsp;&nbsp;\$";
		print "</div>";
	    
		print "<div class=\"col-8 r\">";
		print "<span class=\"balance_".$net."_".$name."\">";
		print "-";
		print "</span>";
		print "</div>";
		print "</div>";
		print "</div>";
		$nn++;
	    }

		print "<div class=\"col-12 text-center line\">";
		print "<div class=\"row summary2\">";
		print "<div class=\"col-4 l\">";
		print "Summary ";
//		print "<img src=/images/coin/".strtolower($name).".svg class=coin>";
//		print "</div>";
//		print "<div class=\"col-2 \">";
		print "&nbsp;&nbsp;\$";
		print "</div>";
	    
		print "<div class=\"col-8 r\">";
		print "<span class=\"summary balance_".$net."_ALL\">";
		print "-";
		print "</span>";
		print "</div>";
		print "</div>";
		print "</div>";

//print "======== $m $nn=====";
	    if($nn<$m)
	    for($i = $nn;$i<=$nn;$i++)
	    {

		print "<div class=\"col-12 text-center line\">";
		print "<div class=row>";
		print "<div class=\"col-12 d-none d-sm-inline\">";
		print "&nbsp;";
		print "</div>";
		print "</div>";
		print "</div>";
	    
	    }
//print "<br>";
	    print "</div>";

	    print "</div>";
	}
		print "</div>";

//	    print "</div>";
//	print "</div>";
    //print "sf";

    print "</div>";

//print "<button class=\"art-button-2 btn btn-primary show_more\" onclick=show_more_tokens(this); id=btn_show_more_tokens>Show more tokens</button>";






//print "<br>";
//print "<br>";
//print "<br>";
//print "<br>";
//print "<br>";
//print "<div>
print "<div class=\"row d-none\" id=token_addons_html>";
//print "<div class=\"bg-wrap glob-info\">";
print "<div class=\"bg-wrap\">";
//$f = dirname($www_dir)."/bin/003_img_base64_blk.php.inc";
//print $f;
//include $f;
//print "</div>";
//print "</div>";


print "</div>";
//print "</div>";
?>