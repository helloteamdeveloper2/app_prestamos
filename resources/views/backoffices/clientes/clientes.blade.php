<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Clientes</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/backoffice/style.css') }}">
</head>
<body>
  <!-- navbar --->
  <nav class="navbar navbar-expand-lg navbar-expand-md navbar-expand-sm navbar-expand navbar-light border shadow">
      <div class="container-fluid">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12">
              <div class="row">
                  <div class=" col-8 col-ms-2 col-md-6 col-lg-2  offset-4 offset-md-4 offset-lg-1">
                      <img src="{{ asset('img/logo.png') }}" width="120" class="my-2 ms-2" alt="logo">
                  </div>
                  <div class=" col-12 col-sm-10 col-md-6 col-lg-4 offset-sm-2 offset-md-4 mt-4">
                      <div class="collapse navbar-collapse" id="navbarNavDropdown">
                          <ul class="navbar-nav">
                              <li class="nav-item">
                                  <a class="nav-link" href="/clientes" style="color: #38a937;"><img
                                          src="{{ asset('img/backoffices/CLIENTES.png') }}" width="20"
                                          alt="CLIENTES"> Clientes</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="#"><img
                                          src="{{ asset('img/backoffices/ICONO_NOTIFICACIONES.svg') }}" width="20"
                                          alt="NOTIFICACION"> Notificaciones</a>
                              </li>
                              <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                      role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                      <img src="{{ asset('img/backoffices/ICONO AJUSTES.svg') }}" width="20"
                                          alt="Ajustes">
                                      Ajustes
                                  </a>
                                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                      <li><a class="dropdown-item" href="#"><img
                                                  src="{{ asset('img/backoffices/ICONO_PERFIL.svg') }}" width="15"
                                                  alt="perfil">Perfil</a></li>
                                      <hr>
                                      <li><a class="dropdown-item" href="#"><img
                                                  src="{{ asset('img/backoffices/ICONO_CONTACTO.svg') }}"
                                                  width="15" alt="contacto">Contacto</a></li>
                                  </ul>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </nav>

    <!-- content principal --->
    <!--inicio de titulo-->
    <h1 class="text-center my-5">Clientes</h1>
    <!--fin de titulo-->
    <!-- inicio de tabla de creditos-->
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                        <table class="table table-bordered creditos">
                          <thead>
                            <tr>
                                <th scope="col"><img src="{{ asset('img/backoffices/SOL_APRO_NARANJA.png') }}" id="imgSolicitudNaranja" class="posision" width="50" alt=""><img src="{{ asset('img/backoffices/SOL_APRO_GRIS.png') }}" id="imgSolicitudGris" style="display: none" class="posision" width="50" alt=""><h4><a href="#solicitudesCredito" class="subtitulo" id="solicitudes" >Solicitudes de Cr??dito</a></h4></th>
                                <th scope="col"><img src="{{ asset('img/backoffices/CLI_CRE_VIG_GRIS.png') }}" id="imgClientesGris" class="posision" width="60" alt=""><img src="{{ asset('img/backoffices/CLI_CRE_VIG_NAR.png') }}"id="imgClientesNaranja" style="display: none" class="posision" width="60" alt=""><h4><a href="#clientesVigentes" class="enlace" id="clientes">Clientes Vigentes</a></h4></th>
                                <th scope="col"><img src="{{ asset('img/backoffices/CRE_FIN_GRIS.png') }}" id="imgFinalizadoGris" class="posision" width="70" alt=""><img src="{{ asset('img/backoffices/CRE_FIN_NAR.svg') }}" id="imgFinalizadoNaranja"  style="display: none" class="posision" width="70" alt=""><h4><a href="#creditoFinalizado" class="enlace" id="finalizado">Cr??dito Finalizado</a></h4></th>
                                <th scope="col"><img src="{{ asset('img/backoffices/CRE_VEN_NARANJA.png') }}" class="posision" width="60" alt=""><h4><a href="#" class="enlace">Cartera Vencida</a></h4></th>
                            </tr>
                          </thead></table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fin de tabla de creditos-->

    <!-- inicio apartado de busqueda-->
    <div class="container-fluid mt-5">
      <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12">
              <div class="row">
                  <div class="col-12 col-sm-10 col-md-10 col-lg-8 offset-sm-1 offset-md-2 offset-lg-2">
                    <div class="input-group">
                      <p class="my-2 mx-2">De</p> <input type="date" class="mx-3" placeholder=""> <img src="{{ asset('img/backoffices/CALENDARIO.PNG') }}"class="my-2 mx-2" width="30" height="30" alt="">
                      <p class="mx-3 my-2">a</p> <input type="date" class="mx-3" placeholder=""><img src="{{ asset('img/backoffices/CALENDARIO.PNG') }}" class="my-2 mx-2" width="30" height="30" alt="">
                      <div class="input-wrapper">
                        <input type="search" name="" id="" class="ms-1" placeholder="Buscar">
                        <svg xmlns="http://www.w3.org/2000/svg" class="input-icon" viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                        </svg>
                      </div>
                      <input type="submit" value="Buscar" class="btn boton-color px-2 ms-4">
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fin apartado de busqueda-->

    <!-- inicio tabla de elementos buscados-->
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-10 col-lg-10 offset-md-1 offset-lg-1">
                      <div class="table-responsive text-center">
                        <!--inicio tabla de solicitudes--->
                        <table class="table table-bordered border-secondary table-light table-striped" id="tabla-Solicitud">
                          <thead>
                            <tr>
                              <th scope="col" class="px-5"><p class="encabezado-tabla-medio"></p>Numero de Cuenta</th>
                              <th scope="col" class="px-5"><p class="encabezado-tabla-peque??o"></p>Ocupaci??n</th>
                              <th scope="col" class="px-5"><p class="encabezado-tabla-medio"></p>Ingreso Mensual</th>
                              <th scope="col" class="px-5"><p class="encabezado-tabla-medio"></p>Cuenta con un</th>
                              <th scope="col" class="px-5"><p class="encabezado-tabla-peque??o"></p>CURP</th>
                              <th scope="col" class="px-5"><p class="encabezado-tabla-peque??o"></p>Fecha de</th>
                              <th scope="col" class="px-5"><p class="encabezado-tabla-peque??o"></p>Nom de</th>
                              <th scope="col" class="px-5"><p class="encabezado-tabla-peque??o"></p>Ramo</th>
                              <th scope="col" class="px-5"><p class="encabezado-tabla-peque??o"></p>Telefono</th>
                              <th scope="col" class="px-5"><p class="encabezado-tabla-medio"></p>Correo Electronico</th>
                              <th scope="col" class="px-5"><p class="encabezado-tabla-peque??o"></p>Documentaci??n</th>
                              <th scope="col" class="px-5"><p class="encabezado-tabla-peque??o"></p>Acciones</th>
                              <th></th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                              <tr>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#VerDocumento">Ver</button></td>
                                <td><button class="btn boton-color boton-aceptar-solic" data-bs-toggle="modal" data-bs-target="#AceptarSolicitud">Aceptar Solicitud</button></td>
                                <td><button class="btn boton-color boton-rechazar-solic" data-bs-toggle="modal" data-bs-target="#RechazarSolicitud">Rechazar Solicitud</button></td>
                                <td><button class="btn boton-color boton-falta-inf" data-bs-toggle="modal" data-bs-target="#FaltaInfo">Falta inf por com. o es inc.</button></td>
                              </tr>
                              <tr>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#VerDocumento">Ver</button></td>
                                <td><button class="btn boton-color boton-aceptar-solic" data-bs-toggle="modal" data-bs-target="#AceptarSolicitud">Aceptar Solicitud</button></td>
                                <td><button class="btn boton-color boton-rechazar-solic" data-bs-toggle="modal" data-bs-target="#RechazarSolicitud">Rechazar Solicitud</button></td>
                                <td><button class="btn boton-color boton-falta-inf" data-bs-toggle="modal" data-bs-target="#FaltaInfo">Falta inf por com. o es inc.</button></td>
                              </tr>
                              <tr>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#VerDocumento">Ver</button></td>
                                <td><button class="btn boton-color boton-aceptar-solic" data-bs-toggle="modal" data-bs-target="#AceptarSolicitud">Aceptar Solicitud</button></td>
                                <td><button class="btn boton-color boton-rechazar-solic" data-bs-toggle="modal" data-bs-target="#RechazarSolicitud">Rechazar Solicitud</button></td>
                                <td><button class="btn boton-color boton-falta-inf" data-bs-toggle="modal" data-bs-target="#FaltaInfo">Falta inf por com. o es inc.</button></td>
                              </tr>
                              <tr>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#VerDocumento">Ver</button></td>
                                <td><button class="btn boton-color boton-aceptar-solic" data-bs-toggle="modal" data-bs-target="#AceptarSolicitud">Aceptar Solicitud</button></td>
                                <td><button class="btn boton-color boton-rechazar-solic" data-bs-toggle="modal" data-bs-target="#RechazarSolicitud">Rechazar Solicitud</button></td>
                                <td><button class="btn boton-color boton-falta-inf" data-bs-toggle="modal" data-bs-target="#FaltaInfo">Falta inf por com. o es inc.</button></td>
                              </tr>
                              <tr>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#VerDocumento">Ver</button></td>
                                <td><button class="btn boton-color boton-aceptar-solic" data-bs-toggle="modal" data-bs-target="#AceptarSolicitud">Aceptar Solicitud</button></td>
                                <td><button class="btn boton-color boton-rechazar-solic" data-bs-toggle="modal" data-bs-target="#RechazarSolicitud">Rechazar Solicitud</button></td>
                                <td><button class="btn boton-color boton-falta-inf" data-bs-toggle="modal" data-bs-target="#FaltaInfo">Falta inf por com. o es inc.</button></td>
                              </tr>
                              <tr>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#VerDocumento">Ver</button></td>
                                <td><button class="btn boton-color boton-aceptar-solic" data-bs-toggle="modal" data-bs-target="#AceptarSolicitud">Aceptar Solicitud</button></td>
                                <td><button class="btn boton-color boton-rechazar-solic" data-bs-toggle="modal" data-bs-target="#RechazarSolicitud">Rechazar Solicitud</button></td>
                                <td><button class="btn boton-color boton-falta-inf" data-bs-toggle="modal" data-bs-target="#FaltaInfo">Falta inf por com. o es inc.</button></td>
                              </tr>
                              <tr>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#VerDocumento">Ver</button></td>
                                <td><button class="btn boton-color boton-aceptar-solic" data-bs-toggle="modal" data-bs-target="#AceptarSolicitud">Aceptar Solicitud</button></td>
                                <td><button class="btn boton-color boton-rechazar-solic" data-bs-toggle="modal" data-bs-target="#RechazarSolicitud">Rechazar Solicitud</button></td>
                                <td><button class="btn boton-color boton-falta-inf" data-bs-toggle="modal" data-bs-target="#FaltaInfo">Falta inf por com. o es inc.</button></td>
                              </tr>
                              <tr>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#VerDocumento">Ver</button></td>
                                <td><button class="btn boton-color boton-aceptar-solic" data-bs-toggle="modal" data-bs-target="#AceptarSolicitud">Aceptar Solicitud</button></td>
                                <td><button class="btn boton-color boton-rechazar-solic" data-bs-toggle="modal" data-bs-target="#RechazarSolicitud">Rechazar Solicitud</button></td>
                                <td><button class="btn boton-color boton-falta-inf" data-bs-toggle="modal" data-bs-target="#FaltaInfo">Falta inf por com. o es inc.</button></td>
                              </tr>
                              <tr>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#VerDocumento">Ver</button></td>
                                <td><button class="btn boton-color boton-aceptar-solic" data-bs-toggle="modal" data-bs-target="#AceptarSolicitud">Aceptar Solicitud</button></td>
                                <td><button class="btn boton-color boton-rechazar-solic" data-bs-toggle="modal" data-bs-target="#RechazarSolicitud">Rechazar Solicitud</button></td>
                                <td><button class="btn boton-color boton-falta-inf" data-bs-toggle="modal" data-bs-target="#FaltaInfo">Falta inf por com. o es inc.</button></td>
                              </tr>
                            </tbody>
                        </table>
                        <!--fin tabla de solicitudes--->
                        <!--inicio tabla de clientes--->
                        <table class="table  table-bordered border-secondary table-light table-striped" id="tabla-Clientes">
                            <thead>
                              <tr>
                                <th scope="col" class="px-5"><p class="encabezado-tabla-medio">Numero de Cr??dito</p></th>
                                <th scope="col" class="px-5"><p class="encabezado-tabla-medio">Numero de Cliente</p></th>
                                <th scope="col" class="px-5"><p class="encabezado-tabla-peque??o">Nombre</p></th>
                                <th scope="col" class="px-5"><p class="encabezado-tabla-medio">linea de Cr??dito Aut</p></th>
                                <th scope="col" class="px-5"><p class="encabezado-tabla-medio">Tarjeta de N??m Reg</p></th>
                                <th scope="col" class="px-5"><p class="encabezado-tabla-medio">Tabla de Amortizaci??n</p></th>
                                <th scope="col" class="px-5"><p class="encabezado-tabla-medio">Num Parcilidades</p></th>
                                <th scope="col" class="px-5"><p class="encabezado-tabla-medio">Tabla de Pago</p></th>
                                <th scope="col" class="px-5"><p class="encabezado-tabla-medio">Numero de Pago</p></th>
                                <th scope="col" class="px-5"><p class="encabezado-tabla">Enviar Cartera Vencida</p></th>
                                <th scope="col" class="px-5"><p class="encabezado-tabla-medio">Mas Informaci??n</p></th>
                                <th scope="col" class="px-5"><p class="encabezado-tabla-medio">Finalizar Cr??dito</p></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>123890</td>
                                <td>NC989862</td>
                                <td>Alberto Ledezm</td>
                                <td>1200</td>
                                <td>si</td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/tablaAmortizacion" style="text-decoration: none; color:white;">Ver</a></button></td>
                                <td>2 pagos</td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/tablaPagos" style="text-decoration: none; color:white;">Ver</a></button></td>
                                <td>4 pagos</td>
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#carteraVencida">Enviar</button></td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/masInformacion" style="text-decoration: none; color:white;">Ver</a></button></td>
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#finalizarCredito">Finalizar</button></td>
                              </tr>
                              <tr>
                                <td>123567</td>
                                <td>NC967457</td>
                                <td>J??se Garcia Hern</td>
                                <td>800</td>
                                <td>si</td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/tablaAmortizacion" style="text-decoration: none; color:white;">Ver</a></button></td>
                                <td>3 pagos</td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/tablaPagos" style="text-decoration: none; color:white;">Ver</a></button></td>
                                <td>6pagos</td>
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#carteraVencida">Enviar</button></td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/masInformacion" style="text-decoration: none; color:white;">Ver</a></button></td>
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#finalizarCredito">Finalizar</button></td>
                              </tr>
                              <tr>
                                <td>134780</td>
                                <td>NC567834</td>
                                <td>Danna Pe??a Mar</td>
                                <td>2500</td>
                                <td>si</td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/tablaAmortizacion" style="text-decoration: none; color:white;">Ver</a></button></td>
                                <td>3 pagos</td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/tablaPagos" style="text-decoration: none; color:white;">Ver</a></button></td>
                                <td>6pagos</td>
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#carteraVencida">Enviar</button></td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/masInformacion" style="text-decoration: none; color:white;">Ver</a></button></td>
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#finalizarCredito">Finalizar</button></td>
                              </tr>
                              <tr>
                                <td>09897</td>
                                <td>NC234569</td>
                                <td>Ivan Segura Rico</td>
                                <td>300</td>
                                <td>si</td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/tablaAmortizacion" style="text-decoration: none; color:white;">Ver</a></button></td>
                                <td>1 pagos</td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/tablaPagos" style="text-decoration: none; color:white;">Ver</a></button></td>
                                <td>4 pagos</td>
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#carteraVencida">Enviar</button></td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/masInformacion" style="text-decoration: none; color:white;">Ver</a></button></td>
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#finalizarCredito">Finalizar</button></td>
                              </tr>
                              <tr>
                                <td>00457</td>
                                <td>NC092345</td>
                                <td>Adrian Uribe Sos</td>
                                <td>1200</td>
                                <td>si</td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/tablaAmortizacion" style="text-decoration: none; color:white;">Ver</a></button></td>
                                <td>4 pagos</td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/tablaPagos" style="text-decoration: none; color:white;">Ver</a></button></td>
                                <td>6 pagos</td>
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#carteraVencida">Enviar</button></td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/masInformacion" style="text-decoration: none; color:white;">Ver</a></button></td>
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#finalizarCredito">Finalizar</button></td>
                              </tr>
                              <tr>
                                <td>14590</td>
                                <td>NC125678</td>
                                <td>Pedro Sierra Flor</td>
                                <td>1500</td>
                                <td>si</td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/tablaAmortizacion" style="text-decoration: none; color:white;">Ver</a></button></td>
                                <td>2 pagos</td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/tablaPagos" style="text-decoration: none; color:white;">Ver</a></button></td>
                                <td>4 pagos</td>
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#carteraVencida">Enviar</button></td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/masInformacion" style="text-decoration: none; color:white;">Ver</a></button></td>
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#finalizarCredito">Finalizar</button></td>
                              </tr>
                              <tr>
                                <td>00089</td>
                                <td>NC234569</td>
                                <td>Susana Guti??rrez</td>
                                <td>Datos</td>
                                <td>si</td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/tablaAmortizacion" style="text-decoration: none; color:white;">Ver</a></button></td>
                                <td>8 pagos</td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/tablaPagos" style="text-decoration: none; color:white;">Ver</a></button></td>
                                <td>9 pagos</td>
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#carteraVencida">Enviar</button></td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/masInformacion" style="text-decoration: none; color:white;">Ver</a></button></td>
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#finalizarCredito">Finalizar</button></td>
                              </tr>
                              <tr>
                                <td>07584</td>
                                <td>NC673456</td>
                                <td>Roberto Villag??n</td>
                                <td>700</td>
                                <td>si</td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/tablaAmortizacion" style="text-decoration: none; color:white;">Ver</a></button></td>
                                <td>7 pagos</td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/tablaPagos" style="text-decoration: none; color:white;">Ver</a></button></td>
                                <td>8 pagos</td>
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#carteraVencida">Enviar</button></td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/masInformacion" style="text-decoration: none; color:white;">Ver</a></button></td>
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#finalizarCredito">Finalizar</button></td>
                              </tr>
                              <tr>
                                <td>02342</td>
                                <td>NC19802</td>
                                <td>Luis G??mez Loi</td>
                                <td>3000</td>
                                <td>si</td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/tablaAmortizacion" style="text-decoration: none; color:white;">Ver</a></button></td>
                                <td>2 pagos</td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/tablaPagos" style="text-decoration: none; color:white;">Ver</a></button></td>
                                <td>4 pagos</td>
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#carteraVencida">Enviar</button></td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/masInformacion" style="text-decoration: none; color:white;">Ver</a></button></td>
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#finalizarCredito">Finalizar</button></td>
                              </tr>
                            </tbody>
                        </table>
                        <!--fin tabla de clientes--->
                        <!-- inicio tabla finalizar credito-->
                        <table class="table  table-bordered border-secondary table-light table-striped" id="tabla-Finalizado">
                            <thead>
                              <tr>
                                <th scope="col" class="px-5"><p class="encabezado-tabla-medio">Nombre</p></th>
                                <th scope="col" class="px-5"><p class="encabezado-tabla-medio">Num de cr??dito</p></th>
                                <th scope="col" class="px-5"><p class="encabezado-tabla-medio">Cr??dito Activo</p></th>
                                <th scope="col" class="px-5"><p class="encabezado-tabla-medio">Historial de pago</p></th>
                                <th scope="col" class="px-5"><p class="encabezado-tabla">Historial de montos Auto</p></th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Nombre Apellidos</td>
                                    <td>2</td>
                                    <td>Vigente</td>
                                    <td><button class="btn boton-color px-4 mx-4"><a href="/historialPagos" style="text-decoration: none; color:white;">Ver</a></button></td>
                                    <td><button class="btn boton-color px-4 mx-4"><a href="/historialMontosAutorizados" style="text-decoration: none; color:white;">Ver montos</a></button></td>
                                </tr>
                                <tr>
                                    <td>Nombre Apellidos</td>
                                    <td>1</td>
                                    <td>Inactivo</td>
                                    <td><button class="btn boton-color px-4 mx-4"><a href="/historialPagos" style="text-decoration: none; color:white;">Ver</a></button></td>
                                    <td><button class="btn boton-color px-4 mx-4"><a href="/historialMontosAutorizados" style="text-decoration: none; color:white;">Ver montos</a></button></td>
                                </tr>
                                <tr>
                                    <td>Nombre Apellidos</td>
                                    <td>3</td>
                                    <td>Vigente</td>
                                    <td><button class="btn boton-color px-4 mx-4"><a href="/historialPagos" style="text-decoration: none; color:white;">Ver</a></button></td>
                                    <td><button class="btn boton-color px-4 mx-4"><a href="/historialMontosAutorizados" style="text-decoration: none; color:white;">Ver montos</a></button></td>
                                </tr>
                                <tr>
                                    <td>Nombre Apellidos</td>
                                    <td>1</td>
                                    <td>Vigente</td>
                                    <td><button class="btn boton-color px-4 mx-4"><a href="/historialPagos" style="text-decoration: none; color:white;">Ver</a></button></td>
                                    <td><button class="btn boton-color px-4 mx-4"><a href="/historialMontosAutorizados" style="text-decoration: none; color:white;">Ver montos</a></button></td>
                                </tr>
                                <tr>
                                    <td>Nombre Apellidos</td>
                                    <td>2</td>
                                    <td>Inactivo</td>
                                    <td><button class="btn boton-color px-4 mx-4"><a href="/historialPagos" style="text-decoration: none; color:white;">Ver</a></button></td>
                                    <td><button class="btn boton-color px-4 mx-4"><a href="/historialMontosAutorizados" style="text-decoration: none; color:white;">Ver montos</a></button></td>
                                </tr>
                                <tr>
                                    <td>Nombre Apellidos</td>
                                    <td>3</td>
                                    <td>Inactivo</td>
                                    <td><button class="btn boton-color px-4 mx-4"><a href="/historialPagos" style="text-decoration: none; color:white;">Ver</a></button></td>
                                    <td><button class="btn boton-color px-4 mx-4"><a href="/historialMontosAutorizados" style="text-decoration: none; color:white;">Ver montos</a></button></td>
                                </tr>
                                <tr>
                                    <td>Nombre Apellidos</td>
                                    <td>1</td>
                                    <td>Vigente</td>
                                    <td><button class="btn boton-color px-4 mx-4"><a href="/historialPagos" style="text-decoration: none; color:white;">Ver</a></button></td>
                                    <td><button class="btn boton-color px-4 mx-4"><a href="/historialMontosAutorizados" style="text-decoration: none; color:white;">Ver montos</a></button></td>
                                </tr>
                                <tr>
                                    <td>Nombre Apellidos</td>
                                    <td>1</td>
                                    <td>Inactivo</td>
                                    <td><button class="btn boton-color px-4 mx-4"><a href="/historialPagos" style="text-decoration: none; color:white;">Ver</a></button></td>
                                    <td><button class="btn boton-color px-4 mx-4"><a href="/historialMontosAutorizados" style="text-decoration: none; color:white;">Ver montos</a></button></td>
                                </tr>
                                <tr>
                                    <td>Nombre Apellidos</td>
                                    <td>2</td>
                                    <td>Inactivo</td>
                                    <td><button class="btn boton-color px-4 mx-4"><a href="/historialPagos" style="text-decoration: none; color:white;">Ver</a></button></td>
                                    <td><button class="btn boton-color px-4 mx-4"><a href="/historialMontosAutorizados" style="text-decoration: none; color:white;">Ver montos</a></button></td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- fin tabla finalizar credito-->
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fin tabla de elementos buscados-->

    <!--inicio de modal mostrar documento-->
    <div class="modal fade" id="VerDocumento" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header" style="border: none;">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h5 class="modal-title text-center" id="staticBackdropLabel" style="font-size: 35px; color:#38a937;">Documentos</h5>
            </div>
          </div>
          <div class="modal-body" style="border: none;">
            <div class="container-fluid mt-5">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 offset-md-3 offset-lg-3">
                                <table class="table table-striped table-bordered border-secondary">
                                    <thead>
                                      <tr>
                                        <th scope="col" class="text-center" style="font-size: 20px">Documentos</th>
                                        <th scope="col" class="text-center" style="font-size: 20px">Descargable</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td class="pt-3" style="font-weight: bold">INE</td>
                                        <td><a href="#"><img src="{{ asset('img/backoffices/DESCARGAS.png') }}" width="40" class="ms-5" alt=""></a></td>
                                      </tr>
                                      <tr>
                                        <td class="pt-3" style="font-weight: bold">CURP</td>
                                        <td><a href="#"><img src="{{ asset('img/backoffices/DESCARGAS.png') }}"  width="40" class="ms-5" alt=""></a></td>
                                      </tr>
                                      <tr>
                                        <td class="pt-3" style="font-weight: bold">Comprobante de domicilio</td>
                                        <td><a href="#"><img src="{{ asset('img/backoffices/Grupo 444.png') }}"  width="40" class="ms-5" alt=""></a></td>
                                      </tr>
                                      <tr>
                                        <td class="pt-3" style="font-weight: bold">Estado de n??mina</td>
                                        <td><a href="#"><img src="{{ asset('img/backoffices/DESCARGAS.png') }}"  width="40" class="ms-5" alt=""></a></td>
                                      </tr>
                                    </tbody>
                                  </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="modal-footer" style="border: none;">
            <div class="container-fluid mt-5">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 offset-md-3 offset-lg-3">
                                <button type="button" class="btn px-4 my-2" style="background-color: #38a937; color:white; margin-right: 160px;" data-bs-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn px-4 my-2" style="background-color: #f29100; color:white;">Volver</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!--fin de modal mostrar documento-->

    <!--inicio de modal mostrar Aceptar solicitud-->
    <div class="modal fade" id="AceptarSolicitud" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header" style="border: none;">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h5 class="modal-title text-center" id="staticBackdropLabel" style="font-size: 35px; color:#38a937;">Aprobar cr??dito</h5>
            </div>
          </div>
          <div class="modal-body" style="border: none;">
            <div class="container-fluid mt-5">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 offset-md-3 offset-lg-3">
                                <form action="">
                                    <label for="" class="pb-2">Monto de cr??dito aprobado</label>
                                    <input type="number" name="number" id="" class="form-control mb-4" placeholder="$2500">
                                    <label for="" class="pb-2">Confirmado de cr??dito aprobado</label>
                                    <input type="number" name="" id="" class="form-control" placeholder="$2500">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="modal-footer" style="border: none;">
            <div class="container-fluid mt-5">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-10 col-lg-10 offset-md-1 offset-lg-1">
                                <button type="button" class="btn px-4 my-2" style="background-color: #38a937; color:white; margin-right: 350px;" data-bs-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn px-4 my-2" style="background-color: #f29100; color:white;">Guardar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--fin de modal mostrar Aceptar solicitud-->

    <!--inicio de modal mostrar Recharzar solicitud-->
    <div class="modal fade" id="RechazarSolicitud" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header" style="border: none;">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h5 class="modal-title text-center" id="staticBackdropLabel" style="font-size: 35px; color:#38a937;">??Estas seguro de rechazar la solicitud?</h5>
            </div>
          </div>
          <div class="modal-body" style="border: none;">
            <div class="container-fluid mt-5">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-10 offset-md-3 offset-lg-1">
                                <form action="">
                                    <label for="" class="pb-2">Motivo de rechazo:</label>
                                    <div class="form-floating mt-3">
                                        <textarea class="form-control" style="height: 185px;" placeholder="Comentario" id=""></textarea>
                                        <label for="floatingTextarea">Escribe mensaje</label>
                                        <div class="col-3 col-sm-3 col-md-3 col-lg-3 offset-9 offset-sm-9 offset-md-9 offset-lg-9">
                                            <p class="text-secondary">0/300 Caracteres</p>
                                        </div>
                                      </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="modal-footer" style="border: none;">
            <div class="container-fluid mt-5">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-10 col-lg-10 offset-md-1 offset-lg-1">
                                <button type="button" class="btn px-4 py-2 my-2" style="background-color: #38a937; color:white; margin-right: 63%;" data-bs-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn px-4 py-2 my-2" style="background-color: #f29100; color:white;">Aceptar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--fin de modal mostrar rechazar solicitud-->

    <!--inicio de modal mostrar Falta informacion-->
    <div class="modal fade" id="FaltaInfo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header" style="border: none;">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h5 class="modal-title text-center" id="staticBackdropLabel" style="font-size: 35px; color:#38a937;">Seleccione una Opci??n</h5>
            </div>
          </div>
          <div class="modal-body" style="border: none;">
            <div class="container-fluid mt-5">
              <div class="row">
                  <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                      <div class="row">
                          <div class="col-12 col-sm-12 col-md-6 col-lg-10 offset-md-3 offset-lg-1">
                              <form action="">
                                <div class="form-check my-4">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                  <label class="form-check-label" for="flexCheckDefault">
                                    Documento Inv??lido o informaci??n incorrecta, favor de volver a subir.
                                  </label>
                                </div>
                                <div class="form-check my-4">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                  <label class="form-check-label" for="flexCheckDefault">
                                    Documento incompleta: falta documentaci??n por subir.
                                  </label>
                                </div>
                                <div class="form-check my-4">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                  <label class="form-check-label" for="flexCheckDefault">
                                    Otro.
                                  </label>
                                </div>
                                <div class="form-floating mt-3">
                                    <textarea class="form-control" style="height: 160px;" placeholder="Comentario" id=""></textarea>
                                    <label for="floatingTextarea">Escribe mensaje</label>
                                    <div class="col-3 col-sm-3 col-md-3 col-lg-3 offset-9 offset-sm-9 offset-md-9 offset-lg-9">
                                        <p class="text-secondary">0/300 Caracteres</p>
                                    </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          </div>
          <div class="modal-footer" style="border: none;">
            <div class="container-fluid mt-5">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-10 col-lg-10 offset-md-1 offset-lg-1">
                                <button type="button" class="btn px-4 my-2" style="background-color: #38a937; color:white; margin-right: 64%;" data-bs-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn px-4 my-2" style="background-color: #f29100; color:white;">Enviar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--fin de modal mostrar Falta Informacion-->

    <!--Inicio de modal mostrar cartera vencida -->
    <div class="modal fade" id="carteraVencida" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header" style="border: none;">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h5 class="modal-title text-center" id="staticBackdropLabel" style="font-size: 35px; color:#38a937;">Confirmaci??n</h5>
            </div>
          </div>
          <div class="modal-body" style="border: none;">
            <div class="container-fluid mt-5">
              <div class="row">
                  <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                      <div class="row">
                          <div class="col-12 col-sm-12 col-md-6 col-lg-10 offset-md-3 offset-lg-1">
                            <p class="text-secondary">??Est??s seguro de querer enviar al cliente a cartera vencida? Esta acci??n no se
                              podr?? deshacer.</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          </div>
          <div class="modal-footer" style="border: none;">
            <div class="container-fluid mt-5">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-10 col-lg-10 offset-md-1 offset-lg-1">
                                <button type="button" class="btn px-4 my-2" style="background-color: #38a937; color:white; margin-right: 64%;" data-bs-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn px-4 my-2" style="background-color: #f29100; color:white;">Aceptar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Fin de modal mostrar cartera vencida -->

    <!--inicio modal Finalizar credito-->
    <div class="modal fade" id="finalizarCredito" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header" style="border: none;">
              <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  <h5 class="modal-title text-center" id="staticBackdropLabel" style="font-size: 35px; color:#38a937;">??Est?? seguro de finalizar el cr??dito del clientes?</h5>
              </div>
            </div>
            <div class="modal-body" style="border: none;">
              <div class="container-fluid mt-5">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-10 offset-md-3 offset-lg-1">
                              <p class="text-secondary">Al dar clic en el bot??n aceptar. El cliente pasar?? a cr??ditos finalizados esta
                                acci??n no se puede deshacer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="modal-footer" style="border: none;">
              <div class="container-fluid mt-5">
                  <div class="row">
                      <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                          <div class="row">
                              <div class="col-12 col-sm-12 col-md-10 col-lg-10 offset-md-1 offset-lg-1">
                                  <button type="button" class="btn px-4 my-2" style="background-color: #38a937; color:white; margin-right: 64%;" data-bs-dismiss="modal">Cancelar</button>
                                  <button type="button" class="btn px-4 my-2" style="background-color: #f29100; color:white;">Aceptar</button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!--fin modal Finalizar credito-->

    <!--inicio de paginador-->
    <div class="container-fluid mt-5">
      <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12">
              <div class="row">
                  <div class="col-2 col-sm-2 col-md-2 col-lg-2 offset-2 offset-sm-2 offset-md-2 offset-lg-8">
                    <nav aria-label="Page navigation example">
                      <ul class="pagination">
                        <li class="page-item"><a class="page-link text-dark" href="#">Anterior</a></li>
                        <li class="page-item"><a class="page-link text-dark" href="#">1</a></li>
                        <li class="page-item"><a class="page-link text-dark" href="#">2</a></li>
                        <li class="page-item"><a class="page-link text-dark" href="#">3</a></li>
                        <li class="page-item"><a class="page-link text-dark" href="#">4</a></li>
                        <li class="page-item"><a class="page-link text-dark" href="#">Siguientes</a></li>
                      </ul>
                    </nav>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <!--fin de paginador-->


    <!--  inicio footer --->
    <footer class="mt-5">
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="row">
                        {{--  inicio footer apartado informacion legal --}}
                        <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                            <div class="container-fluid my-5">
                                <p class="footer-p ms-3"> Informaci??n legal</p>
                                <a href="#" style="width: 100%;" class="footer-enlaces mt-3 ms-3" data-bs-toggle="modal" data-bs-target="#terminosYcondiciones">Terminos y Condiciones 20</a><br>
                                <a href="#" style="width: 100%;" class="footer-enlaces mt-4 ms-3" data-bs-toggle="modal" data-bs-target="#politicaYprivacidad">Politica y Aviso de Privacidad</a><br>
                                <p class="mt-4 ms-3" style="font-size: 20px; font-weight: bold;">??Te gusta la pagina?</p>
                                <img src="{{ asset('img/backoffices/Grupo 63.png') }}" width="150" class="ms-3 ms-3" alt="">
                            </div>
                        </div>
                        <!-- inicio modal-footer apartado info legal-->
                        <div class="modal fade" id="terminosYcondiciones" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-scrollable">
                              <div class="modal-content">
                                <div class="modal-header">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                        <h5 class="modal-title text-center" id="staticBackdropLabel" style="font-size: 35px; color:#38a937;">T??rminos y Condiciones</h5>
                                    </div>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid mt-5">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="row">
                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                        <p class="modal-footer text-secondary">
                                                            De conformidad con lo dispuesto en la Ley Federal de Protecci??n de Datos Personales en Posesi??n de los Particulares y a los requisitos que dicha legislaci??n establece, HELLO M??XICO: Agencia de contenidos digitales S.A. de C.V, da a conocer el presente documento: Para efectos del presente Aviso de Privacidad, se entender?? por: Aviso de Privacidad: Se refiere al presente documento, el cual es puesto a disposici??n del TITULAR, previo al tratamiento de sus datos personales, de conformidad con el art??culo 15 de la Ley Federal de Protecci??n de Datos Personales en Posesi??n de los Particulares. Datos personales: Cualquier informaci??n concerniente a una persona f??sica identificada o identificable. Datos personales sensibles: Aquellos datos personales que afecten a la esfera m??s ??ntima del TITULAR, o cuya utilizaci??n indebida pueda dar origen a discriminaci??n o conlleve un riesgo grave para ??ste. En particular, se consideran sensibles aquellos que puedan revelar aspectos como origen racial o ??tnico, estado de salud presente y futuro, informaci??n gen??tica, creencias religiosas, filos??ficas y morales, afiliaci??n sindical, opiniones pol??ticas, preferencia sexual. Derechos: Se refiere a los derechos de acceso, cancelaci??n, rectificaci??n y oposici??n con los que cuenta el TITULAR en relaci??n a sus datos personales. Encargado: La persona f??sica o moral que sola o conjuntamente con otras trate datos personales por cuenta del responsable. Ley: Ley Federal de Protecci??n de Datos Personales en Posesi??n de los Particulares y/o su Reglamento. Responsable: Hello M??xico, Agencia de Contenidos Digitales S.A. de C.V, en su car??cter de persona moral privada que decide sobre el tratamiento de datos personales. Titular: La persona f??sica a quien corresponden los datos personales. Tratamiento: Obtenci??n, uso, divulgaci??n o almacenamiento de datos personales por cualquier medio. El uso abarca cualquier acci??n de acceso, manejo, aprovechamiento, transferencia o disposici??n de datos personales. El presente Aviso de Privacidad se pone a disposici??n del TITULAR, en cumplimiento a lo dispuesto por la Ley Federal de Protecci??n de Datos Personales en posesi??n de los Particulares, as?? como dem??s disposiciones legales aplicables. Hello M??xico, Agencia de contenidos digitales S.A. de C.V, es una a Sociedad An??nima de Capital Variable legalmente constituida de conformidad con las leyes de la Rep??blica Mexicana, con domicilio fiscal en Retorno 16 de Fray Servando Teresa de Mier No 5, Departamento 12, Col.Jard??n Balbuena, Venustiano Carranza CDMX. siendo RESPONSABLE del tratamiento de los datos personales del TITULAR que otorga su consentimiento al presente aviso. Hello M??xico, Agencia de contenidos digitales S.A. de C.V, con el compromiso de observar los principios de licitud, consentimiento, informaci??n, calidad, finalidad, lealtad, proporcionalidad y responsabilidad en el tratamiento de datos personales y los derechos de privacidad y autodeterminaci??n informativa, hace constar en el presente aviso de privacidad lo siguiente: 1) La Empresa tratar?? su informaci??n y datos personales como confidenciales y mantendr?? medidas preventivas dirigidas a protegerla contra p??rdida, mal uso, acceso no autorizado, alteraci??n o destrucci??n, no la divulgar?? para otro prop??sito que no sea el establecido en el presente Aviso de Privacidad. Su informaci??n ser?? tratada como confidencial y ser?? administrada durante el tiempo necesario para lograr los fines mencionados en el presente Aviso Privacidad, el cual podr?? actualizarse para reflejar los cambios en nuestras pr??cticas para recabar informaci??n, para la utilizaci??n de la informaci??n, y en materia de seguridad. 2) Los datos personales que tratar?? Hello M??xico, Agencia de contenidos digitales S.A. de C.V, incluyendo la obtenci??n, uso, divulgaci??n o almacenamiento de tales datos por cualquier medio de acceso, manejo, aprovechamiento, transferencia o disposici??n, son aquellos que usted en su calidad de TITULAR, ha proporcionado o proporcione a Hello M??xico, Agencia de contenidos digitales S.A. de C.V, y aquellos a los que Hello M??xico, Agencia de contenidos digitales S.A. de C.V, tiene acceso leg??timamente por haber sido proporcionados para los fines que m??s adelante se se??alan. A continuaci??n se enlistan algunos de los datos personales a que se refiere este apartado: Nombre. Compa????a. Direcci??n. Informaci??n de contacto, incluyendo tel??fono, correo electr??nico y otros. Profesi??n y contacto laboral Cuando se requiera c??dula profesional Identificaci??n oficial con fotograf??a y vigente, Adem??s de diversos Datos que se requieran y por ley se permitan recabar. La lista anterior debe entenderse como enunciativa, m??s no limitativa de aquellos datos de car??cter personal que ser??n tratados por Hello M??xico, Agencia de contenidos digitales S.A. de C.V, en el entendido que se trata de datos personales de la misma naturaleza. 3) Hello M??xico, Agencia de contenidos digitales S.A. de C.V, hace de su conocimiento que los datos personales del titular ser??n tratados por Hello M??xico, Agencia de contenidos digitales S.A. de C.V, y/o las empresas afiliadas de la misma, encargadas que act??en en nombre de Hello M??xico, Agencia de contenidos digitales S.A. de C.V, y terceros, distintos a Hello M??xico, Agencia de contenidos digitales S.A. de C.V, o al titular de los datos, quienes deber??n cumplir con el presente Aviso de Privacidad. 4) Las finalidades del tratamiento de los datos personales del TITULAR por parte de Hello M??xico, Agencia de contenidos digitales S.A. de C.V, son las que se enuncian a continuaci??n, as?? como todas aquellas que resulten an??logas: Env??o de publicidad informativa relativa a temas del servicio proporcionado. Fines informativos, administrativos y/o comerciales relacionados con el servicio proporcionado. 5) Al acceder al presente sitio y aceptar el presente Aviso de Privacidad, usted en su car??cter de TITULAR otorga expresamente a Hello M??xico, Agencia de contenidos digitales S.A. de C.V, su consentimiento para la transferencia nacional e internacional de sus datos personales, siempre que el receptor de los datos asuma las mismas obligaciones asumidas por Hello M??xico, Agencia de contenidos digitales S.A. de C.V. Asimismo, Hello M??xico, Agencia de contenidos digitales S.A. de C.V, se compromete a transferir solo aquella informaci??n que sea necesaria para la misma finalidad con la que se emite el presente aviso. 6) Tambi??n podemos compartir su informaci??n: I. Cuando alguna autoridad gubernamental o diverso funcionario gubernamental responsable de hacer cumplir la ley solicite o requiera razonablemente dicha informaci??n; II. Cuando lo exija la ley o en respuesta a alg??n proceso legal; III. Cuando sea razonablemente necesario llevar a cabo una investigaci??n de car??cter legal. 7) Hello M??xico, Agencia de contenidos digitales S.A. de C.V, establecer?? y mantendr?? medidas de seguridad, administrativas, t??cnicas y f??sicas que permitan proteger los datos personales contra da??o, p??rdida, alteraci??n, destrucci??n o el uso, acceso o tratamiento no autorizado. Estas medidas no ser??n menores a aquellas que mantenga Hello M??xico, Agencia de contenidos digitales S.A. de C.V, para el manejo de su propia informaci??n. 8) Derechos: Conforme a la Ley de Protecci??n de Datos Personales Usted tiene el derecho de ejercer en cualquier momento sus derechos de acceso, rectificaci??n, cancelaci??n y oposici??n de su informaci??n, mediante una solicitud por escrito dirigida a Hello M??xico, Agencia de contenidos digitales S.A. de C.V, quien podr?? solicitarle para su protecci??n y beneficio, documentaci??n que acredite correcciones a los datos en caso de que solicite rectificaci??n de los mismos. Usted puede solicitar que se cancelen sus datos personales que Hello M??xico, Agencia de contenidos digitales S.A. de C.V, conserva. Asimismo usted podr?? limitar el uso y distribuci??n de sus datos personales a trav??s de una solicitud por escrito a La Empresa. No obstante lo anterior, es posible que La Empresa se vea obligada conforme a la legislaci??n aplicable a conservar algunos o todos sus datos personales. Es importante que los cambios que pretenda hacer a sus datos personales sean correctos y no se eliminar??n aquellos datos que por obligaci??n o disposici??n legal deba de conservar la empresa. La solicitud deber?? ser presentada por el TITULAR o su representante legal, a la direcci??n antes mencionada, dicha solicitud deber?? contener: I) El nombre completo del TITULAR y domicilio u otro medio para comunicarle la respuesta, incluyendo direcci??n de correo electr??nico. II) Los documentos que acrediten su identidad o la del representante legal, III) La descripci??n clara y precisa de los datos personales respecto de lo que busca ejercer sus derechos, IV) Cualquier otro elemento que facilite la localizaci??n de los datos personales del TITULAR. Hello M??xico, Agencia de contenidos digitales S.A. de C.V, comunicar?? al titular en m??ximo 20 (veinte) d??as naturales, contados a partir de haber recibido la solicitud de acceso, rectificaci??n, cancelaci??n u oposici??n, la determinaci??n adoptada, a efecto de que se haga efectiva dentro de los 15 d??as naturales siguientes. Estos plazos podr??n ser ampliados por un periodo igual cuando a discreci??n de Hello M??xico, Agencia de contenidos digitales S.A. de C.V, las circunstancias del caso lo justifiquen. El derecho de acceso procede cuando el titular desee conocer cu??les de sus datos personales obran en poder de Hello M??xico, Agencia de contenidos digitales S.A. de C.V, y el aviso de privacidad que le es aplicable. Se dar?? cumplimiento a una solicitud de acceso, poniendo a disposici??n del TITULAR o su representante, previo acreditamiento de su identidad, los documentos donde obren los datos personales requeridos, ya sea mediante copias fotost??ticas, un CD que contenga dicha informaci??n,
                                                            un dispositivo USB o cualquier otro medio que determine Hello M??xico, Agencia de contenidos digitales S.A. de C.V., La entrega de los datos ser?? gratuita siempre y cuando no se repita la solicitud de acceso en un periodo menor a 12 meses. El TITULAR ??nicamente cubrir?? los costos de reproducci??n en copias u otros formatos. El TITULAR podr?? rectificar sus datos personales cuando estos sean inexactos o incompletos, indicando en la solicitud de rectificaci??n las modificaciones que deban realizarse y aportando a Hello M??xico, Agencia de contenidos digitales S.A. de C.V, la documentaci??n que sustente su petici??n. En caso de ser procedente la solicitud del TITULAR, Hello M??xico, Agencia de contenidos digitales S.A. de C.V, deber?? informar de los cambios de que se trate a los encargados del tratamiento y a terceros, en caso de que haya habido transferencias de datos en los t??rminos del presente Aviso de Privacidad. El derecho de cancelaci??n consiste en la supresi??n del dato y puede ir precedido por un periodo de bloqueo en el que los datos no podr??n ser objeto de tratamiento. No proceder?? la cancelaci??n de los datos personales en los casos previstos por la Ley. El TITULAR tendr?? derecho en todo momento y por causa leg??tima a oponerse al tratamiento de sus datos. De resultar procedente la solicitud, Hello M??xico, Agencia de contenidos digitales S.A. de C.V, no podr?? tratar los datos del TITULAR. Hello M??xico, Agencia de contenidos digitales S.A. de C.V, podr?? negar el acceso a los datos personales, o realizar la rectificaci??n o cancelaci??n o conceder la oposici??n cuando el solicitante no sea el TITULAR o el representante legal no est?? debidamente acreditado para ello, cuando en su base de datos no se encuentren los datos personales del titular, cuando se lesionen derechos de un tercero, cuando exista un impedimento legal o una resoluci??n de una autoridad competente que restrinja el acceso a los datos personales o no permita su rectificaci??n, cancelaci??n u oposici??n y cuando la rectificaci??n, cancelaci??n u oposici??n haya sido previamente realizada. 9) En caso de que se efect??en cambios al presente Aviso de Privacidad, Hello M??xico, Agencia de contenidos digitales S.A. de C.V, los har?? del conocimiento del titular mediante notificaci??n escrita que ser?? publicada en la p??gina de Internet de www.hellomexico.mx si resulta procedente, a trav??s del correo electr??nico que el TITULAR le haya notificado a Hello M??xico, Agencia de contenidos digitales S.A. de C.V, previamente. Si el TITULAR est?? de acuerdo con las modificaciones hechas al Aviso de Privacidad deber?? entregar el documento que incluya dichas modificaciones, debidamente firmado con atenci??n a Hello M??xico, Agencia de contenidos digitales S.A. de C.V, dentro de los siguientes 5 d??as h??biles. 10) El consentimiento para el tratamiento de datos personales podr?? ser revocado mediante aviso por escrito, que el TITULAR proporcione por escrito, dirigido al correo electr??nico se??alado en el presente Aviso de Privacidad , en el cual incluya las razones por las que revoca el consentimiento. 11) Hello M??xico, Agencia de contenidos digitales S.A. de C.V, dar?? tr??mite a las solicitudes de acceso, rectificaci??n, cancelaci??n y oposici??n, labor que estar?? a su cargo, cuyo domicilio f??sico se encuentra ubicado en la direcci??n se??alada al inicio del presente aviso, para cualquier duda o comentario respecto al presente Aviso de Privacidad se ha se??alado anteriormente. Al proporcionarnos sus datos usted reconoce que entiende y acepta la recopilaci??n y transmisi??n de su informaci??n y datos personales por parte de Hello M??xico, Agencia de contenidos digitales S.A. de C.V, seg??n se se??ala en el presente Aviso de Privacidad.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="container-fluid mt-5">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="row">
                                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 offset-md-4 offset-lg-4">
                                                        <button type="button" class="btn px-5 py-3 ms-3" style="background-color: #38a937; color:white; font-size: 20px;" data-bs-dismiss="modal">Aceptar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="modal fade" id="politicaYprivacidad" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-scrollable">
                              <div class="modal-content">
                                <div class="modal-header">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                        <h5 class="modal-title text-center" id="staticBackdropLabel" style="font-size: 35px; color:#38a937;">Politica y Aviso de Privacidad</h5>
                                    </div>
                                </div>
                                <div class="modal-body">
                                   <p class="modal-footer text-secondary">
                                        De conformidad con lo dispuesto en la Ley Federal de Protecci??n de Datos Personales en Posesi??n de los Particulares y a los requisitos que dicha legislaci??n establece, HELLO M??XICO: Agencia de contenidos digitales S.A. de C.V, da a conocer el presente documento: Para efectos del presente Aviso de Privacidad, se entender?? por: Aviso de Privacidad: Se refiere al presente documento, el cual es puesto a disposici??n del TITULAR, previo al tratamiento de sus datos personales, de conformidad con el art??culo 15 de la Ley Federal de Protecci??n de Datos Personales en Posesi??n de los Particulares. Datos personales: Cualquier informaci??n concerniente a una persona f??sica identificada o identificable. Datos personales sensibles: Aquellos datos personales que afecten a la esfera m??s ??ntima del TITULAR, o cuya utilizaci??n indebida pueda dar origen a discriminaci??n o conlleve un riesgo grave para ??ste. En particular, se consideran sensibles aquellos que puedan revelar aspectos como origen racial o ??tnico, estado de salud presente y futuro, informaci??n gen??tica, creencias religiosas, filos??ficas y morales, afiliaci??n sindical, opiniones pol??ticas, preferencia sexual. Derechos: Se refiere a los derechos de acceso, cancelaci??n, rectificaci??n y oposici??n con los que cuenta el TITULAR en relaci??n a sus datos personales. Encargado: La persona f??sica o moral que sola o conjuntamente con otras trate datos personales por cuenta del responsable. Ley: Ley Federal de Protecci??n de Datos Personales en Posesi??n de los Particulares y/o su Reglamento. Responsable: Hello M??xico, Agencia de Contenidos Digitales S.A. de C.V, en su car??cter de persona moral privada que decide sobre el tratamiento de datos personales. Titular: La persona f??sica a quien corresponden los datos personales. Tratamiento: Obtenci??n, uso, divulgaci??n o almacenamiento de datos personales por cualquier medio. El uso abarca cualquier acci??n de acceso, manejo, aprovechamiento, transferencia o disposici??n de datos personales. El presente Aviso de Privacidad se pone a disposici??n del TITULAR, en cumplimiento a lo dispuesto por la Ley Federal de Protecci??n de Datos Personales en posesi??n de los Particulares, as?? como dem??s disposiciones legales aplicables. Hello M??xico, Agencia de contenidos digitales S.A. de C.V, es una a Sociedad An??nima de Capital Variable legalmente constituida de conformidad con las leyes de la Rep??blica Mexicana, con domicilio fiscal en Retorno 16 de Fray Servando Teresa de Mier No 5, Departamento 12, Col.Jard??n Balbuena, Venustiano Carranza CDMX. siendo RESPONSABLE del tratamiento de los datos personales del TITULAR que otorga su consentimiento al presente aviso. Hello M??xico, Agencia de contenidos digitales S.A. de C.V, con el compromiso de observar los principios de licitud, consentimiento, informaci??n, calidad, finalidad, lealtad, proporcionalidad y responsabilidad en el tratamiento de datos personales y los derechos de privacidad y autodeterminaci??n informativa, hace constar en el presente aviso de privacidad lo siguiente: 1) La Empresa tratar?? su informaci??n y datos personales como confidenciales y mantendr?? medidas preventivas dirigidas a protegerla contra p??rdida, mal uso, acceso no autorizado, alteraci??n o destrucci??n, no la divulgar?? para otro prop??sito que no sea el establecido en el presente Aviso de Privacidad. Su informaci??n ser?? tratada como confidencial y ser?? administrada durante el tiempo necesario para lograr los fines mencionados en el presente Aviso Privacidad, el cual podr?? actualizarse para reflejar los cambios en nuestras pr??cticas para recabar informaci??n, para la utilizaci??n de la informaci??n, y en materia de seguridad. 2) Los datos personales que tratar?? Hello M??xico, Agencia de contenidos digitales S.A. de C.V, incluyendo la obtenci??n, uso, divulgaci??n o almacenamiento de tales datos por cualquier medio de acceso, manejo, aprovechamiento, transferencia o disposici??n, son aquellos que usted en su calidad de TITULAR, ha proporcionado o proporcione a Hello M??xico, Agencia de contenidos digitales S.A. de C.V, y aquellos a los que Hello M??xico, Agencia de contenidos digitales S.A. de C.V, tiene acceso leg??timamente por haber sido proporcionados para los fines que m??s adelante se se??alan. A continuaci??n se enlistan algunos de los datos personales a que se refiere este apartado: Nombre. Compa????a. Direcci??n. Informaci??n de contacto, incluyendo tel??fono, correo electr??nico y otros. Profesi??n y contacto laboral Cuando se requiera c??dula profesional Identificaci??n oficial con fotograf??a y vigente, Adem??s de diversos Datos que se requieran y por ley se permitan recabar. La lista anterior debe entenderse como enunciativa, m??s no limitativa de aquellos datos de car??cter personal que ser??n tratados por Hello M??xico, Agencia de contenidos digitales S.A. de C.V, en el entendido que se trata de datos personales de la misma naturaleza. 3) Hello M??xico, Agencia de contenidos digitales S.A. de C.V, hace de su conocimiento que los datos personales del titular ser??n tratados por Hello M??xico, Agencia de contenidos digitales S.A. de C.V, y/o las empresas afiliadas de la misma, encargadas que act??en en nombre de Hello M??xico, Agencia de contenidos digitales S.A. de C.V, y terceros, distintos a Hello M??xico, Agencia de contenidos digitales S.A. de C.V, o al titular de los datos, quienes deber??n cumplir con el presente Aviso de Privacidad. 4) Las finalidades del tratamiento de los datos personales del TITULAR por parte de Hello M??xico, Agencia de contenidos digitales S.A. de C.V, son las que se enuncian a continuaci??n, as?? como todas aquellas que resulten an??logas: Env??o de publicidad informativa relativa a temas del servicio proporcionado. Fines informativos, administrativos y/o comerciales relacionados con el servicio proporcionado. 5) Al acceder al presente sitio y aceptar el presente Aviso de Privacidad, usted en su car??cter de TITULAR otorga expresamente a Hello M??xico, Agencia de contenidos digitales S.A. de C.V, su consentimiento para la transferencia nacional e internacional de sus datos personales, siempre que el receptor de los datos asuma las mismas obligaciones asumidas por Hello M??xico, Agencia de contenidos digitales S.A. de C.V. Asimismo, Hello M??xico, Agencia de contenidos digitales S.A. de C.V, se compromete a transferir solo aquella informaci??n que sea necesaria para la misma finalidad con la que se emite el presente aviso. 6) Tambi??n podemos compartir su informaci??n: I. Cuando alguna autoridad gubernamental o diverso funcionario gubernamental responsable de hacer cumplir la ley solicite o requiera razonablemente dicha informaci??n; II. Cuando lo exija la ley o en respuesta a alg??n proceso legal; III. Cuando sea razonablemente necesario llevar a cabo una investigaci??n de car??cter legal. 7) Hello M??xico, Agencia de contenidos digitales S.A. de C.V, establecer?? y mantendr?? medidas de seguridad, administrativas, t??cnicas y f??sicas que permitan proteger los datos personales contra da??o, p??rdida, alteraci??n, destrucci??n o el uso, acceso o tratamiento no autorizado. Estas medidas no ser??n menores a aquellas que mantenga Hello M??xico, Agencia de contenidos digitales S.A. de C.V, para el manejo de su propia informaci??n. 8) Derechos: Conforme a la Ley de Protecci??n de Datos Personales Usted tiene el derecho de ejercer en cualquier momento sus derechos de acceso, rectificaci??n, cancelaci??n y oposici??n de su informaci??n, mediante una solicitud por escrito dirigida a Hello M??xico, Agencia de contenidos digitales S.A. de C.V, quien podr?? solicitarle para su protecci??n y beneficio, documentaci??n que acredite correcciones a los datos en caso de que solicite rectificaci??n de los mismos. Usted puede solicitar que se cancelen sus datos personales que Hello M??xico, Agencia de contenidos digitales S.A. de C.V, conserva. Asimismo usted podr?? limitar el uso y distribuci??n de sus datos personales a trav??s de una solicitud por escrito a La Empresa. No obstante lo anterior, es posible que La Empresa se vea obligada conforme a la legislaci??n aplicable a conservar algunos o todos sus datos personales. Es importante que los cambios que pretenda hacer a sus datos personales sean correctos y no se eliminar??n aquellos datos que por obligaci??n o disposici??n legal deba de conservar la empresa. La solicitud deber?? ser presentada por el TITULAR o su representante legal, a la direcci??n antes mencionada, dicha solicitud deber?? contener: I) El nombre completo del TITULAR y domicilio u otro medio para comunicarle la respuesta, incluyendo direcci??n de correo electr??nico. II) Los documentos que acrediten su identidad o la del representante legal, III) La descripci??n clara y precisa de los datos personales respecto de lo que busca ejercer sus derechos, IV) Cualquier otro elemento que facilite la localizaci??n de los datos personales del TITULAR. Hello M??xico, Agencia de contenidos digitales S.A. de C.V, comunicar?? al titular en m??ximo 20 (veinte) d??as naturales, contados a partir de haber recibido la solicitud de acceso, rectificaci??n, cancelaci??n u oposici??n, la determinaci??n adoptada, a efecto de que se haga efectiva dentro de los 15 d??as naturales siguientes. Estos plazos podr??n ser ampliados por un periodo igual cuando a discreci??n de Hello M??xico, Agencia de contenidos digitales S.A. de C.V, las circunstancias del caso lo justifiquen. El derecho de acceso procede cuando el titular desee conocer cu??les de sus datos personales obran en poder de Hello M??xico, Agencia de contenidos digitales S.A. de C.V, y el aviso de privacidad que le es aplicable. Se dar?? cumplimiento a una solicitud de acceso, poniendo a disposici??n del TITULAR o su representante, previo acreditamiento de su identidad, los documentos donde obren los datos personales requeridos, ya sea mediante copias fotost??ticas, un CD que contenga dicha informaci??n, un dispositivo USB o cualquier otro medio que determine Hello M??xico, Agencia de contenidos digitales S.A. de C.V., La entrega de los datos ser?? gratuita siempre y cuando no se repita la solicitud de acceso en un periodo menor a 12 meses. El TITULAR ??nicamente cubrir?? los costos de reproducci??n en copias u otros formatos. El TITULAR podr?? rectificar sus datos personales cuando estos sean inexactos o incompletos, indicando en la solicitud de rectificaci??n las modificaciones que deban realizarse y aportando a Hello M??xico, Agencia de contenidos digitales S.A. de C.V, la documentaci??n que sustente su petici??n. En caso de ser procedente la solicitud del TITULAR, Hello M??xico, Agencia de contenidos digitales S.A. de C.V, deber?? informar de los cambios de que se trate a los encargados del tratamiento y a terceros, en caso de que haya habido transferencias de datos en los t??rminos del presente Aviso de Privacidad. El derecho de cancelaci??n consiste en la supresi??n del dato y puede ir precedido por un periodo de bloqueo en el que los datos no podr??n ser objeto de tratamiento. No proceder?? la cancelaci??n de los datos personales en los casos previstos por la Ley. El TITULAR tendr?? derecho en todo momento y por causa leg??tima a oponerse al tratamiento de sus datos. De resultar procedente la solicitud, Hello M??xico, Agencia de contenidos digitales S.A. de C.V, no podr?? tratar los datos del TITULAR. Hello M??xico, Agencia de contenidos digitales S.A. de C.V, podr?? negar el acceso a los datos personales, o realizar la rectificaci??n o cancelaci??n o conceder la oposici??n cuando el solicitante no sea el TITULAR o el representante legal no est?? debidamente acreditado para ello, cuando en su base de datos no se encuentren los datos personales del titular, cuando se lesionen derechos de un tercero, cuando exista un impedimento legal o una resoluci??n de una autoridad competente que restrinja el acceso a los datos personales o no permita su rectificaci??n, cancelaci??n u oposici??n y cuando la rectificaci??n, cancelaci??n u oposici??n haya sido previamente realizada. 9) En caso de que se efect??en cambios al presente Aviso de Privacidad, Hello M??xico, Agencia de contenidos digitales S.A. de C.V, los har?? del conocimiento del titular mediante notificaci??n escrita que ser?? publicada en la p??gina de Internet de www.hellomexico.mx si resulta procedente, a trav??s del correo electr??nico que el TITULAR le haya notificado a Hello M??xico, Agencia de contenidos digitales S.A. de C.V, previamente. Si el TITULAR est?? de acuerdo con las modificaciones hechas al Aviso de Privacidad deber?? entregar el documento que incluya dichas modificaciones, debidamente firmado con atenci??n a Hello M??xico, Agencia de contenidos digitales S.A. de C.V, dentro de los siguientes 5 d??as h??biles. 10) El consentimiento para el tratamiento de datos personales podr?? ser revocado mediante aviso por escrito, que el TITULAR proporcione por escrito, dirigido al correo electr??nico se??alado en el presente Aviso de Privacidad , en el cual incluya las razones por las que revoca el consentimiento. 11) Hello M??xico, Agencia de contenidos digitales S.A. de C.V, dar?? tr??mite a las solicitudes de acceso, rectificaci??n, cancelaci??n y oposici??n, labor que estar?? a su cargo, cuyo domicilio f??sico se encuentra ubicado en la direcci??n se??alada al inicio del presente aviso, para cualquier duda o comentario respecto al presente Aviso de Privacidad se ha se??alado anteriormente. Al proporcionarnos sus datos usted reconoce que entiende y acepta la recopilaci??n y transmisi??n de su informaci??n y datos personales por parte de Hello M??xico, Agencia de contenidos digitales S.A. de C.V, seg??n se se??ala en el presente Aviso de Privacidad.
                                   </p>
                                </div>
                                <div class="modal-footer">
                                    <div class="container-fluid mt-5">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="row">
                                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 offset-md-4 offset-lg-4">
                                                        <button type="button" class="btn px-5 py-3 ms-3" style="background-color: #38a937; color:white; font-size: 20px;" data-bs-dismiss="modal">Aceptar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        <!-- fin modal-footer apartado info legal-->
                        {{--  fin footer apartado informacion legal --}}
                         {{--  inicio footer apartado Atencion al Cliente --}}
                        <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                            <div class="container-fluid my-5">
                                <p class="footer-p ms-3">Atencion al Cliente</p>
                                <a href="/preguntasfrec" style="width: 100%;" class="footer-enlaces ms-3">Preguntas Frecuentes</a><br>
                                <a href="#" style="width: 100%;" class="footer-enlaces ms-3" data-bs-toggle="modal" data-bs-target="#QuienesSomos">??Quienes somos?</a> <br>
                                <a href="#" style="width: 100%;" class="footer-enlaces ms-3" data-bs-toggle="modal" data-bs-target="#AcercaNosotros">Acerca de nosotros</a><br>
                                <img src="{{ asset('img/backoffices/Grupo 50.png') }}" width="45" class=" mt-4 ms-3" alt="">
                                <img src="{{ asset('img/backoffices/Grupo 48.png') }}" width="45" class="mt-4 ms-3" alt="">
                            </div>
                        </div>
                        <!--inicio modal footer atencion a cliente-->
                        <div class="modal fade" id="QuienesSomos" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-scrollable">
                              <div class="modal-content">
                                <div class="modal-header">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                        <h5 class="modal-title text-center" id="staticBackdropLabel" style="font-size: 35px; color:#38a937;">??Quienes somos?</h5>
                                    </div>
                                </div>
                                <div class="modal-body">
                                   <p class="modal-footer text-secondary">
                                        De conformidad con lo dispuesto en la Ley Federal de Protecci??n de Datos Personales en Posesi??n de los Particulares y a los requisitos que dicha legislaci??n establece, HELLO M??XICO: Agencia de contenidos digitales S.A. de C.V, da a conocer el presente documento: Para efectos del presente Aviso de Privacidad, se entender?? por: Aviso de Privacidad: Se refiere al presente documento, el cual es puesto a disposici??n del TITULAR, previo al tratamiento de sus datos personales, de conformidad con el art??culo 15 de la Ley Federal de Protecci??n de Datos Personales en Posesi??n de los Particulares. Datos personales: Cualquier informaci??n concerniente a una persona f??sica identificada o identificable. Datos personales sensibles: Aquellos datos personales que afecten a la esfera m??s ??ntima del TITULAR, o cuya utilizaci??n indebida pueda dar origen a discriminaci??n o conlleve un riesgo grave para ??ste. En particular, se consideran sensibles aquellos que puedan revelar aspectos como origen racial o ??tnico, estado de salud presente y futuro, informaci??n gen??tica, creencias religiosas, filos??ficas y morales, afiliaci??n sindical, opiniones pol??ticas, preferencia sexual. Derechos: Se refiere a los derechos de acceso, cancelaci??n, rectificaci??n y oposici??n con los que cuenta el TITULAR en relaci??n a sus datos personales. Encargado: La persona f??sica o moral que sola o conjuntamente con otras trate datos personales por cuenta del responsable. Ley: Ley Federal de Protecci??n de Datos Personales en Posesi??n de los Particulares y/o su Reglamento. Responsable: Hello M??xico, Agencia de Contenidos Digitales S.A. de C.V, en su car??cter de persona moral privada que decide sobre el tratamiento de datos personales. Titular: La persona f??sica a quien corresponden los datos personales. Tratamiento: Obtenci??n, uso, divulgaci??n o almacenamiento de datos personales por cualquier medio. El uso abarca cualquier acci??n de acceso, manejo, aprovechamiento, transferencia o disposici??n de datos personales. El presente Aviso de Privacidad se pone a disposici??n del TITULAR, en cumplimiento a lo dispuesto por la Ley Federal de Protecci??n de Datos Personales en posesi??n de los Particulares, as?? como dem??s disposiciones legales aplicables. Hello M??xico, Agencia de contenidos digitales S.A. de C.V, es una a Sociedad An??nima de Capital Variable legalmente constituida de conformidad con las leyes de la Rep??blica Mexicana, con domicilio fiscal en Retorno 16 de Fray Servando Teresa de Mier No 5, Departamento 12, Col.Jard??n Balbuena, Venustiano Carranza CDMX. siendo RESPONSABLE del tratamiento de los datos personales del TITULAR que otorga su consentimiento al presente aviso. Hello M??xico, Agencia de contenidos digitales S.A. de C.V, con el compromiso de observar los principios de licitud, consentimiento, informaci??n, calidad, finalidad, lealtad, proporcionalidad y responsabilidad en el tratamiento de datos personales y los derechos de privacidad y autodeterminaci??n informativa, hace constar en el presente aviso de privacidad lo siguiente: 1) La Empresa tratar?? su informaci??n y datos personales como confidenciales y mantendr?? medidas preventivas dirigidas a protegerla contra p??rdida, mal uso, acceso no autorizado, alteraci??n o destrucci??n, no la divulgar?? para otro prop??sito que no sea el establecido en el presente Aviso de Privacidad. Su informaci??n ser?? tratada como confidencial y ser?? administrada durante el tiempo necesario para lograr los fines mencionados en el presente Aviso Privacidad, el cual podr?? actualizarse para reflejar los cambios en nuestras pr??cticas para recabar informaci??n, para la utilizaci??n de la informaci??n, y en materia de seguridad. 2) Los datos personales que tratar?? Hello M??xico, Agencia de contenidos digitales S.A. de C.V, incluyendo la obtenci??n, uso, divulgaci??n o almacenamiento de tales datos por cualquier medio de acceso, manejo, aprovechamiento, transferencia o disposici??n, son aquellos que usted en su calidad de TITULAR, ha proporcionado o proporcione a Hello M??xico, Agencia de contenidos digitales S.A. de C.V, y aquellos a los que Hello M??xico, Agencia de contenidos digitales S.A. de C.V, tiene acceso leg??timamente por haber sido proporcionados para los fines que m??s adelante se se??alan. A continuaci??n se enlistan algunos de los datos personales a que se refiere este apartado: Nombre. Compa????a. Direcci??n. Informaci??n de contacto, incluyendo tel??fono, correo electr??nico y otros. Profesi??n y contacto laboral Cuando se requiera c??dula profesional Identificaci??n oficial con fotograf??a y vigente, Adem??s de diversos Datos que se requieran y por ley se permitan recabar. La lista anterior debe entenderse como enunciativa, m??s no limitativa de aquellos datos de car??cter personal que ser??n tratados por Hello M??xico, Agencia de contenidos digitales S.A. de C.V, en el entendido que se trata de datos personales de la misma naturaleza. 3) Hello M??xico, Agencia de contenidos digitales S.A. de C.V, hace de su conocimiento que los datos personales del titular ser??n tratados por Hello M??xico, Agencia de contenidos digitales S.A. de C.V, y/o las empresas afiliadas de la misma, encargadas que act??en en nombre de Hello M??xico, Agencia de contenidos digitales S.A. de C.V, y terceros, distintos a Hello M??xico, Agencia de contenidos digitales S.A. de C.V, o al titular de los datos, quienes deber??n cumplir con el presente Aviso de Privacidad. 4) Las finalidades del tratamiento de los datos personales del TITULAR por parte de Hello M??xico, Agencia de contenidos digitales S.A. de C.V, son las que se enuncian a continuaci??n, as?? como todas aquellas que resulten an??logas: Env??o de publicidad informativa relativa a temas del servicio proporcionado. Fines informativos, administrativos y/o comerciales relacionados con el servicio proporcionado. 5) Al acceder al presente sitio y aceptar el presente Aviso de Privacidad, usted en su car??cter de TITULAR otorga expresamente a Hello M??xico, Agencia de contenidos digitales S.A. de C.V, su consentimiento para la transferencia nacional e internacional de sus datos personales, siempre que el receptor de los datos asuma las mismas obligaciones asumidas por Hello M??xico, Agencia de contenidos digitales S.A. de C.V. Asimismo, Hello M??xico, Agencia de contenidos digitales S.A. de C.V, se compromete a transferir solo aquella informaci??n que sea necesaria para la misma finalidad con la que se emite el presente aviso. 6) Tambi??n podemos compartir su informaci??n: I. Cuando alguna autoridad gubernamental o diverso funcionario gubernamental responsable de hacer cumplir la ley solicite o requiera razonablemente dicha informaci??n; II. Cuando lo exija la ley o en respuesta a alg??n proceso legal; III. Cuando sea razonablemente necesario llevar a cabo una investigaci??n de car??cter legal. 7) Hello M??xico, Agencia de contenidos digitales S.A. de C.V, establecer?? y mantendr?? medidas de seguridad, administrativas, t??cnicas y f??sicas que permitan proteger los datos personales contra da??o, p??rdida, alteraci??n, destrucci??n o el uso, acceso o tratamiento no autorizado. Estas medidas no ser??n menores a aquellas que mantenga Hello M??xico, Agencia de contenidos digitales S.A. de C.V, para el manejo de su propia informaci??n. 8) Derechos: Conforme a la Ley de Protecci??n de Datos Personales Usted tiene el derecho de ejercer en cualquier momento sus derechos de acceso, rectificaci??n, cancelaci??n y oposici??n de su informaci??n, mediante una solicitud por escrito dirigida a Hello M??xico, Agencia de contenidos digitales S.A. de C.V, quien podr?? solicitarle para su protecci??n y beneficio, documentaci??n que acredite correcciones a los datos en caso de que solicite rectificaci??n de los mismos. Usted puede solicitar que se cancelen sus datos personales que Hello M??xico, Agencia de contenidos digitales S.A. de C.V, conserva. Asimismo usted podr?? limitar el uso y distribuci??n de sus datos personales a trav??s de una solicitud por escrito a La Empresa. No obstante lo anterior, es posible que La Empresa se vea obligada conforme a la legislaci??n aplicable a conservar algunos o todos sus datos personales. Es importante que los cambios que pretenda hacer a sus datos personales sean correctos y no se eliminar??n aquellos datos que por obligaci??n o disposici??n legal deba de conservar la empresa. La solicitud deber?? ser presentada por el TITULAR o su representante legal, a la direcci??n antes mencionada, dicha solicitud deber?? contener: I) El nombre completo del TITULAR y domicilio u otro medio para comunicarle la respuesta, incluyendo direcci??n de correo electr??nico. II) Los documentos que acrediten su identidad o la del representante legal, III) La descripci??n clara y precisa de los datos personales respecto de lo que busca ejercer sus derechos, IV) Cualquier otro elemento que facilite la localizaci??n de los datos personales del TITULAR. Hello M??xico, Agencia de contenidos digitales S.A. de C.V, comunicar?? al titular en m??ximo 20 (veinte) d??as naturales, contados a partir de haber recibido la solicitud de acceso, rectificaci??n, cancelaci??n u oposici??n, la determinaci??n adoptada, a efecto de que se haga efectiva dentro de los 15 d??as naturales siguientes. Estos plazos podr??n ser ampliados por un periodo igual cuando a discreci??n de Hello M??xico, Agencia de contenidos digitales S.A. de C.V, las circunstancias del caso lo justifiquen. El derecho de acceso procede cuando el titular desee conocer cu??les de sus datos personales obran en poder de Hello M??xico, Agencia de contenidos digitales S.A. de C.V, y el aviso de privacidad que le es aplicable. Se dar?? cumplimiento a una solicitud de acceso, poniendo a disposici??n del TITULAR o su representante, previo acreditamiento de su identidad, los documentos donde obren los datos personales requeridos, ya sea mediante copias fotost??ticas, un CD que contenga dicha informaci??n, un dispositivo USB o cualquier otro medio que determine Hello M??xico, Agencia de contenidos digitales S.A. de C.V., La entrega de los datos ser?? gratuita siempre y cuando no se repita la solicitud de acceso en un periodo menor a 12 meses. El TITULAR ??nicamente cubrir?? los costos de reproducci??n en copias u otros formatos. El TITULAR podr?? rectificar sus datos personales cuando estos sean inexactos o incompletos, indicando en la solicitud de rectificaci??n las modificaciones que deban realizarse y aportando a Hello M??xico, Agencia de contenidos digitales S.A. de C.V, la documentaci??n que sustente su petici??n. En caso de ser procedente la solicitud del TITULAR, Hello M??xico, Agencia de contenidos digitales S.A. de C.V, deber?? informar de los cambios de que se trate a los encargados del tratamiento y a terceros, en caso de que haya habido transferencias de datos en los t??rminos del presente Aviso de Privacidad. El derecho de cancelaci??n consiste en la supresi??n del dato y puede ir precedido por un periodo de bloqueo en el que los datos no podr??n ser objeto de tratamiento. No proceder?? la cancelaci??n de los datos personales en los casos previstos por la Ley. El TITULAR tendr?? derecho en todo momento y por causa leg??tima a oponerse al tratamiento de sus datos. De resultar procedente la solicitud, Hello M??xico, Agencia de contenidos digitales S.A. de C.V, no podr?? tratar los datos del TITULAR. Hello M??xico, Agencia de contenidos digitales S.A. de C.V, podr?? negar el acceso a los datos personales, o realizar la rectificaci??n o cancelaci??n o conceder la oposici??n cuando el solicitante no sea el TITULAR o el representante legal no est?? debidamente acreditado para ello, cuando en su base de datos no se encuentren los datos personales del titular, cuando se lesionen derechos de un tercero, cuando exista un impedimento legal o una resoluci??n de una autoridad competente que restrinja el acceso a los datos personales o no permita su rectificaci??n, cancelaci??n u oposici??n y cuando la rectificaci??n, cancelaci??n u oposici??n haya sido previamente realizada. 9) En caso de que se efect??en cambios al presente Aviso de Privacidad, Hello M??xico, Agencia de contenidos digitales S.A. de C.V, los har?? del conocimiento del titular mediante notificaci??n escrita que ser?? publicada en la p??gina de Internet de www.hellomexico.mx si resulta procedente, a trav??s del correo electr??nico que el TITULAR le haya notificado a Hello M??xico, Agencia de contenidos digitales S.A. de C.V, previamente. Si el TITULAR est?? de acuerdo con las modificaciones hechas al Aviso de Privacidad deber?? entregar el documento que incluya dichas modificaciones, debidamente firmado con atenci??n a Hello M??xico, Agencia de contenidos digitales S.A. de C.V, dentro de los siguientes 5 d??as h??biles. 10) El consentimiento para el tratamiento de datos personales podr?? ser revocado mediante aviso por escrito, que el TITULAR proporcione por escrito, dirigido al correo electr??nico se??alado en el presente Aviso de Privacidad , en el cual incluya las razones por las que revoca el consentimiento. 11) Hello M??xico, Agencia de contenidos digitales S.A. de C.V, dar?? tr??mite a las solicitudes de acceso, rectificaci??n, cancelaci??n y oposici??n, labor que estar?? a su cargo, cuyo domicilio f??sico se encuentra ubicado en la direcci??n se??alada al inicio del presente aviso, para cualquier duda o comentario respecto al presente Aviso de Privacidad se ha se??alado anteriormente. Al proporcionarnos sus datos usted reconoce que entiende y acepta la recopilaci??n y transmisi??n de su informaci??n y datos personales por parte de Hello M??xico, Agencia de contenidos digitales S.A. de C.V, seg??n se se??ala en el presente Aviso de Privacidad.
                                   </p>
                                </div>
                                <div class="modal-footer">
                                    <div class="container-fluid mt-5">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="row">
                                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 offset-md-4 offset-lg-4">
                                                        <button type="button" class="btn px-5 py-3 ms-3" style="background-color: #38a937; color:white; font-size: 20px;" data-bs-dismiss="modal">Aceptar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="modal fade" id="AcercaNosotros" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-scrollable">
                              <div class="modal-content">
                                <div class="modal-header">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                        <h5 class="modal-title text-center" id="staticBackdropLabel" style="font-size: 35px; color:#38a937;">Acerca de nosotros</h5>
                                    </div>
                                </div>
                                <div class="modal-body">
                                   <p class="modal-footer text-secondary">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae pellentesque odio. Praesent auctor finibus justo, sit amet posuere neque imperdiet in. Integer eu ipsum posuere, mattis justo et, pharetra erat. Curabitur viverra, lorem sit amet venenatis fermentum, sem arcu ullamcorper enim, sit amet aliquet quam nisl vel turpis. Ut et orci id elit elementum auctor. Pellentesque sed vulputate sapien. Sed lacinia neque sit amet magna hendrerit facilisis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam efficitur consequat quam, eget pellentesque nibh scelerisque sed. Sed eleifend nisl non auctor consectetur. Phasellus a viverra nisi. Quisque porta in orci vitae posuere. Ut congue tempus turpis nec semper. Vestibulum orci turpis, porta eu nulla sed, blandit consequat magna. Aliquam laoreet pulvinar ligula et efficitur. Phasellus euismod, turpis nec tincidunt gravida, quam nibh fringilla justo, vel sagittis lacus libero at arcu. Donec consectetur sem at orci vulputate, sit amet eleifend nisl molestie. Suspendisse lorem urna, accumsan a posuere eget, interdum eu urna. Fusce imperdiet leo sit amet sagittis lacinia. Pellentesque finibus augue ut magna semper, nec mollis sapien interdum. Sed at mauris nibh. Pellentesque vel convallis neque, sed consequat nibh. Nunc eget convallis est, quis laoreet est. Nunc nec interdum est. Fusce eu purus ac massa pellentesque luctus. Vivamus molestie dui vel eros consequat, eu tincidunt arcu posuere. Sed id auctor felis. Cras bibendum a felis ut sagittis. Vestibulum rutrum tellus tincidunt purus porttitor consectetur. Donec congue lacus quam, ac volutpat justo elementum sed. Nulla et mattis dui. In ac consequat lorem. Sed ultrices maximus ultricies. Phasellus eu diam ante. Sed fermentum odio lacus, in ultricies diam malesuada quis. Donec auctor risus neque, in cursus tellus sollicitudin at. Proin ut ipsum leo. Praesent quis ex nec magna pharetra luctus vel ac lorem. Vivamus id nisl felis. Nullam non porta est. Praesent luctus erat id tincidunt vehicula. Suspendisse a tellus consectetur, aliquet massa eget, ultrices turpis. Quisque feugiat eros sed arcu commodo congue. Nam pharetra ligula eu bibendum ornare. Aliquam a ex aliquet, hendrerit nulla eget, imperdiet elit. Curabitur sit amet neque quis neque efficitur vestibulum. Vestibulum sed feugiat nunc. Praesent tempor vehicula ipsum mollis vehicula. Donec nunc lacus, accumsan nec accumsan sit amet, eleifend sed lacus. Etiam sed porta purus. Sed bibendum vehicula odio, pretium lacinia magna scelerisque convallis. Nullam vitae varius sapien, nec scelerisque nulla. Ut elementum gravida sollicitudin. Nulla fermentum pulvinar est, non mollis lorem. In malesuada velit nibh, in aliquet magna porttitor vel. Ut in sem at lorem mollis finibus. Phasellus malesuada suscipit libero, ac pharetra libero rhoncus vitae.
                                   </p>
                                </div>
                                <div class="modal-footer">
                                    <div class="container-fluid mt-5">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="row">
                                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 offset-md-4 offset-lg-4">
                                                        <button type="button" class="btn px-5 py-3 ms-3" style="background-color: #38a937; color:white; font-size: 20px;" data-bs-dismiss="modal">Aceptar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!--fin modal footer atencion a cliente-->
                        {{--  fin footer apartado Atencion al Cliente --}}
                        {{--  inicio footer apartado Contactanos --}}
                        <div class="col-12 col-sm-12 col-md- col-lg-4">
                            <div class="container-fluid my-5">
                                <p style="font-size: 20px; font-weight: bold;">Contactanos</p>
                                <form action="">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                      <div class="input-group flex-nowrap">
                                        <input type="email" class="form-control" style="color: #9ca3af;" placeholder="Email" aria-label="email" aria-describedby="addon-wrapping">
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                      <div class="form-floating mt-3">
                                        <textarea class="form-control" heigth="200" placeholder="Comentario" id=""></textarea>
                                        <label for="floatingTextarea">Comentario</label>
                                      </div>
                                    </div>
                                    <!--Comentado<div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                        <input type="submit" value="Enviar">
                                    </div>-->
                                </form>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                          <p style="text-align: center; color: white;">2022 <i style="font-weight: bold;"> Dinero Inmediato</i> | Todos los derechos reservados</p>
                        </div>
                        {{--  fin footer apartado Contactanos --}}
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--  fin footer --->


  <!-- scripts --->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="{{ asset('js/backoffice/clientes.js') }}"></script>

</body>
</html>
