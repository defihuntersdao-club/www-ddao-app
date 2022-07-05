function metatg_btn_check()
{

    if(!glob["metatg_btn_check"])return false;

    var x = "";
    var y = "";
    var w = "";
    var t = "";
//    console.log(glob["api_wallet_info"]["metatg_matic_act"]);
//    console.log(glob["api_wallet_info"]["metatg_bsc_act"]);
//    console.log(chainId);

//    w = document.getElementById('metatg_btn_amount');;
    x = document.getElementById('metatg_wal_connect');
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
	w = document.getElementById('metatg_bsc_btn');
	w.innerHTML = "";
	w = document.getElementById('metatg_matic_btn');
	w.innerHTML = "";
    }

    if(chainId != 0)
    {
	if(glob["api_wallet_info"]["metatg_bsc_act"] == "approve")
	{
	    w = document.getElementById('metatg_bsc_btn');
	if(chainId == 56)
	{
	    t = "<button class=\"art-button2 btn btn-xs btn-primary\" onclick=\"metatg_bsc_approve()\">Approve</button>";
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
	if(glob["api_wallet_info"]["metatg_matic_act"] == "approve")
	{
	    w = document.getElementById('metatg_matic_btn');
	if(chainId == 137)
	{
	    t = "<button class=\"art-button2 btn btn-xs btn-primary\" onclick=\"metatg_matic_approve();\">Approve</button>";
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
	if(glob["api_wallet_info"]["metatg_bsc_act"] == "alloc")
	{
	    w = document.getElementById('metatg_bsc_btn');
	if(chainId == 56)
	{
	    t = "<button class=\"art-button2 btn btn-xs btn-primary\" onclick=\"metatg_bsc_alloc();\">Alloc</button>";
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
	if(glob["api_wallet_info"]["metatg_matic_act"] == "alloc")
	{
	    w = document.getElementById('metatg_matic_btn');
	if(chainId == 137)
	{
	    t = "<button class=\"art-button2 btn btn-xs btn-primary\" onclick=\"metatg_matic_alloc();\">Alloc</button>";
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
setInterval(metatg_btn_check,1000);

function metatg_bsc_approve()
{
    var c = glob["api_wallet_info"]["metatg_bsc_contract"]; 
    var t = glob["api_wallet_info"]["metatg_bsc_tkn"];

    metatg_approve(c,t);
}
function metatg_matic_approve()
{
    var c = glob["api_wallet_info"]["metatg_matic_contract"];
    var t = glob["api_wallet_info"]["metatg_matic_tkn"];
     
    metatg_approve(c,t);
}
async function metatg_approve(contractAddr,tkn)
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

function metatg_matic_alloc()
{
    glob["metatg_contract"] 	= glob["api_wallet_info"]["metatg_matic_contract"];
    glob["metatg_tkn"] 		= glob["api_wallet_info"]["metatg_matic_tkn"]; 
    glob["metatg_decimal"] 	= glob["api_wallet_info"]["metatg_matic_decimal2"]; 

    glob["metatg_sale"] =  glob["api_wallet_info"]["metatg_sale"];

    var x = document.getElementById("metatg_input");
	x.min = glob["api_wallet_info"]["metatg_minimal"];
	if(x.value < x.min)x.value = x.min;
//    glob["metatg_value"] = x.value;


    x = document.getElementById('metatg_modal_net');
    x.innerHTML = "on Polygon";
    metatg_clear_err();
    var myModal = new bootstrap.Modal(document.getElementById('metatg_modal'));
    myModal.show();
}
function metatg_bsc_alloc()
{
    glob["metatg_contract"] 	= glob["api_wallet_info"]["metatg_bsc_contract"]; 
    glob["metatg_tkn"] 		= glob["api_wallet_info"]["metatg_bsc_tkn"]; 
    glob["metatg_sale"] =  glob["api_wallet_info"]["metatg_sale"];
    glob["metatg_decimal"] 	= glob["api_wallet_info"]["metatg_bsc_decimal2"]; 

    var x = document.getElementById("metatg_input");
	x.min = glob["api_wallet_info"]["metatg_minimal"];
	if(x.value < x.min)x.value = x.min;

//    glob["metatg_value"] = x.value;

    x = document.getElementById('metatg_modal_net');
    x.innerHTML = "on BSC";

    var myModal = new bootstrap.Modal(document.getElementById('metatg_modal'));
    myModal.show();

}
function metatg_clear_err()
{
    var x = "";
	    x = document.getElementById("metatg_err");
	    x.innerHTML = "";

}
async function metatg_alloc()                                                                                                                                                              
{                                                                                                                                                                                           
        
    metatg_clear_err();
    var t = "";                                                
    var x = "";
    var y = "";
    var r = "";
    
    var v = 0;
    x = document.getElementById("metatg_input");
    v = x.value;
    if(v*1 < glob["api_wallet_info"]["metatg_minimal"]*1)
    v = glob["api_wallet_info"]["metatg_minimal"];
    //v = glob["metatg_value"];
    v = Math.round(v,0);
    x.value = v;
    console.log("Now Send: "+v);

    v += ""+glob["metatg_decimal"];

	                                                                                                                                
//    console.log("ID: "+id);                                                                                                                                                               
//    console.log(glob["api_wallet_info"]);                                                                                                                                                 
//   var contractAddr = glob["metatg_contract"];                                                                                                                             
//   var tkn = glob["api_wallet_info"]["addr_addao"];                                                                                                                                         
                                                                                                                                                                                            
    const provider2         = new ethers.providers.Web3Provider(provider);                                                                                                                  
    const signer2 = provider2.getSigner()                                                                                                                                                   
//    console.log("Contract: "+tkn);                                                                                                                                                          
                                                                                                                                                                                            
    var wal = selectedAccount;                                                                                                                                                              
    if(!wal) return false;                                                                                                                                                                  
                                                                                                                                                                                            
    const cAlloc = new ethers.Contract(glob["metatg_contract"], glob["abi_metatg"], signer2);                                                                                                                        
//    r = await cAlloc.approve(contractAddr,"10000000000000000000000000000000000000000000000000");
//    try
    console.log(glob["metatg_contract"]);                          
console.log(glob["metatg_sale"]); 
console.log(wal);                                                                                                                                                          
//console.log(v);                                                                                                                                                          
//console.log(glob["metatg_tkn"]);
    r = "";                                                                                                                                                          
    try
    {                                                                                                                                                                                       
//    r = await cAlloc.Allocate(glob["metatg_sale"],1,wal,v, glob["metatg_tkn"]);
    r = await cAlloc.Allocate(glob["metatg_sale"],1,wal,v, 0);
    }
    catch(e)
    {
            t = e.data.message;                                                                                                                                                             
            if(t.substring(0,19)=="execution reverted:")                                                                                                                                    
            t = t.substring(20);                                                                                                                                                            
            console.log("Metamask Error: "+t+"");   
	    x = document.getElementById("metatg_err");
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
	    x = document.getElementById("metatg_close");
	    x.click();

	    x = document.getElementById("metatg_err");
	    x.innerHTML = "";
//	    x.innerHTML = "Transaction already sent";;

//    var myModal2 = new bootstrap.Modal(document.getElementById('metatg_modal'));                                                                                                             
//    myModal2.hide();                           
                                                                                                                                                        
    console.log("TX:'"+r.hash+"'");
    console.log(r);
    }
                                                                                                                                                                                            
}      
function metatg_max()
{
    var k = "";
    var x = "";
    x = document.getElementById("metatg_input");                                                                                                                                            

    if(chainId == 56)k = "bsc";
    if(chainId == 137)k = "matic";
    
    k = "metatg_"+k+"_balance2";
    x.value = glob["api_wallet_info"][k];                                                                                                                                                                                
    
}
function metatg_min()
{
    var x = "";
    x = document.getElementById("metatg_input");                                                                                                                                            
//    x.value = x.min;
	x.value = glob["api_wallet_info"]["metatg_minimal"];

}
function metatg_plus()
{	
    var x = "";
    x = document.getElementById("metatg_input");                                                                                                                                            
    x.value += x.step;    
}
function metatg_minus()
{	
    var x = "";
    x = document.getElementById("metatg_input");                                                                                                                                            
    x.value -= x.step;
    if(x.value < x.min)
    x.value = x.min;    
}