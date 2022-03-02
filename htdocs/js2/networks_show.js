function networks_show(true_or_false)
{
    var x = "";
    x = document.getElementById('networks');
    if(true_or_false)
    x.classList.remove("d-none");
    else
    x.classList.add("d-none");
}
