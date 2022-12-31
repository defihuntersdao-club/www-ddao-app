function func_farm_admin_checker()
{
//    console.log("func_farm_admin_checker");
    var x = document.getElementById('modal_farm_admin_auth_off2');
    var x2 = document.getElementById('modal_farm_admin_auth_off');
    var y = document.getElementById('modal_farm_admin_auth_on');
    var wal = selectedAccount;
    if(!wal)
    {
	if(x.className != "d-none")x.className = "d-none";
	if(x2.className != "d-none")x2.className = "d-none";
	if(y.className == "d-none")y.className = "";
    }
    else
    {
	if(x.className == "d-none")x.className = "";
	if(x2.className == "d-none")x2.className = "";
	if(y.className != "d-none")y.className = "d-none";

    }

}