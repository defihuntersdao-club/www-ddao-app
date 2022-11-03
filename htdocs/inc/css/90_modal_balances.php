#accountModal .address-balances
{
    margin:10px 0 0 0;
//    border:solid 1px;
    border-radius: 5px;
    background:#eaeef5;

}
body.dark-theme #accountModal .address-balances
{
    background:#32363d;
}
#accountModal .address-balances .grps
{
    text-align:right;
//    border:solid 1px;
}
#accountModal .address-balances .grp
{
    text-align:center;
    user-select: none;
    margin:5px;
    padding:5px 5px;
    display:inline-block;
    border:0;
//    border:solid 1px;
//    border-radius:5px;
//    border:solid 1px #616573;
//    border:solid 1px #4558BE;
    white-space: nowrap;
    font-size:9px;
    width:56px;
    height:56px;
    color:#4558BE;
    transition:0.4s;
}
#accountModal .address-balances .grp:hover
{
    scale:3;
    border:solid 1px #4558BE;
    border-radius:5px;
    background:#ffffff;
    box-shadow: 3px 3px 3px #4558BE;

}
body.dark-theme #accountModal .address-balances .grp:hover
{
    background:#262a32;
}

#accountModal img
{
    width:30px;
    height:30px;
}
body.dark-theme #accountModal img
{
//    border:solid 1px #616573;
//    width:40px;
}
#accountModal .address-balances p
{
    margin:2px 0 0 0 ;
//    border:solid 1px;
}
body.dark-theme #accountModal .address-balances p
{
    color:#616573;
    
}