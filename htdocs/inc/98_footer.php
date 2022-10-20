

</div>
    <footer class="footer">


<div class=txt>
 &copy 2022 - 
www.defihuntersdao.club
</div>
<div class=links>
<!--<a href=# class="l" target=_blank> <i class="fab fa-facebook facebook"></i></a>-->
<a href=https://discord.com/invite/defihuntersdao class="l discord" target=_blank>	<span class=l2><i class="fab fa-discord"></span></i></a>
<a href=https://medium.com/@defihuntesdao class="l medium" target=_blank> 		<span class=l2><i class="fab fa-medium"></span></i></a>
<a href=https://t.me/Pro_Blockchain class="l telegram" target=_blank> 			<span class=l2><i class="fab fa-telegram"></span></i></a>
<a href=https://twitter.com/PRO_BLOCKCHAIN class="l twitter" target=_blank> 		<span class=l2><i class="fab fa-twitter"></span></i></a>
<a href=https://www.youtube.com/c/PROBLOCKCHAIN/videos class="l youtube" target=_blank> <span class=l2><i class="fab fa-youtube"></span></i></a>
<a href=https://github.com/defihuntersdao-club class="l github" target=_blank> 		<span class=l2><i class="fab fa-github"></span></i></a>
</div>

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
glob[\"title\"] = 'DEFI HANTERS DAO';
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
