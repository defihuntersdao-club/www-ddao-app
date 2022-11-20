          <!-- modal-->
          <section class="modal fade" id="modal_buy_ddao" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-custom-size modal-dialog-centered">
                  <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Buy DDAO</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>


                        <div class="modal-body">


<?php
//<!--                          <input type="text" placeholder="Add Address" class="form-control" id="input-add">-->
$tabindex2 = 4;

//print "<p class=\"modal-text\">";
print "<span class=\"modal-text\">";
print "You can BUY on dex and STAKE DDAO.";
//print "</span>";
print "</p>";

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
print "<div class=\"col-4 l cname\">";

$f = $www_dir."/images/ddao2_logo_v05.svg";
$a = file_get_contents($f);
print $a;
//print "<img src=/images/";
print "DDAO";
print "</div>";

print "<div class=\"col-8 r iamount\">";
//print "<input type=text class=\"\" >
//print "<input class=i type=number min=0.01 step=0.01 value=0>";
print "<br>";
print "<span class=\"buy_swap_span\">";
print "<span class=\"buy_swap\">0</span>";
print "</span>";
print "<br>";
print "<span class=comments>Amount</span>";
//print "sf";
print "</div>";

print "</div>";

if(0)
{
print "<div class=\"row err\">";
print "<div class=\"col-12 c\" style=\"font-size:10px;color:red;\" id=modal_stake_v01_allowance_err>";
print "&nbsp;";
print "</div>";
print "</div>";
}


unset($coins);
$coins[usdc] = "USDC";
$coins[usdt] = "USDT";
$coins[dai]  = "DAI";
foreach($coins as $coin=>$name)
{
print "<div class=\"row coins\">";
print "<div class=\"col-4 l name\">";
    print "<img src=/images/ico2/$coin.svg> ";
    print $name;

print "</div>";
print "<div class=\"col-8\">";
//print "<input class=i21 type=number min=0.01 step=0.01 value=0 style=\"width:100%;text-align:right;font-size:15px;border:0;outline:0;padding:0;\">";
print "<input class=i21 type=number min=0.01 step=0.01 value=\"0\" id=modal_buy_input_$coin tabindex=\"".(++$tabindex)."\">";
print "</div>";
print "</div>";

print "<div class=\"row amount\">";
print "<div class=\"col-6 aviable\">";
print "Aviable: ";
print "&nbsp;";
print "<span class=\"balance_matic_".strtoupper($coin)."\">-</span>";
//print " DDAO  ";
print "<br>";
//print "Approved: ";
print "Allowed: ";
print "<span class=\"buy_allowance_".$coin."\">-</span>";

//print "&nbsp;   ";
//print "</div>";
print "</div>";
print "<div class=\"col-6 c btns2\">";
    print "<button class=\"btn btn-primary pers btn_addons\" tabindex=\"".($tabindex2++)."\" onclick=\"buy_amount('$coin',25);\" disabled>25%</button> ";
//    print "<button class=\"pers\" onclick=\"buy_amount('$coin,'25);\">25%</button> ";
//print "</div>";
//print "<div class=\"col-2 c\">";
    print "<button class=\"btn btn-primary pers btn_addons\" tabindex=\"".($tabindex2++)."\" onclick=\"buy_amount('$coin',50);\" disabled>50%</button> ";
//print "</div>";
//print "<div class=\"col-2 c\">";
    print "<button class=\"btn btn-primary pers btn_addons\" tabindex=\"".($tabindex2++)."\" onclick=\"buy_amount('$coin',75);\" disabled>75%</button> ";
//print "</div>";
//print "<div class=\"col-2 c\">";
    print "<button class=\"btn btn-primary pers btn_addons\" tabindex=\"".($tabindex2++)."\" onclick=\"buy_amount('$coin',100);\" disabled>100%</button> ";

print "<br>";
    print "<button class=\"btn btn-primary allow btn_addons\" onclick=\"buy_action('$coin','allowance')\" tabindex=\"".($tabindex2++)."\" disabled>Approve</button> ";
    print "<button class=\"btn btn-primary allow btn_addons\" onclick=\"buy_action('$coin','allowance_all')\" tabindex=\"".($tabindex2++)."\" disabled>Approve &#8734;</button> ";
//    print "<button class=\"btn btn-primary allow2\" balance=10000>Approve</button> ";
    print "<button class=\"btn btn-primary allow btn_addons\" onclick=\"buy_action('$coin','disapprove')\" tabindex=\"".($tabindex2++)."\" disabled>Disapprove</button> ";
print "</div>";

print "</div>";

}
//print "<br>";

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


if(0)
{
print "<div class=\"row csubm\">";
print "<div class=\"col-12\" style=\";margin:5px 0 10px 0;\">";
print "<center>";
//print "<button class=\"btn btn-primary2\" style=\"width:90%;\" id=stake_v01_allowance_btn onclick=func_stake_v01_allowance();>Approve only value</button>";
print "<button class=\"btn btn-primary\" style=\"width:90%;\">Approve</button>";
print "</center>";
//print "<br>";
//print "asdfkjasdf";
print "</div>";
print "</div>";
}

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

/*
if(0)
{
print "<div class=\"row\" style=\"margin:10px 0 10px 0;\">";
print "<div class=\"col btn_stake\" style=\"text-align:center;\">";
print "<button  class=\"btn btn-primary\" style=\"margin:0px;width:100%;\">Approve</button>";
print "</div>";
print "</div>";
}
*/

/*
print "<div class=\"row line\">";
print "<div class=\"col-6\">";
print "Staked:";
print "</div>";
print "<div class=\"col-5 r\">";
print "<span class=\"ddao_stake_v01\">-</span>";
print "</div>";
print "</div>";

print "<div class=\"row line\">";
print "<div class=\"col-6\">";
print "Unlocked:";
print "</div>";
print "<div class=\"col-5 r\">";
print "<span class=\"ddao_stake_v01_unlock\">-</span>";
print "</div>";
print "</div>";
*/

print "<div class=\"row line\">";
print "<div class=\"col-6\">";
print "Expected output:";
print "</div>";
print "<div class=\"col-5 r\">";
print "<span class=\"buy_swap\">-</span>";
print "</div>";
print "</div>";

print "<div class=\"row line\">";
print "<div class=\"col-6\">";
print "Price impact, %:";
print "</div>";
print "<div class=\"col-5 r\">";
print "<span class=\"buy_ddao_price_impact\" id=\"buy_ddao_price_impact\">-</span>";
print "</div>";
print "</div>";

print "<div class=\"row line\">";
print "<div class=\"col-6\">";
print "Minimum received:";
print "</div>";
print "<div class=\"col-5 r\">";
print "<span class=\"\" id=buy_ddao_minimal_received>-</span>";
print "</div>";
print "</div>";

/*
print "<div class=\"row line\">";
print "<div class=\"col-6\">";
print "Stake after swap:";
print "</div>";
print "<div class=\"col-5 r\">";
print "<span class=\"\">-</span>";
print "</div>";
print "</div>";
*/


print "

                        </div>
                        <div class=\"modal-footer3\">
";
//print "<div class=btns>";
if(0)
{
//print "<button type=\"button\" class=\"btn btn-primary art-button btn-confirm\">Allow &#8734;</button>";
print "<button type=\"button\" class=\"btn btn-primary\" onclick=stake_v01_allowance_all(); id=stake_v01_allowance_btn2>Allow &#8734;</button>";
//print "<button type=\"button\" class=\"btn btn-secondary btn-cancel\" data-bs-dismiss=\"modal\">Disallow All</button>";
//print "<button type=\"button\" class=\"btn btn-secondary btn-cancel\">Disallow All</button>";
print "<button type=\"button\" class=\"btn btn-secondary\"onclick=stake_v01_disallow(); id=stake_v01_allowance_btn3>Disallow All</button>";
}

print "<button type=\"button\" class=\"btn btn-primary\" id=modal_buy_ddao_btn onclick=\"modal_buy_ddao_btn()\">...</button>";
//print "</div>";


print "<div class=\"row lined\">";
print "<div class=\"col-2\">";
print "</div>";
print "<div class=\"col-4\">";
print "Stake after swap:";
print "</div>";
print "<div class=\"col-5 r\">";
print "<span class=\"\">".html_checkbox("swap_after_buy",1,"switch2")."</span>";
print "</div>";
print "</div>";

print "</div>";

print "
                        </div>

                  </div>
                </div>
          </section>
        <!-- modal end-->
";
?>