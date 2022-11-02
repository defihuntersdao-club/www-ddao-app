function dashboard_update(t)
{
    var y = "";
    var y2 = "";
    var l = 0;
    var k = "";
    y = JSON.parse(t);
        console.log(y.result);
	for (k in y.result)
	{
	    console.log("k: "+k);
	    console.log("v: "+y.result[k]);
	    y2 = document.getElementsByClassName(k);
	    l = y2.length;
	    console.log("L:"+l);
	    for(i=0;i<l;i++)
	    {
	    x = y2[i];
	    x.innerHTML = y.result[k];
	    }
	    
	}
	
}
function dashboard_load()
{
//    setInterval()
//    var url = 'https://api-v02-test.defihuntersdao.club/dashboard';
    var url = glob["api2_url"] + '/dashboard';
    getData(url,"dashboard_update(xhr.response);");
}
dashboard_load();
setInterval(dashboard_load,3000);
