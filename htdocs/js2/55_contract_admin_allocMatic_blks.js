function contract_admin_allocMatic_check()
{
    var y = document.getElementsByClassName("contract_admin_allocMatic_blk");
    var x;
    var l = y.length;
    var i;
    var flag = glob["api_wallet_info"]["contract_admin_allocMatic"];
    for(i = 0;i < l;i++)
    {
	x = y[i];
	if(flag)
	{
	    if(x.classList.contains("d-none"))
	    {
		x.classList.remove("d-none");
	    }
	}
	else
	{
	    if(!x.classList.contains("d-none"))
	    {
		x.classList.add("d-none");
	    }

	}
    }

}
setInterval(contract_admin_allocMatic_check,1000);