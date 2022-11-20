//glob["contract_buy"] = "0x60486a16183aee735e672A33469d4Aa270c6b437";
//glob["contract_buy"] = "0xeC85aa35F66b25426B1a988b90D91e73825ed9c7";
//glob["contract_buy"] = "0xd1759e64F074C0A146652f7A75a1f03394Ef0Dfd";
glob["contract_buy"] = "0x5d75668712a8f300680EEBf9d17a57CF3aae5dd2";


function func_modal_buy_ddao_on_open()
{
    //console.log('func_modal_buy_ddao_on_open()');
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
    var t = 'balance_matic_'+c2
    var v = glob["api_wallet_info"][t];
    var r = 0;
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

   var contractAddr = glob["contract_buy"];
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
        break;
        case "0":
        amount = 0;
        break;
        default:
        amount *= 10**18;
        amount = amount.toString(16);
        amount = "0x"+amount;

    }
//console.log("AMount out: "+amount);
//    r = await cApprove.approve(contractAddr,"10000000000000000000000000000000000000000000000000");
    r = await cApprove.approve(contractAddr,amount);

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
    if(v2==0 && !v2)
    {
        txt = 'Change AMOUNT';
        err = 1;
//      need_disable = 1;
//      a = '';
//        a = 'modal_stake_v01_allowance_amount_focus();';
    }
    }

//    else
//      need_disable = 0;

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

	{
//        txt = 'Approve';
//        v2 = v.value;
	console.log("V: "+v);
//	console.log("V1: "+v1);
//	console.log("V2: "+v2);
//	console.log("V3: "+v3);
        v = v*1000;
        v = Math.round(v,2);
        v /= 1000;
//        txt = "Swap ["+v+"] DDAO";
	txt = "SWAP";
//        a = 'stake_v01_allowance_value('+v2+');';
	console.log('Price Impact: ');
	t = v / glob["api_wallet_info"]["rate_eth"];
	t = glob["api_wallet_info"]["lp_matic_sushi_ddao_r1"] + t;
	t = t * glob["api_wallet_info"]["rate_eth"];
	console.log("T :"+t);
	t2 = glob["api_wallet_info"]["buy_swap"];
	t2 = glob["api_wallet_info"]["lp_matic_sushi_ddao_r2"] - t2;
	console.log("T2 :"+t2);

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
	x2.innerHTML = t;
	}

	t = glob["api_wallet_info"]["buy_swap"] * 0.99;
	if(t != isNaN)
	{
	t = Math.round(t,4);
	x2 = document.getElementById('buy_ddao_minimal_received');
	if(x2.innerHTML != t && v>0)
	x2.innerHTML = t;
	}


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