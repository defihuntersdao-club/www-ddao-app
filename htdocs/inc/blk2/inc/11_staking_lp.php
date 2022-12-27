<?php
//  tape-live
//  tape-ended
//  tape-soon
include "lps.php";

print "<div class=\"title-bl\">Overview</div>";

//-------------------------
foreach($lps as $k=>$v2)
{
if($k == "lp_eth_uni_gnft")continue;
print "
			<div class=\"top-line row\">
			<div class=\"wrapper\">
				<div class=\"line-wrap\">
					<div class=\"line-item tape-live\">
						<div class=\"row line-item__top align-items-center\">
							
";

//if()
{
print "<div class=\"col-4 col-lg-2\">";
//print "GBC2.AI Seed round";

print "<div class=coins>";
//print "<span>Liquidity</span><br>";
print "<div class=\"coin coin1\">";


switch($v2[coin1])
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
$t = $v2[coin1];
print strtoupper($t);

//print "DDAO";
//print "LOGO";
print "</div>";
print "<div class=\"coin coin2\">";
//print "<img src=/images/ico2/weth.svg>";
$c2 = $v2[coin2];
$c21 = $c2;
if($c2 == "eth")$c21 = "weth";
print "<img src=/images/ico2/$c21.svg>";
//print "ETH";
print "<br>";
$t = $v2[coin2];
print strtoupper($t);

//print $v2[coin2];

print "</div>";
print "</div>";

print "</div>";

}
print "<div class=\"col-8 col-lg-4\">";
print "<div class=\"line-item__title2\">";
print $v2[title];
print "</div>";

print "</div>";
/*
print "
							<div class=\"col-12 col-lg-3\">
								<div class=\"line-item__address\">
									<div class=\"label\">
										My address
									</div>
									<div class=\"value\">
										0хС60В0хС6...0хС69се8
									</div>
								</div>
							</div>
";
*/							

print "							<div class=\"col-12 col-lg-5\">
								<div class=\"row\">
									<div class=\"col-6\">
										<div class=\"line-item__amount\">
											<div class=\"label\">
												Staked
											</div>
											<div class=\"value ".$k."_all\">
												-
											</div>
										</div>
									</div>
<!--
									<div class=\"col-6\">
										<div class=\"line-item__claimed\">
											<div class=\"label\">
												Eq. in DDAO
											</div>
											<div class=\"value\">
												-
											</div>
										</div>
									</div>
-->
								</div>
								
							</div>

							<div class=\"line-item__tape\">
								<span>Live</span>
							</div>
							
						</div>
						<div class=\"line-item__bottom dropdown-menu2\" aria-labelledby=\"dropdownLineItem\">
							<div class=\"row align-items-center\">
							<div class=\"col-12 col-lg-3\">
								<div class=\"line-item__info\">
";
unset($mas);
$mas[tvl] = "Global TVL, \$";
$mas[supply2] = "Total supply";
$mas[$v2[coin1]] = "Eq. in DDAO";
foreach($mas as $k3=>$v3)
{
$k2 = $k."_".$k3;
print "<div>";
print "<div class=\"label\">$v3:</div>";
print "<div class=\"value2 $k2\">-</div>";
print "</div>";
}									

print "
								</div>
							</div>
";

print "
							<div class=\"col-12 col-lg-4\">
								<div class=\"line-item__info\">
";
unset($mas);
$mas[wal_lp_bal_full] 	= "My LP Balance";
$mas[wal_lp_bal_staked] = "My Staked LP";
$mas[wal_lp_count_staked] = "My quantity";
//$mas[$v2[coin1]] = "Eq. in DDAO";
foreach($mas as $k3=>$v3)
{
$k2 = $k."_".$k3;
print "<div>";
print "<div class=\"label\">$v3:</div>";
print "<div class=\"value2 $k2\">-</div>";
print "</div>";
}									

/*
									<div>
										<div class=\"label\">Refund:</div>
										<div class=\"value\">8</div>
									</div>
									<div>
										<div class=\"label\">Date:</div>
										<div class=\"value\">Jan. 1, 20228</div>
									</div>
*/
print "									
								</div>
							</div>
							
							<div class=\"col-12 col-lg-2\">
								<div class=\"line-item__block\">
									<div class=\"line-item__links\">
										<a href=\"/#/info_lp/all/\">
											<span>Detailed</span>
											<svg width=\"25\" height=\"25\" viewBox=\"0 0 25 25\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
												<path d=\"M18.7598 19.2494H6.75977C6.20977 19.2494 5.75977 18.7994 5.75977 18.2494V6.24939C5.75977 5.69939 6.20977 5.24939 6.75977 5.24939H11.7598C12.3098 5.24939 12.7598 4.79939 12.7598 4.24939C12.7598 3.69939 12.3098 3.24939 11.7598 3.24939H5.75977C4.64977 3.24939 3.75977 4.14939 3.75977 5.24939V19.2494C3.75977 20.3494 4.65977 21.2494 5.75977 21.2494H19.7598C20.8598 21.2494 21.7598 20.3494 21.7598 19.2494V13.2494C21.7598 12.6994 21.3098 12.2494 20.7598 12.2494C20.2098 12.2494 19.7598 12.6994 19.7598 13.2494V18.2494C19.7598 18.7994 19.3098 19.2494 18.7598 19.2494ZM14.7598 4.24939C14.7598 4.79939 15.2098 5.24939 15.7598 5.24939H18.3498L9.21977 14.3794C8.82977 14.7694 8.82977 15.3994 9.21977 15.7894C9.60977 16.1794 10.2398 16.1794 10.6298 15.7894L19.7598 6.65939V9.24939C19.7598 9.79939 20.2098 10.2494 20.7598 10.2494C21.3098 10.2494 21.7598 9.79939 21.7598 9.24939V4.24939C21.7598 3.69939 21.3098 3.24939 20.7598 3.24939H15.7598C15.2098 3.24939 14.7598 3.69939 14.7598 4.24939Z\" fill=\"#3D8AFF\"/>
												</svg>
												
										</a>

										<a href=\"".$v2[info]."\" target=_blank>
											<span>Analitics</span>
											<svg width=\"25\" height=\"25\" viewBox=\"0 0 25 25\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
												<path d=\"M18.7598 19.2494H6.75977C6.20977 19.2494 5.75977 18.7994 5.75977 18.2494V6.24939C5.75977 5.69939 6.20977 5.24939 6.75977 5.24939H11.7598C12.3098 5.24939 12.7598 4.79939 12.7598 4.24939C12.7598 3.69939 12.3098 3.24939 11.7598 3.24939H5.75977C4.64977 3.24939 3.75977 4.14939 3.75977 5.24939V19.2494C3.75977 20.3494 4.65977 21.2494 5.75977 21.2494H19.7598C20.8598 21.2494 21.7598 20.3494 21.7598 19.2494V13.2494C21.7598 12.6994 21.3098 12.2494 20.7598 12.2494C20.2098 12.2494 19.7598 12.6994 19.7598 13.2494V18.2494C19.7598 18.7994 19.3098 19.2494 18.7598 19.2494ZM14.7598 4.24939C14.7598 4.79939 15.2098 5.24939 15.7598 5.24939H18.3498L9.21977 14.3794C8.82977 14.7694 8.82977 15.3994 9.21977 15.7894C9.60977 16.1794 10.2398 16.1794 10.6298 15.7894L19.7598 6.65939V9.24939C19.7598 9.79939 20.2098 10.2494 20.7598 10.2494C21.3098 10.2494 21.7598 9.79939 21.7598 9.24939V4.24939C21.7598 3.69939 21.3098 3.24939 20.7598 3.24939H15.7598C15.2098 3.24939 14.7598 3.69939 14.7598 4.24939Z\" fill=\"#3D8AFF\"/>
												</svg>
												
										</a>
										<a href=\"".$v2[lp]."\" target=_blank>
											<span>Add liq.</span>
											<svg width=\"25\" height=\"25\" viewBox=\"0 0 25 25\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
												<path d=\"M18.7598 19.2494H6.75977C6.20977 19.2494 5.75977 18.7994 5.75977 18.2494V6.24939C5.75977 5.69939 6.20977 5.24939 6.75977 5.24939H11.7598C12.3098 5.24939 12.7598 4.79939 12.7598 4.24939C12.7598 3.69939 12.3098 3.24939 11.7598 3.24939H5.75977C4.64977 3.24939 3.75977 4.14939 3.75977 5.24939V19.2494C3.75977 20.3494 4.65977 21.2494 5.75977 21.2494H19.7598C20.8598 21.2494 21.7598 20.3494 21.7598 19.2494V13.2494C21.7598 12.6994 21.3098 12.2494 20.7598 12.2494C20.2098 12.2494 19.7598 12.6994 19.7598 13.2494V18.2494C19.7598 18.7994 19.3098 19.2494 18.7598 19.2494ZM14.7598 4.24939C14.7598 4.79939 15.2098 5.24939 15.7598 5.24939H18.3498L9.21977 14.3794C8.82977 14.7694 8.82977 15.3994 9.21977 15.7894C9.60977 16.1794 10.2398 16.1794 10.6298 15.7894L19.7598 6.65939V9.24939C19.7598 9.79939 20.2098 10.2494 20.7598 10.2494C21.3098 10.2494 21.7598 9.79939 21.7598 9.24939V4.24939C21.7598 3.69939 21.3098 3.24939 20.7598 3.24939H15.7598C15.2098 3.24939 14.7598 3.69939 14.7598 4.24939Z\" fill=\"#3D8AFF\"/>
												</svg>
												
										</a>
									</div>
								</div>
							</div>

							<div class=\"col-12 col-lg-3 line-item__button-top\">
								<div class=\"line-item__button\">
									<a href=\"#\" class=\"art-button btn btn-primary btn-stake2 btn-xs\" id=btn_stake2_$k onclick=\"return btn_click_action(this);\">
										...
									</a>
									<a href=\"#\" class=\"art-button btn btn-primary d-none\">
										Connect a wallet
									</a>
								</div>
							</div>
							</div>
						</div>
					</div>
";

}
//-------------------------


print "<div class=\"title-bl\">My Stake (<span id=stake2_my_count>0</span>)</div>";
print "<div id=\"stake2_my\" class=\"stake2_my\">";
//print "
/*
print "<div class=\"line-item tape-ended\">";
print "<div class=\"row line-item__top align-items-center\">";
print "<div class=\"col-12 col-lg-3\">";
print "<div class=\"line-item__title\">";
print "1. ";
print "GNFT/ETH";
print "</div>";
print "</div>";
print "<div class=\"col-12 col-lg-5\">";
print "<div class=\"row\">";
print "<div class=\"col-6\">";
print "<div class=\"line-item__amount\">";
print "<div class=\"label\">";
print "Your stake amount";
print "</div>";
print "<div class=\"value\">";
print "-";
print "</div>";
print "</div>";
print "</div>";
print "<div class=\"col-6\">";
print "<div class=\"line-item__claimed\">";
print "<div class=\"label\">";
print "Lock until";
print "</div>";
print "<div class=\"value\">";
print "-";
print "</div>";
print "</div>";
print "</div>";
print "</div>";
print "</div>";
print "<div class=\"col-12 col-lg-3 line-item__button-top\">";
print "<div class=\"line-item__button\">";
print "<a href=\"#\" class=\"art-button btn btn-primary\">";
print "Connect a wallet";
print "</a>";
print "</div>";
print "</div>";
print "<div class=\"line-item__tape\">";
print "<span>Ended</span>";
print "</div>";
print "</div>";
print "</div>";

print "
					<div class=\"line-item tape-ended\">
						<div class=\"row line-item__top align-items-center\">
							<div class=\"col-12 col-lg-3\">
								<div class=\"line-item__title\">
									GNFT/ETH
								</div>
							</div>
							
							<div class=\"col-12 col-lg-5\">
								<div class=\"row\">
									<div class=\"col-6\">
										<div class=\"line-item__amount\">
											<div class=\"label\">
												Your stake amount
											</div>
											<div class=\"value\">
												-
											</div>
										</div>
									</div>
									<div class=\"col-6\">
										<div class=\"line-item__claimed\">
											<div class=\"label\">
												Lock until
											</div>
											<div class=\"value\">
												-
											</div>
										</div>
									</div>
								</div>
								
							</div>

							<div class=\"col-12 col-lg-3 line-item__button-top\">
								<div class=\"line-item__button\">
									<a href=\"#\" class=\"art-button-2 btn btn-primary d-none\">
										Claim
									</a>
									<a href=\"#\" class=\"art-button btn btn-primary\">
										Connect a wallet
									</a>
								</div>
							</div>
							

							<div class=\"line-item__tape\">
								<span>Ended</span>
							</div>
							
						</div>
					</div>
";

print "


					<div class=\"line-item tape-soon\">
						<div class=\"row line-item__top align-items-center\" id=\"dropdownLineItem\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
							<div class=\"col-12 col-lg-3\">
								<div class=\"line-item__title\">
									GBC.AI Seed round
								</div>
							</div>
							<div class=\"col-12 col-lg-3\">
								<div class=\"line-item__address\">
									<div class=\"label\">
										My address
									</div>
									<div class=\"value\">
										0хС60В0хС6...0хС69се8
									</div>
								</div>
							</div>
							
							<div class=\"col-12 col-lg-5\">
								<div class=\"row\">
									<div class=\"col-6\">
										<div class=\"line-item__amount\">
											<div class=\"label\">
												Your DDAO amount
											</div>
											<div class=\"value\">
												-
											</div>
										</div>
									</div>
									<div class=\"col-6\">
										<div class=\"line-item__claimed\">
											<div class=\"label\">
												Already Claimed
											</div>
											<div class=\"value\">
												-
											</div>
										</div>
									</div>
								</div>
								
							</div>
							
							<div class=\"col-12 col-lg-1\">
								<div class=\"line-item__details\">
									<span>Detail</span>
									<svg width=\"12\" height=\"8\" viewBox=\"0 0 12 8\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
										<path d=\"M1.16016 1.42017L6.00097 6.26099L10.8418 1.42017\" stroke=\"#3D8AFF\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
										</svg>
										
								</div>
							</div>

							<div class=\"line-item__tape\">
								<span>Coming soon</span>
							</div>
							
						</div>
						<div class=\"line-item__bottom dropdown-menu\" aria-labelledby=\"dropdownLineItem\">
							<div class=\"row align-items-center\">
							<div class=\"col-12 col-lg-3\">
								<div class=\"line-item__info\">
									<div>
										<div class=\"label\">You paid:</div>
										<div class=\"value\">293</div>
									</div>
									<div>
										<div class=\"label\">Your allocation:</div>
										<div class=\"value\">301</div>
									</div>
									
								</div>
							</div>

							<div class=\"col-12 col-lg-4\">
								<div class=\"line-item__info\">
									<div>
										<div class=\"label\">Refund:</div>
										<div class=\"value\">8</div>
									</div>
									<div>
										<div class=\"label\">Date:</div>
										<div class=\"value\">Jan. 1, 20228</div>
									</div>
									
								</div>
							</div>
							
							<div class=\"col-12 col-lg-2\">
								<div class=\"line-item__block\">
									<div class=\"line-item__links\">
										<a href=\"#\">
											<span>Sale</span>
											<svg width=\"25\" height=\"25\" viewBox=\"0 0 25 25\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
												<path d=\"M18.7598 19.2494H6.75977C6.20977 19.2494 5.75977 18.7994 5.75977 18.2494V6.24939C5.75977 5.69939 6.20977 5.24939 6.75977 5.24939H11.7598C12.3098 5.24939 12.7598 4.79939 12.7598 4.24939C12.7598 3.69939 12.3098 3.24939 11.7598 3.24939H5.75977C4.64977 3.24939 3.75977 4.14939 3.75977 5.24939V19.2494C3.75977 20.3494 4.65977 21.2494 5.75977 21.2494H19.7598C20.8598 21.2494 21.7598 20.3494 21.7598 19.2494V13.2494C21.7598 12.6994 21.3098 12.2494 20.7598 12.2494C20.2098 12.2494 19.7598 12.6994 19.7598 13.2494V18.2494C19.7598 18.7994 19.3098 19.2494 18.7598 19.2494ZM14.7598 4.24939C14.7598 4.79939 15.2098 5.24939 15.7598 5.24939H18.3498L9.21977 14.3794C8.82977 14.7694 8.82977 15.3994 9.21977 15.7894C9.60977 16.1794 10.2398 16.1794 10.6298 15.7894L19.7598 6.65939V9.24939C19.7598 9.79939 20.2098 10.2494 20.7598 10.2494C21.3098 10.2494 21.7598 9.79939 21.7598 9.24939V4.24939C21.7598 3.69939 21.3098 3.24939 20.7598 3.24939H15.7598C15.2098 3.24939 14.7598 3.69939 14.7598 4.24939Z\" fill=\"#3D8AFF\"/>
												</svg>
												
										</a>
									</div>
								</div>
							</div>

							<div class=\"col-12 col-lg-3 line-item__button-top\">
								<div class=\"line-item__button\">
									<a href=\"#\" class=\"art-button-2 btn btn-primary\">
										Claim
									</a>
									<a href=\"#\" class=\"art-button btn btn-primary d-none\">
										Connect a wallet
									</a>
								</div>
							</div>
							</div>
						</div>
					</div>
";
*/				

print "</div>";
print "</div>";
print "</div>";
print "</div>";
print "</div>";
print "</div>";
print "</div>";
print "</div>";
print "</div>";

/*
print "</div>";
print "</div>";
print "</div>";
print "</div>";
print "</div>";
print "</div>";
print "</div>";
print "</div>";
*/
//print "</div>";
//print "< end off staking lp>";
?>