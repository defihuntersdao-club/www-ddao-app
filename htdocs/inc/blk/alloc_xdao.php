			<div class="row tokens-tf" id=sale_xdao>

				<div class="col-12 col-sm-12 col-lg-6 tokens-tf__item allocate">
					<div class="bg-wrap">
						<div class="row tokens-tf__margin-1">
							<div class="col-2 p-0">
								<img src="/images/alloc.png"/>
							</div>
							<div class="col-10">
								<div class="tokens-tf__name">Participation</div>
								<div class="tokens-tf__description">
<!--									SEED will be held in 4 stages.<br>Conditions: <li><b>A</b>(min.amount: 4000$)<li><b>B</b>(m.a: 2000$)<li> <b>C</b>(m.a: 1000$)<li><b>D</b>(m.a: 400$).-->
								</div>
							</div>
						</div>
						<div class=sale1_comments>

<table class=table>
<tr>
<th>&nbsp;</th>
<th class=c>Polygon</th>
<th class=c>BSC</th>
</tr>


<tr>
<th>USDT</th>
<th class=c><a href="https://legacy.quickswap.exchange/#/swap?outputCurrency=0xc2132D05D31c914a87C6611C10748AEb04B58e8F&inputCurrency=ETH" target=_blank>Buy more</a></th>
<th class=c><a href="https://pancakeswap.finance/swap?inputCurrency=ETH&outputCurrency=0x55d398326f99059fF775485246999027B3197955&exactAmount=1&exactField=input" target=_blank>Buy more</a></th>
</tr>


<tr>
<td>Balance</td>
<td class="c xdao_matic_balance"></td>
<td class="c xdao_bsc_balance"><td>
</tr>

<tr>
<td>Allowance</td>
<td class="c xdao_matic_allowance"></td>
<td class="c xdao_bsc_allowance"><td>
</tr>

<tr>
<td>Allocation</td>
<td class="c xdao_matic_alloc"></td>
<td class="c xdao_bsc_alloc"><td>
</tr>

<!--
<tr>
<td>Action</td>
<td class="c xdao_matic_act"></td>
<td class="c xdao_bsc_act"><td>
</tr>
-->

<tr>
<td>&nbsp;</td>
<td class="c" id="xdao_matic_btn">
</td>
<td class="c" id="xdao_bsc_btn">
<td>
</tr>

</table>

						</div>

						<div class="tokens-tf__text"><centeR>Now minimal amount: <span id=xdao_minimal>-</span></center>
						<div class="tokens-min-info">The participation button will appear only if the balance is not less than the minimum amount</div>
						</div>

<!--
						<div class="number">
							<div class="number__wrap row justify-content-between align-items-center">
								<div class="col-4 d-flex justify-content-between">
									<div class="number__label col-6">min</div>
									<span class="number__minus col-6">-</span>
								</div>
								<div class="col-4">
									<input type="number" value="300" step="1" min="300" />
								</div>
								<div class="col-4 d-flex justify-content-between">
									<span class="number__plus col-6">+</span>
									<div class="number__label col-6">max</div>
								</div>
							</div>
						</div>
-->
<?php
if($conf_menu[pool][xdao][ended])
{
print "<button  class=\"art-button-2 btn btn-primary wallet_connect2 w-100\">";
print "Sale ended";
print "</button>";
}
else
{
//print "$type $k2 $item $k $v2<br>\n";
?>
						<div id=xdao_wal_connect>
						<button  class="art-button-2 btn btn-primary wallet_connect2 w-100" onclick="onConnect();">                                                                      
                                                          Connect wallet                                                                                                                  
                                                </button>
						</div>

						<div class="d-none" id=xdao_btn_amount>
						<a href="#" class="art-button btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#xdao_modal">Enter Amount</a>
						</div>
<?php
}
?>
					</div>	
				</div>
			</div>

