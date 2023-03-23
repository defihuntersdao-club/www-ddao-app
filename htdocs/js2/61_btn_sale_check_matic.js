/////////////////////////
function btn_sale_matic_check()
{
//console.log('btn_sale_matic_check');
    var x;
    var y;
    var l;
    y = document.getElementsByClassName("btn_sale_matic");
    l = y.length;
//console.log("L: "+l);
    for(i=0;i<l;i++)    
    {
	x = y[i];
	//console.log(x.id);
	btn_sale_matic_check2(x.id);
    }
}
async function btn_sale_matic_check2(id)
{
//console.log("btn_sale_matic_check2: "+id);
//    var id = "modal_alloc_new_btn_matic";
    var k;
    var x;
    var a = "";
    var r = 0;
    var id2 = "";
    id2 = id.replace("btn_sale_matic_","");
//console.log(id2);
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
	//id2 = id.replace("btn_farm_","");
	//x = document.getElementById("farm_claim_amount_"+id2);
	v = glob["api_wallet_info"]["ddao_group_"+id2];
	if(v == 0)
	{
	txt = "Info";
	err = 1;
	a = "modal_ddao_group_info_show();";
	}
    }
*/
    if(!err)
    {
	if(glob["api_pool_detail_info"]["SaleAmount_"+id2]===undefined)
	{
	    err = 1;
	    txt = "Wait";
	}
    }
    if(!err)
    {
//	console.log(glob["api_pool_detail_info"]["matic_sale_allowance_1"]);
//	console.log(glob["api_pool_detail_info"]["SaleAmount_"+id2]);
	if(glob["api_pool_detail_info"]["matic_sale_allowance_1"] < glob["api_pool_detail_info"]["SaleAmount_"+id2])
	{
	err = 1;
	txt = "Approve";
	a = "sale_approve('"+id2+"','matic')";
	}
    }
    if(!err)
    {
	if(glob["api_pool_detail_info"]["AllocPerc"] == "100")
	{
	    err = 1;
	    txt = "Ended";
	    a = "";
	}
    }

    if(!err)
    {
	txt = "Buy";
	//console.log(id);
	//a = "claim_ddao_team();";
	//a = "modal_stake2_open('"+id+"');";
	//a = "web3_alloc_modify_click_matic();";
	a = "sale_buy('"+id2+"','matic')";
    }

    x = document.getElementById(id);
    if(x !== null)
    if(x.innerHTML != txt)
    {
    x.innerHTML = txt;
    glob["btn_action"][id] = a;
//    console.log("AAAAAAAAAAAAA");
    }
//    console.log(glob["btn_action"]);
}
