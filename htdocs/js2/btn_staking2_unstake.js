/////////////////////////
function btn_staking2_unstake_check()
{
    var x;
    var y = document.getElementsByClassName('btn-stake2-unstake');
    var l = y.length;
    var i;
    for(i=0;i<l;i++)
    {
	x = y[i];
//	a = "btn_staking_lp_check2('"+x.id+"','');";
//	console.log(a);
	btn_staking2_unstake_check2(x.id,'');
//	glob["btn_action"][id] = a;
    }
}
async function btn_staking2_unstake_check2(id,v)
{
    var x = "";
    var a = "";
    var r = 0;
//    log("BTN: "+id+' '+v);
    txt = "No action";
    var err = "";
    id2 = id.replace("btn_unstake2_","");
/*
    if(!v)
    {
	err = "Zero";
    }
*/
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

    if(!err)
    {
	txt = "Unstake";
	//console.log(id);
	//a = "claim_ddao_team();";
//	a = "modal_stake2_open('"+id+"');";
	a = "web3_stake2_unstake('"+id2+"');";
    }

    x = document.getElementById(id);
    if(x !== null)
    if(x.innerHTML != txt)
    {
    x.innerHTML = txt;
    glob["btn_action"][id] = a;
    }
//    console.log(glob["btn_action"]);
}
