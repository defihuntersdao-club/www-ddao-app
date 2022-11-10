function stake_allowance(v)
{
//    alert(v);
    var x;
    var b = glob["api_wallet_info"]["ddao_balance"];
    var r = 0;

    r = b*v/100;

    x = document.getElementById('modal_stake_v01_allowance_amount');
    x.value = r;

//    console.log(v);
//    console.log(b);
    
}