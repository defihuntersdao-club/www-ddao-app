<?php
$t = pathinfo(__FILE__);
$t = explode("_",$t[filename],2);
$type = $t[1];
$t = explode("_",$type);
$type_item = $t[0];
//$type = "alloc";
print "<div class=item_type2>";
print "<div id=item_type_$type class=\"item_type $type d-none\">";
print "<div class=\"wrapper\">
        <div class=\"row grid-wrap justify-content-center\">
";
//print "AAAAAAAAAAAAAAAAAAAAAA";
//include "alloc2.php";
include __DIR__."/inc/back.php";

print "</div>";
print "</div>";
print "</div>";
print "</div>";

?>