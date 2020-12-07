var index = 0;

var listaimg1 = [
    "images/img-index/corporate_events_1.jpg", 
    "images/img-index/corporate_events_2.jpg",
    "images/img-index/corporate_events_3.jpg"
];
var listaimg2 = [
    "images/img-index/ceremony_1.jpg", 
    "images/img-index/ceremony_2.jpg",
    "images/img-index/ceremony_3.jpg"
];

var listaimg3 = [
    "images/img-index/reception_1.jpg", 
    "images/img-index/reception_2.jpg",
    "images/img-index/reception_3.jpg"
];
var listaimg4 = [
    "images/img-index/scenic_1.jpg", 
    "images/img-index/scenic_2.jpg",
    "images/img-index/scenic_3.jpg"
];


///para tamaños pequeños
var Minlistaimg1 = [
    "images/img-index/min/min_corporate_events_1.jpg", 
    "images/img-index/min/min_corporate_events_2.jpg",
    "images/img-index/min/min_corporate_events_3.jpg"
];
var Minlistaimg2 = [
    "images/img-index/min/min_ceremony_1.jpg", 
    "images/img-index/min/min_ceremony_2.jpg",
    "images/img-index/min/min_ceremony_3.jpg"
];

var Minlistaimg3 = [
    "images/img-index/min/min_reception_1.jpg", 
    "images/img-index/min/min_reception_2.jpg",
    "images/img-index/min/min_reception_3.jpg"
];
var Minlistaimg4 = [
    "images/img-index/min/min_scenic_1.jpg", 
    "images/img-index/min/min_scenic_2.jpg",
    "images/img-index/min/min_scenic_3.jpg"
];

function changeImage_caja1() {
    if (window.matchMedia("(min-width: 1024px)").matches) {
        $('.animation-imagen-1').show().css("background-image", 'url(' + listaimg1[index] + ')');
    }else{
        $('.animation-imagen-1').show().css("background-image", 'url(' + Minlistaimg1[index] + ')'); 
    }

    index++;         
    if(index == 3){
        index = 0;
    }
}

function changeImage_caja2() {

    if (window.matchMedia("(min-width: 1024px)").matches) {
        $('.animation-imagen-2').show().css("background-image", 'url(' + listaimg2[index] + ')');
    }else{
        $('.animation-imagen-2').show().css("background-image", 'url(' + Minlistaimg2[index] + ')');
    }

    index++;         
    if(index == 3){
        index = 0;
    }
}
function changeImage_caja3() {
    

    if (window.matchMedia("(min-width: 1024px)").matches) {
        $('.animation-imagen-3').show().css("background-image", 'url(' + listaimg3[index] + ')'); 
    }else{
        $('.animation-imagen-3').show().css("background-image", 'url(' + Minlistaimg3[index] + ')'); 
    }

    index++;         
    if(index == 3){
        index = 0;
    }
}

function changeImage_caja4() {
    if (window.matchMedia("(min-width: 1024px)").matches) {
        $('.animation-imagen-4').show().css("background-image", 'url(' + listaimg4[index] + ')'); 
    }else{
        $('.animation-imagen-4').show().css("background-image", 'url(' + Minlistaimg4[index] + ')'); 
    }
    
    index++;         
    if(index == 3){
        index = 0;
    }
}
function ocultarMenu(){
    if (window.matchMedia("(max-width: 1024px)").matches) {
        $('#about').hide();
        // $("#abouts").css("display", "none");
    }
    if (window.matchMedia("(max-width: 1025px)").matches) {
        $('#about').show();
        // $("#about").css({"display": "block","animation":"about 0s linear","animation-delay":"0s","animation-fill-mode":"forwards"});
    }
}


window.addEventListener("load", function(){

    changeImage_caja1();
    changeImage_caja2();
    changeImage_caja3();
    changeImage_caja4();
    ocultarMenu();
    
        $(function() {
            setInterval(changeImage_caja1, 9000);
            setInterval(changeImage_caja2, 9000);
            setInterval(changeImage_caja3, 9000);
            setInterval(changeImage_caja4, 9000);
            
        });
});

window.addEventListener("resize", changeImage_caja1, false);
window.addEventListener("resize", changeImage_caja2, false);
window.addEventListener("resize", changeImage_caja3, false);
window.addEventListener("resize", changeImage_caja4, false);