function ddao_group_checker()
{
    var x;
    var y;
    var l;
    var i;
    var j;

    for(j=1;j<4;j++)
    {
    y = document.getElementsByClassName("data_ddao_grp_tkn_g"+j)
    l = y.length;
    for(i = 0;i < l;i++)
    {
	x = y[i];
        if(glob["api_wallet_info"]["ddao_group_"+j])
	{
	    if(x.innerHTML == "-")
	    x.innerHTML = "Yes";
	}
	else
	{
	    if(x.innerHTML == "Yes")
	    x.innerHTML = "-";

	}
    }
    y = document.getElementsByClassName("ddao-grp"+j)
    l = y.length;
    for(i = 0;i < l;i++)
    {
	x = y[i];
        if(glob["api_wallet_info"]["ddao_group_"+j])
	{
//console.log('a');
	    if(x.classList.contains("gray"))
	    x.classList.remove("gray");
	}
	else
	{
	    if(!x.classList.contains("gray"))
	    x.classList.add("gray");

	}
    }

    }
}
setInterval(ddao_group_checker,500);