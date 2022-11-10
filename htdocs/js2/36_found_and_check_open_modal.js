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
setInterval(found_and_check_open_modal,500);

