$('.galeria_img').click(function(e){
    var img =e.target.src;
    var modal= '<div class="modal" id="modal"><div class="container_modal"><div class="imagen_modal"><img src="'+img+'" class="modal_img"></div></div><div class="modal_botton" id="modal_botton"><i class="far fa-times-circle"></i></div></div>';
    $('body').append(modal);
    $('#modal_botton').click(function(){
        $('#modal').remove();
    })   
})