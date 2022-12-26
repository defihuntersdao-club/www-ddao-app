<?php

$arrow = "
								<svg width=\"12\" height=\"8\" viewBox=\"0 0 12 8\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
									<path d=\"M1.16016 1.42017L6.00097 6.26099L10.8418 1.42017\" stroke=\"#3D8AFF\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
									</svg>
";
//print_r($conf_menu);
//$type = "claim";
$conf_type = array_keys($conf_menu);
print "<div class=item_type2>";
//print "<div id=item_type class=claim>";
foreach($conf_type as $type)
{
print "<div id=item_type_$type class=\"item_type $type\">";
print "<div class=\"wrapper\">
        <div class=\"row grid-wrap justify-content-center\">
";
foreach($conf_menu[$type] as $k=>$v2)
{

print "
					<div class=\"col-12 col-md-6 col-lg-4\">

						<div class=\"grid-item ".$v2[type]."\">
";
if($v2[btn_action])
    print "<div class=\"btn_action d-none\" id=".$type."_".$k."_aviable>DDD</div>";
if($v2[type_text])
print "
							<div class=\"grid-item__tape\">
								<span class=type>".$v2[type_text]."</span>
							</div>
";

print "

							<div class=\"grid-item__title\">
								$v2[name]
							</div>
";
if(!$v2[skip_addr])
print "
							<div class=\"grid-item__address\">
								<div class=\"label\">
									My address
								</div>
								<div class=\"value\"><span class=\"wallet-id\">-</span>
								</div>
							</div>
";

//print "============= k = $k ==========\n";
$skip_btn = 0;
switch($type)
{
case "pitch":
$skip_btn = 1;
break;

case "claim":
$skip_btn = 0;
print "
							<div class=\"grid-item__amount\">
								<div class=\"label\">
									Available for Claim
								</div>
								<div class=\"value modified action_value btn_action\" id=".$k."_aviable>
									-
								</div>
							</div>
							<div class=\"grid-item__claimed\">
								<div class=\"label\">
									Already Claimed
								</div>
								<div class=\"value modified\" id=".$k."_claimed>
									-
								</div>
							</div>
";
break;
case "pool":
$skip_btn = 0;
print "
							<div class=\"grid-item__amount\">
								<div class=\"label\">
									My Allocation
								</div>
								<div class=\"value modified action_value btn_action\" id=".$type."_".$k.">
									-
								</div>
								<div class=\"label\">
									Date of accrual
								</div>
								<div class=\"value modified\" id=".$type."_".$k."_accrual>
									Coming soon
								</div>
							</div>
";
break;
case "stepn":
include __DIR__."/blks/$type.php";
break;
case "stake2":
$skip_btn = 1;
    unset($t);
    $t[balance] = "Free balance";

    $t[interval] = "Stake time";
    $t[token] = "Token name";
    $t[levels] = "My levels";
    $t[amount] = "Staked";

    $t[unlock] = "Unlocked";
    $t[wait] = "Full unlock";
//    $t[frozen] = "Frozen";
    $t[allowance] = "Allowance";

if(0)
print "
							<div class=\"grid-item__amount\">
";

print "<table class=table_stake>";

    foreach($t as $k3=>$v3)
    {
    print "<tr>";
    print "<td class=\"stake_l\">";
    print $v3;
    if($k3=="amount" || $k3 == "balance")
    {
//    print $arrow;
    print " <span onclick=num_hide(\"".$type."_".$k."_".$k3."_num\"); style=\"cursor:pointer;\">&#9660;</span>";
    }
    print "</td>";
    print "<td class=\"stake_r\" id=".$type."_".$k."_".$k3.">";
    print "-";
    print "</td>";
    print "</tr>";
/*
if(0)
print "
								<div class=\"label\">
									$v3
								</div>
								<div class=\"value modified action_value btn_action\" id=".$type."_".$k."_".$k3.">
									-
								</div>
";
*/

	switch($k3)
	{
	    case "amount":
		$btn_name[$k3] = "Unstake";
	    break;
	    case "balance":
		$btn_name[$k3] = "Stake";
	    break;
	}
	switch($k3)
	{
	    case "amount":
	    case "balance":

print "
<tr><td colspan=2>
<div class=\"number number2 d-none\" id=\"".$type."_".$k."_".$k3."_num\">
        <div class=\"number__wrap row justify-content-between align-items-center\">
                <div class=\"col-4 d-flex justify-content-between\">
                        <button class=\"number__label col-6\">min</button>
                        <span class=\"number__minus col-6\">-</span>
                </div>
                <div class=\"col-4\">
                        <input type=\"number\" value=\"1\" step=\"1\" min=\"1\" max=\"500\" id=\"".$type."_".$k."_".$k3."_input\"/>
                </div>
                <div class=\"col-4 d-flex justify-content-between\">
                        <span class=\"number__plus col-6\">+</span>
                        <button class=\"number__label col-6\" >max</button>
                </div>
        </div>   

							<div class=\"grid-item__button\">
								<a href=\"#\" class=\"art-button-2 btn btn-primary\">
									".$btn_name[$k3]."
								</a>
							</div>

</div>           
</td></tr>
";

	    break;
	}
    }

print "</table>";
if(0)
print "

							</div>
";
break;
}


if($v2[comments])
{
    print "<div class=\"grid-item_comments\">";
    print $v2[comments];
    print "</div>";
}

if($skip_btn)
print "<br>";
else
print "
							<div class=\"grid-item__button\">
								<a href=\"#\" class=\"art-button-2 btn btn-primary wallet_connect\">
									Connect a wallet
								</a>
								<a href=\"#\" class=\"art-button-2 btn btn-primary wallet_action d-none\" id=btn_".$type."_$k onclick=\"return btn_click_action(this);\">
									...
								</a>
							</div>
";
if(!$v2[skip_detail])
{
print "	
							<div class=\"grid-item__details\" id=\"dropdownGridItem\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
								<span>Detail</span>
								<svg width=\"12\" height=\"8\" viewBox=\"0 0 12 8\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
									<path d=\"M1.16016 1.42017L6.00097 6.26099L10.8418 1.42017\" stroke=\"#3D8AFF\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
									</svg>
									
							</div>
							<div class=\"grid-item__bottom dropdown-menu\" aria-labelledby=\"dropdownGridItem\">
								
								<div class=\"grid-item__info\">
<!--
									<div>
										<div class=\"label\">You paid:</div>
										<div class=\"value modified\">-</div>
									</div>
-->
";
switch($type)
{
case "claim":
print "
									<div>
										<div class=\"label\">Your allocation:</div>
										<div class=\"value modified\" id=".$k."_alloc>-</div>
									</div>
									<div>
										<div class=\"label\">Interval:</div>
										<div class=\"value\">".$v2[interval]."</div>
									</div>
";
break;
}
if($v2[start_date])
print "									<div>
										<div class=\"label\">Start Date:</div>
										<div class=\"value\">".$v2[start_date]."</div>
									</div>
								</div>
	
								<div class=\"grid-item__block\">
";
/*
print "
									<a href=\"#\">
										<span>Sale</span>
										<svg width=\"25\" height=\"25\" viewBox=\"0 0 25 25\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
											<path d=\"M18.7598 19.2494H6.75977C6.20977 19.2494 5.75977 18.7994 5.75977 18.2494V6.24939C5.75977 5.69939 6.20977 5.24939 6.75977 5.24939H11.7598C12.3098 5.24939 12.7598 4.79939 12.7598 4.24939C12.7598 3.69939 12.3098 3.24939 11.7598 3.24939H5.75977C4.64977 3.24939 3.75977 4.14939 3.75977 5.24939V19.2494C3.75977 20.3494 4.65977 21.2494 5.75977 21.2494H19.7598C20.8598 21.2494 21.7598 20.3494 21.7598 19.2494V13.2494C21.7598 12.6994 21.3098 12.2494 20.7598 12.2494C20.2098 12.2494 19.7598 12.6994 19.7598 13.2494V18.2494C19.7598 18.7994 19.3098 19.2494 18.7598 19.2494ZM14.7598 4.24939C14.7598 4.79939 15.2098 5.24939 15.7598 5.24939H18.3498L9.21977 14.3794C8.82977 14.7694 8.82977 15.3994 9.21977 15.7894C9.60977 16.1794 10.2398 16.1794 10.6298 15.7894L19.7598 6.65939V9.24939C19.7598 9.79939 20.2098 10.2494 20.7598 10.2494C21.3098 10.2494 21.7598 9.79939 21.7598 9.24939V4.24939C21.7598 3.69939 21.3098 3.24939 20.7598 3.24939H15.7598C15.2098 3.24939 14.7598 3.69939 14.7598 4.24939Z\" fill=\"#3D8AFF\"/>
											</svg>
											
									</a>
";
*/
print "
									
								</div>
							</div>
";
}
print "
						</div>
					</div>
";
}
print "</div>";
print "</div>";
print "</div>";
}
//print "</div>";
print "</div>";
?>