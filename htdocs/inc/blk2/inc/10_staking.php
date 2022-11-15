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
print "<div class=\"col-8 c\"><span class=\"stake_ddao_lock_contract tooltip-test\" title=\"Click this for add token to Metamask\" data-toggle=\"tooltip\" data-placement=\"bottom\" onclick=\"metamask_add_token(this.innerHTML,'stDDAO',18,'https://raw.githubusercontent.com/defihuntersdao-club/www-ddao-app/main/htdocs/images/stddao4.svg');\">...</span></div>";
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