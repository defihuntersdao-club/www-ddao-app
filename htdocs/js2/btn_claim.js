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
	btn_action("btn_"+id,v*1);
	}
    }

    return false;
}
setInterval(btn_claim,100);

async function btn_action(id,v)
{
    var x = "";
    var a = "";
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
	txt = "Claim";
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
