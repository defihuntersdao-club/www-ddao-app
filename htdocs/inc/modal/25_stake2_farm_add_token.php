          <!-- modal-->
          <section class="modal fade" id="modal_farm_add_token" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-custom-size modal-dialog-centered">
                  <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Partners service:<br>Add token for REWARDS <span id=stake_v02_pair></span></h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>


                        <div class="modal-body">
                                <p class="modal-text">You can send ERC-20 token for LP rewards</p>
<!--                          <input type="text" placeholder="Add Address" class="form-control" id="input-add">-->
<?php

print "<div class=\"grp\">";

/*
print "<div class=\"row line\">";

print "<div class=\"col-6\">";
print "Aviable: ";
print "<span class=\"ddao_balance\"></span>";
print "DDAO";
print "</div>";

print "<div class=\"col-5 r\">";
print "<span class=\"ddao_balance\"></span>";
print "</div>";

print "</div>";
*/

print "<div class=\"row coin\">";
/*
print "<div class=\"col-4 l cname\">";

$f = $www_dir."/images/ddao2_logo_v05.svg";
$a = file_get_contents($f);
print $a;
//print "<img src=/images/";
print "DDAO";
print "</div>";
*/

print "<div class=\"col-12 l iamount\">";
//print "<input type=text class=\"\" >
//print "<input class=i type=number min=0.01 step=0.01 value=0 id=modal_stake_v02_amount>";
//print "<input class=i type=number value=0 step=0.000000000000000001 id=modal_stake_v02_amount>";
//print "<input class=i type=number value=0 step=0 max=0 id=modal_stake_v02_amount>";
print "<input class=\"i i2\" type=text value=\"0x\" id=modal_stake2_farm_addr>";
print "<br>";
print "<span class=comments>Polygon ERC-20 token address</span>";
//print "sf";
print "</div>";
print "</div>";

print "<div class=\"row err\">";
print "<div class=\"col-12 c\" style=\"font-size:10px;color:red;\" id=modal_stake2_farm_err>";
print "&nbsp;";
print "</div>";
print "</div>";


print "<div class=\"row csubm\">";
print "<div class=\"col-12\" style=\";margin:5px 0 10px 0;\">";
print "<center>";
print "<button class=\"btn btn-primary\" style=\"width:90%;\" id=\"stake_v02_farm_btn\" onclick=\"stake_v02_get_token_info();\">Get Token Info</button>";
print "</center>";
//print "<br>";
//print "asdfkjasdf";
print "</div>";
print "</div>";


print "</div>";
//print "<br>";

unset($t_mas);
$t_mas[abbr] 			= "Ticker";
$t_mas[name] 			= "Name";
$t_mas[decimals] 		= "Decimal";
$t_mas[supply] 			= "Total Supply";
//$t_mas[balance] 		= "Your balance";
$t_mas[balanceContract] 	= "Contract balance";
foreach($t_mas as $k=>$v)
{
print "<div class=\"row line\">";
print "<div class=\"col-6 name\">";
print $v;
print "</div>";
print "<div class=\"col-5 r\">";
print "<span class=\"value token_farm_$k\" id=\"modal_token_farm_$k\">-</span>";
print "</div>";
print "</div>";
}

print "<div class=\"grp\">";

print "<div class=\"row coin\">";
print "<div class=\"col-12 l iamount\">";
//print "<input type=text class=\"\" >
//print "<input class=i type=number min=0.01 step=0.01 value=0 id=modal_stake_v02_amount>";
//print "<input class=i type=number value=0 step=0.000000000000000001 id=modal_stake_v02_amount>";
//print "<input class=i type=number value=0 step=0 max=0 id=modal_stake_v02_amount>";
print "<input class=i type=number value=0 min=0 step=0.000000000000000001 max=0 id=modal_stake2_farm_amount>";
print "<br>";
print "<span class=comments>Amount</span>";
print "<br>";
print "<input class=i type=number value=90 min=14 step=1 max=720 id=modal_stake2_farm_period>";
print "<br>";
print "<span class=comments>Period (days)</span>";

//print "sf";
print "</div>";
print "</div>";

print "<div class=\"row err\">";
print "<div class=\"col-12 c\" style=\"font-size:10px;color:red;\" id=modal_stake_v02_err>";
print "&nbsp;";
print "</div>";
print "</div>";

print "<div class=\"row amount\">";
print "<div class=\"col-8 r\">";
    print "<div class=\"row\">";
    print "<div class=\"col-3 r\">";
    print "Aviable: ";
    print "</div>";
    print "<div class=\"col-9 r\">";
    print "<span class=\"token_farm_balance\" id=modal_stake2_farm_balance>0</span>";
    print "</div>";
/*
    print "<div class=\"col-2 l\">";
    print " LP";
    print "</div>";
*/
    print "</div>";

//print "<br>";
    print "<div class=\"row\">";
    print "<div class=\"col-3 r\">";
    print "Approved: ";
    print "</div>";
    print "<div class=\"col-9 r\">";
    print "<span class=\"token_farm_allowance \" id=modal_stake2_farm_allowance>0</span>";
//print " LP</nobr> ";
    print "</div>";
/*
    print "<div class=\"col-2 l\">";
    print " LP";
    print "</div>";
*/
    print "</div>";


//print "&nbsp;   ";
print "</div>";

print "<div class=\"col-4 c pers_btn\">";

    print "<button class=\"btn-primary pers\" onclick=\"stake2_farm_amount_set(25);\">&nbsp;25%</button> ";
//print "</div>";
//print "<div class=\"col-2 c\">";
    print "<button class=\"btn-primary pers\" onclick=\"stake2_farm_amount_set(50);\">&nbsp;50%</button> ";
//print "</div>";
print "<br>";
//print "<div class=\"col-2 c\">";
    print "<button class=\"btn-primary pers\" onclick=\"stake2_farm_amount_set(75);\">&nbsp;75%</button> ";
//print "</div>";

//print "<div class=\"col-2 c\">";
//    print "<button class=\"btn-xs btn-primary pers\" onclick=\"stake2_amount_set(100);\">100%</button> ";
    print "<button class=\"btn-primary pers\" onclick=\"stake2_farm_amount_set(100);\">100%</button> ";
print "</div>";
print "</div>";

/*
//print "adf";
print "<div class=\"row\">";
print "<div class=\"col-12 c\">";
print "<button class=\"btn btn-primary btn-confirm\">Stake</button>";
print "</div>";
print "</div>";
*/

/*
print "<div class=\"row\">";
print "<div class=\"col-12 r aviable\">";
print "Aviable balance DDAO:";
print "</div>";
print "</div>";
*/
/*
print "<div class=\"row act_btn\">";
print "<div class=\"col-12 c\">";
print "<button class=\"btn btn-primary confirm\">Confirm</button>";
print "</div>";
//print "</div>";
print "</div>";
*/


//print "</div>";



print "<div class=\"row csubm\">";
print "<div class=\"col-12\" style=\";margin:5px 0 10px 0;\">";
print "<center>";
print "<button class=\"btn btn-primary\" style=\"width:90%;\" id=\"stake2_farm_btn\" onclick=\"stake2_farm_stake();\">No action</button>";
print "</center>";
//print "<br>";
//print "asdfkjasdf";
print "</div>";
print "</div>";

/*
print "<div class=\"row comments\">";
print "<div class=\"col\" style=\"font-size:10px;\">";
print "<div style=\"padding:2px 10px 2px 10px;\">";
print "<a href=#>staking information</a>";
print "</div>";
print "</div>";
print "</div>";
*/
//print "adf";
print "</div>";

if(0)
{
print "<div class=\"row\" style=\"margin:10px 0 10px 0;\">";
print "<div class=\"col btn_stake\" style=\"text-align:center;\">";
print "<button  class=\"btn btn-primary\" style=\"margin:0px;width:100%;\">Stake</button>";
print "</div>";
print "</div>";
}

/*
print "<div class=\"row line\">";
print "<div class=\"col-6\">";
print "Approved:";
print "</div>";
print "<div class=\"col-5 r\">";
print "<span class=\"ddao_stake_v02 stake_ddao_lock_allowance\">0</span>";
print "</div>";
print "</div>";
*/
/*
print "<div class=\"row line\">";
print "<div class=\"col-6\">";
print "Staked:";
print "</div>";
print "<div class=\"col-5 r\">";
print "<span class=\"ddao_stake_v02 stake_ddao_lock_amount\">0</span>";
print "</div>";
print "</div>";

print "<div class=\"row line\">";
print "<div class=\"col-6\">";
print "Unlocked:";
print "</div>";
print "<div class=\"col-5 r\">";
print "<span class=\"ddao_stake_v02_unlock stake_ddao_lock_unlock\">-</span>";
print "</div>";
print "</div>";

print "<div class=\"row line\">";
print "<div class=\"col-6\">";
print "Waiting:";
print "</div>";
print "<div class=\"col-5 r\">";
print "<span class=\"ddao_stake_v02_wait\">-</span>";
print "</div>";
print "</div>";
*/

print "</div>";
/*
print "<div class=\"modal-footer\">";
print "<button type=\"button\" class=\"btn btn-primary art-button btn-confirm\" id=stake_v02_stake_btn2  onclick=\"stake_v02_unstake_locked();\">Unstake Locked</button>";
//print "<button type=\"button\" class=\"btn btn-secondary btn-cancel\" data-bs-dismiss=\"modal\">Unstake All</button>";
print "<button type=\"button\" class=\"btn btn-primary\" id=stake_v02_stake_btn3 onclick=\"stake_v02_unstake_all();\">Unstake All</button>";
print "</div>";
*/

print "
                  </div>
                </div>
          </section>
        <!-- modal end-->
";