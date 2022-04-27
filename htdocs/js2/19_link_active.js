function menu_active(item)
{
    var x = document.getElementsByClassName("top-tabs__tab");
    var l = x.length;
    //console.log("link len: "+l);
    for(var i = 0;i<l;i++)
    {
	if(x[i].href.indexOf(item)>0)
	{
	x[i].classList.add('active');
	}
	else
	{
	x[i].classList.remove('active');
	}
    }
}