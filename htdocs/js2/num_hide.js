function num_hide(id)
{
    log(id);
    var x = document.getElementById(id);
    if(x.classList.contains("d-none"))
    x.classList.remove("d-none");
    else    
    x.classList.add("d-none");
}