function item_switch(item)
{
    console.log("ITEM: '"+item+"'");
    if(item)
    {
    glob["last_item_switch"] = item;
    glob["switch_interval_time"] = 0;
    }
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
		glob["switch_interval_time"] = sec * 2;
		//api_load_wallet();
	    }
	break;
	case "staking_lp":
	    btn_staking_lp_check();
	    btn_staking2_unstake_check();
	    sec = 5;
	    if(glob["switch_interval_time"] <= 0)
	    {
		glob["switch_interval_time"] = sec * 2;
		//api_load_wallet();
		api_load_stake2_wallet();
	    }

	break;
	case "staking_farm":
	    //console.log("asasasas: "+item);
	    //btn_staking_lp_check();
	    sec = 5;
	    if(glob["switch_interval_time"] <= 0)
	    {
		glob["switch_interval_time"] = sec * 2;
		stake2_farm_list_load();
		//api_load_stake2_wallet();
	    }

	break;
    }
    if(glob["switch_interval_time"]>10000)
    glob["switch_interval_time"] = 0;
}

//setInterval(item_switch_interval,1000);
setInterval(item_switch_interval,500);

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
//--------------------
function api_load_stake2_wallet()
{
//    console.log("FUNC: api_load_stake2_wallet");
    var url = glob["api_url"] + 'stake2/'+login_get();
//    console.log(url);
    getData(url,"api_stake2_print(xhr.response);");
}
glob["stake2_contract_update_time"] = 0;
function api_stake2_print(t)
{
//    console.log(t);
    var html = "";
    var v;
    var y;
    var l;
    var skip_check = 0;
    y = JSON.parse(t);

        if(y.result === undefined)return false;
	if(y.result.contract_update_utime == "0")return false;

	l = y.result.list_length;
	x = document.getElementById('stake2_my_count');
	if(x.innerHTML != l)
	{
	x.innerHTML = l;
	//skip_check = 1;
	glob["stake2_contract_update_time"] = 0;
	}
	else
	//skip_check = 0;

	//if(skip_check)
	if(glob["stake2_contract_update_time"] == y.result.contract_update_utime && y.result.contract_update_utime != 0)return false;
console.log(y.result.contract_update_utime);
	glob["stake2_contract_update_time"] = y.result.contract_update_utime;
        for (k in y.result.html)
        {
//	    console.log(k+' '+y.result.html[k]);
//	    name = y.result.html[k];
            y2 = document.getElementsByClassName(k);
            l = y2.length;
            for(i=0;i<l;i++)
            {
            x = y2[i];
	    if(x.innerHTML != y.result.html[k])
            x.innerHTML = y.result.html[k];
            }

	}
//	l = y.result.list.length;

	if(l>0)
	{
        for (k in y.result.list)
	{
	    v = y.result.list[k];
//	    console.log(k+' '+v.nn);
    	    html += stake2_html_my(v);
	}
	}
	x = document.getElementById('stake2_my');
        //if(x.innerHTML != html)
	x.innerHTML = html;


}
function stake2_html_my(v2)
{
var out = "";
var tape;
var tape_txt;

if(v2["closed"]!=0)
{
    tape_txt = "Unstaked";
    tape = "ended";
}
else
{
    tape_txt = "Farming";
    tape = "live";
}

out += "<div class=\"line-item tape-"+tape+"\">";
out += "<div class=\"row line-item__top align-items-center\">";
out += "<div class=\"col-12 col-lg-2\">";
out += "<div class=\"line-item__title2\">";
out += v2["nn"]+". LP ";
out += v2["pair"];
//out += "GNFT/ETH";
out += "</div>";
out += "</div>";
out += "<div class=\"col-12 col-lg-5\">";
out += "<div class=\"row\">";
out += "<div class=\"col-6\">";
out += "<div class=\"line-item__amount\">";
out += "<div class=\"label\">";
out += "Your stake amount";
out += "</div>";
out += "<div class=\"value\">";
//out += "-";
out += v2["amount2"];
out += "</div>";
out += "</div>";
out += "</div>";
out += "<div class=\"col-6\">";
out += "<div class=\"line-item__claimed\">";
out += "<div class=\"label\">";
out += "Lock until";
out += "</div>";
out += "<div class=\"value\">";
//out += "-";
out += v2["until_time"];
out += "</div>";
out += "</div>";
out += "</div>";
out += "</div>";
out += "</div>";
out += "<div class=\"col-12 col-lg-3 line-item__button-top\">";

if(v2["closed"]=="0")
{
out += "<div class=\"line-item__button\">";
//out += "<a href=\"#\" class=\"art-button btn btn-primary\">";
out += "<button class=\"art-button btn btn-sm btn-primary btn-stake2-unstake\" id=btn_unstake2_"+v2["nn"]+" onclick=\"return btn_click_action(this);\">";
out += "...";
//out += "</a>";
out += "</button>";
out += "</div>";
}
else
{
out += "<div class=\"line-item__claimed\">";
out += "<div class=\"label\">";
out += "Unstaked time";
out += "</div>";
out += "<div class=\"value\">";
//out += "-";
out += v2["closed_time2"];
out += "</div>";
out += "</div>";

}

out += "</div>";
out += "<div class=\"line-item__tape\">";
out += "<span>"+tape_txt+"</span>";
out += "</div>";
out += "</div>";
out += "</div>";

return out;
}