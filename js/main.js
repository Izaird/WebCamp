(function () {
    "use strict";

    let regalo = document.getElementById('regalo'); //tiene que ir a fuera por que si no no va a funcionar


    document.addEventListener('DOMContentLoaded', function () {
        var mapa = document.getElementById('mapa');

        if (mapa) {

            // dentro el código del mapa...

            var map = L.map('mapa').setView([9.998563, -84.656981], 16);



            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {

                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'

            }).addTo(map);



            L.marker([9.998563, -84.656981]).addTo(map)

                .bindPopup('GDLWebCamp 2018 <br> boletos ya disponibles')

                .openPopup()

                .bindTooltip('Ubicacion')

                .openTooltip();

        } //cierre del Array mapa





        ///////////////////////////////////////////////////////////////////////////////////
        //Campo datos usuario
        ///////////////////////////////////////////////////////////////////////////////////
        let nombre = document.getElementById('nombre');
        let apellido = document.getElementById('apellido');
        let email = document.getElementById('email');


        ///////////////////////////////////////////////////////////////////////////////////
        //Campo pases
        ///////////////////////////////////////////////////////////////////////////////////
        let pase_dia = document.getElementById('pase_dia');
        let pase_completo = document.getElementById('pase_completo');
        let pase_dosdia = document.getElementById('pase_dosdias');


        ///////////////////////////////////////////////////////////////////////////////////
        //Botones y DIVS
        ///////////////////////////////////////////////////////////////////////////////////
        let calcular = document.getElementById('calcular');
        let error_div = document.getElementById('error');
        let boton_registro = document.getElementById('btnRegistro');
        let lista_productos = document.getElementById('lista_productos');
        let suma = document.getElementById('suma_total');
        


        ///////////////////////////////////////////////////////////////////////////////////
        //Extras
        //////////////////////////////////////////////////////////////////////////////////
    if (document.getElementById('etiquetas')) {
        boton_registro.disabled = true;
        var etiquetas = document.getElementById('etiquetas');
        var camisas = document.getElementById('camisa_evento');

             
        calcular.addEventListener('click', calcularMontos);

        pase_dia.addEventListener('blur', mostrar_dias);
        pase_dosdia.addEventListener('blur', mostrar_dias);
        pase_completo.addEventListener('blur', mostrar_dias);

        nombre.addEventListener('blur', validar_campos);
        apellido.addEventListener('blur', validar_campos);
        email.addEventListener('blur', validar_campos);
        email.addEventListener('blur', validar_email);

        function validar_campos() {
            if (this.value == '') {
                error_div.style.display = 'block';
                error_div.innerHTML = 'Este campo es obligatorio';
                this.style.border = '1px solid red';
                error_div.style.border = '1px solid red';
            } else {
                error_div.style.display = 'none';
                this.style.border = '1px solid #cccccc';
            }

        }


        function validar_email() {
            if (this.value.indexOf("@") > -1) {
                error_div.style.display = 'none';
                this.style.border = '1px solid #cccccc';
            } else {
                error_div.style.display = 'block';
                error_div.innerHTML = 'Debe de tener al menos un @';
                this.style.border = '1px solid red';
                error_div.style.border = '1px solid red';
            }
        }

        function calcularMontos(event) {
            event.preventDefault();

            if (regalo.value === '') {
                alert("Debes de elegir un regalo");
                regalo.focus();
            } else {
                let boletos_dia = parseInt(pase_dia.value, 10) || 0,
                    boletos_dosdia = parseInt(pase_dosdia.value, 10) || 0,
                    boletos_completo = parseInt(pase_completo.value, 10) || 0,
                    cant_camisas = parseInt(camisas.value, 10) || 0,
                    cant_etiquetas = parseInt(etiquetas.value, 10) || 0;


                let total_pagar = (boletos_dia * 30) + (boletos_dosdia * 45) + (boletos_completo * 50) + (cant_camisas * 9.3) + (cant_etiquetas * 2);

                let listado_productos = [];


                if (boletos_dia > 0) {
                    listado_productos.push(`${boletos_dia} Pases por dia`);
                }

                if (boletos_dosdia > 0) {
                    listado_productos.push(`${boletos_dosdia} Pases por 2 dias`);
                }

                if (boletos_completo > 0) {
                    listado_productos.push(`${boletos_completo} Pases completos`);
                }

                if (cant_camisas > 0) {
                    listado_productos.push(`${cant_camisas} Camisas`);
                }

                if (cant_etiquetas > 0) {
                    listado_productos.push(`${cant_etiquetas} Etiquetas`);
                }

                lista_productos.style.display = 'block';
                lista_productos.innerHTML = '';
                for (let i = 0; i < listado_productos.length; i++) {
                    lista_productos.innerHTML += listado_productos[i] + '<br>'
                }

                suma.innerHTML = (`$ ${total_pagar.toFixed(2)}`);

                boton_registro.disabled = false;
                document.getElementById('total_pedido').value = total_pagar;
            }
        }

        function mostrar_dias() {
            let boletos_dia = parseInt(pase_dia.value, 10) || 0,
                boletos_dosdia = parseInt(pase_dosdia.value, 10) || 0,
                boletos_completo = parseInt(pase_completo.value, 10) || 0;

            let dias_elegidos = [];

            if (boletos_dia > 0) {
                dias_elegidos.push('viernes');
            }
            if (boletos_dia == 0) {
                for (var i = 0; i < dias_elegidos.length - 1; i++) {
                    if (dias_elegidos[i] === viernes) {
                        dias_elegidos.splice(i, 1);
                    }
                }

                document.getElementById('viernes').style.display = 'none';

            }
            if (boletos_dosdia > 0) {
                dias_elegidos.push('viernes', 'sabado');
            }
            if (boletos_dosdia == 0) {
                for (var i = 0; i < dias_elegidos.length - 1; i++) {
                    if (dias_elegidos[i] === viernes) {
                        dias_elegidos.splice(i, 1);
                    }
                }

                document.getElementById('viernes').style.display = 'none';
                document.getElementById('sabado').style.display = 'none';

            }
            if (boletos_completo > 0) {
                dias_elegidos.push('viernes', 'sabado', 'domingo');
            }
            if (boletos_completo == 0) {
                for (var i = 0; i < dias_elegidos.length - 1; i++) {
                    if (dias_elegidos[i] === viernes) {
                        dias_elegidos.splice(i, 1);
                    }
                }

                document.getElementById('viernes').style.display = 'none';
                document.getElementById('sabado').style.display = 'none';
                document.getElementById('domingo').style.display = 'none';



            }

            for (let i = 0; i < dias_elegidos.length; i++) {
                document.getElementById(dias_elegidos[i]).style.display = 'block';

            }

        }
    }

        


    }); //DOM CONTENT LOADED
})();


$(function(){

    //==========================================================================
    //Agregar clases menu
    //========================================================================== 
    $('body.conferencia .navegacion_principal a:contains("Conferencia")').addClass('activo');
    $('body.calendario .navegacion_principal a:contains("Calendario")').addClass('activo');
    $('body.invitados .navegacion_principal a:contains("Invitados")').addClass('activo');



    //==========================================================================
    //Menu fijo
    //========================================================================== 
    let windowHeight = $(window).height();
    let barra_altura = $('.barra').innerHeight();


    $(window).scroll(function() {
        let scroll = $(window).scrollTop();
        if (scroll > windowHeight) {
            $('.barra').addClass('fixed');
            $('body').css({'margin-top':+barra_altura+'px'});
        }
        else{

            $('.barra').removeClass('fixed');
            $('body').css({'margin-top': '0px'});
        }

    })


    //==========================================================================
    //Menu responsive
    //========================================================================== 
    $('.menu_movil').on('click', function(){
        $('.navegacion_principal').slideToggle();
    });
    if(document.getElementById('mapa')){
        //==========================================================================
        //Lettering
        //========================================================================== 
        $('.nombre_sitio').lettering();
        
     

        //==========================================================================
        //Programa de conferencias
        //========================================================================== 
        $('div.ocultar').hide();
        $('.contenido_programa .info_curso:first').show();
        $('.menu_programa a:first').addClass('activo');
        $('.menu_programa a').on('click', function () {
            $('.menu_programa a').removeClass('activo');
            let enlace = $(this).attr('href');
            $(this).addClass('activo');
            $('.ocultar').hide();
            $(enlace).fadeIn(1000);
            
            return false;
        });

        //==========================================================================
        //Animaciones para los numeros
        //========================================================================== 

        $('.resumen_evento li:nth-child(1) p').animateNumber({ number: 6 },1200);
        $('.resumen_evento li:nth-child(2) p').animateNumber({ number: 15 },1200);
        $('.resumen_evento li:nth-child(3) p').animateNumber({ number: 3 },2000);
        $('.resumen_evento li:nth-child(4) p').animateNumber({ number: 9 },1500);

        //==========================================================================
        //Cuenta regresiva
        //========================================================================== 

        $('.cuenta_regresiva').countdown('2018/12/10 09:00:00', function(event){
            $('#dias').html(event.strftime('%d'));
            $('#horas').html(event.strftime('%H'));
            $('#minutos').html(event.strftime('%M'));
            $('#segundos').html(event.strftime('%S'));
            
        });
    }
    if(document.getElementById('fotos_invitados')){
        //==========================================================================
        //Colorbox
        //========================================================================== 
        $('.invitado_info').colorbox({inline:true, width:"50%"});
        $('.boton_newsletter').colorbox({inline:true, width:"50%"});

    }

});