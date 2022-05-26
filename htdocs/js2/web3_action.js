function network_switch_polygon()
{
    log("SELECT: network_switch_polygon");
    log("SELECT Chain: "+chainId);
//    console.log(glob["api_wallet_info"]);
}
async function approve_addao()
{

//    console.log("ID: "+id);
//    console.log(glob["api_wallet_info"]);
   var contractAddr = glob["api_wallet_info"]["addr_contract"];
   var tkn = glob["api_wallet_info"]["addr_addao"];

    const provider2         = new ethers.providers.Web3Provider(provider);
    const signer2 = provider2.getSigner()
    console.log("Contract: "+tkn);

    var wal = selectedAccount;
    if(!wal) return false;

    const cApprove = new ethers.Contract(tkn, glob["abi"], signer2);
    r = await cApprove.approve(contractAddr,"10000000000000000000000000000000000000000000000000");

}
async function claim_ddao(round)
{

//    console.log("ID: "+id);
//    console.log(glob["api_wallet_info"]);
    var contractAddr = glob["api_wallet_info"]["addr_contract"];
//   tkn = glob["api_wallet_info"]["addr_addao"];

    const provider2         = new ethers.providers.Web3Provider(provider);
    const signer2 = provider2.getSigner()
    console.log("Contract: "+contractAddr);
    console.log("Round: "+round);

    var wal = selectedAccount;
    if(!wal) return false;

    const cClaim = new ethers.Contract(contractAddr, glob["abi"], signer2);
    r = await cClaim.claim(round);
    console.log("R:"+r);

}
async function claim_ddao_team()
{
    var contractAddr = glob["api_wallet_info"]["contract_ddao_team"];
    log("FUNC: "+claim_ddao_team);
    const provider2         = new ethers.providers.Web3Provider(provider);
    const signer2 = provider2.getSigner()
    console.log("Contract: "+contractAddr);
    var wal = selectedAccount;
    if(!wal) return false;

    const cClaim = new ethers.Contract(contractAddr, glob["abi_ddao_team"], signer2);
    r = await cClaim.Claim(wal);
    console.log("R:"+r);
}
async function claim_ddao_dbayc()
{
    var contractAddr = glob["api_wallet_info"]["contract_ddao_dbayc"];
    log("FUNC: "+claim_ddao_team);
    const provider2         = new ethers.providers.Web3Provider(provider);
    const signer2 = provider2.getSigner()
    console.log("Contract: "+contractAddr);
    var wal = selectedAccount;
    if(!wal) return false;

    const cClaim = new ethers.Contract(contractAddr, glob["abi_ddao_team"], signer2);
    r = await cClaim.Claim(wal);
    console.log("R:"+r);
}
async function web3_alloc_stepn1()
{
    var contractAddr = glob["api_wallet_info"]["stepn_fund1_contract"]; 

    var x = "";
    var y = "";
    var v = "";
//    x = document.getElementById('stepn_fund1_balance_input');
    x = document.getElementById('stepn_fund1_balance_input');
    console.log(x.value);
//    v = x.value * 10**18;
    v = x.value;
    v *= 1;
    v *= 10**18;
    console.log("HEX "+v.toString(16));
    v = v.toString(16);
    v = "0x"+v;
log("VALUE: "+v);
//    v += "";
//    v = "0x10";
    var data = "0xc6fd06c70000000000000000000000000000000000000000000000000000000000000002";

  ethereum
    .request({
      method: 'eth_sendTransaction',
      params: [
        {
          from: selectedAccount,
          to: contractAddr,
          value: v,
      data: data,
        },
      ],
    })
//    .then((txHash) => console.log(txHash))
    .then((txHash) => setTx(txHash))
    .catch((error) => showErr(error));

/*
    var contractAddr = glob["api_wallet_info"]["stepn_fund1_contract"]; 
    const provider2         = new ethers.providers.Web3Provider(provider);
    const signer2 = provider2.getSigner()

    console.log(contractAddr);
    const cAlloc = new ethers.Contract(contractAddr, glob["abi_stepn1"], signer2);
    r = await cAlloc.Allocate(1).value(20);
    console.log("R:"+r);

    log("web3_alloc_stepn1");
*/
}
function setTx(hash)
{
    log("TX HASH: "+hash);
}
function showErr(error)
{
    log("ERR: ");
    log("MSG: "+error.message);
    console.log(error);
}