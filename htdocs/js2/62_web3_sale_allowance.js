async function web3_sale_allowance(amount,tkn,net="matic")
{
    amount = -1;
//console.log(glob["api_wallet_info"]);
//console.log(glob["api_wallet_info"]["stake_ddao_lock_contract"]);

   var contractAddr = glob["api_wallet_info"]["contract_address_alloc_"+net];
//   var tkn = glob["api_wallet_info"]["addr_ddao"];
    var name = '';

    const provider2         = new ethers.providers.Web3Provider(provider);
    const signer2 = provider2.getSigner()
    console.log("Contract token: "+tkn);
//    console.log("Contract: "+tkn);

    var wal = selectedAccount;
    if(!wal) return false;

    const cApprove = new ethers.Contract(tkn, glob["abi"], signer2);

//console.log("!!!!!!!!!AMount in: '"+amount+"'");
    switch(amount+"")
    {
        case "-1":
        amount = "10000000000000000000000000000000000000000000000000";
        name = 'Approve ALL tokens';
        break;
        case "0":
        amount = 0;
        name = 'Dissapprove ALL';
        break;
        default:
        name = 'Approve '+amount+' tokens';
        amount *= 10**18;
        amount = amount.toString(16);
        amount = "0x"+amount;

    }
//console.log("AMount out: "+amount);
//    r = await cApprove.approve(contractAddr,"10000000000000000000000000000000000000000000000000");
//    txt = 'Swap to BUY '+glob["api_wallet_info"]["buy_swap"]+' DDAO';
    modal_tx_info_open(name);
    try
    {
        r = await cApprove.approve(contractAddr,amount);
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
	setTimeout(pool_detail_reload,1000,net);
}
function pool_detail_reload(net)
{
    if(glob["api_pool_detail_info"][net+"_sale_allowance_1"] == "0")
    {
	setTimeout(pool_detail_reload,3000,net);
    }
    else glob["pool_detail_update_time_"+net] = 0;
}

