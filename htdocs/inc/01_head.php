<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<title>DEFI HANTERS DAO</title>
	<meta name="description" content="DEFI HANTERS DAO">
	<meta name="viewport" content="width=device-width">

<!--	<link rel="icon" href="/favicon/favicon.ico">-->
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/favicon2-100x100.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon2-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon2-16x16.png">
<!--	<link rel="manifest" href="/favicon/site.webmanifest">-->
	
    <link rel="stylesheet" href="/css/fonts.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/font-awesome/5.15.4/css/all.min.css">

<?php
$f = __DIR__;
$f = dirname($f);
$f .= "/css/style.css";
$t = filemtime($f);

print "	<link rel=\"stylesheet\" href=\"/css/style.css?$t\">\n";

?>

    <link rel="preload" href="/fonts/Inter-Regular.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/fonts/Inter-SemiBold.woff2" as="font" type="font/woff2" crossorigin>

</head>

