window.addEventListener('hashchange', function()
{
    location_get();
}
)
function location_get()
{
    var t = "";
    t = document.location.href;
    console.log('location changed! '+t);
    location_get_info("wal");
}
location_get();
function location_get_info(whats)
{
    var v = "";
    var p = 0;
    var t = "";
    t = document.location.href;
    p = t.indexOf("#");
    p++;
    v = t.substring(p);

    console.log(v);
    r = parse_slash(v);

    if(r["wal"] !== undefined)
    {
    log(r["wal"]);
    if(r["wal"] != login_get() && r["wal"].length == 42)
    login_set(r["wal"]);
    }

    switch(whats)
    {
    }
}
function parse_slash(s)
{
    var r = new Array();
    var n = 0;
    var n2 = "";
    var p = 0;
    var p2 = 0;
    var t = "";
    var v = "";
    var f = 1;
    //log(s);
    do
    {
//    log("S: "+s);
    p = s.indexOf("/");
    p++;
//    log("P: "+p)
    t = s.substring(p);
    p2 = t.indexOf("/");
    if(p2>0)
    v = t.substring(0,p2);
    else
    {
//    v = t.substring(p);
    v = t;
    f = 0;
    }
    log("V: "+v)


	switch(n+"")
	{
	    case "0":
		n2 = "item";
	    break;

	    case "1":
		n2 = "wal";
		v = v.toLowerCase();
	    break;

	    case "2":
		n2 = "net";
	    break;
	    default:
		n2 = n;
	}
//    r[n] = v;
    r[n2] = v;
    
    n++;
    s = s.substring(p+p2);
//    log("P:"+p+" "+"P2:"+p2+" V:"+v+" S:"+s);
    }
    while(p>=0 && n<20 && f);

//    console.log(r);
    
    return r;
}