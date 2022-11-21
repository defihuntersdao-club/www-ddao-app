function go_to_explorer_on_stake_contract()
{
    var url = 'https://polygonscan.com/address/'+glob['api_wallet_info']['stake_ddao_lock_contract'];
//    console.log('!!!!!!!!!!!!!!!!!!!!!!!!! '+url);
    window.open(url, '_blank');
    return false;
}