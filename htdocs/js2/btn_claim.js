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
		case "stake":
		    skip++;
		break;
	    }
	}
//log("id: "+id+" V "+v);	
        //y.innerHTML = "-";
	if(v != "-" || skip)
	{
	id = id.replace("_aviable","");
	id = id.replace("_balance","");

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

            case "pool_metatg":
        	btn_action_pool(id);
	    break;
	    case "pool_xdao":
	    case "pool_tmm":
	    case "pool_gearz":
            case "pool_defiyeld":
            case "pool_gbc":
            case "pool_sabai":
            case "pool_eywa":
//            log("!!!!!!!!!!!!!!!!!!!!!! "+id);
        	btn_action_pool(id);
            break;
	    case "pool_ddao_learn":
            btn_action_pool_live(id);
	    break;
	    case "stepn_fund1":
	    btn_action_stepn1(id,v*1);
	    break;
	    case "info_wallet":
//	    case "info_group":
	    case "info_walletlp":
	    case "info_lp":
	    btn_action_info(id);
	    break;
	    case "buy_humster":
	    btn_action_buy_humster(id);
	    break;
	    case "stake_ddao":
	    case "stake_lp":
	    btn_action_stake(id);
	    break;

	    default:
	    btn_action("btn_claim_"+id,v*1);
	}
	}
    }

    return false;
}
setInterval(btn_claim,100);
