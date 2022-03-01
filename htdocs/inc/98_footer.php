    <script type="text/javascript" src="/js-web3/web3.js"></script>
    <script type="text/javascript" src="/js-web3/web3modal.js"></script>
    <script type="text/javascript" src="/js-web3/evm-chains.js"></script>

    <script type="text/javascript" src="/js-web3/wallet-connect.js"></script>
    <script type="text/javascript" src="/js-web3/ethers-5.0.umd.min.js"></script>
    <script type="text/javascript" src="/js-web3/bignumber.min.js"></script>


<?php
$f = "script.js";
$t = $www_dir;
$t .= "js/";
$t .= $f;
$a = filemtime($t);
print "<script src=\"/js/script.js?$a\"></script>";
print "<script src=/js2/></script>";

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
