function login_set(item,item2,wal)
{
    log("Login: "+wal);

    if(wal!== null)
    if(wal.length == 42)
    {
    wal = wal.toLowerCase();
    glob["wal"] = wal;
    localStorage.setItem('wal', wal);
    //login_redir("/claim/"+wal);
    //console.log("login_set: item:"+item+" item2:"+item2);
    check_logining(item,item2);
    sale_set_val(wal);
    }

}
function login_unset()
{
    var wal = '';
    glob["wal"] = wal;
    localStorage.setItem('wal', wal);
    login_redir(wal);
    connect_wallet_show_hide(1);

}
function login_redir(url)
{
    redir(url);
}
function login_get()
{
    var wal = localStorage.getItem('wal');
    return wal;
}

function check_logining(item="",item2="all")
{
//    if(glob[item] != item)item2 = "all";
//    else 
//    item2 = glob[item2];
//    if(!item)item = "all";
    var url = "";
    var w = "";
    var x = document.getElementById("auth_off");
    var y = document.getElementById("auth_on");
//    log("check_logining: item="+item+' item2='+item2	);
    glob["metatg_btn_check"] = 0;

	if(item == "alloc")
	{
	//getData
	    if(item2 != "all")
	    {
	    var d = new Date().getTime();
//	    url = "/cache/sale."+item2+".all.json?"+d;
//	    url = "/cache/sale."+item2+".all.json";
	    url = "/sale/?i="+item2+"";
	    url = glob["api_url"]+"sale/"+item2;
	    log("========== alloc ==== "+url);
	    getData(url,"parse_data(xhr.response)");

	    if(glob["item"] != "alloc" && glob["item2"]!="metatg")
	    {
	    var el = document.getElementById('item_title');
	    el.scrollIntoView();
	    }
	    w = document.getElementById("alloc_my_all");
	    w.className = 'pool_'+item2;
	    w.innerHTML = "-";

		w = document.getElementById("sale_metatg");
		if(item2 == "metatg")
		{
		    w.className = "";
		    glob["metatg_btn_check"] = 1;
		}
		else 
		{
		    w.className = "d-none";
		    glob["metatg_btn_check"] = 0;

		}
	    }
	}

    var wal = login_get();
    if(wal !== null &&wal.length == 42)
    {
	if(item=="")item = "claim";
//	login_redir("/"+item+"/"+wal);
	login_redir("/"+item+"/"+item2+"/"+wal);
	x.classList.remove("d-none");
	y.classList.add("d-none");
        connect_wallet_show_hide(0);
	wallet_id_set(wal);
	networks_show(true);
    }
    else
    {
	login_redir("/claim/");
	x.classList.add("d-none");
	y.classList.remove("d-none");
        connect_wallet_show_hide(1);
	wallet_id_set("-");
	networks_show(false);
    }
}

check_logining(glob["item"],glob["item2"]);

function login_explorer(e)
{
    var wal = login_get();
    var url = "https://polygonscan.com/address/"+wal;
    e.href = url;
    return true;
}
function logout()
{
    var x = "";
    x = document.getElementById('close_acc');

    login_unset();
    connect_wallet_show_hide(1);
    login_redir("/claim/");
    x.click();
    check_logining(glob["item"],glob[item2]);
    return false;
}
