<?php
//print_r($v2);
//$skip_btn = 1;
$skip_btn = 0;
    unset($t);
    $t[all]	= "Global allocation";
    $t[minimal]	= "Minimal cost";
    $t[status] = "Status";
//    $t[users]	= "Participants";
    $t[amount] = "My allocation";
    $t[txs] 	= "My txs";

//    $t[share]  = "My share, %";
    $t[balance] = "My BSC balance";

$this_btn_action = "balance";
//    $t[interval] = "Stake time";
//    $t[token] = "Token name";
//    $t[levels] = "My levels";
//    $t[amount] = "Allocation";

//    $t[unlock] = "Unlocked";
//    $t[wait] = "Full unlock";
//    $t[frozen] = "Frozen";
//    $t[allowance] = "Allowance";


print "<table class=table_stake>";

    foreach($t as $k3=>$v3)
    {
    print "<tr>";
    print "<td class=\"stepn_l\">";
    print $v3;

    if(0)
    if($k3=="amount" || $k3 == "balance")
    {
//    print $arrow;
    print " <span onclick=num_hide(\"".$type."_".$k."_".$k3."_num\"); style=\"cursor:pointer;\">&#9660;</span>";
    }
    print "</td>";

$c = "";
if($this_btn_action == $k3)
$c = "btn_action";
    print "<td class=\"stepn_r $c\" id=".$type."_".$k."_".$k3.">";
//if($this_btn_action == $k3)print "<div class=\"btn_action\" id=".$type."_".$k.">20";
//else
//    print "-";
//if($this_btn_action == $k3)print "</div>";
    print "</td>";
    print "</tr>";

	switch($k3)
	{
	    case "amount":
		$btn_name[$k3] = "Unstake";
	    break;
	    case "balance":
		$btn_name[$k3] = "Allocate";
	    break;
	}
	switch($k3)
	{
//	    case "amount":
	    case "balance":
//print_r($v2);
print "
<tr><td colspan=2>
<div class=\"number number2\" id=\"".$type."_".$k."_".$k3."_num\">
        <div class=\"number__wrap row justify-content-between align-items-center\">
                <div class=\"col-4 d-flex justify-content-between\">
                        <button class=\"number__label col-6\" onclick=".$type."_".$k."_func('min')>min</button>
                        <span class=\"number__minus2 col-6\" onclick=".$type."_".$k."_func('minus')>-</span>
                </div>
                <div class=\"col-4\">
                        <input type=\"number\" value=\"".$v2[min]."\" step=\"1\" min=\"".$v2[min]."\"  id=\"".$type."_".$k."_".$k3."_input\"/>
                </div>
                <div class=\"col-4 d-flex justify-content-between\">
                        <span class=\"number__plus2 col-6\" onclick=".$type."_".$k."_func('plus')>+</span>
                        <button class=\"number__label col-6\" onclick=".$type."_".$k."_func('max')>max</button>
                </div>
        </div>   
<!--
							<div class=\"grid-item__button\">
								<a href=\"#\" class=\"art-button-2 btn btn-primary\">
									".$btn_name[$k3]."
								</a>
							</div>
-->
</div>           
</td></tr>
";
	break;
	}
    }
print "</table>";
?>