    <footer class="footer">
 &copy 2022 
<a href=https://defihuntersdao.club/>www.defihuntersdao.club</a>
    </footer>

    <script type="text/javascript" src="/js-web3/web3.js"></script>
    <script type="text/javascript" src="/js-web3/web3modal.js"></script>
    <script type="text/javascript" src="/js-web3/evm-chains.js"></script>

    <script type="text/javascript" src="/js-web3/wallet-connect.js"></script>
    <script type="text/javascript" src="/js-web3/ethers-5.0.umd.min.js"></script>
    <script type="text/javascript" src="/js-web3/bignumber.min.js"></script>


<?php
print "<script>";
print "
var glob = new Array();
glob[\"api_url\"] = \"$api\";
glob[\"site_version\"] = '$site_version';
";
print "</script>";
$f = "script.js";
$t = $www_dir;
$t .= "js/";
$t .= $f;
$a = filemtime($t);
print "<script src=\"/js/script.js?$a\"></script>";
print "<script src=/js2/".($js_debug?"?".time():"")."></script>";

/*
$f = "z_wallet_connect.js";
$t = $www_dir;
$t .= "js-web3/";
$t .= $f;
$a = filemtime($t);

print "<script src=/js-web3/$f?$a></script>";
*/
?>
        <script src="/js/bootstrap.bundle.min.js"></script>
        

</body>
</html>
