function parse_data(data)
{
        var x = '';
        var n = '';
        var t = JSON.parse(data);
        //console.log(t);
        for(i=0;i<t.count;i++)
        {
            //console.log(t.num[i].name);
            n = t.num[i].name;
            v = t.num[i].value;
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
        }
        
}       
