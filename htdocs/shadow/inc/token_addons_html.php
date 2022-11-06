<?php

// https://app-test.defihuntersdao.club/shadow/?a=token_addons_html

$d = $www_dir;
$d = dirname($d);
$d .= "/bin/";
$f = $d."003_img_base64_blk.php.inc";
//print $f."\n";
$a = file_get_contents($f);

$o[result] = $a;

?>