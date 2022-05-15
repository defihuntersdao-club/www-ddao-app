/////////////////////////
async function btn_action_pool(id2,v)
{
    var x = "";
    var a = "";
    var r = 0;
    var id = "btn_"+id2;
//    log("BTN: "+id+' '+v);
    txt = "No action";
    var err = "";

/*    if(!v)
    {
	err = "Zero";
    }
*/
/*
    if(!err)
    {
	if(!selectedAccount)
	{
	a = "onConnect();";
	txt = "Connect Wallet";
	err = 1;
	}
    }
*/
/*
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
*/
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
	txt = "Show More";
	//console.log(id);
	a = "btn_pool_link('"+id2+"');";
    }

    x = document.getElementById(id);
    if(x === null)
    log("NULL "+id);

//log("BTN CLICK: "+id);
    if(x !== null)
    if(x.innerHTML !=  txt)
    {
    x.innerHTML = txt;
    glob["btn_action"][id] = a;
    }
//    console.log(glob["btn_action"]);
}
