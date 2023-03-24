glob["pool_detail_update_time_matic"] = 0;
glob["pool_detail_update_time_bsc"] = 0;
function pool_detail()
{
//    console.log("pool_detail");
//    console.log("ITEM: '"+glob["item"]+"'");
//    console.log("ITEM: '"+glob["item2"]+"'");
//    var id = glob["item2"];

    while(glob["api_wallet_info"]["contract_address_alloc_matic"] === undefined)
    {
        setTimeout(pool_detail,500);
        return false
    }
    var url = glob["api_url"] + 'update_time/'+glob["api_wallet_info"]["contract_address_alloc_matic"];;
    console.log(url);
    getData(url,"pool_detail_update_time_fetch(xhr.response,'matic');");
}

function pool_detail_update_time_fetch(t,net)
{
//console.log(net);
//console.log(t);

    var y;
    var v;
    y = JSON.parse(t);

    if(y.result === undefined)return false;
    if(y.result == null)return false;
    if(y.result.update_time === undefined)return false;

//console.log(y.result);
    v = y.result.update_time;

    k = "pool_detail_update_time_"+net;
//console.log("K: "+k);
//console.log("K: "+glob[k]);
//console.log("V: "+v);
    if(glob[k] != v)
    {
//      glob["stake2_update_time"] = v;
        pool_detail_load();
    }
}
function pool_detail_load()
{
    var id = glob["item2"];
    var url = glob["api_url"] + 'pool_detail/'+id+"/"+login_get();
    console.log(url);
    getData(url,"pool_detail_fetch(xhr.response);");

}
glob["api_pool_detail_info"] = new Array();
function pool_detail_fetch(t)
{
    var x;
    var x2;
    var i;
    var y;
    var v;
    var l;
    var i;
    var id;
    var html = "";
    y = JSON.parse(t);

//    if(y.result === undefined){glob["switch_interval_time"] = 0;return false;}
//console.log(y);
        if(y.result === undefined)return false;
        glob["pool_detail_update_time_matic"] = y.result.contract_update_time_matic;
        glob["pool_detail_update_time_bsc"] = y.result.contract_update_time_bsc;

        for (k in y.result)
        {

//	    console.log("k: "+k);
//	    console.log("v: "+y.result[k]);
	    if(k=="Sale_img" && y.result[k] == "")y.result[k] = "<img src='/images/no_image.png'>";
	    x = document.getElementById('Sale_link');
	    x2 = document.getElementById('Sale_url2');
	    if(k=="Sale_url" && y.result[k] == "")
	    {
		x.className = "d-none";
		x2.href="#";
	    }
	    if(k=="Sale_url" && y.result[k] != "")
	    {
		x.className = '';
		x2.href = y.result[k];
		//x2.href="#";
	    }

	    x = document.getElementById('sale_test_mode');
	    if(k == "Sale_test_mode" &&  y.result[k] == "1")
	    {
//console.log("!!!!!!!!!!!!!! test_mnode 1");
		if(x.className != "test_mode")
		x.className = "test_mode";
	    }
	    if(k == "Sale_test_mode" &&  y.result[k] == "0")
	    {
//console.log("!!!!!!!!!!!!!! test_mnode 2");
		if(x.className != "d-none")
		x.className = "d-none";
	    }

	    if(k == "AllocPerc2")
	    {
                    x = document.getElementById("AllocPerc2");
                    x.setAttribute("data-percentage",y.result[k]);
	    }

	    glob["api_pool_detail_info"][k] = y.result[k];
            //console.log(k+' '+y.result[k]);
            //k2 = "token_farm_"+k;
            //console.log(k2);
            y2 = document.getElementsByClassName(k);
            l = y2.length;
            //console.log("L:"+l);

            for(i=0;i<l;i++)
            {
            x = y2[i];
            if(x.innerHTML != y.result[k])
            x.innerHTML = y.result[k];
            }


        }

//    if(y.result.contract_update_utime == 0){glob["switch_interval_time"] = 0;return false;}
//    glob["pool_update_time"] = y.result.contract_update_utime;
//contract_update_utime
//    l = y.result.list_length;
//    glob["api_pool_info"]["max_id"] = y.result.max_id;

//    x = document.getElementById("pools_2023");
//    x.innerHTML = html;
}
function sale_approve(id,net)
{
    var k;
    k = net+"_sale_tkn_1";
//console.log("K:"+k);
    var tkn = glob["api_pool_detail_info"][k];
    var amount = glob["api_pool_detail_info"]["SaleAmount_"+id];
    var sale = glob["item2"];

//console.log("sale_approve");

    console.log("sale: "+sale);
    console.log("id: "+id);
    console.log("NET: "+net);
    console.log("Amount: "+amount);
    console.log("Token: "+tkn);
    web3_sale_allowance(amount,tkn,net);
}
function sale_buy(id,net)
{
    var k;
    k = net+"_sale_tkn_1";
//console.log("K:"+k);
    var tkn = glob["api_pool_detail_info"][k];
    var amount = glob["api_pool_detail_info"]["SaleAmount_"+id];
    var sale = glob["item2"];

//console.log("sale_approve");

    console.log("sale: "+sale);
    console.log("id: "+id);
    console.log("NET: "+net);
    console.log("Amount: "+amount);
    console.log("Token: "+tkn);
//    web3_sale_buy(amount,tkn,sale,net);
    web3_sale_buy(sale,id,amount,tkn,net);
}