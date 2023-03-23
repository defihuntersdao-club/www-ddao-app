//----------------------
async function web3_alloc_modify_click_matic()
{
    var aid;
    var aname;
    var aurl;
    var aimg;
    var aenable;
    var ahidden;
    var amount1;
    var amount2;
    var amount3;
    var acap;
    var test_mode;
    var pos;
    var name = "";
    var tokens = new Array();
    tokens[0] = "0xc2132D05D31c914a87C6611C10748AEb04B58e8F";
//    tokens[0] = "0xF32042FA24266c4F9736f91e5c9ae2C24073e15A";
    var contractAddr = glob["api_wallet_info"]["contract_address_alloc_matic"];
    var x;
    x = document.getElementById("modal_alloc_id");
    var aid = x.innerHTML;

    x = document.getElementById("modal_alloc_name");
    aname = x.value;

    x = document.getElementById("modal_alloc_url");
    aurl = x.value;

    x = document.getElementById("modal_alloc_img");
    aimg = x.value;

    x = document.getElementById("modal_alloc_cap");
    acap = x.value;


    x = document.getElementById("modal_alloc_1");
    amount1 = x.value;

    x = document.getElementById("modal_alloc_2");
    amount2 = x.value;

    x = document.getElementById("modal_alloc_3");
    amount3 = x.value;

    x = document.getElementById("modal_alloc_test_mode");
    test_mode = x.checked?1:0;

    x = document.getElementById("modal_alloc_enabled");
    aenable = x.checked?1:0;

    x = document.getElementById("modal_alloc_hidden");
    ahidden = x.checked?1:0;

    

//    var nn = id.replace("btn_farm_","");
//    var v = glob["api_farm_info"][nn]["hidden"];
//      name = 'You unhide rewards ['+nn+']';
    name = "Modify alloc ["+aid+"]";
    const provider2         = new ethers.providers.Web3Provider(provider);
    const signer2 = provider2.getSigner()
    console.log("Contract: "+contractAddr);

//    console.log("NN: "+nn);
//    return false;

    var wal = selectedAccount;
    if(!wal) return false;

    const cStake = new ethers.Contract(contractAddr, glob["abi_alloc_modify"], signer2);

    modal_tx_info_open(name);
    try
    {
//        r = await cStake.ClaimRewardMulti(nn);
        r = await cStake.SaleModify(aid,aname,aurl,aimg,aenable,amount1,amount2,amount3,acap,test_mode,ahidden,tokens);
//SaleModify(uint256 id,string memory name,string memory url,string memory img,bool enabled,uint256 amount1,uint256 amount2,uint256 amount3,uint256 cap,uint256 test_mode,address[] memory tokens)
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
//          console.log("E:");
//          console.log(e);
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
