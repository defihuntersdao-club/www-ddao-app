function btn_click_action(e)
{
    var a = "";
    if(glob["btn_action"][e.id] !== null)
    a = glob["btn_action"][e.id];
    log("btn CLICK:"+e.id +' a:'+a);
    if(a)eval(a);
    return false;
}
