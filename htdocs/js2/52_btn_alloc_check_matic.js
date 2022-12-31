/////////////////////////
async function btn_alloc_check_matic_check()
{
    var id = "modal_alloc_new_btn_matic";
    var x;
    var a = "";
    var r = 0;
    var id2 = "";
//    log("BTN: "+id+' '+v);
    txt = "No action";
    var err = "";
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
/*
    if(!err)
    {
	id2 = id.replace("btn_farm_","");
	//x = document.getElementById("farm_claim_amount_"+id2);
	v = glob["api_wallet_info"]["farm_claim_amount_"+id2];
	if(v == 0)
	{
	txt = "No action";
	err = 1;
	}
    }
*/
    if(!err)
    {
	txt = "Modify";
	//console.log(id);
	//a = "claim_ddao_team();";
	//a = "modal_stake2_open('"+id+"');";
	a = "web3_alloc_modify_click_matic();";
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
