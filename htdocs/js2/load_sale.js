function load_sale()
{
    getData("/cache/sale.json","load_sale_result(xhr.response)");
}

function load_sale_result(data)
{
        var x = "";
        var t = JSON.parse(data);
//        result_global = obj2arr(t);
	console.log(t);
}

load_sale();