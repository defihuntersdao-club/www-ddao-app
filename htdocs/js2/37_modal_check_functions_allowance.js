function modal_action_on_open_state()
{
//    console.log('modal_action_on_open_state'+' '+glob["modal_last"]);
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
	case "modal_buy_ddao":
	    ev = "func_"+glob["modal_last"]+"_on_open"+"();";
	    eval(ev);
	break;
	case "modal_buy_hamster":
	    ev = "func_"+glob["modal_last"]+"_on_open"+"();";
	    eval(ev);
	break;
	case "stake_v02":
	    ev = "func_"+glob["modal_last"]+"_stake"+"();";
	    eval(ev);

	break;

    }
//if(ev)console.log("EV: "+ev);
//    if()
}
setInterval(modal_action_on_open_state,300);

//----------------------------------------------------------------------------
glob["stake_v02_staking_func"] = '';
function func_stake_v02_stake()
{
    var err = 0;
    var v = document.getElementById('modal_stake_v02_amount');
    var v2 = v.value;
    var x = document.getElementById('stake_v02_stake_btn');
    var x2;
//    console.log("exec func: func_stake_v01_allowance");
    var txt = "Staking disabled";
//    var need_disable = 0;
//    var down_btn_disable = 0;

    if(!selectedAccount)
    {
    a = "onConnect();";
    txt = "Connect Wallet";
    err = 1;
    }

    if(!err)
    {
	x2 = document.getElementById("modal_stake_v02_allowance");
	if(x2.innerHTML == "0")
	{
	    err = 1;
	    txt = 'Approve';
	    //a = 'modal_allowance_open();';
	    a = 'web3_stake_v02_allowance();';
	}
    }
    if(!err)
    {
    if(v2==0 && !v2)
    {
	txt = 'Change AMOUNT';
	err = 1;
//	need_disable = 1;
//	a = '';
	a = 'modal_stake_v02_staking_amount_focus();';
	
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
	txt = "Stake";
	//a = 'stake_v02_staking_value('+v2+');';
	a = 'web3_stake_v02();';
    }


    if(x.innerHTML != txt )
    x.innerHTML  = txt;

    glob["stake_v02_staking_func"] = a;

//    if(need_disable)
//    x.disabled = true;

}
//----------------------------------------------------------------------------
glob["stake_v01_staking_func"] = '';
function func_stake_v01_stake()
{
    var err = 0;
    var v = document.getElementById('modal_stake_v01_amount');
    var v2 = v.value*1;
    var x = document.getElementById('stake_v01_stake_btn');
    var x2;
//    console.log("exec func: func_stake_v01_allowance");
    var txt = "Staking disabled";
    var need_disable = 0;
    var down_btn_disable = 0;

    if(glob["api_wallet_info"]["ddao_balance"] > 0 && glob["api_wallet_info"]["ddao_balance"] && v2 > glob["api_wallet_info"]["ddao_balance"])
    {
	v.value = glob["api_wallet_info"]["ddao_balance"];
    }
    if(glob["api_wallet_info"]["ddao_balance"] > 0 && glob["api_wallet_info"]["ddao_balance"] && v2 < 0)

console.log("selectedAccount: "+selectedAccount);
//    if(!err)
    {
	if(!selectedAccount)
	{
	a = "onConnect();";
	txt = "Connect Wallet";
	err = 1;
	x2 = document.getElementById('stake_v01_stake_btn2');
	x2.disabled = true;
	x2 = document.getElementById('stake_v01_stake_btn3');
	x2.disabled = true;
	down_btn_disable = 1;
	}
	else
	{
	x2 = document.getElementById('stake_v01_stake_btn2');
	x2.disabled = false;
	x2 = document.getElementById('stake_v01_stake_btn3');
	x2.disabled = false;
	down_btn_disable = 0;
	}

    }

    if(!err)
    {
	if(glob["api_wallet_info"]["stake_ddao_lock_allowance"]==0)
	{
	    err = 1;
	    txt = 'Modify Allowance';
	    a = 'modal_allowance_open();';
	}
    }

    if(!err)
    {
    if(v2==0 && !v2)
    {
	txt = 'Change AMOUNT';
	err = 1;
//	need_disable = 1;
//	a = '';
	a = 'modal_stake_v01_staking_amount_focus();';
    }
    }
    
//    else
//	need_disable = 0;
//console.log("chainId: "+chainId);
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
//	txt = 'Approve';
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

    

    if(down_btn_disable==0)
    {
    x2 = document.getElementById('stake_v01_stake_btn2');
//    console.log(glob["api_wallet_info"]["stake_ddao_lock_amount"]);
    if(glob["api_wallet_info"]["stake_ddao_lock_frozen"] == "-" || glob["api_wallet_info"]["stake_ddao_lock_frozen"] == "0")
    x2.disabled = true;
    else
    x2.disabled = false;


    x2 = document.getElementById('stake_v01_stake_btn2');
//    console.log(glob["api_wallet_info"]["stake_ddao_lock_amount"]);
    if(glob["api_wallet_info"]["stake_ddao_lock_amount"] == "-" || glob["api_wallet_info"]["stake_ddao_lock_amount"] == "0")
    x2.disabled = true;
    else
    x2.disabled = false;



    }


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

function stake_v02_staking()
{
    var e = glob["stake_v02_staking_func"];
    console.log('Click: '+e);
    if(e)
    {
	eval(e);
    }
}

function modal_stake_v02_staking_amount_focus()
{
    var x = document.getElementById('modal_stake_v02_amount');
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
    var x2;
//    console.log("exec func: func_stake_v01_allowance");
    var txt = "Approve disabled";
    var need_disable = 0;

    if(0)
    if(glob["api_wallet_info"]["ddao_balance"] > 0 && glob["api_wallet_info"]["ddao_balance"] && v2 > glob["api_wallet_info"]["ddao_balance"])
    {
	v.value = glob["api_wallet_info"]["ddao_balance"];
    }
    if(glob["api_wallet_info"]["ddao_balance"] > 0 && glob["api_wallet_info"]["ddao_balance"] && v2 < 0)

//    if(!err)
console.log(selectedAccount);
    {
	if(!selectedAccount)
	{
	a = "onConnect();";
	txt = "Connect Wallet";
	err = 1;

	x2 = document.getElementById('stake_v01_allowance_btn2');
	x2.disabled = true;
	x2 = document.getElementById('stake_v01_allowance_btn3');
	x2.disabled = true;
	}
	else
	{
	x2 = document.getElementById('stake_v01_allowance_btn2');
	x2.disabled = false;
	x2 = document.getElementById('stake_v01_allowance_btn3');
	x2.disabled = false;

	}
    }

    if(!err)
    {
    if(v2==0 && !v2)
    {
	txt = 'Change AMOUNT';
	err = 1;
//	need_disable = 1;
//	a = '';
	a = 'modal_stake_v01_allowance_amount_focus();';
    }
    }
    
//    else
//	need_disable = 0;

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
    web3_stake_v01_allowance(-1);
}
async function web3_stake_v01_allowance(amount)
{
//console.log(glob["api_wallet_info"]);
//console.log(glob["api_wallet_info"]["stake_ddao_lock_contract"]);

   var contractAddr = glob["api_wallet_info"]["stake_ddao_lock_contract"];
   var tkn = glob["api_wallet_info"]["addr_ddao"];
    var name = '';

    const provider2         = new ethers.providers.Web3Provider(provider);
    const signer2 = provider2.getSigner()
    console.log("Contract: "+tkn);

    var wal = selectedAccount;
    if(!wal) return false;

    const cApprove = new ethers.Contract(tkn, glob["abi"], signer2);

console.log("!!!!!!!!!AMount in: '"+amount+"'");
    switch(amount+"")
    {
	case "-1":
	amount = "10000000000000000000000000000000000000000000000000";
	name = 'Approve ALL tokens';
	break;
	case "0":
	amount = 0;
	name = 'Dissapprove ALL';
	break;
	default:
	name = 'Approve '+amount+' tokens';
	amount *= 10**18;
	amount = amount.toString(16);
	amount = "0x"+amount;

    }
//console.log("AMount out: "+amount);
//    r = await cApprove.approve(contractAddr,"10000000000000000000000000000000000000000000000000");
//    txt = 'Swap to BUY '+glob["api_wallet_info"]["buy_swap"]+' DDAO';
    modal_tx_info_open(name);
    try
    {
	r = await cApprove.approve(contractAddr,amount);
	if(r)
	{
	    x = document.getElementById('modal_txs_info_id');
	    x.innerHTML = r.hash;
	    console.log(r);
	    x = document.getElementById('modal_txs_info_btn');
	    x.innerHTML = 'View in Explorer';
	    x.disabled = 0;
	}
    }
    catch(e)
        {
//            t = e.data.message;
            t = e;
	    x = document.getElementById('modal_txs_info_err');
	    x.innerHTML = t.message;

	    x = document.getElementById('modal_txs_info_btn');
	    x.innerHTML = 'Transaction error';
//            if(t.substring(0,19)=="execution reverted:")
//            t = t.substring(20);
//            console.log("Metamask Error: "+t+"");
	    console.log(t);
        }


}
function stake_v01_disallow()
{
    console.log("click stake_v01_disallow");
    web3_stake_v01_allowance(0);
}
function stake_v01_allowance_value(v)
{
    console.log("click stake_v01_allowance_value:" + v);
    web3_stake_v01_allowance(v);
}
function stake_v01_staking_value(v)
{
    console.log("click stake_v01_staking_value:" + v);
    web3_stake_v01(v);
}
async function web3_stake_v01(amount)
{
    var name = ''
   var contractAddr = glob["api_wallet_info"]["stake_ddao_lock_contract"];
   var tkn = glob["api_wallet_info"]["addr_ddao"];

    const provider2         = new ethers.providers.Web3Provider(provider);
    const signer2 = provider2.getSigner()
    console.log("Contract: "+tkn);

    var wal = selectedAccount;
    if(!wal) return false;

    const cStake = new ethers.Contract(contractAddr, glob["abi_stake_v01"], signer2);

    name = 'Staking '+amount+' DDAO';
	
	amount *= 10**18;
	amount = amount.toString(16);
	amount = "0x"+amount;

//    r = await cStake.Stake(wal,amount);
    modal_tx_info_open(name);
    try
    {
	r = await cStake.Stake(wal,amount);
        if(r)
        {
            x = document.getElementById('modal_txs_info_id');
            x.innerHTML = r.hash;
            console.log(r);
            x = document.getElementById('modal_txs_info_btn');
            x.innerHTML = 'View in Explorer';
            x.disabled = 0;
        }
    }
    catch(e)
        {
            t = e;
            x = document.getElementById('modal_txs_info_err');
            x.innerHTML = t.message;

            x = document.getElementById('modal_txs_info_btn');
            x.innerHTML = 'Transaction error';
            console.log(t);
        }


}
async function web3_stake_v01_unstake_all()
{
    var name = 'Unstake ALL DDAO';
   var contractAddr = glob["api_wallet_info"]["stake_ddao_lock_contract"];
   var tkn = glob["api_wallet_info"]["addr_ddao"];

    const provider2         = new ethers.providers.Web3Provider(provider);
    const signer2 = provider2.getSigner()
    console.log("Contract: "+tkn);

    var wal = selectedAccount;
    if(!wal) return false;

    const cStake = new ethers.Contract(contractAddr, glob["abi_stake_v01"], signer2);

//    r = await cStake.UnstakeAll();
    name = 'Unstake All DDAO ['+(glob["api_wallet_info"]["stake_ddao_lock_amount"])+']';
    modal_tx_info_open(name);
    try
    {
        r = await cStake.UnstakeAll();
        if(r)
        {
            x = document.getElementById('modal_txs_info_id');
            x.innerHTML = r.hash;
            console.log(r);
            x = document.getElementById('modal_txs_info_btn');
            x.innerHTML = 'View in Explorer';
            x.disabled = 0;
        }
    }
    catch(e)
        {
            t = e;
            x = document.getElementById('modal_txs_info_err');
            x.innerHTML = t.message;

            x = document.getElementById('modal_txs_info_btn');
            x.innerHTML = 'Transaction error';
            console.log(t);
        }


}
async function web3_stake_v01_unstake_locked()
{

   var contractAddr = glob["api_wallet_info"]["stake_ddao_lock_contract"];
   var tkn = glob["api_wallet_info"]["addr_ddao"];

    const provider2         = new ethers.providers.Web3Provider(provider);
    const signer2 = provider2.getSigner()
//    console.log("Contract: "+tkn);

    var wal = selectedAccount;
    if(!wal) return false;

    const cStake = new ethers.Contract(contractAddr, glob["abi_stake_v01"], signer2);

//    r = await cStake.UnstakeLocked();
    name = 'Unstake non Unlocked DDAO';
    modal_tx_info_open(name);
    try
    {
        r = await cStake.UnstakeLocked();
        if(r)
        {
            x = document.getElementById('modal_txs_info_id');
            x.innerHTML = r.hash;
            console.log(r);
            x = document.getElementById('modal_txs_info_btn');
            x.innerHTML = 'View in Explorer';
            x.disabled = 0;
        }
    }
    catch(e)
        {
            t = e;
            x = document.getElementById('modal_txs_info_err');
            x.innerHTML = t.message;

            x = document.getElementById('modal_txs_info_btn');
            x.innerHTML = 'Transaction error';
            console.log(t);
        }


}

function stake_v01_unstake_all()
{
    web3_stake_v01_unstake_all();
}
function stake_v01_unstake_locked()
{
    web3_stake_v01_unstake_locked();    
}
function modal_allowance_open()
{
    $('#stake_v01_allowance').modal('show');
//    $('#modal_tx_info').modal('show');
}


async function web3_stake_v02_allowance()
{
    amount = -1;
   var contractAddr = glob["api_wallet_info"]["stake2_contract"];
   var tkn = glob["stake2_tkn"];
    var name = '';

    const provider2         = new ethers.providers.Web3Provider(provider);
    const signer2 = provider2.getSigner()
    console.log("Contract: "+tkn);

    var wal = selectedAccount;
    if(!wal) return false;

    const cApprove = new ethers.Contract(tkn, glob["abi"], signer2);

console.log("!!!!!!!!!AMount in: '"+amount+"'");
    switch(amount+"")
    {
	case "-1":
	amount = "10000000000000000000000000000000000000000000000000";
	name = 'Approve ALL LP tokens ['+glob["stake2_pair"]+']';
	break;
	case "0":
	amount = 0;
	name = 'Dissapprove ALL';
	break;
	default:
	name = 'Approve '+amount+' tokens';
	amount *= 10**18;
	amount = amount.toString(16);
	amount = "0x"+amount;

    }
//console.log("AMount out: "+amount);
//    r = await cApprove.approve(contractAddr,"10000000000000000000000000000000000000000000000000");
//    txt = 'Swap to BUY '+glob["api_wallet_info"]["buy_swap"]+' DDAO';
    modal_tx_info_open(name);
    try
    {
	r = await cApprove.approve(contractAddr,amount);
	if(r)
	{
	    x = document.getElementById('modal_txs_info_id');
	    x.innerHTML = r.hash;
	    console.log(r);
	    x = document.getElementById('modal_txs_info_btn');
	    x.innerHTML = 'View in Explorer';
	    x.disabled = 0;
	}
    }
    catch(e)
        {
//            t = e.data.message;
            t = e;
	    x = document.getElementById('modal_txs_info_err');
	    x.innerHTML = t.message;

	    x = document.getElementById('modal_txs_info_btn');
	    x.innerHTML = 'Transaction error';
//            if(t.substring(0,19)=="execution reverted:")
//            t = t.substring(20);
//            console.log("Metamask Error: "+t+"");
	    console.log(t);
        }


}

async function web3_stake_v02()
{

    var x = document.getElementById("modal_stake_v02_amount");
    var amount = x.value;
    var name = ''
   var contractAddr = glob["api_wallet_info"]["stake2_contract"];
   var tkn = glob["stake2_tkn"];

    const provider2         = new ethers.providers.Web3Provider(provider);
    const signer2 = provider2.getSigner()
    console.log("Contract: "+contractAddr);

    var wal = selectedAccount;
    if(!wal) return false;

    const cStake = new ethers.Contract(contractAddr, glob["abi_stake_v02"], signer2);

    name = 'Staking '+amount+' LP ['+glob["stake2_pair"]+']';
	
	amount *= 10**18;
	amount = amount.toString(16);
	amount = "0x"+amount;

//    r = await cStake.Stake(wal,amount);
    modal_tx_info_open(name);
    try
    {
	r = await cStake.Stake(wal,tkn,amount,360);
        if(r)
        {
            x = document.getElementById('modal_txs_info_id');
            x.innerHTML = r.hash;
            console.log(r);
            x = document.getElementById('modal_txs_info_btn');
            x.innerHTML = 'View in Explorer';
            x.disabled = 0;
        }
    }
    catch(e)
        {
            t = e;
            x = document.getElementById('modal_txs_info_err');
            x.innerHTML = t.message;

            x = document.getElementById('modal_txs_info_btn');
            x.innerHTML = 'Transaction error';
            console.log(t);
        }


}
//--------------------------
async function web3_stake2_unstake(id)
{

//    var x = document.getElementById("modal_stake_v02_amount");
//    var amount = x.value;
//    var name = ''
   var contractAddr = glob["api_wallet_info"]["stake2_contract"];
//   var tkn = glob["stake2_tkn"];

    const provider2         = new ethers.providers.Web3Provider(provider);
    const signer2 = provider2.getSigner()
    console.log("Contract: "+contractAddr);

    var wal = selectedAccount;
    if(!wal) return false;

    const cStake = new ethers.Contract(contractAddr, glob["abi_stake_v02"], signer2);

    name = 'Unstaking your LP position '+id;
	
//	amount *= 10**18;
//	amount = amount.toString(16);
//	amount = "0x"+amount;

//    r = await cStake.Stake(wal,amount);
    modal_tx_info_open(name);
    try
    {
	r = await cStake.Unstake(id);
        if(r)
        {
            x = document.getElementById('modal_txs_info_id');
            x.innerHTML = r.hash;
            console.log(r);
            x = document.getElementById('modal_txs_info_btn');
            x.innerHTML = 'View in Explorer';
            x.disabled = 0;
        }
    }
    catch(e)
        {
            t = e;
            x = document.getElementById('modal_txs_info_err');
            x.innerHTML = t.message;

            x = document.getElementById('modal_txs_info_btn');
            x.innerHTML = 'Transaction error';
            console.log(t);
        }


}