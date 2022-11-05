function item_switch(item)
{
    console.log('ITEM: '+item);
    glob["last_item_switch"] = item;
    glob["switch_interval_time"] = 0;
}
//item_switch();
//setInterval(item_switch,1000);
//glob["switch_interval_time"] = 0;
function item_switch_interval()
{

    glob["switch_interval_time"]--;
    var sec = 0;
    var item =  glob["last_item_switch"];
//    console.log("item_switch_interval "+item);
    switch(item)
    {
	case "info_wallet":
//	console.log('!!! info_wallet '+glob["switch_interval_time"]);
	    sec = 5;
	    if(glob["switch_interval_time"] <= 0)
	    {
		glob["switch_interval_time"] = sec;
		api_load_wallet();
	    }
	break;
    }
    if(glob["switch_interval_time"]>10000)
    glob["switch_interval_time"] = 0;
}

setInterval(item_switch_interval,1000);

function api_load_wallet()
{
    console.log("FUNC: api_load_wallet");
    var url = glob["api2_url"] + 'balance/'+login_get();
//    console.log(url);
    getData(url,"balance_update(xhr.response);");

}


function balance_update(t)
{
    var y = "";
    var y2 = "";
    var l = 0;
    var k = "";
    var name = '';
    y = JSON.parse(t);

	if(y.result === undefined)return false;
//        console.log(y.result);
	//if(0)
        for (k in y.result.balance)
        {
//            console.log("k: "+k);
//            console.log(y.result.balance[k]);

	    for(k2 in y.result.balance[k])
	    {
	    name = 'balance_'+k+'_'+k2;
//            console.log("k2: "+k2);
//	    console.log(y.result.balance[k][k2])
//	    console.log('name: '+name);
            y2 = document.getElementsByClassName(name);
	    
//	    if(0)
	    
//            y2 = document.getElementsByClassName(k);
            l = y2.length;
            //console.log("L:"+l);
            for(i=0;i<l;i++)
            {
            x = y2[i];
	    if(x.innerHTML != y.result.balance[k][k2].balance)
            x.innerHTML = y.result.balance[k][k2].balance;
            }
	    }
	    

        }

}
