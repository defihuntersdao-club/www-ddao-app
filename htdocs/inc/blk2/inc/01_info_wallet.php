<?php

print "<div class=\"row\">";
//print "<div class=\"bg-wrap glob-info\">";
print "<div class=\"bg-wrap\">";

    print "&nbsp; <span class=\"glob-info__label\">Address:</span> ";
    print "<span class=\"wallet-id glob-info__name\"></span>";

//    print "<br>";

unset($coins);
$k = "matic";
$nets[$k] 	= "Polygon";
$coins[$k][usdc] = "USDC";
$coins[$k][usdt] = "USDT";
$coins[$k][dai]  = "DAI";

$k = "eth";
$nets[$k] 	= "Ethereuim";
$coins[$k][usdc] = "USDC";
$coins[$k][usdt] = "USDT";
$coins[$k][dai]  = "DAI";

$k = "bsc";
$nets[$k] 	= "BSC";
$coins[$k][usdc] = "USDC";
$coins[$k][usdt] = "USDT";
$coins[$k][busd] = "BUSD";

$l = count($coins);
$cols = floor(12/$l);

//    print "<div class=\"row wrap-infoblock-1\">";
//    print "<div class=\"row\" style=\"border:solid 1px green;\">";
    print "<div class=\"row\">";
//	print "<div class=\"col-12 col-sm-12 col-xl-4\">";
//	    print "<div class=\"custom-table custom-table_gray\">";
		print "<div class=\"row coins\">";
//		    print "<div class=\"col-12 text-center \">";
//	    print "ddd";
//		    print "</div>";
	foreach($coins as $net=>$v2)
	{
	    print "<div class=\"col-12 col-sm-12 col-xl-$cols net\">";
	    print "<div class=\"blk\">";
		print "<div class=\"col-12 text-center th\">";
		print "<div class=h>";
//		print $net;
		print "<img src=/images/net/$net.svg>";
		print "</div>";
		print "</div>";
	    foreach($v2 as $coin=>$name)
	    {
		print "<div class=\"col-12 text-center line\">";
		print "<div class=row>";
		print "<div class=\"col-5 l\">";
		print "$name<br>";
		print "</div>";
		print "<div class=\"col-2 \">";
		print "\$";
		print "</div>";
	    
		print "<div class=\"col-5 r\">";
		print "1 000 000";
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

print "</div>";
print "</div>";

?>