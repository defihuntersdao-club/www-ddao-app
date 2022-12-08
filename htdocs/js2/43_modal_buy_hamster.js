
function func_modal_buy_hamster_on_open()
{
    //console.log('func_modal_buy_hamster_on_open()');
    //func_modal_buy_hamster_load();
    func_buy_humster_btn_check();
}

function func_buy_humster_btn_check()
{
    var err = 0;
    var x = document.getElementById('modal_buy_hamster_btn');
    var x2;
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
        }
        else
        {
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
	x = document.getElementById('modal_buy_hamster_btn');
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
	a = 'web3_buy_humster();';
        txt = 'Buy 1 HAMSTER';
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

    glob["buy_humster_func"] = a;

//    if(need_disable)
//    x.disabled = true;

}
function modal_buy_hamster_btn()
{
    var e = glob["buy_humster_func"];
    console.log('Click: '+e);
    if(e)
    {
        eval(e);
    }

}
function web3_buy_hamster_set_tx(hash)
{
            x = document.getElementById('modal_txs_info_id');
            x.innerHTML = hash;
            //console.log(r);
            x = document.getElementById('modal_txs_info_btn');
            x.innerHTML = 'View in Explorer';
            x.disabled = 0;
}
function web3_buy_hamster_show_err(err)
{
            x = document.getElementById('modal_txs_info_err');
            x.innerHTML = err;

            x = document.getElementById('modal_txs_info_btn');
            x.innerHTML = 'Transaction error';
            //console.log(t);

}

