function parse_data(data)
{
//	var id = "";
        var x = '';
        var n = '';
        var t2 = JSON.parse(data);
	var t = t2.result;
//console.log('asasasasasasasasasasasassa');
	//log("12121212121212121212");
        //log(t);
	//console.log(t);
	//if(0)
        for(i=0;i<t.count;i++)
        {
            //console.log(t.num[i].name);
            n = t.num[i].name;
            v = t.num[i].value;
//console.log(n+" "+v);
            x = document.getElementById(n);
            if(x !== null)
            {
            //console.log(x);
            if(x.innerHTML != v)
            {
            
//                  if(n=="AllocSaleAmount2")
                    //if(n=="AllocSaleAmount2" && x.innerHTML != "-")
                    //document.getElementById('beep').play();

                    x.innerHTML = v;
            }
            }
	    switch(n)
	    {
		case "alloc_logo":
		x = document.getElementById("alloc_logo_img");
		x.src = v;
		break;
		case "alloc_url":
		x = document.getElementById("alloc_a");
		x.href = v;
		break;
		case "SalePersent":
		x = document.getElementById("alloc_progress");
		x.setAttribute("data-percentage",v);
		break;
		case "stepn_fund1_minimal":
		    log("XXXXXXXXXXXXXXXXXXXXXXX 11111111111");
		break;
	    }

        }
        
}       
