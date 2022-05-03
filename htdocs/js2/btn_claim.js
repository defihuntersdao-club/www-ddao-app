glob["btn_action"] = new Array();
function btn_claim()
{
//    log("clean_modified");
    var id = '';
    var x = '';
    var y = '';
    var v = "";
    var l = 0;

    x = document.getElementsByClassName('btn_action');
    l = x.length;
    for(i = 0;i<l;i++)
    {
        y = x[i];
	v = y.innerHTML;
	
        //y.innerHTML = "-";
	if(v != "-")
	{
	id = y.id;
	id = id.replace("_aviable","");

	//log("id: "+id+' val: '+y.innerHTML);
	//log("AAA "+id);
	switch(id)
	{
	    case "ddao_team":
	    btn_action_team("btn_"+id,v*1);
	    break;
	    case "ddao_dbayc":
	    btn_action_team("btn_"+id,v*1);
	    break;


	    default:
	    btn_action("btn_"+id,v*1);
	}
	}
    }

    return false;
}
setInterval(btn_claim,100);

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

/////////////////////////
async function btn_action_team(id,v)
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
	txt = "Claim DDAO";
	//console.log(id);
	a = "claim_ddao_team();";
    }

    x = document.getElementById(id);
    if(x.innerHTML != txt)
    {
    x.innerHTML = txt;
    glob["btn_action"][id] = a;
    }
//    console.log(glob["btn_action"]);
}
/////////////////////////
async function btn_action_dbayc(id,v)
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
	txt = "Claim DDAO";
	//console.log(id);
	a = "claim_ddao_dbayc();";
    }

    x = document.getElementById(id);
    if(x.innerHTML != txt)
    {
    x.innerHTML = txt;
    glob["btn_action"][id] = a;
    }
//    console.log(glob["btn_action"]);
}

function btn_click_action(e)
{
    var a = "";
    if(glob["btn_action"][e.id] !== null)
    a = glob["btn_action"][e.id];
    log("btn CLICK:"+e.id +' a:'+a);
    if(a)eval(a);
    return false;
}
