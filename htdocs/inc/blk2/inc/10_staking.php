<?php
print "<div class=\"col-12 col-md-12 col-lg-6\">";
print "<div class=\"grid-item\">";
//print "asdf";
//print "<div class=h>DDAO</div>";
print "<div class=title>";
print "<table class=\"\">";
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
print "<div class=\"col-4 r name\">Stake time:</div>";
print "<div class=\"col-4 r val\">5 days</div>";
print "</div>";

print "<div class=\"row line\">";
print "<div class=\"col-4 r name\">Full unlock:</div>";
print "<div class=\"col-4 r val\">Already</div>";
print "</div>";

print "<div class=\"row line\">";
print "<div class=\"col-4 r name\">Unlocked:</div>";
print "<div class=\"col-4 r val\">10 000</div>";
print "</div>";

print "<div class=\"row line\">";
print "<div class=\"col-4 r name\">Staked:</div>";
print "<div class=\"col-4 r val\">50 000</div>";
print "<div class=\"col-4 c act\">";
    print "<button class=\"btn btn-primary\" data-fancybox data-bs-toggle=\"modal\" data-bs-target=\"#stake_v01\">Stake</button>";
print "</div>";
print "</div>";


print "<div class=\"row line\">";
print "<div class=\"col-4 r name\">Allowance:</div>";
print "<div class=\"col-4 r val\">0</div>";
print "<div class=\"col-4 c act\">";
    print "<button class=\"btn btn-primary\">Modify</button>";
//    print "<button class=\"btn btn-primary\">Dissaprove</button>";
print "</div>";
print "</div>";

print "<div class=\"row line\">";
print "<div class=\"col-4 r name\">My groups:</div>";
print "<div class=\"col-4 r val\"></div>";
print "</div>";


print "</div>";
print "</div>";


?>