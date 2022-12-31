async function web3_sale_buy(sale,grp,amount,tkn,net="matic")
{
//console.log(glob["api_wallet_info"]);
//console.log(glob["api_wallet_info"]["stake_ddao_lock_contract"]);

   var contractAddr = glob["api_wallet_info"]["contract_address_alloc_"+net];
//   var tkn = glob["api_wallet_info"]["addr_ddao"];
    var name = '';

    const provider2         = new ethers.providers.Web3Provider(provider);
    const signer2 = provider2.getSigner()
    console.log("Contract token: "+tkn);
    console.log("Contract address: "+contractAddr);
    console.log("sale: "+sale);
    console.log("grp: "+grp);

    var wal = selectedAccount;
    if(!wal) return false;

    console.log("wal: "+wal);
    tkn = 0;

    const cApprove = new ethers.Contract(contractAddr, glob["abi_alloc_modify"], signer2);

    name = "Allocate sale "+sale+" on "+amount+" $";

//console.log("!!!!!!!!!AMount in: '"+amount+"'");
//console.log("AMount out: "+amount);
//    r = await cApprove.approve(contractAddr,"10000000000000000000000000000000000000000000000000");
//    txt = 'Swap to BUY '+glob["api_wallet_info"]["buy_swap"]+' DDAO';
    modal_tx_info_open(name);
    try
    {
	//function Allocate(uint256 sale, uint8 level, address addr, uint256 amount, uint8 token)
        r = await cApprove.Allocate(sale,grp,wal,amount,tkn);
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

