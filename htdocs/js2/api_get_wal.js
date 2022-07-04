glob["api_interval"] = 3;
glob["api_i"] = 0;
glob["api_wallet_info"] = new Array();
function get_wallet_info()
{
    var wal = login_get();
    if(wal !== null && wal.length==42)
    {
    var url = "";
    url += glob["api_url"];
    url += "wallet/";
    url += wal;

    getData(url,"load_wallet_info(xhr.response)");
    }
    glob["api_i"] = glob["api_interval"];
}
function load_wallet_info(data)
{
//    console.log(data);
	var i = 0;
	var l = 0;
	var y = 0;
	var mas = new Array();
        var x = "";
	var v = 0;
        var t = JSON.parse(data);
//        result_global = obj2arr(t);
	if(t.result !== null)
	{
        mas = obj2arr(t.result);
        //console.log(mas);
	for (const prop in t.result) 
	{
	    if(glob["api_wallet_info"][prop]===null || glob["api_wallet_info"][prop]!=mas[prop])
	    glob["api_wallet_info"][prop] = mas[prop];

        //console.log(prop+' '+mas[prop]);
	x = document.getElementById(prop);
        if(x !== null)
	{
	    if(x.innerHTML != mas[prop])
	    {
	    x.innerHTML = mas[prop];
	    }
	}
	x = document.getElementsByClassName(prop);                                                                                                                                        
	l = x.length;
	if(l>=0)                                                                                                                                                                           
	for(i = 0;i<l;i++)                                                                                                                                                                      
	{                                                                                                                                                                                       
        y = x[i];
        if(y !== null)
        {                                                                                                                                                                   
        //if(y.id == "ddao_balance")continue;                                                                                                                                                 
        //y.innerHTML = mas[prop];
	    if(y.innerHTML != mas[prop])
	    {
	    y.innerHTML = mas[prop];
	    }
        }                                                                                                                                                          
	}        
	//log(prop);

	    switch(prop)
	    {
		case "stepn_fund1_minimal":
		    x = document.getElementById("stepn_fund1_balance_input");
		    v = x.getAttribute("min");
		    if(v != mas[prop])
		    x.setAttribute("min",mas[prop]);
		break;
		case "stepn_fund1_step":
		    x = document.getElementById("stepn_fund1_balance_input");
		    v = x.getAttribute("step");
		    if(v != mas[prop])
		    x.setAttribute("step",mas[prop]);
		break;
		case "stepn_fund1_balance":
		    x = document.getElementById("stepn_fund1_balance_input");
		    v = x.getAttribute("max");
		    if(v != mas[prop])
		    x.setAttribute("max",mas[prop]);
		    if(mas[prop] == 0)
		    {
		    x.value = "0";
		    x.min = 0;
		    x.step = 0;
		    }
		break;
	    }

	}
	}


    glob["api_i"] = glob["api_interval"]-1;
}
function load_interval()
{
    if(glob["api_i"]<=0)
    {
	get_wallet_info();
    }
    
    glob["api_i"]--;
    //log("API_I:"+glob["api_i"]);
}

setInterval(load_interval,1000);
