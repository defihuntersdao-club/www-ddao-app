          <!-- modal-->
          <section class="modal fade" id="modal_alloc_new" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-custom-size modal-dialog-centered">
                  <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title"> ADMIN modify alloc pool</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>


                        <div class="modal-body">
                                <p class="modal-text">Set needed Sale params. ID is <b id=modal_alloc_id>2</b></p>
<!--                          <input type="text" placeholder="Add Address" class="form-control" id="input-add">-->
<?php


print "<div class=grp>";

print "<div class=row>";

/*
print "<div class=\"col-12\">";
print "Polygon:<br>";
print "</div>";
*/
/*
print "<div class=\"col-12 label\">";
print "Id:<br>";
print "<input class=itxt type=text id=modal_alloc_id>";
print "</div>";
*/
print "<div class=\"col-12 label\">";
print "Name:<br>";
print "<input class=itxt type=text id=modal_alloc_name value=\"Sale\">";
print "</div>";

print "<div class=\"col-12 label\">";
print "Partners url:<br>";
print "<input class=itxt type=text id=modal_alloc_url>";
print "</div>";

print "<div class=\"col-12 label\" id=modal_alloc_>";
print "Partners transparent png logo:<br>";
print "<input class=itxt type=text id=modal_alloc_img>";
print "</div>";
//print "</div>";
unset($m);
$m[1] = "Lobster";
$m[2] = "Shark";
$m[3] = "Whale";
unset($val);

$val[1][amount] = 500;

$val[2][amount] = 2000;

$val[3][amount] = 5000;

//if(0)
foreach($m as $k=>$v)
{
//print "<div class=\"col-12\ type\">$v</div>";
print "<div class=\"col-4 label\">";
print "$v Amount:<br>";
print "<input class=itxt value=\"".$val[$k][amount]."\" step=1 type=text id=modal_alloc_$k>";
print "</div>";

}
print "</div>";
//print "</div>";
print "<div class=\"col-12 label\">";
print "Softcap:<br>";
print "<input class=itxt type=text value=50000 id=modal_alloc_cap>";
print "</div>";

print "<div class=\"col-12 label\">";
print "<br>";
print "<div class=row>";
print "<div class=\"col-6 r\">";
print "TestMode: ";
print "</div>";
print "<div class=\"col-6 l\">";
print "<span class=\"\">".html_checkbox("modal_alloc_test_mode",1,"switch2")."</span>";
print "</div>";

print "<div class=\"col-6 r\">";
print "Enabled: ";
print "</div>";
print "<div class=\"col-6 l\">";
print "<span class=\"\">".html_checkbox("modal_alloc_enabled",1,"switch2")."</span>";
print "</div>";

print "<div class=\"col-6 r\">";
print "Hidden: ";
print "</div>";
print "<div class=\"col-6 l\">";
print "<span class=\"\">".html_checkbox("modal_alloc_hidden",0,"switch2")."</span>";
print "</div>";

print "</div>";


//print "<input class=itxt type=text value=50000>";
print "</div>";


print "<div class=\"row err\">";
print "<div class=\"col-12 c\" style=\"font-size:10px;color:red;\" id=modal_farm_admin_err>";
print "&nbsp;";
print "</div>";
print "</div>";

print "<div class=row>";
print "<div class=\"col-6\">";
print "Polygon:<br>";
print "<button type=\"button\" class=\"btn btn-primary art-button2 btn-confirm btn-alloc\" id=modal_alloc_new_btn_matic  onclick=\"return btn_click_action(this);\">...</button>";
print "</div>";

print "<div class=\"col-6\">";
print "BSC:<br>";
print "<button type=\"button\" class=\"btn btn-primary art-button2 btn-confirm btn-alloc\" id=modal_alloc_new_btn_bsc  onclick=\"modal_farm_btn_preset_click();\">...</button>";
print "</div>";


//print "<br>";
//print "<div id=\"modal_farm_admin_auth_off2\">";
//print "<button type=\"button\" class=\"btn btn-primary art-button2 btn-confirm btn-preset\" id=modal_farm_btn_preset  onclick=\"modal_farm_btn_preset_click();\" disabled>Set preset</button>";
//print "<button type=\"button\" class=\"btn btn-primary art-button2 btn-confirm\" id=modal_farm_btn_init  onclick=\"modal_farm_btn_init_click();\" disabled>Init Reward</button>";
//print "</div>";
print "</div>";
print "</div>";


print "<div class=grp>";
print "<div class=note>";
print "Note:";
print "
<br>- In test mode, transactions go through, but they are not recorded by the system as a participant in the allocation.	
<br>- If the contract is not enabled - transactions will not go through.
<br>- The amount is unchanged by the allocation participant. If necessary, you can buy twice.
";
print "</div>";
print "</div>";



print "
                  </div>
                </div>
          </section>
        <!-- modal end-->
";