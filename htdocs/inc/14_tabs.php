<?php


print "
		 <div class=\"container\">
			 <div class=\"row2 d-flex justify-content-center\">
					<div class=\"top-tabs\">
";
$tab = 0;
print "<a href=\"#/claim\" class=\"top-tabs__tab tab-".(++$tab)." active \">Claim</a>";
print "<a href=\"#/pool\" class=\"top-tabs__tab tab-".(++$tab)."\">Pool</a>";
//print "<a href=\"#/stake\" class=\"top-tabs__tab tab-3 \">Stake</a>";
print "<a href=\"#/stake\" class=\"top-tabs__tab tab-".(++$tab)." \">Stake</a>";
//<!--						<a href=\"#/stake\" class=\"top-tabs__tab tab-3 \" onclick=\"return false;\">Staking</a>-->
//<!--						<a href=\"#/stepn\" class=\"top-tabs__tab tab-3 \">Stepn</a>-->
//<!--						<a href=\"#/pitch\" class=\"top-tabs__tab tab-4\">Pitch Days</a>-->
print "<a href=\"#/info\" class=\"top-tabs__tab tab-".(++$tab)."\">Info</a>";
print "
					</div>
			 </div>
		 </div>
		 
		 
	</header>

";
?>