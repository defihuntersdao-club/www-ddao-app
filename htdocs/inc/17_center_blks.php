<?php
$f = __DIR__."/blk/blks.php";
include $f;
$f = __DIR__."/blk/alloc.php";
include $f;

$d = __DIR__."/blk2/";
//print $d;
unset($f_mas);
$h = opendir($d);
while($f = readdir($h))
{
    if($f == "." || $f == "..")continue;
//print $f."<br>";
    $tf = $d.$f;
    $t = pathinfo($tf);
    if($t[extension] != "php")continue;

//print $f."<br>";
    $f_mas[$f] = $tf;
//    include $tf;
}
ksort($f_mas);
//print "<pre>";
//print_r($f_mas);
//print "</pre>";
foreach($f_mas as $f=>$tf)
{
//    print $tf."<br>";
    include $tf;
}

?>

			<div class="language d-none">DDAO available in: <a href="#">France</a></div>
		</div>
	</section>
