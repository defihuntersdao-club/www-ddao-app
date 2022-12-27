function modal_farm_add_token_open()
{
    $('#modal_farm_add_token').modal('show');
    return false;
}
glob["stake_v02_get_token_need"] = 0;
glob["stake_v02_get_token_interval"] = 5;
glob["stake_v02_get_token_step"] = 0;
function stake_v02_get_token_info()
{
    var x = document.getElementById("modal_stake2_farm_addr");
    var y = document.getElementById("modal_stake2_farm_err");
    y.innerHTML = '&nbsp;';
    var v = x.value;
    var err = "";

    if(v.length != 42)
    {
	err += "Address length must be 42";
    }
    if(!err && v.substr(0,2)!="0x")
    {
	err += "Address must start on 0x";
    }
    if(err)
    {
    y.innerHTML = err;
    setTimeout(stake_v02_err_hide,2000);
    glob["stake_v02_get_token_need"] = 0;
    }
    else
    {

    var url = glob["api_url"] + 'ticker/'+v+'/'+login_get();
    glob["stake_v02_get_token_need"] = url;
    glob["stake_v02_get_token_step"] = 0;
//    console.log(url);
//    getData(url,"stake_v02_get_token_fetch(xhr.response);");

    }
}
setInterval(load_stake2_farm_ticker,1000);
function load_stake2_farm_ticker()
{

    if(glob["stake_v02_get_token_need"])
    {
	if(glob["stake_v02_get_token_step"] == 0)
	{
	var url = glob["stake_v02_get_token_need"];
	console.log(url);
	getData(url,"stake_v02_get_token_fetch(xhr.response);");
//
	}

    glob["stake_v02_get_token_step"]++;

    if(glob["stake_v02_get_token_step"] >= glob["stake_v02_get_token_interval"])
    glob["stake_v02_get_token_step"] = 0;

    }
}
function stake_v02_err_hide()
{
    var y = document.getElementById("modal_stake2_farm_err");
    y.innerHTML = '&nbsp;';
}
function  stake_v02_get_token_fetch(t)
{
    var x = '';
    var x2 = '';
    var y = '';
    var y2 = '';
    var l = 0;
    var k;
    var k2;
    y = JSON.parse(t);
//    console.log(y);
        if(y.result === undefined)return false;
        for (k in y.result)
        {

	    //console.log(k+' '+y.result[k]);
	    k2 = "token_farm_"+k;
	    //console.log(k2);
            y2 = document.getElementsByClassName(k2);
            l = y2.length;
            //console.log("L:"+l);

            for(i=0;i<l;i++)
            {
            x = y2[i];
            if(x.innerHTML != y.result[k])
            x.innerHTML = y.result[k];
            }
            

	}

}
function stake2_farm_amount_set(p)
{
    var t = "";
    var x;
    var y = document.getElementById("modal_stake2_farm_balance");
    var v = y.innerHTML * 1;
console.log("P: "+p);

    switch(p+"")
    {

        case "25":
        case "50":
        case "75":
//            t = glob["stake2_id"]+"_wal_lp_bal_full"+p;
	    t = v * p / 100;
//          console.log(t);
            v = t;
        break;
        default:
//    x = document.getElementById('modal_stake2_farm_amount');
	//v = y.innerHTML;

    }

//    x = document.getElementById('modal_stake_v02_balance');
//    v = x.innerHTML;

    x = document.getElementById('modal_stake2_farm_amount');
    x.value = v;
}
