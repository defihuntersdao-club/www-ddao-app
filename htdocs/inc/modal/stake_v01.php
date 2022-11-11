          <!-- modal-->
          <section class="modal fade" id="stake_v01" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-custom-size">
                  <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Stake DDAO</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>


                        <div class="modal-body">
                                <p class="modal-text">You can stake or unstake your DDAO.</p>
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
print "<div class=\"col-4 l cname\">";

$f = $www_dir."/images/ddao2_logo_v05.svg";
$a = file_get_contents($f);
print $a;
//print "<img src=/images/";
print "DDAO";
print "</div>";

print "<div class=\"col-8 r iamount\">";
//print "<input type=text class=\"\" >
print "<input class=i type=number min=0.01 step=0.01 value=0 id=modal_stake_v01_amount>";
print "<br>";
print "<span class=comments>Amount</span>";
//print "sf";
print "</div>";

print "</div>";

print "<div class=\"row err\">";
print "<div class=\"col-12 c\" style=\"font-size:10px;color:red;\" id=modal_stake_v01_err>";
print "&nbsp;";
print "</div>";
print "</div>";

print "<div class=\"row amount\">";
print "<div class=\"col-12 r\">";
print "Aviable: ";
print "<span class=\"ddao_balance\" id=modal_stake_v01_balance>-</span>";
print " DDAO  ";

print "&nbsp;   ";
//print "</div>";

//print "<div class=\"col-2 c\">";
    print "<button class=\"btn btn-primary pers\" onclick=\"stake_amount(25);\">25%</button> ";
//print "</div>";
//print "<div class=\"col-2 c\">";
    print "<button class=\"btn btn-primary pers\" onclick=\"stake_amount(50);\">50%</button> ";
//print "</div>";
//print "<div class=\"col-2 c\">";
    print "<button class=\"btn btn-primary pers\" onclick=\"stake_amount(75);\">75%</button> ";
//print "</div>";
//print "<div class=\"col-2 c\">";
    print "<button class=\"btn btn-primary pers\" onclick=\"stake_amount(100);\">100%</button> ";
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
print "<button class=\"btn btn-primary2\" style=\"width:90%;\" id=\"stake_v01_stake_btn\" onclick=\"stake_v01_staking();\">Stake</button>";
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

print "<div class=\"row line\">";
print "<div class=\"col-6\">";
print "Aproved:";
print "</div>";
print "<div class=\"col-5 r\">";
print "<span class=\"ddao_stake_v01 stake_ddao_lock_allowance\">0</span>";
print "</div>";
print "</div>";

print "<div class=\"row line\">";
print "<div class=\"col-6\">";
print "Staked:";
print "</div>";
print "<div class=\"col-5 r\">";
print "<span class=\"ddao_stake_v01 stake_ddao_lock_amount\">0</span>";
print "</div>";
print "</div>";

print "<div class=\"row line\">";
print "<div class=\"col-6\">";
print "Unlocked:";
print "</div>";
print "<div class=\"col-5 r\">";
print "<span class=\"ddao_stake_v01_unlock stake_ddao_lock_unlock\">-</span>";
print "</div>";
print "</div>";

print "<div class=\"row line\">";
print "<div class=\"col-6\">";
print "Waiting:";
print "</div>";
print "<div class=\"col-5 r\">";
print "<span class=\"ddao_stake_v01_wait\">-</span>";
print "</div>";
print "</div>";

print "</div>";
print "<div class=\"modal-footer\">";
print "<button type=\"button\" class=\"btn btn-primary art-button btn-confirm\" id=stake_v01_stake_btn1>Unstake Locked</button>";
//print "<button type=\"button\" class=\"btn btn-secondary btn-cancel\" data-bs-dismiss=\"modal\">Unstake All</button>";
print "<button type=\"button\" class=\"btn btn-secondary\" id=stake_v01_stake_btn2 onclick=\"stake_v01_unstake_all();\">Unstake All</button>";
print "</div>";

print "
                  </div>
                </div>
          </section>
        <!-- modal end-->
";