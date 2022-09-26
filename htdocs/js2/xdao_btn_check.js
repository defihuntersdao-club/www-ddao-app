function xdao_btn_check()
{

    if(!glob["xdao_btn_check"])return false;

    var x = "";
    var y = "";
    var w = "";
    var t = "";
//    console.log(glob["api_wallet_info"]["xdao_matic_act"]);
//    console.log(glob["api_wallet_info"]["xdao_bsc_act"]);
//    console.log(chainId);

//    w = document.getElementById('xdao_btn_amount');;
    x = document.getElementById('xdao_wal_connect');
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
	w = document.getElementById('xdao_bsc_btn');
	w.innerHTML = "";
	w = document.getElementById('xdao_matic_btn');
	w.innerHTML = "";
    }

    if(chainId != 0)
    {
	if(glob["api_wallet_info"]["xdao_bsc_act"] == "no_money")
	{
	    w = document.getElementById('xdao_bsc_btn');
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
	if(glob["api_wallet_info"]["xdao_bsc_act"] == "approve")
	{
	    w = document.getElementById('xdao_bsc_btn');
	if(chainId == 56)
	{
	    t = "<button class=\"art-button2 btn btn-xs btn-primary\" onclick=\"xdao_bsc_approve()\">Approve</button>";
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
	if(glob["api_wallet_info"]["xdao_matic_act"] == "no_money")
	{
	    w = document.getElementById('xdao_matic_btn');
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
	if(glob["api_wallet_info"]["xdao_matic_act"] == "approve")
	{
	    w = document.getElementById('xdao_matic_btn');
	if(chainId == 137)
	{
	    t = "<button class=\"art-button2 btn btn-xs btn-primary\" onclick=\"xdao_matic_approve();\">Approve</button>";
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
	if(glob["api_wallet_info"]["xdao_bsc_act"] == "alloc")
	{
	    w = document.getElementById('xdao_bsc_btn');
	if(chainId == 56)
	{
	    t = "<button class=\"art-button2 btn btn-xs btn-primary\" onclick=\"xdao_bsc_alloc();\">Alloc</button>";
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
	if(glob["api_wallet_info"]["xdao_matic_act"] == "alloc")
	{
	    w = document.getElementById('xdao_matic_btn');
	if(chainId == 137)
	{
	    t = "<button class=\"art-button2 btn btn-xs btn-primary\" onclick=\"xdao_matic_alloc();\">Alloc</button>";
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
setInterval(xdao_btn_check,1000);

function xdao_bsc_approve()
{
    var c = glob["api_wallet_info"]["xdao_bsc_contract"]; 
    var t = glob["api_wallet_info"]["xdao_bsc_tkn"];

    xdao_approve(c,t);
}
function xdao_matic_approve()
{
    var c = glob["api_wallet_info"]["xdao_matic_contract"];
    var t = glob["api_wallet_info"]["xdao_matic_tkn"];
     
    xdao_approve(c,t);
}
async function xdao_approve(contractAddr,tkn)
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

function xdao_matic_alloc()
{
    glob["xdao_contract"] 	= glob["api_wallet_info"]["xdao_matic_contract"];
    glob["xdao_tkn"] 		= glob["api_wallet_info"]["xdao_matic_tkn"]; 
    glob["xdao_decimal"] 	= glob["api_wallet_info"]["xdao_matic_decimal2"]; 

    glob["xdao_sale"] =  glob["api_wallet_info"]["xdao_sale"];

    var x = document.getElementById("xdao_input");
	x.min = glob["api_wallet_info"]["xdao_minimal"];
	if(x.value < x.min)x.value = x.min;
//    glob["xdao_value"] = x.value;


    x = document.getElementById('xdao_modal_net');
    x.innerHTML = "on Polygon";
    xdao_clear_err();
    var myModal = new bootstrap.Modal(document.getElementById('xdao_modal'));
    myModal.show();
}
function xdao_bsc_alloc()
{
    glob["xdao_contract"] 	= glob["api_wallet_info"]["xdao_bsc_contract"]; 
    glob["xdao_tkn"] 		= glob["api_wallet_info"]["xdao_bsc_tkn"]; 
    glob["xdao_sale"] =  glob["api_wallet_info"]["xdao_sale"];
    glob["xdao_decimal"] 	= glob["api_wallet_info"]["xdao_bsc_decimal2"]; 

    var x = document.getElementById("xdao_input");
	x.min = glob["api_wallet_info"]["xdao_minimal"];
	if(x.value < x.min)x.value = x.min;

//    glob["xdao_value"] = x.value;

    x = document.getElementById('xdao_modal_net');
    x.innerHTML = "on BSC";

    var myModal = new bootstrap.Modal(document.getElementById('xdao_modal'));
    myModal.show();

}
function xdao_clear_err()
{
    var x = "";
	    x = document.getElementById("xdao_err");
	    x.innerHTML = "";

}
async function xdao_alloc()                                                                                                                                                              
{                                                                                                                                                                                           
        
    xdao_clear_err();
    var t = "";                                                
    var x = "";
    var y = "";
    var r = "";
    
    var v = 0;
    x = document.getElementById("xdao_input");
    v = x.value;
    if(v*1 < glob["api_wallet_info"]["xdao_minimal"]*1)
    v = glob["api_wallet_info"]["xdao_minimal"];
    //v = glob["xdao_value"];
    v = Math.round(v,0);
    x.value = v;
    console.log("Now Send: "+v);

    v += ""+glob["xdao_decimal"];

	                                                                                                                                
//    console.log("ID: "+id);                                                                                                                                                               
//    console.log(glob["api_wallet_info"]);                                                                                                                                                 
//   var contractAddr = glob["xdao_contract"];                                                                                                                             
//   var tkn = glob["api_wallet_info"]["addr_addao"];                                                                                                                                         
                                                                                                                                                                                            
    const provider2         = new ethers.providers.Web3Provider(provider);                                                                                                                  
    const signer2 = provider2.getSigner()                                                                                                                                                   
//    console.log("Contract: "+tkn);                                                                                                                                                          
                                                                                                                                                                                            
    var wal = selectedAccount;                                                                                                                                                              
    if(!wal) return false;                                                                                                                                                                  
                                                                                                                                                                                            
    const cAlloc = new ethers.Contract(glob["xdao_contract"], glob["abi_v04"], signer2);                                                                                                                        
//    r = await cAlloc.approve(contractAddr,"10000000000000000000000000000000000000000000000000");
//    try
    console.log(glob["xdao_contract"]);                          
console.log(glob["xdao_sale"]); 
console.log(wal);                                                                                                                                                          
//console.log(v);                                                                                                                                                          
//console.log(glob["xdao_tkn"]);
    r = "";                                                                                                                                                          
    try
    {                                                                                                                                                                                       
//    r = await cAlloc.Allocate(glob["xdao_sale"],1,wal,v, glob["xdao_tkn"]);
    r = await cAlloc.Allocate(glob["xdao_sale"],1,wal,v, 0);
    }
    catch(e)
    {
            t = e.data.message;                                                                                                                                                             
            if(t.substring(0,19)=="execution reverted:")                                                                                                                                    
            t = t.substring(20);                                                                                                                                                            
            console.log("Metamask Error: "+t+"");   
	    x = document.getElementById("xdao_err");
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
	    x = document.getElementById("xdao_close");
	    x.click();

	    x = document.getElementById("xdao_err");
	    x.innerHTML = "";
//	    x.innerHTML = "Transaction already sent";;

//    var myModal2 = new bootstrap.Modal(document.getElementById('xdao_modal'));                                                                                                             
//    myModal2.hide();                           
                                                                                                                                                        
    console.log("TX:'"+r.hash+"'");
    console.log(r);
    }
                                                                                                                                                                                            
}      
function xdao_max()
{
    var k = "";
    var x = "";
    x = document.getElementById("xdao_input");                                                                                                                                            

    if(chainId == 56)k = "bsc";
    if(chainId == 137)k = "matic";
    
    k = "xdao_"+k+"_balance2";
    x.value = glob["api_wallet_info"][k];                                                                                                                                                                                
    
}
function xdao_min()
{
    var x = "";
    x = document.getElementById("xdao_input");                                                                                                                                            
//    x.value = x.min;
	x.value = glob["api_wallet_info"]["xdao_minimal"];

}
function xdao_plus()
{	
    var x = "";
    x = document.getElementById("xdao_input");                                                                                                                                            
    x.value = x.value*1 + x.step*1;    
}
function xdao_minus()
{	
    var x = "";
    x = document.getElementById("xdao_input");                                                                                                                                            
    x.value = x.value*1-x.step*1;
    if(x.value < x.min)
    x.value = x.min;    
}