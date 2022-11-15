function stake_amount(v)
{
//    alert(v);
    var approve = glob["api_wallet_info"]["stake_ddao_lock_allowance"];;
    var x;
    var b = glob["api_wallet_info"]["ddao_balance"];
    var r = 0;

    if(b > approve)b = approve;
    r = b*v/100;

    x = document.getElementById('modal_stake_v01_amount');
    x.value = r;

//    console.log(v);
//    console.log(b);
    
}