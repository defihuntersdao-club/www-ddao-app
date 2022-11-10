function menu_active(item)
{
    var x = document.getElementsByClassName("top-tabs__tab");
    var l = x.length;
    var t = item;
    var pos = item.indexOf("_");
    if(pos>0)
    t = item.substr(0,pos);
    //console.log("link len: "+l);
    for(var i = 0;i<l;i++)
    {
//	if(x[i].href.indexOf(item)>0)
	if(x[i].href.indexOf(t)>0)
	{
	x[i].classList.add('active');
	}
	else
	{
	x[i].classList.remove('active');
	}
    }
}