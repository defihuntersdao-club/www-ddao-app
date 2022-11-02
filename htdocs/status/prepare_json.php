#!/usr/bin/php
<?php

unset($v);
$v[jsonrpc] = "2.0";
$v[method] = "eth_blockNumber";
//$v[params][0] = $row[wal];
$v[params] = array();
//$v[params][1] = "latest";
//$v[id] = $row[id];
$v[id] = "last";
//$v[id] = "balance_".$name;
$jss[] = $v;


unset($v);
$v[jsonrpc] = "2.0";
$v[method] = "eth_blockNumber";
//$v[params][0] = $row[wal];
$v[params][] = "latest";
$v[params][] = 0;
//$v[params][1] = "latest";
//$v[id] = $row[id];
$v[id] = "blk";
//$v[id] = "balance_".$name;
$jss[] = $v;

unset($v);
$v[jsonrpc] = "2.0";
$v[method] = "eth_gasPrice";
//$v[params][0] = $row[wal];
$v[params] = array();
//$v[params][1] = "latest";
//$v[id] = $row[id];
$v[id] = "gas";
//$v[id] = "balance_".$name;
$jss[] = $v;




print_r($jss);
$txt = json_encode($jss);
print $txt."\n";
$f = "json.txt";
file_put_contents($f,$txt);


print "curl -s -H 'Content-Type: application/json' -X POST --data '$txt' https://rpc.infocoin.pro/\n";

//$a = '{"jsonrpc":"2.0","method":"eth_getBlockByNumber","params":["0x1b4", true],"id":1}';
//$a = json_decode($a,1);
//print_r($a);
