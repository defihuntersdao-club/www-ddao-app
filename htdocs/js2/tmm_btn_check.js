function tmm_btn_check()
{

    if(!glob["tmm_btn_check"])return false;

    var x = "";
    var y = "";
    var w = "";
    var t = "";
//    console.log(glob["api_wallet_info"]["tmm_matic_act"]);
//    console.log(glob["api_wallet_info"]["tmm_bsc_act"]);
//    console.log(chainId);

//    w = document.getElementById('tmm_btn_amount');;
    x = document.getElementById('tmm_wal_connect');
    y = x.className;
    if(chainId == 0 && y == "d-none")
    {
	x.className = "";
//	w.className = "d-none";
    }
    if(chainId != 0 && y == "")
    {
	x.className = "d-none";
//	w.className = "subm_btn";
    }
//-----------------------------
    if(chainId == 0)
    {
	w = document.getElementById('tmm_bsc_btn');
	w.innerHTML = "";
	w = document.getElementById('tmm_matic_btn');
	w.innerHTML = "";
    }

    if(chainId != 0)
    {
	if(glob["api_wallet_info"]["tmm_bsc_act"] == "no_money")
	{
	    w = document.getElementById('tmm_bsc_btn');
	if(chainId == 56)
	{
	    t = "<b style=font-size:10px>YOU DO NOT HAVE ENOUGH<br>USDT TO PARTICIPATE</b>";
//	    t += " <b>BUY USDT</b>";
	}
	else
	{
	    t = "<button class=\"btn btn-secondary\" onclick=\"change_chain('bsc');\">Switch</button>";
	}
	    if(w.innerHTML != t)w.innerHTML = t;
	}
    }

    if(chainId != 0)
    {
	if(glob["api_wallet_info"]["tmm_bsc_act"] == "approve")
	{
	    w = document.getElementById('tmm_bsc_btn');
	if(chainId == 56)
	{
	    t = "<button class=\"art-button2 btn btn-xs btn-primary\" onclick=\"tmm_bsc_approve()\">Approve</button>";
	}
	else
	{
	    t = "<button class=\"btn btn-secondary\" onclick=\"change_chain('bsc');\">Switch</button>";
	}
	    if(w.innerHTML != t)w.innerHTML = t;
	}
    }
//-----------------------------
    if(chainId != 0)
    {
	if(glob["api_wallet_info"]["tmm_matic_act"] == "no_money")
	{
	    w = document.getElementById('tmm_matic_btn');
	if(chainId == 137)
	{
//	    t = "<b>BUY USDT</b>";
	    t = "<button class=\"btn btn-secondary\" onclick=\"change_chain('bsc');\">Switch</button>";

	}
	else
	{
	    t = "<button class=\"btn btn-secondary\" onclick=\"change_chain('matic');\">Switch</button>";
	}
	    if(w.innerHTML != t)w.innerHTML = t;
	}
    }
//-----------------------------
    if(chainId != 0)
    {
	if(glob["api_wallet_info"]["tmm_matic_act"] == "approve")
	{
	    w = document.getElementById('tmm_matic_btn');
	if(chainId == 137)
	{
	    t = "<button class=\"art-button2 btn btn-xs btn-primary\" onclick=\"tmm_matic_approve();\">Approve</button>";
	}
	else
	{
	    t = "<button class=\"btn btn-secondary\" onclick=\"change_chain('matic');\">Switch</button>";
	}
	    if(w.innerHTML != t)w.innerHTML = t;
	}
    }
//-----------------------------
    if(chainId != 0)
    {
	if(glob["api_wallet_info"]["tmm_bsc_act"] == "alloc")
	{
	    w = document.getElementById('tmm_bsc_btn');
	if(chainId == 56)
	{
	    t = "<button class=\"art-button2 btn btn-xs btn-primary\" onclick=\"tmm_bsc_alloc();\">Alloc</button>";
	}
	else
	{
	    t = "<button class=\"btn btn-secondary\" onclick=\"change_chain('bsc');\">Switch</button>";
	}
	    if(w.innerHTML != t)w.innerHTML = t;
	}
    }
//-----------------------------
    if(chainId != 0)
    {
	if(glob["api_wallet_info"]["tmm_matic_act"] == "alloc")
	{
	    w = document.getElementById('tmm_matic_btn');
	if(chainId == 137)
	{
	    t = "<button class=\"art-button2 btn btn-xs btn-primary\" onclick=\"tmm_matic_alloc();\">Alloc</button>";
	}
	else
	{
	    t = "<button class=\"btn btn-secondary\" onclick=\"change_chain('matic');\">Switch</button>";
	}
	    if(w.innerHTML != t)w.innerHTML = t;
	}
    }
    //console.log(glob["item2"]);
}
setInterval(tmm_btn_check,1000);

function tmm_bsc_approve()
{
    var c = glob["api_wallet_info"]["tmm_bsc_contract"]; 
    var t = glob["api_wallet_info"]["tmm_bsc_tkn"];

    tmm_approve(c,t);
}
function tmm_matic_approve()
{
    var c = glob["api_wallet_info"]["tmm_matic_contract"];
    var t = glob["api_wallet_info"]["tmm_matic_tkn"];
     
    tmm_approve(c,t);
}
async function tmm_approve(contractAddr,tkn)
{                                                                                                                                                                                           
                                                                                                                                                                                            
//    console.log("ID: "+id);                                                                                                                                                               
//    console.log(glob["api_wallet_info"]);                                                                                                                                                 
//   var contractAddr = glob["api_wallet_info"]["addr_contract"];                                                                                                                             
//   var tkn = glob["api_wallet_info"]["addr_addao"];                                                                                                                                         
                                                                                                                                                                                            
    const provider2         = new ethers.providers.Web3Provider(provider);                                                                                                                  
    const signer2 = provider2.getSigner()                                                                                                                                                   
    console.log("Contract: "+tkn);                                                                                                                                                          
                                                                                                                                                                                            
    var wal = selectedAccount;                                                                                                                                                              
    if(!wal) return false;                                                                                                                                                                  
                                                                                                                                                                                            
    const cApprove = new ethers.Contract(tkn, glob["abi"], signer2);                                                                                                                        
    r = await cApprove.approve(contractAddr,"10000000000000000000000000000000000000000000000000");                                                                                          
                                                                                                                                                                                            
} 

function tmm_matic_alloc()
{
    glob["tmm_contract"] 	= glob["api_wallet_info"]["tmm_matic_contract"];
    glob["tmm_tkn"] 		= glob["api_wallet_info"]["tmm_matic_tkn"]; 
    glob["tmm_decimal"] 	= glob["api_wallet_info"]["tmm_matic_decimal2"]; 

    glob["tmm_sale"] =  glob["api_wallet_info"]["tmm_sale"];

    var x = document.getElementById("tmm_input");
	x.min = glob["api_wallet_info"]["tmm_minimal"];
	if(x.value < x.min)x.value = x.min;
//    glob["tmm_value"] = x.value;


    x = document.getElementById('tmm_modal_net');
    x.innerHTML = "on Polygon";
    tmm_clear_err();
    var myModal = new bootstrap.Modal(document.getElementById('tmm_modal'));
    myModal.show();
}
function tmm_bsc_alloc()
{
    glob["tmm_contract"] 	= glob["api_wallet_info"]["tmm_bsc_contract"]; 
    glob["tmm_tkn"] 		= glob["api_wallet_info"]["tmm_bsc_tkn"]; 
    glob["tmm_sale"] =  glob["api_wallet_info"]["tmm_sale"];
    glob["tmm_decimal"] 	= glob["api_wallet_info"]["tmm_bsc_decimal2"]; 

    var x = document.getElementById("tmm_input");
	x.min = glob["api_wallet_info"]["tmm_minimal"];
	if(x.value < x.min)x.value = x.min;

//    glob["tmm_value"] = x.value;

    x = document.getElementById('tmm_modal_net');
    x.innerHTML = "on BSC";

    var myModal = new bootstrap.Modal(document.getElementById('tmm_modal'));
    myModal.show();

}
function tmm_clear_err()
{
    var x = "";
	    x = document.getElementById("tmm_err");
	    x.innerHTML = "";

}
async function tmm_alloc()                                                                                                                                                              
{                                                                                                                                                                                           
        
    tmm_clear_err();
    var t = "";                                                
    var x = "";
    var y = "";
    var r = "";
    
    var v = 0;
    x = document.getElementById("tmm_input");
    v = x.value;
    if(v*1 < glob["api_wallet_info"]["tmm_minimal"]*1)
    v = glob["api_wallet_info"]["tmm_minimal"];
    //v = glob["tmm_value"];
    v = Math.round(v,0);
    x.value = v;
    console.log("Now Send: "+v);

    v += ""+glob["tmm_decimal"];

	                                                                                                                                
//    console.log("ID: "+id);                                                                                                                                                               
//    console.log(glob["api_wallet_info"]);                                                                                                                                                 
//   var contractAddr = glob["tmm_contract"];                                                                                                                             
//   var tkn = glob["api_wallet_info"]["addr_addao"];                                                                                                                                         
                                                                                                                                                                                            
    const provider2         = new ethers.providers.Web3Provider(provider);                                                                                                                  
    const signer2 = provider2.getSigner()                                                                                                                                                   
//    console.log("Contract: "+tkn);                                                                                                                                                          
                                                                                                                                                                                            
    var wal = selectedAccount;                                                                                                                                                              
    if(!wal) return false;                                                                                                                                                                  
                                                                                                                                                                                            
    const cAlloc = new ethers.Contract(glob["tmm_contract"], glob["abi_v04"], signer2);                                                                                                                        
//    r = await cAlloc.approve(contractAddr,"10000000000000000000000000000000000000000000000000");
//    try
    console.log(glob["tmm_contract"]);                          
console.log(glob["tmm_sale"]); 
console.log(wal);                                                                                                                                                          
//console.log(v);                                                                                                                                                          
//console.log(glob["tmm_tkn"]);
    r = "";                                                                                                                                                          
    try
    {                                                                                                                                                                                       
//    r = await cAlloc.Allocate(glob["tmm_sale"],1,wal,v, glob["tmm_tkn"]);
    r = await cAlloc.Allocate(glob["tmm_sale"],1,wal,v, 0);
    }
    catch(e)
    {
            t = e.data.message;                                                                                                                                                             
            if(t.substring(0,19)=="execution reverted:")                                                                                                                                    
            t = t.substring(20);                                                                                                                                                            
            console.log("Metamask Error: "+t+"");   
	    x = document.getElementById("tmm_err");
	    x.innerHTML = t;
    }
/*                                                                                                                                                                                       
    catch(e)                                                                                                                                                                                
        {                                                                                                                                                                                   
            t = e.data.message;                                                                                                                                                             
            if(t.substring(0,19)=="execution reverted:")                                                                                                                                    
            t = t.substring(20);                                                                                                                                                            
            console.log("Metamask Error: "+t+"");                                                                                                                                           
        }                                                                                                                                                                                   
*/
//.then((txHash) => console.log(txHash))                                                                                                                                                    
//.catch((error) => console.log(error));                                                                                                                                                    
    if(r!="")
    {
	    x = document.getElementById("tmm_close");
	    x.click();

	    x = document.getElementById("tmm_err");
	    x.innerHTML = "";
//	    x.innerHTML = "Transaction already sent";;

//    var myModal2 = new bootstrap.Modal(document.getElementById('tmm_modal'));                                                                                                             
//    myModal2.hide();                           
                                                                                                                                                        
    console.log("TX:'"+r.hash+"'");
    console.log(r);
    }
                                                                                                                                                                                            
}      
function tmm_max()
{
    var k = "";
    var x = "";
    x = document.getElementById("tmm_input");                                                                                                                                            

    if(chainId == 56)k = "bsc";
    if(chainId == 137)k = "matic";
    
    k = "tmm_"+k+"_balance2";
    x.value = glob["api_wallet_info"][k];                                                                                                                                                                                
    
}
function tmm_min()
{
    var x = "";
    x = document.getElementById("tmm_input");                                                                                                                                            
//    x.value = x.min;
	x.value = glob["api_wallet_info"]["tmm_minimal"];

}
function tmm_plus()
{	
    var x = "";
    x = document.getElementById("tmm_input");                                                                                                                                            
    x.value = x.value*1 + x.step*1;    
}
function tmm_minus()
{	
    var x = "";
    x = document.getElementById("tmm_input");                                                                                                                                            
    x.value = x.value*1-x.step*1;
    if(x.value < x.min)
    x.value = x.min;    
}