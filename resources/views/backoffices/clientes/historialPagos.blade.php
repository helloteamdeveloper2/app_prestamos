<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Historial de pago</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/backoffice/style.css') }}">

</head>
<body>
    <!-- navbar --->
    <nav class="navbar navbar-expand-lg navbar-expand-md navbar-expand-sm navbar-expand navbar-light border shadow">
        <div class="container-fluid">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                    <div class=" col-8 col-ms-2 col-md-6 col-lg-1  offset-4 offset-md-4 offset-lg-1">
                        <img src="{{ asset('img/logo.png') }}" width="120" class="my-2" alt="logo">
                    </div>
                    <div class=" col-12 col-sm-9 col-md-6 col-lg-6 offset-sm-3 offset-md-4 mt-4">
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


    <!--inicio de titulo-->
    <h1 class="text-center my-5">Historial de Pago</h1>
    <!--fin de titulo-->

    <!-- inicio apartado de busqueda-->
    <div class="container-fluid mt-5">
      <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12">
              <div class="row">
                  <div class="col-10 col-sm-10 col-md-8 col-lg-6 offset-1 offset-sm-2 offset-md-4 offset-lg-6">
                    <div class="input-group">
                      <div class="input-wrapper">
                        <input type="search" name="" id="" class="ms-1 mt-2" placeholder="Buscar">
                        <svg xmlns="http://www.w3.org/2000/svg" class="input-icon" style="top: 60%;" viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                        </svg>
                      </div>
                      <input type="submit" value="Buscar" class="btn boton-color px-2 ms-4 mt-2">
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
                            <table class="table table-bordered border-secondary table-light table-striped"
                                id="tabla-amortizacion">
                                <thead>
                                    <tr>
                                        <th scope="col" class="px-5"><p class="encabezado-tabla-medio pt-3">Numero de cr??dito</p></th>
                                        <th scope="col" class="px-5"><p class="encabezado-tabla-normal">N??mero de pago</p></th>
                                        <th scope="col" class="px-5"><p class="encabezado-tabla-normal">Fecha de pago</p></th>
                                        <th scope="col" class="px-5"><p class="encabezado-tabla-normal">Monto pagado</p></th>
                                        <th scope="col" class="px-5"><p class="encabezado-tabla-normal">Saldo insoluto</p></th>
                                    </tr>
                                </thead>
                               <tbody>
                                    <tr>
                                        <td>Datos</td>
                                        <td>1</td>
                                        <td><input type="date" ><img src="{{ asset('img/backoffices/CALENDARIO.png') }}" class="ms-4" width="40" alt=""></td>
                                        <td>500</td>
                                        <td>800</td>
                                    </tr>
                                    <tr>
                                        <td>Datos</td>
                                        <td>3</td>
                                        <td><input type="date"><img src="{{ asset('img/backoffices/CALENDARIO.png') }}" class="ms-4" width="40" alt=""></td>
                                        <td>800</td>
                                        <td>1200</td>
                                    </tr>
                                    <tr>
                                        <td>Datos</td>
                                        <td>4</td>
                                        <td><input type="date"><img src="{{ asset('img/backoffices/CALENDARIO.png') }}" class="ms-4" width="40" alt=""></td>
                                        <td>1000</td>
                                        <td>1500</td>
                                    </tr>
                                    <tr>
                                        <td>Datos</td>
                                        <td>2</td>
                                        <td><input type="date"><img src="{{ asset('img/backoffices/CALENDARIO.png') }}" class="ms-4" width="40" alt=""></td>
                                        <td>350</td>
                                        <td>800</td>
                                    </tr>
                                    <tr>
                                        <td>Datos</td>
                                        <td>4</td>
                                        <td><input type="date"><img src="{{ asset('img/backoffices/CALENDARIO.png') }}" class="ms-4" width="40" alt=""></td>
                                        <td>750</td>
                                        <td>2000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fin tabla de elementos buscados-->



    <!--inicio de paginador-->
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                    <div class="col-12 col-sm-2 col-md-4 col-lg-2 offset-sm-4 offset-md-4 offset-lg-8">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link text-dark" href="#">Anterior</a></li>
                                <li class="page-item"><a class="page-link text-dark" href="#">1</a></li>
                                <li class="page-item"><a class="page-link text-dark" href="#">2</a></li>
                                <li class="page-item"><a class="page-link text-dark" href="#">3</a></li>
                                <li class="page-item"><a class="page-link text-dark" href="#">4</a></li>
                                <li class="page-item"><a class="page-link text-dark" href="#">Siguientes</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--fin de paginador-->

    <!--inicio de botones-->
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-10 col-lg-10 offset-md-1 offset-lg-1">
                <div class="row">
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 offset-sm-2 offset-lg-2 offset-md-2">
                        <button type="button" class="btn px-5 my-3 "
                            style="background-color: #38a937; color:white; font-size: 20px;"><a href="/clientes" style="text-decoration: none; color:white;">Volver</a></button>
                    </div>
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 offset-sm-2 offset-lg-2 offset-md-2">
                        <button type="button" class="btn px-5 my-3 "
                            style="background-color: #f29100; color:white; font-size: 20px;">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--fin de botones-->

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>
</html>
