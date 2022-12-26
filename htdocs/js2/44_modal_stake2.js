function modal_stake2_open(id)
{
console.log(id);
    var pair;
    var allow;
    var x;
    var v;
    var id2 = id.replace("btn_stake2_","");
    glob["stake2_id"] = id2;
    switch(id)
    {
	case "btn_stake2_lp_matic_sushi_ddao":
	pair = "DDAO/ETH";
	allow = "lp_ddao_weth";
	glob["stake2_tkn"] = "0xfC067766349d0960bdC993806EA2E13fcFC03C4D";
        break;
	case "btn_stake2_lp_matic_sushi_gnft":
	pair = "GNFT/ETH";
	allow = "lp_gnft_weth";
	glob["stake2_tkn"] = "0x03B67a0cE884E806673CC92e9A1C4A77D5BC770B";
        break;
	case "btn_stake2_lp_matic_quick_gnft":
	pair = "GNFT/USDC";
	allow = "lp_gnft_usdc";
	glob["stake2_tkn"] = "0x3fd0CC5f7Ec9A09F232365bDED285e744E0446e2";
        break;
    }
    glob["stake2_pair"] = pair;
    x = document.getElementById('stake_v02_pair');
    x.innerHTML = pair;

    v = glob["api_wallet_info"][id2+"_wal_lp_bal_full"];
    x = document.getElementById('modal_stake_v02_balance');
    x.className = "lp_balance "+id2+"_wal_lp_bal_full";
    x.innerHTML = v;

    x = document.getElementById('modal_stake_v02_amount');
    x.value = v;
//    x.max = glob["api_wallet_info"][id2+"_wal_lp_bal_full"];
    x.max = v;
//    console.log(id2+"_wal_lp_step");

    x = document.getElementById('modal_stake_v02_allowance');
    x.className = "lp_allowance stake2_allowance_"+allow;
    v = glob["api_wallet_info"]["stake2_allowance_"+allow];
    x.innerHTML = v;


$('#stake_v02').modal('show');
}

function stake2_amount_set(p)
{
    var t = "";
    var x;
    var v;
//console.log("P: "+p);
    switch(p+"")
    {

	case "25":
	case "50":
	case "75":
	    t = glob["stake2_id"]+"_wal_lp_bal_full"+p;
//	    console.log(t);
	    v = glob["api_wallet_info"][t];
	break;
	default:
    x = document.getElementById('modal_stake_v02_balance');
    v = x.innerHTML;

    }

//    x = document.getElementById('modal_stake_v02_balance');
//    v = x.innerHTML;

    x = document.getElementById('modal_stake_v02_amount');
    x.value = v;
}