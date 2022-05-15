glob["btn_action"] = new Array();
function btn_claim()
{
//    log("clean_modified");
    var id = '';
    var x = '';
    var y = '';
    var v = "";
    var l = 0;
    var pos = 0;
    var skip = 0;
    var t = "";

    x = document.getElementsByClassName('btn_action');
    l = x.length;
//log("L "+l);
    for(i = 0;i<l;i++)
    {
        y = x[i];
	v = y.innerHTML;
	id = y.id;

	skip = 0;
	pos = id.indexOf("_");
	if(pos>0)
	{
	    t = id.substr(0,pos);
	    //log(t);
	    switch(t)
	    {
		case "pool":
		    skip++;
		break;
	    }
	}
//log("V "+v);	
        //y.innerHTML = "-";
	if(v != "-" || skip)
	{
	id = id.replace("_aviable","");

	//log("id: "+id+' val: '+y.innerHTML);
//	log("AAA "+id);

//	if(id.substr(0,5)=="pool_")	log("ID "+id)
	switch(id)
	{
	    case "ddao_team":
	    btn_action_team("btn_claim_"+id,v*1);
	    break;
	    case "ddao_dbayc":
	    btn_action_dbayc("btn_claim_"+id,v*1);
	    break;

            case "pool_defiyeld":
            case "pool_gbc":
            case "pool_sabai":
            case "pool_eywa":
//            log("!!!!!!!!!!!!!!!!!!!!!! "+id);
            btn_action_pool(id);
            break;


	    default:
	    btn_action("btn_claim_"+id,v*1);
	}
	}
    }

    return false;
}
setInterval(btn_claim,100);
