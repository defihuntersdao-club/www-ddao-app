function dashboard_update(t,mod="")
{
    var y = "";
    var y2 = "";
    var l = 0;
    var k = "";
    y = JSON.parse(t);
        //console.log(y.result);
	for (k in y.result)
	{
	    //console.log("k: "+k);
	    //console.log("v: "+y.result[k]);
	    y2 = document.getElementsByClassName(k);
	    l = y2.length;
	    //console.log("L:"+l);
	    for(i=0;i<l;i++)
	    {
	    x = y2[i];
	    if(x.innerHTML != y.result[k])
	    x.innerHTML = y.result[k];
	    glob["api_wallet_info"][k] = y.result[k];
	    }
//	    if()
	    if(glob["api_wallet_info"][k]===null || glob["api_wallet_info"][k] != y.result[k])
	    {
	    //console.log("Y: "+y.result[k]);
	    //console.log('dashboard_update '+k+': '+glob["api_wallet_info"][k]);
//	    console.log(glob["api_wallet_info"]);
	    //if(k=='lp_eth_usdc_eth_supply') console.log("OLD: "+glob["api_wallet_info"][k]);

	    glob["api_wallet_info"][k] = y.result[k];
	    //if(k=='lp_eth_usdc_eth_supply') console.log("OLD: "+glob["api_wallet_info"][k]);
//	    console.log(glob["api_wallet_info"]);
//	    debugger;
	    }
	    
	}
    if(mod != "")
    {
	glob[mod] = 0;
    }
	
}
function dashboard_load()
{
//    setInterval()
//    var url = 'https://api-v02-test.defihuntersdao.club/dashboard';
    var url = glob["api2_url"] + 'dashboard';
    getData(url,"dashboard_update(xhr.response);");


    var url = glob["api_url"] + 'lp';
    getData(url,"dashboard_update(xhr.response);");
}
dashboard_load();
setInterval(dashboard_load,3000);
