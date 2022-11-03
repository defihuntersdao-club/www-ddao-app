<?php
$f = __DIR__."/blk/blks.php";
include $f;
$f = __DIR__."/blk/alloc.php";
include $f;

$d = __DIR__."/blk2/";
//print $d;
$h = opendir($d);
while($f = readdir($h))
{
    if($f == "." || $f == "..")continue;
//print $f;
    $tf = $d.$f;
    $t = pathinfo($tf);
    if($t[extension] != "php")continue;

    include $tf;
}

?>

			<div class="language d-none">DDAO available in: <a href="#">France</a></div>
		</div>
	</section>
