function stepn_fund1_func(c)
{
    var x = '';
    x = document.getElementById('stepn_fund1_balance_input');
    
    switch(c)
    {
	case "min":
	    x.value = x.min;	    
	break;
	case "minus":
	    x.value = x.value*1 - x.step*1;
	    if(x.value*1 < x.min*1)x.value = x.min;	    
	break;
	case "plus":
	    x.value = x.value*1 + x.step*1;	    
	    if(x.value*1 > (x.max*1-x.step*1))x.value = x.max*1 - x.step*1;	    
	break;
	case "max":
	    x.value = x.max*1-0.002;
	    if(x.value*1 < 0)x.value = 0;

	break;


    }
}