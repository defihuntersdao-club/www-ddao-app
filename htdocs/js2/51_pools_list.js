glob["pool_update_time"] = 0;
async function pools_list()
{
//    console.log("pools list:");	
//    var url = glob["api_url"] + 'update_time/'+login_get();;
    var addr;

    while(glob["api_wallet_info"]["contract_address_alloc_matic"] === undefined)
    {
	setTimeout(pools_list,500);
	return false
    }

    var url = glob["api_url"] + 'update_time/'+glob["api_wallet_info"]["contract_address_alloc_matic"];;
//    console.log(url);
    getData(url,"alloc_update_time_fetch(xhr.response);");


}
function modal_alloc_new_open(id=0)
{
    var x;
    if(id==0)
    {
    id = glob["api_pool_info"]["max_id"]+1;
    }
    else
    {
	x = document.getElementById("modal_alloc_name");
	x.value = glob["api_pool_info"][id]["name"];

	x = document.getElementById("modal_alloc_url");
	x.value = glob["api_pool_info"][id]["url"];

	x = document.getElementById("modal_alloc_img");
	x.value = glob["api_pool_info"][id]["img"];

	x = document.getElementById("modal_alloc_cap");
	x.value = glob["api_pool_info"][id]["cap"];

	x = document.getElementById("modal_alloc_1");
	x.value =  glob["api_pool_info"][id]["amount1"];

	x = document.getElementById("modal_alloc_2");
	x.value = glob["api_pool_info"][id]["amount2"];

	x = document.getElementById("modal_alloc_3");
	x.value =  glob["api_pool_info"][id]["amount3"];

	x = document.getElementById("modal_alloc_hidden");
	if(glob["api_pool_info"][id]["hidden"])
	x.checked = true;
	else
	x.checked = false;

	x = document.getElementById("modal_alloc_enabled");
	if(glob["api_pool_info"][id]["enabled"])
	x.checked = true;
	else
	x.checked = false;

	x = document.getElementById("modal_alloc_test_mode");
	if(glob["api_pool_info"][id]["test_mode"])
	x.checked = true;
	else
	x.checked = false;
	


    }

    x = document.getElementById("modal_alloc_id");
    x.innerHTML = id;

    $('#modal_alloc_new').modal('show');
    
    return false;
}
function alloc_update_time_fetch(t)
{
    var y;
    var v;
    y = JSON.parse(t);

    if(y.result === undefined)return false;
    if(y.result == null)return false;
    if(y.result.update_time === undefined)return false;

//console.log(y.result);
    v = y.result.update_time;
//console.log("V: "+v);

    if(glob["pool_update_time"] != v)
    {
//      glob["stake2_update_time"] = v;
        pool_list_load2();
    }
}

function pool_list_load2()
{
    var url = glob["api_url"] + 'pool_list/'+login_get();
//    console.log(url);
    getData(url,"pool_list_fetch(xhr.response);");
}
glob["api_pool_info"] = new Array();
function pool_list_fetch(t)
{

    var x;
    var i;
    var y;
    var v;
    var l;
    var i;
    var id;
    var html = "";
    y = JSON.parse(t);

    if(y.result === undefined){glob["switch_interval_time"] = 0;return false;}
    if(y.result.contract_update_utime == 0){glob["switch_interval_time"] = 0;return false;}
        glob["pool_update_time"] = y.result.contract_update_utime;
//contract_update_utime
    l = y.result.list_length;
    glob["api_pool_info"]["max_id"] = y.result.max_id;
    for(i=0;i<l;i++)
    {
        id = y.result.list[i].id;
        glob["api_pool_info"][id] = y.result.list[i];
        html += pool_blk_html(y.result.list[i]);
    }

    x = document.getElementById("pools_2023");
    x.innerHTML = html;
}
function pool_blk_html(v)
{
    var t;
    var out = "";
//    console.log("POOL "+v.id);
if(!glob["api_wallet_info"]["contract_admin_allocMatic"] && v.hidden)return "";
var tape = "live";
var tape_txt = "Live";
if(!v.enabled)
{
    tape = "tape-ended";
    tape_txt = "Ended";
}
if(v.hidden)
{
    tape = "tape-ended";
    tape_txt = "Hidden";
}




//    out += v.id+" ";
out += "<div class=\"col-12 col-md-6 col-lg-4\"> ";
out += "<div class=\"grid-item "+tape+"\"> ";
out += "<div class=\"grid-item__tape\"> ";
out += "<span class=\"type\">"+tape_txt+"</span> </div> ";
out += "<div class=\"grid-item__title\">";
out += v.name;
out += " </div> ";



out += "<div class=\"grid-item__address\"> ";
out += "<div class=\"label\"> SoftCap </div> ";
out += "<div class=\"value\">";
out += v.cap;
out += "</div> ";
out += "</div> ";
out += "<div class=\"grid-item__address\"> ";
out += "<div class=\"label\"> My address </div> ";
out += "<div class=\"value\"><span class=\"wallet-id\">";
out += wal_3dot(v.wallet);
//out += "0x12b...2321";
out += "</span> ";
out += "</div> ";
out += "</div> ";

out += "<div class=\"grid-item__amount\"> ";
out += "<div class=\"label\"> My Allocation </div> ";
out += "<div class=\"value modified action_value btn_action\" id=\"pool_tmm\">";
t = v.wallet_alloc1 + v.wallet_alloc2 + v.wallet_alloc3;
out += t;
out += "</div> ";
//out += "<div class=\"label\"> Date of accrual </div> ";
//out += "<div class=\"value modified\" id=\"pool_tmm_accrual\">-</div> ";
out += "</div> <div class=\"grid-item__button\"> ";
//out += "<a href=\"#\" class=\"art-button-2 btn btn-primary wallet_connect d-none\"> Connect a wallet </a> ";
//out += "<a href=\"#\" class=\"art-button-2 btn btn-primary wallet_action\" id=\"btn_pool_tmm\" onclick=\"return btn_click_action(this);\">Show More</a> </div> ";
out += "<a href=\"/#/pool_detail/"+v.id+"\" class=\"art-button-2 btn btn-primary wallet_action\">Show More</a>";


if(glob["api_wallet_info"]["contract_admin_allocMatic"])
out += "<br><br><button class=\"art-button-2 btn btn-primary\" onclick=modal_alloc_new_open('"+v.id+"');>Admin modify</a>";

out += "</div> ";

//out += "<div class=\"grid-item__details\" id=\"dropdownGridItem\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"> ";
//out += "<span>Detail</span> ";
//out += "<svg width=\"12\" height=\"8\" viewBox=\"0 0 12 8\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"> <path d=\"M1.16016 1.42017L6.00097 6.26099L10.8418 1.42017\" stroke=\"#3D8AFF\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"></path> </svg> </div> ";
//out += "<div class=\"grid-item__bottom dropdown-menu\" aria-labelledby=\"dropdownGridItem\"> ";
//out += "<div class=\"grid-item__info\"> ";
//out += "<div> <div class=\"label\">Start Date:</div> <div class=\"value\">Aug. 8, 2022</div>";
//out += "</div> </div> ";
//out += "<div class=\"grid-item__block\"> </div> ";
//out += "</div> ";
out += "</div>";
out += "</div>";
    
    return out;
}