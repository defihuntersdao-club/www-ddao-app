function toggle_upper_panel()
{
    var t = 0;
    var x = "";
    var y = "";
    var name = 'set_upper_panel'
    x = document.getElementById('top-info-id');
    y = document.getElementById('upanel');
    t = localStorage.getItem(name);
    if(t == 1)
    {
    x.className = 'd-none';
    localStorage.setItem(name, 0);
//    y.checked = true;
//    y.prop('checked', true);
    }
    else
    {
    x.className = 'top-info';
    localStorage.setItem(name, 1);
//    y.checked = false;
//    y.prop('checked', false);
    }
}
function set_upanel2()
{
    var x1 = "";
    var y1 = "";
    var t1 = 0;
    var name1 = 'set_upper_panel';
//    y = document.getElementById();
    t1 = localStorage.getItem(name1);
    x1 = document.getElementById('top-info-id');
    y1 = document.getElementById('upanel');

    if(t1==1)
    {
	x1.className = 'top-info';
	y1.checked = false;
//	y.prop('checked', false);

    }
    else
    {
	x1.className = 'd-none';
	y1.checked = true;
//	y.prop('checked', true);

    }
}
set_upanel2();
//setTimeout(10,set_upanel);