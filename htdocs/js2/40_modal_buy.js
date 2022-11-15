glob["contract_buy"] = "0x60486a16183aee735e672A33469d4Aa270c6b437";


function func_modal_buy_ddao_on_open()
{
    //console.log('func_modal_buy_ddao_on_open()');
    func_modal_buy_ddao_load();

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
    console.log("v: "+v);
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
