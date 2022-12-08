//glob["contract_buy"] = "0x60486a16183aee735e672A33469d4Aa270c6b437";
//glob["contract_buy"] = "0xeC85aa35F66b25426B1a988b90D91e73825ed9c7";
//glob["contract_buy"] = "0xd1759e64F074C0A146652f7A75a1f03394Ef0Dfd";
glob["contract_buy"] = "0x5d75668712a8f300680EEBf9d17a57CF3aae5dd2";


function func_modal_buy_ddao_on_open()
{
//    console.log('func_modal_buy_ddao_on_open()');
    func_modal_buy_ddao_load();
    func_buy_ddao_btn_check();
}

glob["func_modal_buy_ddao_load"] = 0;
function func_modal_buy_ddao_load()
{
//    var url = glob["api2_url"] + 'swap/'+login_get()+'?';
    var url = glob["api_url"] + 'swap/'+login_get()+'/?a=';
    var x;
    var v = 0;
    x = document.getElementById('modal_buy_input_usdc');
    v += x.value*1;
    url += x.value;
    url += '|';
    x = document.getElementById('modal_buy_input_usdt');
    v += x.value*1;
    url += x.value;
    url += '|';
    x = document.getElementById('modal_buy_input_dai');
    v += x.value*1;
    url += x.value;


//    console.log(url);
//    console.log("v: "+v);
    if(v)
    {
    if(glob["func_modal_buy_ddao_load"] == 3 || glob["func_modal_buy_ddao_load"]>20)
    {
	glob["func_modal_buy_ddao_load"] = 0;
	console.log('Load data from api');
    getData(url,"dashboard_update(xhr.response,'func_modal_buy_ddao_load');");
    }
    glob["func_modal_buy_ddao_load"]++;
    }
}



function buy_action(coin,act)
{
    console.log("coin: "+coin+" "+act);
    switch(act)
    {
	case "allowance_all":
	    web3_buy_allowance(coin,-1);
	break;
	case "allowance":
	    var v2 = 0;
	    var t = 'modal_buy_input_'+coin;
	    var v = document.getElementById(t);
//	    console.log('id: '+t+' '+v.value);
	    v2 = v.value;
		switch(coin)
		{
		    case "usdc":
		    case "usdt":
			v2 *= 10**6;
		    break;
		    default:
			v2 *= 10**18;
		    
		}

	    web3_buy_allowance(coin,v2);
	break;
	case "disapprove":
	    web3_buy_allowance(coin,0);
	break;
    }
}
function buy_amount(coin,val)
{
//    console.log("coin: "+coin+' '+val);
    var c2 = coin.toUpperCase();
    var x;
    var t2 = 0;
    t2    = 'buy_allowance_'+coin;
    var v2 = glob["api_wallet_info"][t2];
//console.log('ALLOW: '+t2+' '+v2);
    var t = 'balance_matic_'+c2;
    var v = glob["api_wallet_info"][t];
    var r = 0;

    if(v2 != "∞" && v2<v)v = v2;
//    if(b > approve)b = approve;
    r = v*val/100;
    r = Math.floor(r);

    x = document.getElementById('modal_buy_input_'+coin);
    x.value = r;

//    console.log(v);
}
async function web3_buy_allowance(coin,amount)
{
//console.log(glob["api_wallet_info"]);
//console.log(glob["api_wallet_info"]["stake_ddao_lock_contract"]);

//   var contractAddr = glob["contract_buy"];
    var contractAddr = glob["api_wallet_info"]["buy_ddao_contract"];
   var tkn = glob["matic_"+coin];

    const provider2         = new ethers.providers.Web3Provider(provider);
    const signer2 = provider2.getSigner()
    console.log("Contract: "+tkn);

    var wal = selectedAccount;
    if(!wal) return false;

    const cApprove = new ethers.Contract(tkn, glob["abi"], signer2);

//console.log("AMount in: '"+amount+"'");
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
        //amount *= 10**18;
        amount = amount.toString(16);
        amount = "0x"+amount;

    }
//console.log("AMount out: "+amount);
//    r = await cApprove.approve(contractAddr,"10000000000000000000000000000000000000000000000000");
//    r = await cApprove.approve(contractAddr,amount);
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
            t = e;
            x = document.getElementById('modal_txs_info_err');
            x.innerHTML = t.message;

            x = document.getElementById('modal_txs_info_btn');
            x.innerHTML = 'Transaction error';
            console.log(t);
        }

}
async function web3_buy()
{
    var err;
    var t2;
    var usdc;
    var usdt;
    var dai;
    var m;
    var x;
    var stake;
    var addr = login_get;
    x = document.getElementById('modal_buy_input_usdc');
    usdc = x.value;
    x = document.getElementById('modal_buy_input_usdt');
    usdt = x.value;
    x = document.getElementById('modal_buy_input_dai');
    dai = x.value;
    // "function Swap(uint256 usdc,uint256 usdt,uint256 dai,uint256 AmountMin,address addr,uint8 stake,uint8 debug)public returns(uint256)"
    x = document.getElementById('swap_after_buy');
    if(x.checked)
    {
    name = 'Swap to Stake '+glob["api_wallet_info"]["buy_swap"]+' DDAO';
    stake = 1;
    }
    else
    {
    name = 'Swap to Buy '+glob["api_wallet_info"]["buy_swap"]+' DDAO';
    stake = 0;
    }

//    x = document.getElementById('modal_buy_input_dai');
//    if(stake )
//    name = 'Swap to BUY '+glob["api_wallet_info"]["buy_swap"]+' DDAO';
    modal_tx_info_open(txt);
    m = glob["api_wallet_info"]["buy_swap_calc"];

    console.log('Min: '+m);
    m *= 10**18;
    m = "0x"+m.toString(16);

    
//console.log(glob["api_wallet_info"]["stake_ddao_lock_contract"]);

    var contractAddr = glob["api_wallet_info"]["buy_ddao_contract"];
    const provider2         = new ethers.providers.Web3Provider(provider);
    const signer2 = provider2.getSigner()

    console.log('contract: '+contractAddr);

    var wal = selectedAccount;
    if(!wal) return false;

    const cSwap = new ethers.Contract(contractAddr, glob["abi_buy_ddao"], signer2);
    console.log('Swap('+usdc+','+usdt+','+dai+','+m+','+wal+','+stake+','+0+');');
//    r = await cSwap.Swap(usdc,usdt,dai,m,wal,stake,0);


    modal_tx_info_open(name);
    try
    {
        r = await cSwap.Swap(usdc,usdt,dai,m,wal,stake,0);
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
	    err = t.message;
	    if(t.data.message !==undefined)
	    {
	    t2 = t.data.message
	    t2 = t2.replace('execution reverted: ','');
	    err += '<br>'+t2;
	    }
            x = document.getElementById('modal_txs_info_err');
//            x.innerHTML = t.message;
            x.innerHTML = err;



            x = document.getElementById('modal_txs_info_btn');
            x.innerHTML = 'Transaction error';
            console.log(t);
        }

}

function func_buy_ddao_btn_check()
{
    var err = 0;
    var x = document.getElementById('modal_buy_ddao_btn');
    var x2;
    var v1 = document.getElementById('modal_buy_input_usdc');
    var v2 = document.getElementById('modal_buy_input_usdt');
    var v3 = document.getElementById('modal_buy_input_dai');
    var v = v1.value*1+v2.value*1+v3.value*1;
//    var x = document.getElementById('stake_v01_allowance_btn');
//    var x2;
//    console.log("exec func: func_stake_v01_allowance");
    var txt = "Action disabled";
    var t = 0;
    var t2 = 0;
//    var need_disable = 0;


//    if(!err)
//console.log(selectedAccount);
    {
        if(!selectedAccount)
        {
        a = "onConnect();";
        txt = "Connect Wallet";
        err = 1;

//        x2 = document.getElementById('stake_v01_allowance_btn2');
//        x2.disabled = true;
//        x2 = document.getElementById('stake_v01_allowance_btn3');
//        x2.disabled = true;
	btn_addons_toggle(1);
	btn_addons_toggle2(1);
        }
        else
        {
//        x2 = document.getElementById('stake_v01_allowance_btn2');
//        x2.disabled = false;
//        x2 = document.getElementById('stake_v01_allowance_btn3');
//        x2.disabled = false;

        }
    }
    if(!err)
    {
	btn_addons_toggle(0);
	btn_addons_toggle2(0);
    }

    if(!err)
    {
    if(v==0 && !v)
    {
        txt = 'Change AMOUNT';
        err = 1;
//      need_disable = 1;
//      a = '';
//        a = 'modal_stake_v01_allowance_amount_focus();';
	a = 'modal_buy_amount_focus();';
    }
    }

//    else
//      need_disable = 0;

    if(!err)
    {
        v = v*1000;
        v = Math.round(v,2);
        v /= 1000;
//        txt = "Swap ["+v+"] DDAO";
	txt = "Swap";
//        a = 'stake_v01_allowance_value('+v2+');';
//	console.log('Price Impact: ');
	t = v / glob["api_wallet_info"]["rate_eth"];
	t = glob["api_wallet_info"]["lp_matic_sushi_ddao_r1"] + t;
	t = t * glob["api_wallet_info"]["rate_eth"];
//	console.log("T :"+t);
	t2 = glob["api_wallet_info"]["buy_swap"];
	t2 = glob["api_wallet_info"]["lp_matic_sushi_ddao_r2"] - t2;
//	console.log("T2 :"+t2);

	t = t / t2;
	t = t / glob["api_wallet_info"]["lp_matic_sushi_ddao_rate"];
	t -= 1;
	t *= 100;
	t *= 100;
	t = Math.round(t,4);
	t /= 100;
	t /= 2;
	//t += ' %';
//	console.log('Value: '+t);	
	if(t != isNaN)
	{
	x2 = document.getElementById('buy_ddao_price_impact');
	if(x2.innerHTML != t && v>0)
	{
	    if(t+'' != "NaN")x2.innerHTML = t;
	}
	}

	t = glob["api_wallet_info"]["buy_swap"] * 0.99;

	if(t != isNaN)
	{
	//t = Math.round(t,4);
	t = Math.floor(t,4);
	glob["api_wallet_info"]["buy_swap_calc"] = t;
	x2 = document.getElementById('buy_ddao_minimal_received');
	if(x2.innerHTML != t && v>0 && t+'' != "NaN")
	x2.innerHTML = t;
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
	x = document.getElementById('modal_buy_ddao_btn');
	t = glob["api_wallet_info"]["buy_swap_calc"]+'';
	if(t == 'NaN')
	{
	    x.disabled = 1;
	    err = 1;
	    txt = 'Fetching data';
	}
	else
	{
	    err = 0;
	    x.disabled = 0;
	}

    }
//console.log('TXT: '+txt + ' '+err);
    if(!err)
    {

	{
	a = '';
	a = 'web3_buy();';
//        txt = 'Approve';
//        v2 = v.value;
//	console.log("V: "+v);
//	console.log("V1: "+v1);
//	console.log("V2: "+v2);
//	console.log("V3: "+v3);

//	console.log('rate_eth: ' + glob["api_wallet_info"]["rate_eth"]);
//	console.log('reserv eth: ' + glob["api_wallet_info"]["lp_matic_sushi_ddao_eth"]);
	}
    }

    if(x.innerHTML != txt )
    x.innerHTML  = txt;

    glob["buy_ddao_func"] = a;

//    if(need_disable)
//    x.disabled = true;

}
function modal_buy_ddao_btn()
{
    var e = glob["buy_ddao_func"];
    console.log('Click: '+e);
    if(e)
    {
        eval(e);
    }

}

function btn_addons_toggle(flag=0)
{
    var y = document.getElementsByClassName('btn_addons');
    var x;
    var l = y.length;
    var i;
    for (i=0;i<l;i++)
    {
	x = y[i];
//	x.disable = (flag?true:false);
//	x.disabled = (flag?true:false);
	if(x.disabled != flag)
	x.disabled = flag;
//	console.log(x);
    }
}
function btn_addons_toggle2(flag=0)
{
    var y = document.getElementsByClassName('btns2');
    var x;
    var l = y.length;
    var i;
    for (i=0;i<l;i++)
    {
	x = y[i];
//	x.disable = (flag?true:false);
//	x.disabled = (flag?true:false);
	//if(x.disabled != flag)
	if(flag)
	x.classList.add('d-none');
	else
	x.classList.remove('d-none');

//	x.disabled = flag;
//	console.log(x);
    }
}

function modal_buy_amount_focus()
{
    var x = document.getElementById('modal_buy_input_usdc');
    x.focus();
}
