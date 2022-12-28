          <!-- modal-->
          <section class="modal fade" id="modal_farm_claim" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-custom-size modal-dialog-centered">
                  <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title"><span id=modal_farm_nn></span> CLAM REWARDS </h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>


                        <div class="modal-body">
                                <p class="modal-text">Rewards in token <b id=modal_farm_abbr></b></p>
<!--                          <input type="text" placeholder="Add Address" class="form-control" id="input-add">-->
<?php


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


print "
                  </div>
                </div>
          </section>
        <!-- modal end-->
";