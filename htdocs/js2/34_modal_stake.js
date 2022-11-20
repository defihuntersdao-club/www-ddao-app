function stake_amount(v)
{
//    alert(v);
    var approve = glob["api_wallet_info"]["stake_ddao_lock_allowance"];;
    var x;
    var b = glob["api_wallet_info"]["ddao_balance"];
    var r = 0;

//console.log('stake_amount: approve - \"'+approve+'\"');
//console.log('stake_amount: b - '+b);
    if(approve != '&#8734;')
    {
//    console.log('----------------------');
	if(b > approve)b = approve;
    }
    r = b*v/100;

//console.log('stake_amount: b - '+b);
//console.log('stake_amount: r - '+r);
    x = document.getElementById('modal_stake_v01_amount');
    x.value = r;

//    console.log(v);
//    console.log(b);
    
}