function show_modal_buy_ddao()
{
//  var x = document.getElementById('modal_buy_ddao');
//  x.modal('show');
//if(get_login() == '0x330ec7c6afc3cf19511ad4041e598b235d44862f')
if(login_get() == '0x330ec7c6afc3cf19511ad4041e598b235d44862f')
$('#modal_buy_ddao').modal('show');
//console.log("Login:"+login_get());
//
}
setTimeout(show_modal_buy_ddao,1000);

//$('#modal_buy_ddao').on('shown.bs.modal', function () {
//  $('#myInput').trigger('focus')
//})