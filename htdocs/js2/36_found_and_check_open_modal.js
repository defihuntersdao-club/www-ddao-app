glob["modal_last"] = "";
function found_and_check_open_modal()
{
//    console.log('found_and_check_open_modal');
    var x;
    var y = document.getElementsByClassName("modal");
    var l = y.length;
    var i;
    for(i=0;i<l;i++)
    {
	x = y[i];
//console.log("check modal: "+x.id+' "'+x.className+'"');
	if(glob["modal_last"] == x.id && x.className != "modal fade show")
	{
		console.log('Closed modal: '+x.id);
		glob["modal_last"] = "";

	}
	if(x.className == "modal fade show")
	{
	    if(glob["modal_last"] != x.id)
	    {
		console.log('Opened modal: '+x.id);
		glob["modal_last"] = x.id;
	    }
	}
    }
}
setInterval(found_and_check_open_modal,1000);

function modal_action_on_open_state()
{
    var ev = "";
    switch(glob["modal_last"])
    {
	case "stake_v01_allowance":
	    ev = "func_"+glob["modal_last"]+"();";
	    eval(ev);
	break;
    }
//    if()
}
setInterval(modal_action_on_open_state,1000);

function func_stake_v01_allowance()
{
    console.log("exec func: func_stake_v01_allowance");
}

