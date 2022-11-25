$(document).ready(function(){
    function cambiar(name){
        menuItemCurrent = document.getElementById(name);
        var currentMenu = document.getElementsByClassName("active");
        currentMenu[0].className = currentMenu[0].className.replace(" active", "");
        menuItemCurrent.className += " active";
    }

    var current = 1,current_step,next_step,steps;
    steps = $("fieldset").length;
    $(".next").click(function(){
        current_step = $(this).parent();
        next_step = $(this).parent().next();
        next_step.show();
        current_step.hide();
        setProgressBar(++current);

        if (current == 2) {
            cambiar("ubicacion");
        }
        if (current == 3) {
            cambiar("caracteristicas");
        }
        if (current == 4) {
            cambiar("multimedia");
        }

    });
    $(".previous").click(function(){
        current_step = $(this).parent();
        next_step = $(this).parent().prev();
        next_step.show();
        current_step.hide();
        setProgressBar(--current);

        if (current == 1) {
            cambiar("operacion");
        }
        if (current == 2) {
            cambiar("ubicacion");
        }
        if (current == 3) {
            cambiar("caracteristicas");
        }
    });
    setProgressBar(current);
    function setProgressBar(curStep){
        var percent = parseFloat(100 / steps) * curStep;
        percent = percent.toFixed();
        // $(".progress-bar")
        // .css("width",percent+"%")
        // .html(percent+"%");
    }
});

function publicarAnuncio() {
    $.ajax({
        url: base_url + "index.php/Dashboard/insertarAnuncio",
        method: "POST",
        dataType: "json",
        data: $("#frmAnuncios").serialize(),
        success: function(response){
            if (response == "ok") {
                window.location.href =  base_url;

            }else{
                console.log("Error");
            }
        }
    })
}