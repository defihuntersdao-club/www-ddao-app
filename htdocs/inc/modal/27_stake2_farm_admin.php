          <!-- modal-->
          <section class="modal fade" id="modal_farm_admin" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-custom-size modal-dialog-centered">
                  <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title"><span id=modal_farm_admin_nn></span> ADMIN modify Reward </h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>


                        <div class="modal-body">
                                <p class="modal-text">Rewards in token <b id=modal_farm_admin_abbr></b></p>
<!--                          <input type="text" placeholder="Add Address" class="form-control" id="input-add">-->
<?php


unset($t_mas);
$t_mas[koef1] 			= "Koef [DDAO/ETH]";
$t_mas[koef2] 			= "Koef [GNFT/ETH]";
$t_mas[koef3] 			= "Koef [GNFT/USDC]";
print "<div class=grp>";
foreach($t_mas as $k=>$v)
{
print "<div class=\"row line\">";
print "<div class=\"col-6 name\">";
print $v;
print "</div>";
print "<div class=\"col-5 r\">";
//print "<span class=\"value admin_$k\" id=\"modal_farm_admin_$k\">-</span>";
print "<input class=i type=number value=10 min=1 max=100 step=1 id=modal_farm_admin_$k>";
print "</div>";
print "</div>";
}
print "<div class=\"row err\">";
print "<div class=\"col-12 c\" style=\"font-size:10px;color:red;\" id=modal_farm_admin_err>";
print "&nbsp;";
print "</div>";
print "</div>";
//print "<br>";
print "<div id=\"modal_farm_admin_auth_off2\">";
print "<button type=\"button\" class=\"btn btn-primary art-button2 btn-confirm btn-preset\" id=modal_farm_btn_preset  onclick=\"modal_farm_btn_preset_click();\" disabled>Set preset</button>";
print "<button type=\"button\" class=\"btn btn-primary art-button2 btn-confirm\" id=modal_farm_btn_init  onclick=\"modal_farm_btn_init_click();\" disabled>Init Reward</button>";
print "</div>";
print "</div>";
//print "<div class=\"modal-footer\">";
//print "<button type=\"button\" class=\"btn btn-primary art-button2 btn-confirm\" id=stake_v02_stake_btn2  onclick=\"stake_v02_unstake_locked();\">INIT</button>";
//print "</div>";
unset($t_mas);
$t_mas[start_time]		= "Start Time";
//$t_mas[end_time]		= "End Time";
$t_mas[interval] 		= "Period";
$t_mas[amount] 			= "Amount";
$t_mas[stoped] 			= "Stoped";
$t_mas[stoped_time]		= "Stoped Time";
$t_mas[hidden] 			= "Hidden";
$t_mas[hidden_time]		= "Hidden Time";
$t_mas[exited]			= "EXITED";

//$t_mas[decimals] 		= "Decimal";
//$t_mas[supply] 			= "Total Supply";
//$t_mas[balance] 		= "Your balance";
//$t_mas[balanceContract] 	= "Contract balance";
//print "<div class=grp>";
foreach($t_mas as $k=>$v)
{
print "<div class=\"row line\">";
print "<div class=\"col-6 name\">";
print $v;
print "</div>";
print "<div class=\"col-5 r\">";
print "<span class=\"value admin_$k\" id=\"modal_farm_admin_$k\">-</span>";
print "</div>";
print "</div>";
}
//print "</div>";

print "<div class=\"modal-footer\">";
print "<div style=\"width:100%\">";
print "<div id=\"modal_farm_admin_auth_on\">";
print "<button type=\"button\" class=\"btn btn-primary art-button2 btn-confirm\" id=farm_btn_connect  onclick=\"onConnect();\">Connect wallet</button>";
print "</div>";
print "<div id=\"modal_farm_admin_auth_off\">";
print "<button type=\"button\" class=\"btn btn-primary art-button2 btn-confirm\" id=farm_btn_stop  onclick=\"web3_farm_stop_click();\">Stop / Unstop</button>";
print "<button type=\"button\" class=\"btn btn-primary art-button2 btn-confirm\" id=farm_btn_hide  onclick=\"web3_farm_hide_click();\">Hide / Unhide</button>";
print "<button type=\"button\" class=\"btn btn-primary art-button2 btn-confirm\" id=farm_btn_exit  onclick=\"web3_farm_exit_click();\">EXIT</button>";
//print "<button type=\"button\" class=\"btn btn-secondary btn-cancel\" data-bs-dismiss=\"modal\">Unstake All</button>";
//print "<button type=\"button\" class=\"btn btn-primary\" id=stake_v02_stake_btn3 onclick=\"stake_v02_unstake_all();\">Unstake All</button>";
///print "</span>";
print "</div>";
print "</div>";
print "</div>";
print "<div class=grp>";
print "<div class=note>";
print "Note:";
print "
<br>- after adding the reward is stopped
<br>- you need to specify the coefficients (100% of the reward for the day is divided by the sum of the coefficients and is calculated proportionally)
<br>- Example: 20/10/10
<br>- do INIT
<br>- After STOPING, rewards are no longer awarded and users can CLAIM past rewards
<br>- after UNSTOPING for the days during which the stop took place, tokens will be REWARDED
<br>- after HIDDING, there will be a stop and hiding from the site of the block with rewards
<br>- after UNHIDDING, the block will appear on the site and accrual will continue
<br>- by pressing EXIT - the owner of the reward will receive the rest of the tokens on his wallet.
";
print "</div>";
print "</div>";


print "
                  </div>
                </div>
          </section>
        <!-- modal end-->
";