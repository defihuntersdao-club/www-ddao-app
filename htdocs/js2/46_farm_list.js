glob["stake2_update_time"] = 0;
function stake2_farm_list_load()
{

    var url = glob["api_url"] + 'stake2_update/';
//    glob["stake_v02_get_token_need"] = url;
//    glob["stake_v02_get_token_step"] = 0;
    console.log(url);
    getData(url,"stake2_farm_update_time_fetch(xhr.response);");
}
function stake2_farm_update_time_fetch(t)
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

    if(glob["stake2_update_time"] != v)
    {
//	glob["stake2_update_time"] = v;
	stake2_farm_list_load2()
    }
}
function stake2_farm_list_load2()
{
    var url = glob["api_url"] + 'reward2/';
    console.log(url);
    getData(url,"stake2_farm_list_fetch(xhr.response);");
}
glob["api_farm_info"] = new Array();
function stake2_farm_list_fetch(t)
{
    var x;
    var i;
    var y;
    var v;
    var l;
    var i;
    var nn;
    var html = "";
    y = JSON.parse(t);

    if(y.result === undefined){glob["switch_interval_time"] = 0;return false;}
    if(y.result.contract_update_utime == 0){glob["switch_interval_time"] = 0;return false;}
	glob["stake2_update_time"] = y.result.contract_update_utime;
//contract_update_utime
    l = y.result.list_length;
    for(i=0;i<l;i++)
    {
	nn = y.result.list[i].nn;
	glob["api_farm_info"][nn] = y.result.list[i];
	html += farm_blk_html(y.result.list[i]);
    }

    x = document.getElementById("farm_list");
    x.innerHTML = html;
}
function farm_blk_html(v)
{
//console.log(v);
var utime = new Date().getTime() / 1000;
utime = Math.floor(utime);
//console.log("LocalTime: "+utime);
var onclk;
var out = "";
var tape = "live";
var tape_txt = "Live";

if(v.end_time <  utime)
{
    tape = "tape-ended";
    tape_txt = "ENDED";
}

if(v.stoped == 1)
{
    tape = "tape-ended";
    tape_txt = "Stoped";
}
if(glob["api_wallet_info"]["contract_admin_2"] == 0 && v.hidden == 1)return "";
if(glob["api_wallet_info"]["contract_admin_2"] == 0 && v.exited == 1)return "";

if(v.hidden == 1)
{
    tape = "tape-ended";
    tape_txt = "Hidden";
}
if(v.exited == 1)
{
    tape = "tape-ended";
    tape_txt = "Exited";
}


out += "<div class=\"col-12 col-md-6 col-lg-4\">";
out += "<div class=\"grid-item "+tape+"\">";
out += "<div class=\"grid-item__tape\">";
out += "<span>"+tape_txt+"</span>";
out += "</div>";
out += "<div class=\"label_token\">";
out += v.nn+". ";
out += "Token: ";
//out += "</div>";
//out += "<div class=\"value\">";
out += "<b>";
out += v.abbr;
out += "</b>";
out += "</div>";
out += "<div class=\"label\">";
out += "Token address";
out += "</div>";
out += "<div class=\"value_addr\">";
//out += "0хС60В0хС6...0хС69се8";
out += "<a href=\"https://polygonscan.com/token/"+v.tkn+"\" target=_blank>";
out += v.tkn;
out += "</a>";
out += "<div class=\"label\">";
out += "Total Amount";
out += "</div>";
out += "<div class=\"value\">";
out += v.amount;
out += "</div>";

out += "<div class=\"label\">";
out += "Total Claimed";
out += "</div>";
out += "<div class=\"value\">";
out += v.claimed;
out += "</div>";
out += "</div>";

out += "<div class=\"label\">";
out += "Started";
out += "</div>";
out += "<div class=\"value\">";
out += utime_to_localtime(v.start_time);
out += "</div>";

out += "<div class=\"label\">";
out += "Ended";
out += "</div>";
out += "<div class=\"value\">";
out += utime_to_localtime(v.end_time);
out += "</div>";

out += "<div class=\"label\">";
out += "Period (days)";
out += "</div>";
out += "<div class=\"value\">";
out += v.interval;
out += "</div>";

/*
out += "<div class=\"label\">";
out += "Staked";
out += "</div>";
out += "<div class=\"value\">";
out += "<pre>";
out += "LP DDAO/ETH:  ";
out += "<span class=\"lp_matic_sushi_ddao_wal_lp_bal_staked\"></span>";
out += "<br>LP GNFT/ETH:  ";
out += "<span class=\"lp_matic_sushi_gnft_wal_lp_bal_staked\"></span>";
out += "<br>LP GNFT/USDC: ";
out += "<span class=\"lp_matic_quick_gnft_wal_lp_bal_staked\"></span>";
out += "</pre>";
out += "</div>";
*/

out += "<div class=\"label\">";
out += "Claim Amount";
out += "</div>";
out += "<div class=\"value farm_claim_amount_"+v.nn+"\">";
out += "0";
out += "</div>";

out += "<div class=\"label\">";
out += "Already Claimed";
out += "</div>";
out += "<div class=\"value farm_claim_claimed_"+v.nn+"\">";
out += "0";
out += "</div>";

if(v.exited == 0)
{
out += "<div class=\"grid-item__button\">";
//onclk = "modal_farm_claim_open('"+v.nn+"');";
onclk = "btn_click_action(this)";
out += "<button class=\"art-button-2 btn btn-primary btn-farm\" id=\"btn_farm_"+v.nn+"\" onclick=\""+onclk+"\">";
out += "..";
out += "</button>";
//out += "<a href=\"#\" class=\"art-button btn btn-primary d-none\">";
//out += "Connect a wallet";
//out += "</a>";
out += "</div>";
}

if(glob["api_wallet_info"]["contract_admin_2"] == 1)
{
out += "<div class=\"grid-item__button\">";
onclk = "modal_farm_admin_open('"+v.nn+"');";
out += "<button class=\"art-button-2 btn btn-primary\" onclick=\""+onclk+"\">";
out += "Admin modify";
out += "</button>";
//out += "<a href=\"#\" class=\"art-button btn btn-primary d-none\">";
//out += "Connect a wallet";
//out += "</a>";
out += "</div>";
}

out += "</div>";
out += "</div>";

return out;
}
function modal_farm_claim_open(nn)
{
//    var x = "";
    glob["modal_farm_id"] = nn;
    var v;
    v = glob["api_farm_info"][nn];
//    console.log(v);
//    console.log(v.nn);
    x = document.getElementById("modal_farm_nn");
    x.innerHTML = v.nn+".";
    x = document.getElementById("modal_farm_abbr");
    x.innerHTML = v.abbr;

$('#modal_farm_claim').modal('show');
}
function modal_farm_admin_open(nn)
{
//    var x = "";
    glob["modal_farm_id"] = nn;
    var v;
    v = glob["api_farm_info"][nn];
//    console.log(v);
//    console.log(v.nn);
    var f = 0;

    x = document.getElementById("modal_farm_admin_koef1");
    x.value = glob["api_farm_info"][nn]["koef1"];
    f += x.value*1;
    x = document.getElementById("modal_farm_admin_koef2");
    x.value = glob["api_farm_info"][nn]["koef2"];
    f += x.value*1;
    x = document.getElementById("modal_farm_admin_koef3");
    x.value = glob["api_farm_info"][nn]["koef3"];
    f += x.value*1;
    console.log("F: "+f);
    
    if(!f)
    {
    x = document.getElementById("modal_farm_btn_init");
    x.disabled = false;
    x = document.getElementById("modal_farm_btn_preset");
    x.disabled = false;
    }
    else
    {
    x = document.getElementById("modal_farm_btn_init");
    x.disabled = true;
    x = document.getElementById("modal_farm_btn_preset");
    x.disabled = true;

    }

    x = document.getElementById("modal_farm_admin_nn");
    x.innerHTML = v.nn+".";
    x = document.getElementById("modal_farm_admin_abbr");
    x.innerHTML = v.abbr;
    x = document.getElementById("modal_farm_admin_start_time");
    x.innerHTML = utime_to_localtime(v.start_time);
    x = document.getElementById("modal_farm_admin_interval");
    x.innerHTML = v.interval;

    x = document.getElementById("modal_farm_admin_amount");
    x.innerHTML = v.amount;

    x = document.getElementById("modal_farm_admin_stoped");
    x.innerHTML = v.stoped?"Yes":"No";

    x = document.getElementById("modal_farm_admin_stoped_time");
    x.innerHTML = v.stoped?utime_to_localtime(v.stoped_time):"-";

    x = document.getElementById("modal_farm_admin_hidden");
    x.innerHTML = v.hidden?"Yes":"No";
    x = document.getElementById("modal_farm_admin_hidden_time");
    if(v.hidden_time)
    x.innerHTML = v.hidden?utime_to_localtime(v.hidden_time):"-";
    else
    x.innerHTML = "-";

    x = document.getElementById("modal_farm_admin_exited");
    x.innerHTML = v.exited?"Yes":"No";


$('#modal_farm_admin').modal('show');
}
function func_farm_reward_load()
{
//    console.log("func_farm_reward_load");
//    var url;
    var url = glob["api_url"] + 'reward_claim_list/'+glob["modal_farm_id"]+'/'+login_get();
//    console.log(url);
//    getData(url,"stake2_farm_list_fetch(xhr.response);");

}
function modal_farm_btn_preset_click()
{
    var x = document.getElementById("modal_farm_admin_koef1");
    x.value = 20;
    x = document.getElementById("modal_farm_admin_koef2");
    x.value = 10;
    x = document.getElementById("modal_farm_admin_koef3");
    x.value = 10;
}
function modal_farm_btn_init_click()
{
    var koef1;
    var koef2;
    var koef3;
    var err = "";
    var f = 0;
    var x = document.getElementById("modal_farm_admin_koef1");
    koef1 = x.value*1;
    f += x.value*1;
    x = document.getElementById("modal_farm_admin_koef2");
    koef2 = x.value*1;
    f += x.value*1;
    x = document.getElementById("modal_farm_admin_koef3");
    koef3 = x.value*1;
    f += x.value*1;
    if(!f)
    {
	err += "Koef must be more then 0"; 
    var x = document.getElementById("modal_farm_admin_err");
    x.innerHTML = err;
    setTimeout(modal_farm_admin_err_clean,2000);
    }
    else
    {
	console.log('web3 init');
	//onConnect();
	web3_farm_init(glob["modal_farm_id"],koef1,koef2,koef3);
	//setTimeout(web3_farm_init,1000,glob["modal_farm_id"],koef1,koef2,koef3);
    }
}
function modal_farm_admin_err_clean()
{
    var x = document.getElementById("modal_farm_admin_err");
    x.innerHTML = "&nbsp;";
}

async function web3_farm_init(nn,koef1,koef2,koef3)
{

    var err;
    var day;
    var x;
    var amount;
   var tkn;

    var name = ''
   var contractAddr = glob["api_wallet_info"]["stake2_contract"];

//    x = document.getElementById("modal_stake2_farm_addr");
//    tkn = x.value;


    const provider2         = new ethers.providers.Web3Provider(provider);
    const signer2 = provider2.getSigner()
    console.log("Contract: "+contractAddr);

    var wal = selectedAccount;
    if(!wal) return false;

    const cStake = new ethers.Contract(contractAddr, glob["abi_stake_v02"], signer2);


    name = "You modify koef ("+koef1+"/"+koef2+"/"+koef3+") and init rewards num "+nn;
//    r = await cStake.Stake(wal,amount);
    modal_tx_info_open(name);
    try
    {
        r = await cStake.RewardKoef(nn,koef1,koef2,koef3);
        if(r)
        {
            x = document.getElementById('modal_txs_info_id');
            x.innerHTML = r.hash;
            console.log(r);
            x = document.getElementById('modal_txs_info_btn');
            x.innerHTML = 'View in Explorer';
            x.disabled = 0;
        }
    }
    catch(e)
        {
	    console.log(e);
            t = e;
	    console.log(t.data);
	    if(t.data !== undefined)
	    {
		err = t.data.message;
	    }
	    else
	    err = t.message;
            x = document.getElementById('modal_txs_info_err');
            x.innerHTML = err;

            x = document.getElementById('modal_txs_info_btn');
            x.innerHTML = 'Transaction error';
            console.log(t);
        }


}
//----------------------
async function web3_farm_stop_click()
{
    var name = "";
    var contractAddr = glob["api_wallet_info"]["stake2_contract"];
    var nn = glob["modal_farm_id"];
    var v = glob["api_farm_info"][nn]["stoped"];
    if(v)
    {
	name = 'You unstop rewards ['+nn+']';
    }
    else
    {
	name = 'You stop rewards ['+nn+']';
    }
    const provider2         = new ethers.providers.Web3Provider(provider);
    const signer2 = provider2.getSigner()
    console.log("Contract: "+contractAddr);

    var wal = selectedAccount;
    if(!wal) return false;

    const cStake = new ethers.Contract(contractAddr, glob["abi_stake_v02"], signer2);

    modal_tx_info_open(name);
    try
    {
        r = await cStake.RewardStop(nn,!v);
        if(r)
        {
            x = document.getElementById('modal_txs_info_id');
            x.innerHTML = r.hash;
            console.log(r);
            x = document.getElementById('modal_txs_info_btn');
            x.innerHTML = 'View in Explorer';
            x.disabled = 0;
        }
    }
    catch(e)
        {
	    console.log(e);
            t = e;
	    console.log(t.data);
	    if(t.data !== undefined)
	    {
		err = t.data.message;
	    }
	    else
	    err = t.message;
            x = document.getElementById('modal_txs_info_err');
            x.innerHTML = err;

            x = document.getElementById('modal_txs_info_btn');
            x.innerHTML = 'Transaction error';
            console.log(t);
        }

}
//----------------------
async function web3_farm_hide_click()
{
    var name = "";
    var contractAddr = glob["api_wallet_info"]["stake2_contract"];
    var nn = glob["modal_farm_id"];
    var v = glob["api_farm_info"][nn]["hidden"];
    if(v)
    {
	name = 'You unhide rewards ['+nn+']';
    }
    else
    {
	name = 'You hide rewards ['+nn+']';
    }
    const provider2         = new ethers.providers.Web3Provider(provider);
    const signer2 = provider2.getSigner()
    console.log("Contract: "+contractAddr);

    var wal = selectedAccount;
    if(!wal) return false;

    const cStake = new ethers.Contract(contractAddr, glob["abi_stake_v02"], signer2);

    modal_tx_info_open(name);
    try
    {
        r = await cStake.RewardHide(nn,!v);
        if(r)
        {
            x = document.getElementById('modal_txs_info_id');
            x.innerHTML = r.hash;
            console.log(r);
            x = document.getElementById('modal_txs_info_btn');
            x.innerHTML = 'View in Explorer';
            x.disabled = 0;
        }
    }
    catch(e)
        {
	    console.log(e);
            t = e;
	    console.log(t.data);
	    if(t.data !== undefined)
	    {
		err = t.data.message;
	    }
	    else
	    err = t.message;
            x = document.getElementById('modal_txs_info_err');
            x.innerHTML = err;

            x = document.getElementById('modal_txs_info_btn');
            x.innerHTML = 'Transaction error';
            console.log(t);
        }

}
//----------------------
async function web3_farm_exit_click()
{
    var pos;
    var name = "";
    var contractAddr = glob["api_wallet_info"]["stake2_contract"];
    var nn = glob["modal_farm_id"];
//    var v = glob["api_farm_info"][nn]["hidden"];
//	name = 'You unhide rewards ['+nn+']';
name = "You are making an EXIT reward ["+nn+"].<br>The action cannot be undone.<br>Tokens return to the owner.";
    const provider2         = new ethers.providers.Web3Provider(provider);
    const signer2 = provider2.getSigner()
    console.log("Contract: "+contractAddr);

    var wal = selectedAccount;
    if(!wal) return false;

    const cStake = new ethers.Contract(contractAddr, glob["abi_stake_v02"], signer2);

    modal_tx_info_open(name);
    try
    {
        r = await cStake.RewardExit(nn,"0x0000000000000000000000000000000000000000");
        if(r)
        {
            x = document.getElementById('modal_txs_info_id');
            x.innerHTML = r.hash;
            console.log(r);
            x = document.getElementById('modal_txs_info_btn');
            x.innerHTML = 'View in Explorer';
            x.disabled = 0;
        }
    }
    catch(e)
        {
//	    console.log("E:");
//	    console.log(e);
            t = e;
	    if(t.data !== undefined)
	    {
		err = t.data.message;
	    }
	    else
	    err = t.message;

		pos = err.indexOf("(");
		if(pos > 0)
		err = err.substr(0,pos);


            x = document.getElementById('modal_txs_info_err');
            x.innerHTML = err;

            x = document.getElementById('modal_txs_info_btn');
            x.innerHTML = 'Transaction error';
            console.log(t);
        }

}
//----------------------
async function web3_farm_claim_click(id)
{
    var pos;
    var name = "";
    var contractAddr = glob["api_wallet_info"]["stake2_contract"];
    var nn = id.replace("btn_farm_","");
//    var v = glob["api_farm_info"][nn]["hidden"];
//	name = 'You unhide rewards ['+nn+']';
    name = "Claim reward ["+nn+"]";
    const provider2         = new ethers.providers.Web3Provider(provider);
    const signer2 = provider2.getSigner()
    console.log("Contract: "+contractAddr);

//    console.log("NN: "+nn);
//    return false;

    var wal = selectedAccount;
    if(!wal) return false;

    const cStake = new ethers.Contract(contractAddr, glob["abi_stake_v02"], signer2);

    modal_tx_info_open(name);
    try
    {
        r = await cStake.ClaimRewardMulti(nn);
        if(r)
        {
            x = document.getElementById('modal_txs_info_id');
            x.innerHTML = r.hash;
            console.log(r);
            x = document.getElementById('modal_txs_info_btn');
            x.innerHTML = 'View in Explorer';
            x.disabled = 0;
        }
    }
    catch(e)
        {
//	    console.log("E:");
//	    console.log(e);
            t = e;
	    if(t.data !== undefined)
	    {
		err = t.data.message;
	    }
	    else
	    err = t.message;

		pos = err.indexOf("(");
		if(pos > 0)
		err = err.substr(0,pos);


            x = document.getElementById('modal_txs_info_err');
            x.innerHTML = err;

            x = document.getElementById('modal_txs_info_btn');
            x.innerHTML = 'Transaction error';
            console.log(t);
        }

}
