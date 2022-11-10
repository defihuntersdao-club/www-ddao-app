function modal_action_on_open_state()
{
    var ev = "";
    switch(glob["modal_last"])
    {
	case "stake_v01_allowance":
	    ev = "func_"+glob["modal_last"]+"();";
	    eval(ev);
	break;
	case "stake_v01":
	    ev = "func_"+glob["modal_last"]+"_stake"+"();";
	    eval(ev);

	break;
    }
//    if()
}
setInterval(modal_action_on_open_state,300);



//----------------------------------------------------------------------------
glob["stake_v01_staking_func"] = '';
function func_stake_v01_stake()
{
    var err = 0;
    var v = document.getElementById('modal_stake_v01_amount');
    var v2 = v.value*1;
    var x = document.getElementById('stake_v01_stake_btn');
//    console.log("exec func: func_stake_v01_allowance");
    var txt = "Staking disabled";
    var need_disable = 0;

    if(glob["api_wallet_info"]["ddao_balance"] > 0 && glob["api_wallet_info"]["ddao_balance"] && v2 > glob["api_wallet_info"]["ddao_balance"])
    {
	v.value = glob["api_wallet_info"]["ddao_balance"];
    }

    if(v2==0 && !v2)
    {
	txt = 'Change AMOUNT';
	err = 1;
//	need_disable = 1;
//	a = '';
	a = 'modal_stake_v01_staking_amount_focus();';
    }
    
//    else
//	need_disable = 0;
    if(!err)
    {
	if(!selectedAccount)
	{
	a = "onConnect();";
	txt = "Connect Wallet";
	err = 1;
	}
    }
    if(!err)
    {
        if(chainId != 137)
        {
        txt = "Switch to POLYGON";
        //a = "network_switch_polygon();";
        a = "change_chain('matic');";
        err = 1;
        }
    }
    if(!err)
    {
	txt = 'Approve';
	v2 = v.value;
	v2 = v2*1000;
	v2 = Math.round(v2,2);
	v2 /= 1000;
	txt = "Stake ["+v2+"] DDAO";
	a = 'stake_v01_staking_value('+v2+');';
    }

    if(x.innerHTML != txt )
    x.innerHTML  = txt;

    glob["stake_v01_staking_func"] = a;

    if(need_disable)
    x.disabled = true;

}
//function func_stake_v01_allowance()
function stake_v01_staking()
{
    var e = glob["stake_v01_staking_func"];
    console.log('Click: '+e);
    if(e)
    {
	eval(e);
    }
}
function modal_stake_v01_staking_amount_focus()
{
    var x = document.getElementById('modal_stake_v01_amount');
    x.focus();
}


//----------------------------------------------------------------------------
glob["stake_v01_allowance_func"] = '';
function func_stake_v01_allowance()
{
    var err = 0;
    var v = document.getElementById('modal_stake_v01_allowance_amount');
    var v2 = v.value*1;
    var x = document.getElementById('stake_v01_allowance_btn');
//    console.log("exec func: func_stake_v01_allowance");
    var txt = "Approve disabled";
    var need_disable = 0;

    if(glob["api_wallet_info"]["ddao_balance"] > 0 && glob["api_wallet_info"]["ddao_balance"] && v2 > glob["api_wallet_info"]["ddao_balance"])
    {
	v.value = glob["api_wallet_info"]["ddao_balance"];
    }

    if(v2==0 && !v2)
    {
	txt = 'Change AMOUNT';
	err = 1;
//	need_disable = 1;
//	a = '';
	a = 'modal_stake_v01_allowance_amount_focus();';
    }
    
//    else
//	need_disable = 0;
    if(!err)
    {
	if(!selectedAccount)
	{
	a = "onConnect();";
	txt = "Connect Wallet";
	err = 1;
	}
    }
    if(!err)
    {
        if(chainId != 137)
        {
        txt = "Switch to POLYGON";
        //a = "network_switch_polygon();";
        a = "change_chain('matic');";
        err = 1;
        }
    }
    if(!err)
    {
	txt = 'Approve';
	v2 = v.value;
	v2 = v2*1000;
	v2 = Math.round(v2,2);
	v2 /= 1000;
	txt = "Approve ["+v2+"] DDAO";
	a = 'stake_v01_allowance_value('+v2+');';
    }

    if(x.innerHTML != txt )
    x.innerHTML  = txt;

    glob["stake_v01_allowance_func"] = a;

    if(need_disable)
    x.disabled = true;

}
//function func_stake_v01_allowance()
function stake_v01_allowance()
{
    var e = glob["stake_v01_allowance_func"];
    console.log('Click: '+e);
    if(e)
    {
	eval(e);
    }
}
function modal_stake_v01_allowance_amount_focus()
{
    var x = document.getElementById('modal_stake_v01_allowance_amount');
    x.focus();
}

// ---------------------- web3 ----------------------
function stake_v01_allowance_all()
{
    console.log("click stake_v01_allowance_all");
}
function stake_v01_disallow()
{
    console.log("click stake_v01_disallow");
}
function stake_v01_allowance_value(v)
{
    console.log("click stake_v01_allowance_value:" + v);
}
function stake_v01_staking_value(v)
{
    console.log("click stake_v01_staking_value:" + v);
}
