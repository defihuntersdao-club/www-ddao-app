function btn_info_link(id)
{
    var url = "";
    var t = "";
    var pos = 0;
    pos = id.indexOf("_");
    if(pos>0)
    t = id.substr(pos+1);
//    log(t);
//    url = "#/alloc/"+t;
    url = "/info_"+t;
//log("btn_pool_link ----------------"+url);
console.log("REDIR: "+url);
    redir(url);
    //location.href = url;
    //console.log(t);
    //log("btn_pool_link "+t.id);
}