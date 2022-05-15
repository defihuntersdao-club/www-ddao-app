async function btn_action(id,v)
{
    var x = "";
    var a = "";
    var r = 0;
//    log("BTN: "+id+' '+v);
    txt = "No action";
    var err = "";
    if(!v)
    {
	err = "Zero";
    }

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
	//console.log(glob["api_wallet_info"]);
	if(glob["api_wallet_info"]["addao_allowance"] < v)
	{
	    txt = "Approve aDDAO";
	    //a = "approve_addao('"+id+"');";
	    a = "approve_addao();";
	    err = 1;
	}
    }

    if(!err)
    {
	txt = "Claim";
	switch(id)
	{
	    case "btn_ddao_seed":
		r = 0;
	    break;
	    case "btn_ddao_private1":
		r = 1;
	    break;
	    case "btn_ddao_private2":
		r = 2;
	    break;
	}
	//console.log(id);
	a = "claim_ddao("+r+");";
    }

    if(id !== null)
    {
    x = document.getElementById(id);
//console.log("ID: "+id);
//console.log("X: "+x);
    if(x!== null)
    if(x.innerHTML != txt)
    {
    x.innerHTML = txt;
    glob["btn_action"][id] = a;
    }
    }
//    console.log(glob["btn_action"]);
}
