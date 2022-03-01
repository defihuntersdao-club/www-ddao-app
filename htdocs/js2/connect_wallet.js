function connect_wallet_add_onclick()
{
    var x = '';
    var y = '';
    var l = 0;
    x = document.getElementsByClassName('wallet_connect');
    l = x.length;
    for(i = 0;i<l;i++)
    {
    y = x[i];
    y.addEventListener("click",connect_wal);
//    console.log("WALLET BUT: "+l);

    }
}
connect_wallet_add_onclick();
function connect_wal()
{
    console.log("connect_wal clicked");
    onConnect();
}