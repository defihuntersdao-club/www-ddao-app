/////////////////////////
async function btn_action_stepn1(id2,v)
{
    var t = "";
    var x = "";
    var a = "";
    var r = 0;
    var id = "btn_"+id2;
//    log("BTN: "+id+' '+v);
        txt = "No action";
    var err = "";


    if(!err)
    {
//log("ChainID: "+chainId);
	if(chainId == "0")
	{
//console.log('1');
	txt = "Connect Wallet";
//	txt = "Konnect Wallet";
    	//a = "network_switch_polygon();";
    	//a = "network_switch_polygon();";
	a = "connect_wal();";
	err = 1;
	}
    }

//console.log("!!!!!!!!!!!!!!!!!!!! "+err);
    if(!err)
    {
//log(chainId);
	if(chainId != 56)
	{
	txt = "Switch to BSC";
    	//a = "network_switch_polygon();";
	a = "change_chain('bsc');";
	err = 1;
	}
    }

/*
    if(!err)
    {
	//console.log(glob["api_wallet_info"]);
	if(glob["api_wallet_info"]["addao_allowance"] < v)
	{
	    txt = "Approve aDDAO";
	    //a = "approve_addao('"+id+"');";
	    a = "approve_addao();";
	    err = 1;
	}
    }
*/

//console.log("2222222222222");

    if(!err)
    {
//log("V: "+v);
    x = document.getElementById('stepn_fund1_minimal');
    t = x.innetHRML;
	    if(v<t)
	    {
		txt = "Need more BNB";
		err = 1;
	    }
    }
    if(!err)
    {
	txt = "Allocate";
	//console.log(id);
	a = "web3_alloc_stepn1('"+id2+"');";
    }

    x = document.getElementById(id);
//    if(x === null)    log("NULL "+id);

//log("BTN CLICK: "+id);
    if(x !== null)
    if(x.innerHTML !=  txt)
    {
    x.innerHTML = txt;
    glob["btn_action"][id] = a;
    }
//console.log("a "+id);
//    console.log(glob["btn_action"]);
}
