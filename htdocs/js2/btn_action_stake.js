/////////////////////////
async function btn_action_stake(id2,v)
{
    var x = "";
    var a = "";
    var r = 0;
    var id = "btn_"+id2;
//    log("BTN: "+id+' '+v);
    txt = "No action";
    var err = "";

    if(!err)
    {
	txt = "Show More";
	//console.log(id);
	a = "btn_stake_link('"+id2+"');";
	//a = "modal_stake2_open('"+id2+");";
    }

    x = document.getElementById(id);
    if(x === null)
    log("NULL "+id);

//log("BTN CLICK: "+id);
    if(x !== null)
    if(x.innerHTML !=  txt)
    {
    x.innerHTML = txt;
    glob["btn_action"][id] = a;
    }
//    console.log(glob["btn_action"]);
}
