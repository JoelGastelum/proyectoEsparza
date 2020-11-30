<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
        <meta name="description" content="<?php echo session()->get('Configuracion.Web.descripcion');?>">
        <meta name="keywords" content="<?php echo session()->get('Configuracion.Web.palabrasclaves');?>" />
        <meta name="author" content="{{ env('APP_AUTOR') }}">
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>
            <?php echo session()->get('Configuracion.Web.titulo');?>
        </title>

        <!-- FONT -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700">

        <!-- ESTILOS -->
        <link rel="stylesheet" id="css-main" href="{{ asset('css/private/dashmix.css') }}">
        <link rel="stylesheet" id="css-theme" href="{{ asset('css/private/themes/xgreen.css') }}">
        <link href="{{ asset('css/compartidos/fontawesome/css/all.min.css') }}" rel="stylesheet">
		<!-- LOADING -->
		<style>
			#link {color: #E45635;display:block;font: 12px "Helvetica Neue", Helvetica, Arial, sans-serif;text-align:center; text-decoration: none;}
			#link:hover {color: #CCCCCC}

			#link, #link:hover {-webkit-transition: color 0.5s ease-out;-moz-transition: color 0.5s ease-out;-ms-transition: color 0.5s ease-out;-o-transition: color 0.5s ease-out;transition: color 0.5s ease-out;}

			/** BEGIN CSS **/

			@keyframes rotate-loading {
				0%  {transform: rotate(0deg);-ms-transform: rotate(0deg); -webkit-transform: rotate(0deg); -o-transform: rotate(0deg); -moz-transform: rotate(0deg);}
				100% {transform: rotate(360deg);-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); -o-transform: rotate(360deg); -moz-transform: rotate(360deg);}
			}

			@-moz-keyframes rotate-loading {
				0%  {transform: rotate(0deg);-ms-transform: rotate(0deg); -webkit-transform: rotate(0deg); -o-transform: rotate(0deg); -moz-transform: rotate(0deg);}
				100% {transform: rotate(360deg);-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); -o-transform: rotate(360deg); -moz-transform: rotate(360deg);}
			}

			@-webkit-keyframes rotate-loading {
				0%  {transform: rotate(0deg);-ms-transform: rotate(0deg); -webkit-transform: rotate(0deg); -o-transform: rotate(0deg); -moz-transform: rotate(0deg);}
				100% {transform: rotate(360deg);-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); -o-transform: rotate(360deg); -moz-transform: rotate(360deg);}
			}

			@-o-keyframes rotate-loading {
				0%  {transform: rotate(0deg);-ms-transform: rotate(0deg); -webkit-transform: rotate(0deg); -o-transform: rotate(0deg); -moz-transform: rotate(0deg);}
				100% {transform: rotate(360deg);-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); -o-transform: rotate(360deg); -moz-transform: rotate(360deg);}
			}

			@keyframes rotate-loading {
				0%  {transform: rotate(0deg);-ms-transform: rotate(0deg); -webkit-transform: rotate(0deg); -o-transform: rotate(0deg); -moz-transform: rotate(0deg);}
				100% {transform: rotate(360deg);-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); -o-transform: rotate(360deg); -moz-transform: rotate(360deg);}
			}

			@-moz-keyframes rotate-loading {
				0%  {transform: rotate(0deg);-ms-transform: rotate(0deg); -webkit-transform: rotate(0deg); -o-transform: rotate(0deg); -moz-transform: rotate(0deg);}
				100% {transform: rotate(360deg);-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); -o-transform: rotate(360deg); -moz-transform: rotate(360deg);}
			}

			@-webkit-keyframes rotate-loading {
				0%  {transform: rotate(0deg);-ms-transform: rotate(0deg); -webkit-transform: rotate(0deg); -o-transform: rotate(0deg); -moz-transform: rotate(0deg);}
				100% {transform: rotate(360deg);-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); -o-transform: rotate(360deg); -moz-transform: rotate(360deg);}
			}

			@-o-keyframes rotate-loading {
				0%  {transform: rotate(0deg);-ms-transform: rotate(0deg); -webkit-transform: rotate(0deg); -o-transform: rotate(0deg); -moz-transform: rotate(0deg);}
				100% {transform: rotate(360deg);-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); -o-transform: rotate(360deg); -moz-transform: rotate(360deg);}
			}

			@keyframes loading-text-opacity {
				0%  {opacity: 0}
				20% {opacity: 0}
				50% {opacity: 1}
				100%{opacity: 0}
			}

			@-moz-keyframes loading-text-opacity {
				0%  {opacity: 0}
				20% {opacity: 0}
				50% {opacity: 1}
				100%{opacity: 0}
			}

			@-webkit-keyframes loading-text-opacity {
				0%  {opacity: 0}
				20% {opacity: 0}
				50% {opacity: 1}
				100%{opacity: 0}
			}

			@-o-keyframes loading-text-opacity {
				0%  {opacity: 0}
				20% {opacity: 0}
				50% {opacity: 1}
				100%{opacity: 0}
			}
			.loading-container,
			.loading {
				height: 100px;
				position: relative;
				width: 100px;
				border-radius: 100%;
			}


			.loading-container { margin: 40px auto }

			.loading {
				border: 2px solid transparent;
				border-color: transparent #fff transparent #FFF;
				-moz-animation: rotate-loading 1.5s linear 0s infinite normal;
				-moz-transform-origin: 50% 50%;
				-o-animation: rotate-loading 1.5s linear 0s infinite normal;
				-o-transform-origin: 50% 50%;
				-webkit-animation: rotate-loading 1.5s linear 0s infinite normal;
				-webkit-transform-origin: 50% 50%;
				animation: rotate-loading 1.5s linear 0s infinite normal;
				transform-origin: 50% 50%;
			}

			.loading-container:hover .loading {
				border-color: transparent #E45635 transparent #E45635;
			}
			.loading-container:hover .loading,
			.loading-container .loading {
				-webkit-transition: all 0.5s ease-in-out;
				-moz-transition: all 0.5s ease-in-out;
				-ms-transition: all 0.5s ease-in-out;
				-o-transition: all 0.5s ease-in-out;
				transition: all 0.5s ease-in-out;
			}

			#loading-text {
				-moz-animation: loading-text-opacity 2s linear 0s infinite normal;
				-o-animation: loading-text-opacity 2s linear 0s infinite normal;
				-webkit-animation: loading-text-opacity 2s linear 0s infinite normal;
				animation: loading-text-opacity 2s linear 0s infinite normal;
				color: #ffffff;
				font-family: "Helvetica Neue, "Helvetica", ""arial";
				font-size: 10px;
				font-weight: bold;
				margin-top: 45px;
				opacity: 0;
				position: absolute;
				text-align: center;
				text-transform: uppercase;
				top: 0;
				width: 100px;
			}
		</style>
        <!-- JS-->
            <script src="{{ asset('js/private/jquery-3.3.1.min.js') }}"></script>
            <script src="{{ asset('js/private/dashmix.core.min.js') }}"></script>
            <script src="{{ asset('js/private/dashmix.app.min.js') }}"></script>
        <!-- FIN DE JS -->

        <!--DATATABLE-->
            <link rel="stylesheet" href="{{ asset('js/private/plugins/datatables/dataTables.bootstrap4.css') }}">
            <link rel="stylesheet" href="{{ asset('js/private/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css') }}">
            <script src="{{ asset('js/private/plugins/datatables/jquery.dataTables.min.js') }}"></script>
            <script src="{{ asset('js/private/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
            <script src="{{ asset('js/private/plugins/datatables/buttons/dataTables.buttons.min.js') }}"></script>
            <script src="{{ asset('js/private/plugins/datatables/buttons/buttons.print.min.js') }}"></script>
            <script src="{{ asset('js/private/plugins/datatables/buttons/buttons.html5.min.js') }}"></script>
            <script src="{{ asset('js/private/plugins/datatables/buttons/buttons.flash.min.js') }}"></script>
            <script src="{{ asset('js/private/plugins/datatables/buttons/buttons.colVis.min.js') }}"></script>
            <script src="{{ asset('js/private/pages/be_tables_datatables.min.js') }}"></script>
        <!--FIN DE DATATABLE-->
        <script type="text/javascript">
            function AcceptNum(evt){
                //ACEPTA NUMERO
                var key = evt.which || evt.keyCode;
                return (key <= 13 || (key >= 48 && key <= 57) );
            }
            function AcceptNumPunto(evt){
                //ACEPTA NUMERO
                var key = evt.which || evt.keyCode;
                return (key <= 13 || key <= 46 || (key >= 48 && key <= 57) );
            }
            function AcceptLetra(evt){
                //ACEPTA LETRAS
                var key = evt.which || evt.keyCode;
                if((key!=32) && (key<65) || (key>90) && (key<97) || (key>122 && key != 241 && key != 209 && key != 225 && key != 233 && key != 237 && key != 243 && key != 250 && key != 193 && key != 201 && key != 205 && key != 211 && key != 218)){
                    if(key==0 || key==8 || key==9 || key==17 || key==18 || key==46 || key==37 || key==38 || key==39 || key==40 || key==116){
                        return key;
                    }else{
                        return false;
                    }
                }else{
                    return key;
                }
            }
            function trunc (x, posiciones = 2) {
                //FUNCION PARA TRUNCAR NUMEROS FLOTANTES
                var s = x.toString()
                var l = s.length
                var decimalLength = s.indexOf('.') + 1

                if (l - decimalLength <= posiciones){
                return x
                }
                // Parte decimal del número
                var isNeg  = x < 0
                var decimal =  x % 1
                var entera  = isNeg ? Math.ceil(x) : Math.floor(x)
                // Parte decimal como número entero
                // Ejemplo: parte decimal = 0.77
                // decimalFormated = 0.77 * (10^posiciones)
                // si posiciones es 2 ==> 0.77 * 100
                // si posiciones es 3 ==> 0.77 * 1000
                var decimalFormated = Math.floor(
                Math.abs(decimal) * Math.pow(10, posiciones)
                )
                // Sustraemos del número original la parte decimal
                // y le sumamos la parte decimal que hemos formateado
                var finalNum = entera +
                ((decimalFormated / Math.pow(10, posiciones))*(isNeg ? -1 : 1))

                return finalNum
            }
			(function(open)
			{

				XMLHttpRequest.prototype.open = function(method, url, async, user, pass) {
					mostramodal=1;
					if(url.substring(0, 1)=="x"){
						url=url.substring(1);
						mostramodal=0;
					}
					// console.log(url);
					this.addEventListener("readystatechange", function() {
						if(this.readyState==1 && mostramodal==1)
							$('#loadingModal').modal("show");
						if(this.readyState==4)
						{
							setTimeout(function(){$('#loadingModal').modal("hide");}, 100);
							if(this.status==419)
							{
								Swal.fire({
									type: 'error',
									title: '¡Su Sesión ha Expirado!',
									text: 'Será redirigido al inicio de sesión, favor de autenticarse de nuevo'
								});
								setTimeout(function(){window.location.href='/mycfdibox/public/login';}, 3000);
							}
						}
					}, false);

					open.call(this, method, url, async, user, pass);
				};

			})(XMLHttpRequest.prototype.open);
            $(document).ready(function() {

                $(".alert").fadeOut(5000);
            });
        </script>
    </head>
    <body>
		<!--<div id="loadingModal" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false">
			<div class="modal-dialog">
				<div class="loading-container">
					<div class="loading"></div>
					<div id="loading-text">Cargando . . .</div>
				</div>
			</div>
		</div>-->
        <?php
            $ruta= Route::getCurrentRoute()->getActionName();
            $accion=explode('@', Route::getCurrentRoute()->getActionName())[1];
        ?>
        <!-- Page Container -->
        <div id="page-container" >
            <!-- MENU LATERAL -->
            <!-- FIN DE MENU LATERAL -->

            <!-- CABECERA -->
            <!-- FIN DE CABECERA -->

            <!-- Main Container -->
            <main id="main-container">
                <!-- CONTENIDO -->
                <div class="content">
                    @yield('content')
                </div>
                <!-- FIN DE CONTENIDO -->
            </main>
            <!-- END Main Container -->

            <!-- FOOTER -->
            <!-- FIN DE FOOTER -->
        </div>
        <script type="text/javascript">
        	$(document).ready(function(){
        		$("#loadingModal").css("display","none");
        	});
        </script>
    </body>
</html>
