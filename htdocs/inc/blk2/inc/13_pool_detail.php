<?php
$need_stake = 0;
?>
			<div class="row align-items-stretch glog-wrapper">
				<div class="col-12 col-sm-12 col-xl-6 glob-info-margin">
					<div class="bg-wrap glob-info">
						<div class="row glob-info__margin-1">
							<div class="col-2 p-0">
								<span class="Sale_img">
								<img src="/images/no_image.png"/>
								</span>
							</div>
							<div class="col-10">
								<div class="glob-info__name Sale_name">-</div>
								<div class="glob-info__link"><span id=Sale_link>
									<a href="#" target="_blank" class="d-flex align-items-center" id=Sale_url2>
										
										<svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M18.7598 19.2494H6.75977C6.20977 19.2494 5.75977 18.7994 5.75977 18.2494V6.24939C5.75977 5.69939 6.20977 5.24939 6.75977 5.24939H11.7598C12.3098 5.24939 12.7598 4.79939 12.7598 4.24939C12.7598 3.69939 12.3098 3.24939 11.7598 3.24939H5.75977C4.64977 3.24939 3.75977 4.14939 3.75977 5.24939V19.2494C3.75977 20.3494 4.65977 21.2494 5.75977 21.2494H19.7598C20.8598 21.2494 21.7598 20.3494 21.7598 19.2494V13.2494C21.7598 12.6994 21.3098 12.2494 20.7598 12.2494C20.2098 12.2494 19.7598 12.6994 19.7598 13.2494V18.2494C19.7598 18.7994 19.3098 19.2494 18.7598 19.2494ZM14.7598 4.24939C14.7598 4.79939 15.2098 5.24939 15.7598 5.24939H18.3498L9.21977 14.3794C8.82977 14.7694 8.82977 15.3994 9.21977 15.7894C9.60977 16.1794 10.2398 16.1794 10.6298 15.7894L19.7598 6.65939V9.24939C19.7598 9.79939 20.2098 10.2494 20.7598 10.2494C21.3098 10.2494 21.7598 9.79939 21.7598 9.24939V4.24939C21.7598 3.69939 21.3098 3.24939 20.7598 3.24939H15.7598C15.2098 3.24939 14.7598 3.69939 14.7598 4.24939Z" fill="#3D8AFF"></path>
											</svg>
										<span class="Sale_url"></span>
									</a></span>
								</div>
							</div>
						</div>

						<div class="row glob-info__margin-2">
							<div class="col-12 col-sm-12 col-xl-5">
								<div class="glob-info__label">
									Hard/Soft Cap:
									<span>includes  10% DAO fee</span>
								</div>
							</div>
							<div class="col-12 col-sm-12 col-xl-7">
								<div class="glob-info__value">$ <span class="Sale_cap">0</span></div>
							</div>
						</div>

						<div class="row align-items-center glob-info__margin-2">
							<div class="col-12 col-sm-12 col-xl-5">
								<div class="glob-info__label">
									Networks:
								</div>
							</div>
							<div class="col-12 col-sm-12 col-xl-7">
								<div class="glob-info__value">
									<img src="images/poligon.svg" alt="poligon">
									<img src="images/bsc.svg" alt="bsc" />

								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-12 col-sm-12 col-xl-5">
								<div class="glob-info__label">
									Accepted currencies:
								</div>
							</div>
							<div class="col-12 col-sm-12 col-xl-7">
								<div class="glob-info__value">
									USDT
								</div>
							</div>
						</div>
						<div class="row">
						<span class="d-none" id=sale_test_mode>
Allocation works in test mode. This means that transactions will be sent, but the purchase will not be committed by you.
						</span>
						</div>


					</div>
				</div>
				<div class="col-12 col-sm-12 col-xl-6">
					<div class="bg-wrap glob-st">
						<div class="sale-status">Sale Status</div>
						<div class="row align-items-center">
							<div class="col-12 col-sm-12 col-xl-6">
								
								<div class="round-progress">
									<div class="progress" data-percentage="0" id=AllocPerc2>
										<span class="progress-left">
											<span class="progress-bar"></span>
										</span>
										<span class="progress-right">
											<span class="progress-bar"></span>
										</span>
										<div class="progress-value">
											<div>
<em>Goal</em><br>
<span class=AllocPerc>0</span>%<br>
<b>$ </b><strong class="Sale_cap"></strong>
<!--
												<em>Goal</em><br>
												<span class=AllocPerc>0</span> %<br>
												$ <strong class="Sale_cap">0</strong>
-->
											</div>
										</div>
									</div>
								</div>
								
							</div>
							<div class="col-12 col-sm-12 col-xl-6">
								<div class="row glob-st__row">
									<div class="col-6 col-sm-6 col-xl-6">
										<div class="glob-st__label">
											Total sum, $:
										</div>
									</div>
									<div class="col-6 col-sm-6 col-xl-6">
										<div class="glob-st__value AllocSaleAmount">
											0
										</div>
									</div>
								</div>
								<div class="row glob-st__row">
									<div class="col-6 col-sm-6 col-xl-6">
										<div class="glob-st__label ">
											Participants:
										</div>
									</div>
									<div class="col-6 col-sm-6 col-xl-6">
										<div class="glob-st__value AllocSaleCount">
											0
										</div>
									</div>
								</div>
<!--
								<div class="row glob-st__row">
									<div class="col-6 col-sm-6 col-xl-6">
										<div class="glob-st__label">
											Total refund:
										</div>
									</div>
									<div class="col-6 col-sm-6 col-xl-6">
										<div class="glob-st__value">
											0
										</div>
									</div>
								</div>
-->

							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-12 text-center text-tokens">Only holders who have 45k DDAO tokens in total can participate in all three allocations.</div>
			</div>
<?php

unset($o);
unset($o2);
//for($i=1;$i<=3;$i++)
$i = 1;
{
//    if($i==0)continue;
    $o = "";
    $o .= "<table class=\"tbl_sale\">";
    $o .= "<tr>";
    $o .= "<td class=\"n2\">";
    $o .= "Polygon";
    $o .= "</td>";
    $o .= "<td class=\"n2\">";
    $o .= "BSC";
    $o .= "</td>";
    $o .= "</tr>";

$n = "Token";
    $o .= "<tr>";
    $o .= "<td class=\"n\">";
    $o .= $n;
    $o .= "</td>";
    $o .= "<td class=\"n\">";
    $o .= $n;
    $o .= "</td>";
    $o .= "</tr>";

    $o .= "<tr>";
    $o .= "<td class=\"v2\">";
    $o .= "<span class=\"matic_sale_abbr_1\">";
    $o .= "&nbsp;";
    $o .= "</span>";
    $o .= "</td>";
    $o .= "<td class=\"v2\">";
    $o .= "<span class=\"bsc_sale_abbr_1\">";
    $o .= "&nbsp;";
    $o .= "</span>";
    $o .= "</td>";
    $o .= "</tr>";

$n = "Balance";
    $o .= "<tr>";
    $o .= "<td class=\"n\">";
    $o .= $n;
    $o .= "</td>";
    $o .= "<td class=\"n\">";
    $o .= $n;
    $o .= "</td>";
    $o .= "</tr>";

    $o .= "<tr>";
    $o .= "<td class=\"v\">";
    $o .= "<span class=\"matic_sale_balance_1\">";
    $o .= "0";
    $o .= "</span>";
    $o .= "</td>";
    $o .= "<td class=\"v\">";
//    $o .= "0";
    $o .= "<span class=\"bsc_sale_balance_1\">";
    $o .= "0";
    $o .= "</span>";

    $o .= "</td>";
    $o .= "</tr>";

$n = "Allowance";
    $o .= "<tr>";
    $o .= "<td class=\"n\">";
    $o .= $n;
    $o .= "</td>";
    $o .= "<td class=\"n\">";
    $o .= $n;
    $o .= "</td>";
    $o .= "</tr>";

    $o .= "<tr>";
    $o .= "<td class=\"v\">";
    $o .= "<span class=\"matic_sale_allowance_1\">";
    $o .= "0";
    $o .= "</span>";
    $o .= "</td>";
    $o .= "<td class=\"v\">";
//    $o .= "0";
    $o .= "<span class=\"bsc_sale_allowance_1\">";
    $o .= "0";
    $o .= "</span>";

    $o .= "</td>";
    $o .= "</tr>";

    $o .= "<tr>";
    $o .= "<td>";
    $o .= "<button class=\"art-button btn btn-primary btn_sale_matic\"  id=btn_sale_matic_$i onclick=\"return btn_click_action(this);\">...</button>";
    $o .= "</td>";
    $o .= "<td>";
    $o .= "<button class=\"art-button btn btn-primary btn_sale_bsc\" id=btn_sale_bsc_$i onclick=\"return btn_click_action(this);\">...</button>";
    $o .= "</td>";
    $o .= "</tr>";


    $o .= "</table>";

$o2[$i] = $o;
}
//print "<pre>";
//print_r($o2);
//print "</pre>";
if($need_stake)
{
?>
			<div class="row tokens-tf">

				<div class="col-12 col-sm-12 col-lg-4 tokens-tf__item">
					<div class="bg-wrap">
						<div class="row tokens-tf__margin-1">
							<div class="col-2 p-0">
								<img src="images/lobster.png" alt="lobster" />
							</div>
							<div class="col-10">
								<div class="tokens-tf__name">Lobster</div>
								<div class="tokens-tf__description">
									<!--Staker of min. 3k DDAO tokens-->
								</div>
							</div>
						</div>

						<div class="tokens-tf__text">Amount: $ <span class="SaleAmount_1">0</span></div>
<?php print $o2[1];?>
					</div>	
				</div>

				<div class="col-12 col-sm-12 col-lg-4 tokens-tf__item">
					<div class="bg-wrap">
						<div class="row tokens-tf__margin-1">
							<div class="col-2 p-0">
								<img src="images/shark.png" alt="shark" />
							</div>
							<div class="col-10">
								<div class="tokens-tf__name">Shark</div>
								<div class="tokens-tf__description">
									<!--Staker of min. 12k DDAO tokens-->
								</div>
							</div>
						</div>

						<div class="tokens-tf__text">Amount: $ <span class="SaleAmount_2">0</span></div>
<?php print $o2[2];
//print "Buy on Polygon:<br>";
//print "<button class=\"art-button btn btn-primary\">Connect Wallet</button>";
//print "Buy on BSC:<br>";
//print "<button class=\"art-button btn btn-primary\">Connect Wallet</button>";

?>
					</div>	
				</div>

				<div class="col-12 col-sm-12 col-lg-4 tokens-tf__item">
					<div class="bg-wrap">
						<div class="row tokens-tf__margin-1">
							<div class="col-2 p-0">
								<img src="images/whale.png" alt="whale" />
							</div>
							<div class="col-10">
								<div class="tokens-tf__name">Whale</div>
								<div class="tokens-tf__description">
									<!--Staker of min. 30k DDAO tokens-->
								</div>
							</div>
						</div>

						<div class="tokens-tf__text">Amount: $ <span class="SaleAmount_3">0</span></div>
<?php
//print $o2[3];
print $o2[3];

//print "Buy on Polygon:<br>";
//print "<button class=\"art-button btn btn-primary\">Connect Wallet</button>";
//print "Buy on BSC:<br>";
//print "<button class=\"art-button btn btn-primary\">Connect Wallet</button>";
?>
					</div>	
				</div>
			</div>
<?php
}
else
{
?>
			<div class="row tokens-tf">

				<div class="col-12 col-sm-12 col-lg-12 tokens-tf__item">
					<div class="bg-wrap">
						<div class="row tokens-tf__margin-1">
							<div class="col-12">
								<div class="tokens-tf__name"><center>Participant form</center></div>
								<div class="tokens-tf__description">
									<!--Staker of min. 3k DDAO tokens-->
								</div>
							</div>
						</div>

						<div class="tokens-tf__text">Amount: $ <span class="SaleAmount_1">0</span></div>
<?php print $o2[1];?>
					</div>	
				</div>
<?php

}
?>

