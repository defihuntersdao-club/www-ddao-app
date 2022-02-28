<?php
$f = "script.js";
$t = $www_dir;
$t .= "js/";
$t .= $f;
$a = filemtime($t);
print "<script src=\"/js/script.js?$a\"></script>";
?>
        <script src="/js/bootstrap.bundle.min.js"></script>
        

</body>
</html>
