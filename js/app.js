$(window).scroll(function () {
    if ($(window).scrollTop() >= '90' && !$('.navbar').hasClass('navbar-fixed-top')) {
        $('.navbar').addClass('navbar-fixed-top');
    } else if ($(window).scrollTop() < '90' && $('.navbar').hasClass('navbar-fixed-top')) {
        $('.navbar').removeClass('navbar-fixed-top');
    }
});

$('.navbar-nav a').click(function() {
    $('.navbar-nav a').removeClass('active');
    $(this).addClass('active');
});

$("#bttnMapa").click(function() {
    $("#googleMap").css('pointer-events', 'all');
});

$('.imc').keypress(function(e) {
    if(e.which == 13) {
        calculateIMC();
    }
});

$("#bttnCalcula").click(function () {
    calculateIMC();
});

function calculateIMC() {
    var peso = $("#peso").val();
    var altura = $("#altura").val() / 100;
    
    if(peso < 1)
    {
        peso = 1;
    }
    if(altura < 1)
    {
        altura = 1;
    }

    var imc = (peso/(altura*altura));

    if(imc < 18)
    {
        $("#indice").val(imc);
        $("#interpreta").val("Peso bajo.");
    }
    else if(imc < 25)
    {
        $("#indice").val(imc);
        $("#interpreta").val("Peso Normal.");
    }
    else if(imc < 27)
    {
        $("#indice").val(imc);
        $("#interpreta").val("Sobrepeso.");
    }
    else if(imc < 30)
    {
        $("#indice").val(imc);
        $("#interpreta").val("Obesidad grado I.");
    }
    else if(imc < 40)
    {
        $("#indice").val(imc);
        $("#interpreta").val("Obesidad grado II.");
    }
    else
    {
        $("#indice").val(imc);
        $("#interpreta").val("Obesidad grado III.");
    }
}