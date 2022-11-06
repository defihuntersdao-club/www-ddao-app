function show_more_tokens2()
{
//    x = document.getElementById
    var e = document.getElementById('btn_show_more_tokens');
    e.disabled = true;
    e.innerHTML = '<img class=loader1  src=/images/loading-102.gif>';
    e.classList.remove('d-none');
    token_addons_html_load();
}
function show_more_tokens(e)
{
//    x = document.getElementById
    e.disabled = true;
    e.innerHTML = '<img class=loader1  src=/images/loading-102.gif>';
    token_addons_html_load();
}

function token_addons_html_load()
{
//    setInterval()
    var url = '/shadow/?a=token_addons_html';
    console.log('Load from '+url);
    getData(url,"token_addons_html_update(xhr.response);");
}
function token_addons_html_update(a)
{
    var x = document.getElementById('token_addons_html');
    console.log('loaded');
    var y = JSON.parse(a);
//    console.log(y.result);
    x.innerHTML = y.result;
    x.className = 'row';
//    x = document.getElementById('btn_show_more_tokens');
//    x.className = 'd-none';

    var url = glob["api2_url"] + 'balance_token/'+login_get();
//    console.log(url);
    getData(url,"balance_token_update(xhr.response);");

}
function balance_token_update(t)
{
    var x = '';
    var x2 = '';
    var y = '';
    var l = 0;
    y = JSON.parse(t);
//    console.log(y);
        if(y.result === undefined)return false;
//        console.log(y.result);
    x = document.getElementById('btn_show_more_tokens');
    x.className = 'd-none';

        //if(0)
        for (k in y.result)
        {
//	    console.log(k);


	    if(document.getElementById("tkn_"+k) !== null)
	    {
	    l++;
	    x = document.getElementById("tkn_"+k);
//	    console.log(x);
		if(x.innerHTML != y.result[k].balance)
		x.innerHTML = y.result[k].balance;
	        x2 = document.getElementById('row_'+k);
//		console.log(x2);
		if(x.innerHTML != "0")
		{
		    x2 = document.getElementById('row_'+k);
		    x2.classList.remove('d-none');
		}
//		else
		
	    }
	}
    count_tkn();

}
function count_tkn()
{
    var x;
    var y = document.getElementsByClassName('tkn_count');
    var l = y.length;
    var n = 0;
    for(i=0;i<l;i++)
    {
	x = y[i];
	if(x.innerHTML != '0')
	n++;
    }
	var x3 = document.getElementById('addons_tkn_count');
	x3.innerHTML = ' ['+n+'/'+l+']';
}
function zero_balances(e)
{
    var x;
    var x2;
//    var x3;
    var y = document.getElementsByClassName('tkn_count');
    var l = y.length;
    var show;
    var i;
    var id;
    var name;

//    x3 = document.getElementById('addons_tkn_count');
//    x3.innerHTML = ' ['+l+']';
//    console.log("L "+l);
    if(e.innerHTML=='Show 0 balance')
    {
	e.innerHTML='Hide 0 balance'
	show = 1;
    }
    else
    {
	e.innerHTML='Show 0 balance';
	show = 0;
    }
    for(i=0;i<l;i++)
    {
	x = y[i];
	id = x.id;
	name = 'row_'+id.substr(4,id.length-4);
	x2 = document.getElementById(name);
	if(show && x.innerHTML == '0')
	x2.classList.remove('d-none');
//	else
	if(!show && x.innerHTML == '0')
	x2.classList.add('d-none');
	

//	console.log(x.innerHTML+' '+name+' '+x2.className);
    }
    count_tkn();
    x.inner
}