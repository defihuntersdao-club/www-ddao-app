<?php
print "<div class=\"col-12 col-md-12 col-lg-6\">";
print "<div class=\"grid-item\">";
//print "asdf";
//print "<div class=h>DDAO</div>";
print "<div class=title>";
print "<table class=\"w-100\">";
print "<tr><td rowspan=2 class=l>";
$f = $www_dir."/images/ddao2_logo_v05.svg";
$a = file_get_contents($f);
print $a;
//print "LOGO";
print "</td><td class=n>";
print "DDAO stake";
print "</td></tr><td class=comments>";
print "Quick DDAO staking (no rewarding / allocationg only)";
print "</td></tr>";
print "</tr>";
print "</table>";
print "</div>";

//print "<div class=my_addr>My address: <span class=\"wallet-id\">...</span></div>";
/*
print "<div class=\"row line\">";
print "<div class=\"col-4 r name\">My address:</div>";
print "<div class=\"col-7 r\"><span class=\"wallet-id\">...</span></div>";
print "</div>";
*/

print "<div class=\"row line\">";
print "<div class=\"col-4 r name\">My address:</div>";
print "<div class=\"col-8 c\"><span class=\"wallet-id-full\">...</span></div>";
print "</div>";

print "<div class=\"row line\">";
print "<div class=\"col-4 r name\">Contract:</div>";
print "<div class=\"col-8 c\">";
//print "<span class=\"stake_ddao_lock_contract tooltip-test\" title=\"Click this for add token to Metamask\" data-toggle=\"tooltip\" data-placement=\"bottom\" onclick=\"metamask_add_token(this.innerHTML,'stDDAO',18,'https://raw.githubusercontent.com/defihuntersdao-club/www-ddao-app/main/htdocs/images/stddao4.svg');\">...</span>";
print "<span class=\"tooltip-test\" title=\"Click this for add token to Metamask\" data-toggle=\"tooltip\" data-placement=\"bottom\" onclick=\"metamask_add_token(glob['api_wallet_info']['stake_ddao_lock_contract'],'stDDAO',18,'https://raw.githubusercontent.com/defihuntersdao-club/www-ddao-app/main/htdocs/images/stddao4.svg');\"><img src=\"/images/ico/metamask.svg\" style=\"width:28px;\"></span>";

$t = "<svg width=\"21\" height=\"21\" viewBox=\"0 0 21 21\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M15.9082 16.1759H5.9082C5.44987 16.1759 5.07487 15.8009 5.07487 15.3425V5.34253C5.07487 4.8842 5.44987 4.5092 5.9082 4.5092H10.0749C10.5332 4.5092 10.9082 4.1342 10.9082 3.67586C10.9082 3.21753 10.53322.84253 10.0749 2.84253H5.07487C4.14987 2.84253 3.4082 3.59253 3.4082 4.5092V16.1759C3.4082 17.0925 4.1582 17.8425 5.07487 17.8425H16.7415C17.6582 17.8425 18.4082 17.0925 18.4082 16.1759V11.1759C18.4082 10.7175 18.0332 10.3425 17.5749 10.3425C17.1165 10.3425 16.7415 10.7175 16.741511.1759V15.3425C16.7415 15.8009 16.3665 16.1759 15.9082 16.1759ZM12.5749 3.67586C12.5749 4.1342 12.9499 4.5092 13.4082 4.5092H15.5665L7.9582 12.1175C7.6332 12.4425 7.6332 12.9675 7.9582 13.2925C8.2832 13.6175 8.8082 13.6175 9.1332 13.2925L16.7415 5.6842V7.84253C16.7415 8.30086 17.1165 8.67586 17.5749 8.67586C18.0332 8.67586 18.4082 8.30086 18.4082 7.84253V3.67586C18.4082 3.21753 18.0332 2.84253 17.5749 2.84253H13.4082C12.9499 2.84253 12.5749 3.21753 12.5749 3.67586Z\" fill=\"#636775\"/></svg>";
print "<a href=# onclick=\"return go_to_explorer_on_stake_contract();\">";
print $t;
print "</a>";
print "</div>";
print "</div>";


print "<div class=\"row line\">";
print "<div class=\"col-4 r name\">Stake time:</div>";
print "<div class=\"col-4 r val\">5 days</div>";
print "</div>";

print "<div class=\"row line\">";
print "<div class=\"col-4 r name\">Full unlock:</div>";
print "<div class=\"col-4 r val stake_ddao_lock_wait\">-</div>";
print "</div>";

print "<div class=\"row line\">";
print "<div class=\"col-4 r name\">Unlocked:</div>";
print "<div class=\"col-4 r val stake_ddao_lock_unlock\">-</div>";
print "</div>";

print "<div class=\"row line\">";
print "<div class=\"col-4 r name\">Staked:</div>";
print "<div class=\"col-4 r val stake_ddao_lock_amount\">-</div>";
print "<div class=\"col-4 c act\">";
//    print "<button class=\"btn btn-primary\" data-fancybox data-bs-toggle=\"modal\" data-bs-target=\"#stake_v01\">Stake</button>";
print "</div>";
print "</div>";



print "<div class=\"row line\">";
print "<div class=\"col-4 r name\">Allowance:</div>";
print "<div class=\"col-4 r val stake_ddao_lock_allowance\">-</div>";
print "<div class=\"col-4 c act\">";
//    print "<button class=\"btn btn-primary\">Modify</button>";
    print "<button class=\"btn btn-primary\" data-fancybox data-bs-toggle=\"modal\" data-bs-target=\"#stake_v01_allowance\">Modify</button>";
//    print "<button class=\"btn btn-primary\">Dissaprove</button>";
print "</div>";
print "</div>";

print "<div class=\"row line\">";
print "<div class=\"col-4 r name\">Balance:</div>";
print "<div class=\"col-4 r val stake_ddao_lock_balance\">-</div>";
print "<div class=\"col-4 c act\">";
    print "<button class=\"btn btn-primary\" data-fancybox data-bs-toggle=\"modal\" data-bs-target=\"#stake_v01\">Stake</button>";
print "</div>";
print "</div>";


print "<div class=\"row line\">";
print "<div class=\"col-4 r name\">My groups:</div>";
print "<div class=\"col-4 r val stake_ddao_lock_levels\"></div>";
print "</div>";

print "<div class=\"row line\">";
print "<div class=\"col-12 c\">";
//print "<b data-bs-toggle=\"modal\" data-bs-target=\"#modal_buy_ddao\">";
print "<a href=# class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_buy_ddao\">";
print "Buy more DDAO";
print "</a>";

if(0)
print "
<button type=\"button\" class=\"btn btn-secondary\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Tooltip on bottom\">
  Tooltip on bottom
</button>
";



print "</div>";
print "</div>";


print "</div>";
print "</div>";


?>