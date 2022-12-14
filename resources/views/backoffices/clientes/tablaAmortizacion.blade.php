<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabla de Amortización</title>

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

    <!--inicio de titulo-->
    <h1 class="text-center my-5">Tabla de Amortización</h1>
    <!--fin de titulo-->

    <!-- inicio apartado de busqueda-->
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                    <div class="col-12 col-sm-10 col-md-8 col-lg-6 offset-sm-2 offset-md-4 offset-lg-6">
                        <div class="input-group">
                            <div class="input-wrapper">
                                <input type="search" name="" id="" class="ms-1 mt-2"
                                    placeholder="Buscar">
                                <svg xmlns="http://www.w3.org/2000/svg" class="input-icon" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd" />
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
                                        <th scope="col" class="px-5"><p class="encabezado-tabla-pequeño">de cre</p></th>
                                        <th scope="col" class="px-5"><p class="encabezado-tabla-pequeño">de pago </p></th>
                                        <th scope="col" class="px-5"><p class="encabezado-tabla-pequeño">Proximo pago </p></th>
                                        <th scope="col" class="px-5"><p class="encabezado-tabla-pequeño">Pago a capital</p></th>
                                        <th scope="col" class="px-5"><p class="encabezado-tabla-medio">Interés ordinarios</p></th>
                                        <th scope="col" class="px-5"><p class="encabezado-tabla-medio">IVA interés ordinario</p></th>
                                        <th scope="col" class="px-5"><p class="encabezado-tabla-pequeño">Comisiones</p></th>
                                        <th scope="col" class="px-5"><p class="encabezado-tabla-medio">Pago total mensual</p></th>
                                        <th scope="col" class="px-5"><p class="encabezado-tabla-pequeño">Agregar fila</p></th>
                                        <th scope="col" class="px-5"><p class="encabezado-tabla-pequeño">Editar</p></th>
                                        <th scope="col" class="px-5"><p class="encabezado-tabla-pequeño">Eliminar fila</p></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>0098</td>
                                        <td>2</td>
                                        <td>29/12/2022</td>
                                        <td>200</td>
                                        <td>10%</td>
                                        <td>8%</td>
                                        <td>55</td>
                                        <td>550</td>
                                        <td><img src="{{ asset('img/backoffices/Grupo 822.png') }}" width="50"
                                                alt=""></td>
                                        <td><img src="{{ asset('img/backoffices/Grupo 783.png') }}" class="my-3"
                                                width="40" alt=""></td>
                                        <td><img src="" class="my-3" width="40" alt=""></td>
                                    </tr>
                                    <tr>
                                        <td>1209</td>
                                        <td>4</td>
                                        <td>29/03/2022</td>
                                        <td>600</td>
                                        <td>10%</td>
                                        <td>8%</td>
                                        <td>55</td>
                                        <td>120</td>
                                        <td><img src="{{ asset('img/backoffices/Grupo 822.png') }}" width="50"
                                                alt=""></td>
                                        <td><img src="{{ asset('img/backoffices/Grupo 783.png') }}" class="my-3"
                                                width="40" alt=""></td>
                                        <td><img src="{{ asset('img/backoffices/ELIMINAR.svg') }}" class="my-3"
                                                width="30" alt=""></td>
                                    </tr>
                                    <tr>
                                        <td>0023</td>
                                        <td>1</td>
                                        <td>02/03/2023</td>
                                        <td>500</td>
                                        <td>10%</td>
                                        <td>8%</td>
                                        <td>55</td>
                                        <td>150</td>
                                        <td><img src="{{ asset('img/backoffices/Grupo 822.png') }}" width="50"
                                                alt=""></td>
                                        <td><img src="{{ asset('img/backoffices/Grupo 783.png') }}" class="my-3"
                                                width="40" alt=""></td>
                                        <td><img src="{{ asset('img/backoffices/ELIMINAR.svg') }}" class="my-3"
                                                width="30" alt=""></td>
                                    </tr>
                                    <tr>
                                        <td>0237</td>
                                        <td>5</td>
                                        <td>09/10/2023</td>
                                        <td>800</td>
                                        <td>10%</td>
                                        <td>8%</td>
                                        <td>55</td>
                                        <td>200</td>
                                        <td><img src="{{ asset('img/backoffices/Grupo 822.png') }}" width="50"
                                                alt=""></td>
                                        <td><img src="{{ asset('img/backoffices/Grupo 783.png') }}" class="my-3"
                                                width="40" alt=""></td>
                                        <td><img src="{{ asset('img/backoffices/ELIMINAR.svg') }}" class="my-3"
                                                width="30" alt=""></td>
                                    </tr>
                                    <tr>
                                        <td>0157</td>
                                        <td>3</td>
                                        <td>12/06/2023</td>
                                        <td>4000</td>
                                        <td>10%</td>
                                        <td>8%</td>
                                        <td>55</td>
                                        <td>450</td>
                                        <td><img src="{{ asset('img/backoffices/Grupo 822.png') }}" width="50"
                                                alt=""></td>
                                        <td><img src="{{ asset('img/backoffices/Grupo 783.png') }}" class="my-3"
                                                width="40" alt=""></td>
                                        <td><img src="{{ asset('img/backoffices/ELIMINAR.svg') }}" class="my-3"
                                                width="30" alt=""></td>
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
                    <div class="col-2 col-sm-2 col-md-2 col-lg-2 offset-sm-4 offset-md-6 offset-lg-8">
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
            <div class="col-12 col-sm-10 col-md-10 col-lg-10 offset-sm-1 offset-md-1 offset-lg-1">
                <div class="row">
                    <div class="col-12 col-sm-8 col-md-4 col-lg-4 offset-sm-4 offset-lg-2 offset-md-2">
                        <button type="button" class="btn px-5 my-3 "
                            style="background-color: #38a937; color:white; font-size: 20px;">Volver</button>
                    </div>
                    <div class="col-12 col-sm-8 col-md-4 col-lg-4 offset-sm-4 offset-lg-2 offset-md-2">
                        <button type="button" class="btn px-5 my-3 "
                            style="background-color: #f29100; color:white; font-size: 20px;">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--fin de botones-->

    <!--  inicio footer --->
    <!--  inicio footer --->
    <footer class="mt-5">
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="row">
                        {{--  inicio footer apartado informacion legal --}}
                        <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                            <div class="container-fluid my-5">
                                <p class="footer-p ms-3"> Información legal</p>
                                <a href="#" style="width: 100%;" class="footer-enlaces mt-3 ms-3" data-bs-toggle="modal" data-bs-target="#terminosYcondiciones">Terminos y Condiciones 20</a><br>
                                <a href="#" style="width: 100%;" class="footer-enlaces mt-4 ms-3" data-bs-toggle="modal" data-bs-target="#politicaYprivacidad">Politica y Aviso de Privacidad</a><br>
                                <p class="mt-4 ms-3" style="font-size: 20px; font-weight: bold;">¿Te gusta la pagina?</p>
                                <img src="{{ asset('img/backoffices/Grupo 63.png') }}" width="150" class="ms-3 ms-3" alt="">
                            </div>
                        </div>
                        <!-- inicio modal-footer apartado info legal-->
                        <div class="modal fade" id="terminosYcondiciones" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-scrollable">
                              <div class="modal-content">
                                <div class="modal-header">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                        <h5 class="modal-title text-center" id="staticBackdropLabel" style="font-size: 35px; color:#38a937;">Términos y Condiciones</h5>
                                    </div>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid mt-5">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="row">
                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                        <p class="modal-footer text-secondary">
                                                            De conformidad con lo dispuesto en la Ley Federal de Protección de Datos Personales en Posesión de los Particulares y a los requisitos que dicha legislación establece, HELLO MÉXICO: Agencia de contenidos digitales S.A. de C.V, da a conocer el presente documento: Para efectos del presente Aviso de Privacidad, se entenderá por: Aviso de Privacidad: Se refiere al presente documento, el cual es puesto a disposición del TITULAR, previo al tratamiento de sus datos personales, de conformidad con el artículo 15 de la Ley Federal de Protección de Datos Personales en Posesión de los Particulares. Datos personales: Cualquier información concerniente a una persona física identificada o identificable. Datos personales sensibles: Aquellos datos personales que afecten a la esfera más íntima del TITULAR, o cuya utilización indebida pueda dar origen a discriminación o conlleve un riesgo grave para éste. En particular, se consideran sensibles aquellos que puedan revelar aspectos como origen racial o étnico, estado de salud presente y futuro, información genética, creencias religiosas, filosóficas y morales, afiliación sindical, opiniones políticas, preferencia sexual. Derechos: Se refiere a los derechos de acceso, cancelación, rectificación y oposición con los que cuenta el TITULAR en relación a sus datos personales. Encargado: La persona física o moral que sola o conjuntamente con otras trate datos personales por cuenta del responsable. Ley: Ley Federal de Protección de Datos Personales en Posesión de los Particulares y/o su Reglamento. Responsable: Hello México, Agencia de Contenidos Digitales S.A. de C.V, en su carácter de persona moral privada que decide sobre el tratamiento de datos personales. Titular: La persona física a quien corresponden los datos personales. Tratamiento: Obtención, uso, divulgación o almacenamiento de datos personales por cualquier medio. El uso abarca cualquier acción de acceso, manejo, aprovechamiento, transferencia o disposición de datos personales. El presente Aviso de Privacidad se pone a disposición del TITULAR, en cumplimiento a lo dispuesto por la Ley Federal de Protección de Datos Personales en posesión de los Particulares, así como demás disposiciones legales aplicables. Hello México, Agencia de contenidos digitales S.A. de C.V, es una a Sociedad Anónima de Capital Variable legalmente constituida de conformidad con las leyes de la República Mexicana, con domicilio fiscal en Retorno 16 de Fray Servando Teresa de Mier No 5, Departamento 12, Col.Jardín Balbuena, Venustiano Carranza CDMX. siendo RESPONSABLE del tratamiento de los datos personales del TITULAR que otorga su consentimiento al presente aviso. Hello México, Agencia de contenidos digitales S.A. de C.V, con el compromiso de observar los principios de licitud, consentimiento, información, calidad, finalidad, lealtad, proporcionalidad y responsabilidad en el tratamiento de datos personales y los derechos de privacidad y autodeterminación informativa, hace constar en el presente aviso de privacidad lo siguiente: 1) La Empresa tratará su información y datos personales como confidenciales y mantendrá medidas preventivas dirigidas a protegerla contra pérdida, mal uso, acceso no autorizado, alteración o destrucción, no la divulgará para otro propósito que no sea el establecido en el presente Aviso de Privacidad. Su información será tratada como confidencial y será administrada durante el tiempo necesario para lograr los fines mencionados en el presente Aviso Privacidad, el cual podrá actualizarse para reflejar los cambios en nuestras prácticas para recabar información, para la utilización de la información, y en materia de seguridad. 2) Los datos personales que tratará Hello México, Agencia de contenidos digitales S.A. de C.V, incluyendo la obtención, uso, divulgación o almacenamiento de tales datos por cualquier medio de acceso, manejo, aprovechamiento, transferencia o disposición, son aquellos que usted en su calidad de TITULAR, ha proporcionado o proporcione a Hello México, Agencia de contenidos digitales S.A. de C.V, y aquellos a los que Hello México, Agencia de contenidos digitales S.A. de C.V, tiene acceso legítimamente por haber sido proporcionados para los fines que más adelante se señalan. A continuación se enlistan algunos de los datos personales a que se refiere este apartado: Nombre. Compañía. Dirección. Información de contacto, incluyendo teléfono, correo electrónico y otros. Profesión y contacto laboral Cuando se requiera cédula profesional Identificación oficial con fotografía y vigente, Además de diversos Datos que se requieran y por ley se permitan recabar. La lista anterior debe entenderse como enunciativa, más no limitativa de aquellos datos de carácter personal que serán tratados por Hello México, Agencia de contenidos digitales S.A. de C.V, en el entendido que se trata de datos personales de la misma naturaleza. 3) Hello México, Agencia de contenidos digitales S.A. de C.V, hace de su conocimiento que los datos personales del titular serán tratados por Hello México, Agencia de contenidos digitales S.A. de C.V, y/o las empresas afiliadas de la misma, encargadas que actúen en nombre de Hello México, Agencia de contenidos digitales S.A. de C.V, y terceros, distintos a Hello México, Agencia de contenidos digitales S.A. de C.V, o al titular de los datos, quienes deberán cumplir con el presente Aviso de Privacidad. 4) Las finalidades del tratamiento de los datos personales del TITULAR por parte de Hello México, Agencia de contenidos digitales S.A. de C.V, son las que se enuncian a continuación, así como todas aquellas que resulten análogas: Envío de publicidad informativa relativa a temas del servicio proporcionado. Fines informativos, administrativos y/o comerciales relacionados con el servicio proporcionado. 5) Al acceder al presente sitio y aceptar el presente Aviso de Privacidad, usted en su carácter de TITULAR otorga expresamente a Hello México, Agencia de contenidos digitales S.A. de C.V, su consentimiento para la transferencia nacional e internacional de sus datos personales, siempre que el receptor de los datos asuma las mismas obligaciones asumidas por Hello México, Agencia de contenidos digitales S.A. de C.V. Asimismo, Hello México, Agencia de contenidos digitales S.A. de C.V, se compromete a transferir solo aquella información que sea necesaria para la misma finalidad con la que se emite el presente aviso. 6) También podemos compartir su información: I. Cuando alguna autoridad gubernamental o diverso funcionario gubernamental responsable de hacer cumplir la ley solicite o requiera razonablemente dicha información; II. Cuando lo exija la ley o en respuesta a algún proceso legal; III. Cuando sea razonablemente necesario llevar a cabo una investigación de carácter legal. 7) Hello México, Agencia de contenidos digitales S.A. de C.V, establecerá y mantendrá medidas de seguridad, administrativas, técnicas y físicas que permitan proteger los datos personales contra daño, pérdida, alteración, destrucción o el uso, acceso o tratamiento no autorizado. Estas medidas no serán menores a aquellas que mantenga Hello México, Agencia de contenidos digitales S.A. de C.V, para el manejo de su propia información. 8) Derechos: Conforme a la Ley de Protección de Datos Personales Usted tiene el derecho de ejercer en cualquier momento sus derechos de acceso, rectificación, cancelación y oposición de su información, mediante una solicitud por escrito dirigida a Hello México, Agencia de contenidos digitales S.A. de C.V, quien podrá solicitarle para su protección y beneficio, documentación que acredite correcciones a los datos en caso de que solicite rectificación de los mismos. Usted puede solicitar que se cancelen sus datos personales que Hello México, Agencia de contenidos digitales S.A. de C.V, conserva. Asimismo usted podrá limitar el uso y distribución de sus datos personales a través de una solicitud por escrito a La Empresa. No obstante lo anterior, es posible que La Empresa se vea obligada conforme a la legislación aplicable a conservar algunos o todos sus datos personales. Es importante que los cambios que pretenda hacer a sus datos personales sean correctos y no se eliminarán aquellos datos que por obligación o disposición legal deba de conservar la empresa. La solicitud deberá ser presentada por el TITULAR o su representante legal, a la dirección antes mencionada, dicha solicitud deberá contener: I) El nombre completo del TITULAR y domicilio u otro medio para comunicarle la respuesta, incluyendo dirección de correo electrónico. II) Los documentos que acrediten su identidad o la del representante legal, III) La descripción clara y precisa de los datos personales respecto de lo que busca ejercer sus derechos, IV) Cualquier otro elemento que facilite la localización de los datos personales del TITULAR. Hello México, Agencia de contenidos digitales S.A. de C.V, comunicará al titular en máximo 20 (veinte) días naturales, contados a partir de haber recibido la solicitud de acceso, rectificación, cancelación u oposición, la determinación adoptada, a efecto de que se haga efectiva dentro de los 15 días naturales siguientes. Estos plazos podrán ser ampliados por un periodo igual cuando a discreción de Hello México, Agencia de contenidos digitales S.A. de C.V, las circunstancias del caso lo justifiquen. El derecho de acceso procede cuando el titular desee conocer cuáles de sus datos personales obran en poder de Hello México, Agencia de contenidos digitales S.A. de C.V, y el aviso de privacidad que le es aplicable. Se dará cumplimiento a una solicitud de acceso, poniendo a disposición del TITULAR o su representante, previo acreditamiento de su identidad, los documentos donde obren los datos personales requeridos, ya sea mediante copias fotostáticas, un CD que contenga dicha información,
                                                            un dispositivo USB o cualquier otro medio que determine Hello México, Agencia de contenidos digitales S.A. de C.V., La entrega de los datos será gratuita siempre y cuando no se repita la solicitud de acceso en un periodo menor a 12 meses. El TITULAR únicamente cubrirá los costos de reproducción en copias u otros formatos. El TITULAR podrá rectificar sus datos personales cuando estos sean inexactos o incompletos, indicando en la solicitud de rectificación las modificaciones que deban realizarse y aportando a Hello México, Agencia de contenidos digitales S.A. de C.V, la documentación que sustente su petición. En caso de ser procedente la solicitud del TITULAR, Hello México, Agencia de contenidos digitales S.A. de C.V, deberá informar de los cambios de que se trate a los encargados del tratamiento y a terceros, en caso de que haya habido transferencias de datos en los términos del presente Aviso de Privacidad. El derecho de cancelación consiste en la supresión del dato y puede ir precedido por un periodo de bloqueo en el que los datos no podrán ser objeto de tratamiento. No procederá la cancelación de los datos personales en los casos previstos por la Ley. El TITULAR tendrá derecho en todo momento y por causa legítima a oponerse al tratamiento de sus datos. De resultar procedente la solicitud, Hello México, Agencia de contenidos digitales S.A. de C.V, no podrá tratar los datos del TITULAR. Hello México, Agencia de contenidos digitales S.A. de C.V, podrá negar el acceso a los datos personales, o realizar la rectificación o cancelación o conceder la oposición cuando el solicitante no sea el TITULAR o el representante legal no esté debidamente acreditado para ello, cuando en su base de datos no se encuentren los datos personales del titular, cuando se lesionen derechos de un tercero, cuando exista un impedimento legal o una resolución de una autoridad competente que restrinja el acceso a los datos personales o no permita su rectificación, cancelación u oposición y cuando la rectificación, cancelación u oposición haya sido previamente realizada. 9) En caso de que se efectúen cambios al presente Aviso de Privacidad, Hello México, Agencia de contenidos digitales S.A. de C.V, los hará del conocimiento del titular mediante notificación escrita que será publicada en la página de Internet de www.hellomexico.mx si resulta procedente, a través del correo electrónico que el TITULAR le haya notificado a Hello México, Agencia de contenidos digitales S.A. de C.V, previamente. Si el TITULAR está de acuerdo con las modificaciones hechas al Aviso de Privacidad deberá entregar el documento que incluya dichas modificaciones, debidamente firmado con atención a Hello México, Agencia de contenidos digitales S.A. de C.V, dentro de los siguientes 5 días hábiles. 10) El consentimiento para el tratamiento de datos personales podrá ser revocado mediante aviso por escrito, que el TITULAR proporcione por escrito, dirigido al correo electrónico señalado en el presente Aviso de Privacidad , en el cual incluya las razones por las que revoca el consentimiento. 11) Hello México, Agencia de contenidos digitales S.A. de C.V, dará trámite a las solicitudes de acceso, rectificación, cancelación y oposición, labor que estará a su cargo, cuyo domicilio físico se encuentra ubicado en la dirección señalada al inicio del presente aviso, para cualquier duda o comentario respecto al presente Aviso de Privacidad se ha señalado anteriormente. Al proporcionarnos sus datos usted reconoce que entiende y acepta la recopilación y transmisión de su información y datos personales por parte de Hello México, Agencia de contenidos digitales S.A. de C.V, según se señala en el presente Aviso de Privacidad.
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
                                        De conformidad con lo dispuesto en la Ley Federal de Protección de Datos Personales en Posesión de los Particulares y a los requisitos que dicha legislación establece, HELLO MÉXICO: Agencia de contenidos digitales S.A. de C.V, da a conocer el presente documento: Para efectos del presente Aviso de Privacidad, se entenderá por: Aviso de Privacidad: Se refiere al presente documento, el cual es puesto a disposición del TITULAR, previo al tratamiento de sus datos personales, de conformidad con el artículo 15 de la Ley Federal de Protección de Datos Personales en Posesión de los Particulares. Datos personales: Cualquier información concerniente a una persona física identificada o identificable. Datos personales sensibles: Aquellos datos personales que afecten a la esfera más íntima del TITULAR, o cuya utilización indebida pueda dar origen a discriminación o conlleve un riesgo grave para éste. En particular, se consideran sensibles aquellos que puedan revelar aspectos como origen racial o étnico, estado de salud presente y futuro, información genética, creencias religiosas, filosóficas y morales, afiliación sindical, opiniones políticas, preferencia sexual. Derechos: Se refiere a los derechos de acceso, cancelación, rectificación y oposición con los que cuenta el TITULAR en relación a sus datos personales. Encargado: La persona física o moral que sola o conjuntamente con otras trate datos personales por cuenta del responsable. Ley: Ley Federal de Protección de Datos Personales en Posesión de los Particulares y/o su Reglamento. Responsable: Hello México, Agencia de Contenidos Digitales S.A. de C.V, en su carácter de persona moral privada que decide sobre el tratamiento de datos personales. Titular: La persona física a quien corresponden los datos personales. Tratamiento: Obtención, uso, divulgación o almacenamiento de datos personales por cualquier medio. El uso abarca cualquier acción de acceso, manejo, aprovechamiento, transferencia o disposición de datos personales. El presente Aviso de Privacidad se pone a disposición del TITULAR, en cumplimiento a lo dispuesto por la Ley Federal de Protección de Datos Personales en posesión de los Particulares, así como demás disposiciones legales aplicables. Hello México, Agencia de contenidos digitales S.A. de C.V, es una a Sociedad Anónima de Capital Variable legalmente constituida de conformidad con las leyes de la República Mexicana, con domicilio fiscal en Retorno 16 de Fray Servando Teresa de Mier No 5, Departamento 12, Col.Jardín Balbuena, Venustiano Carranza CDMX. siendo RESPONSABLE del tratamiento de los datos personales del TITULAR que otorga su consentimiento al presente aviso. Hello México, Agencia de contenidos digitales S.A. de C.V, con el compromiso de observar los principios de licitud, consentimiento, información, calidad, finalidad, lealtad, proporcionalidad y responsabilidad en el tratamiento de datos personales y los derechos de privacidad y autodeterminación informativa, hace constar en el presente aviso de privacidad lo siguiente: 1) La Empresa tratará su información y datos personales como confidenciales y mantendrá medidas preventivas dirigidas a protegerla contra pérdida, mal uso, acceso no autorizado, alteración o destrucción, no la divulgará para otro propósito que no sea el establecido en el presente Aviso de Privacidad. Su información será tratada como confidencial y será administrada durante el tiempo necesario para lograr los fines mencionados en el presente Aviso Privacidad, el cual podrá actualizarse para reflejar los cambios en nuestras prácticas para recabar información, para la utilización de la información, y en materia de seguridad. 2) Los datos personales que tratará Hello México, Agencia de contenidos digitales S.A. de C.V, incluyendo la obtención, uso, divulgación o almacenamiento de tales datos por cualquier medio de acceso, manejo, aprovechamiento, transferencia o disposición, son aquellos que usted en su calidad de TITULAR, ha proporcionado o proporcione a Hello México, Agencia de contenidos digitales S.A. de C.V, y aquellos a los que Hello México, Agencia de contenidos digitales S.A. de C.V, tiene acceso legítimamente por haber sido proporcionados para los fines que más adelante se señalan. A continuación se enlistan algunos de los datos personales a que se refiere este apartado: Nombre. Compañía. Dirección. Información de contacto, incluyendo teléfono, correo electrónico y otros. Profesión y contacto laboral Cuando se requiera cédula profesional Identificación oficial con fotografía y vigente, Además de diversos Datos que se requieran y por ley se permitan recabar. La lista anterior debe entenderse como enunciativa, más no limitativa de aquellos datos de carácter personal que serán tratados por Hello México, Agencia de contenidos digitales S.A. de C.V, en el entendido que se trata de datos personales de la misma naturaleza. 3) Hello México, Agencia de contenidos digitales S.A. de C.V, hace de su conocimiento que los datos personales del titular serán tratados por Hello México, Agencia de contenidos digitales S.A. de C.V, y/o las empresas afiliadas de la misma, encargadas que actúen en nombre de Hello México, Agencia de contenidos digitales S.A. de C.V, y terceros, distintos a Hello México, Agencia de contenidos digitales S.A. de C.V, o al titular de los datos, quienes deberán cumplir con el presente Aviso de Privacidad. 4) Las finalidades del tratamiento de los datos personales del TITULAR por parte de Hello México, Agencia de contenidos digitales S.A. de C.V, son las que se enuncian a continuación, así como todas aquellas que resulten análogas: Envío de publicidad informativa relativa a temas del servicio proporcionado. Fines informativos, administrativos y/o comerciales relacionados con el servicio proporcionado. 5) Al acceder al presente sitio y aceptar el presente Aviso de Privacidad, usted en su carácter de TITULAR otorga expresamente a Hello México, Agencia de contenidos digitales S.A. de C.V, su consentimiento para la transferencia nacional e internacional de sus datos personales, siempre que el receptor de los datos asuma las mismas obligaciones asumidas por Hello México, Agencia de contenidos digitales S.A. de C.V. Asimismo, Hello México, Agencia de contenidos digitales S.A. de C.V, se compromete a transferir solo aquella información que sea necesaria para la misma finalidad con la que se emite el presente aviso. 6) También podemos compartir su información: I. Cuando alguna autoridad gubernamental o diverso funcionario gubernamental responsable de hacer cumplir la ley solicite o requiera razonablemente dicha información; II. Cuando lo exija la ley o en respuesta a algún proceso legal; III. Cuando sea razonablemente necesario llevar a cabo una investigación de carácter legal. 7) Hello México, Agencia de contenidos digitales S.A. de C.V, establecerá y mantendrá medidas de seguridad, administrativas, técnicas y físicas que permitan proteger los datos personales contra daño, pérdida, alteración, destrucción o el uso, acceso o tratamiento no autorizado. Estas medidas no serán menores a aquellas que mantenga Hello México, Agencia de contenidos digitales S.A. de C.V, para el manejo de su propia información. 8) Derechos: Conforme a la Ley de Protección de Datos Personales Usted tiene el derecho de ejercer en cualquier momento sus derechos de acceso, rectificación, cancelación y oposición de su información, mediante una solicitud por escrito dirigida a Hello México, Agencia de contenidos digitales S.A. de C.V, quien podrá solicitarle para su protección y beneficio, documentación que acredite correcciones a los datos en caso de que solicite rectificación de los mismos. Usted puede solicitar que se cancelen sus datos personales que Hello México, Agencia de contenidos digitales S.A. de C.V, conserva. Asimismo usted podrá limitar el uso y distribución de sus datos personales a través de una solicitud por escrito a La Empresa. No obstante lo anterior, es posible que La Empresa se vea obligada conforme a la legislación aplicable a conservar algunos o todos sus datos personales. Es importante que los cambios que pretenda hacer a sus datos personales sean correctos y no se eliminarán aquellos datos que por obligación o disposición legal deba de conservar la empresa. La solicitud deberá ser presentada por el TITULAR o su representante legal, a la dirección antes mencionada, dicha solicitud deberá contener: I) El nombre completo del TITULAR y domicilio u otro medio para comunicarle la respuesta, incluyendo dirección de correo electrónico. II) Los documentos que acrediten su identidad o la del representante legal, III) La descripción clara y precisa de los datos personales respecto de lo que busca ejercer sus derechos, IV) Cualquier otro elemento que facilite la localización de los datos personales del TITULAR. Hello México, Agencia de contenidos digitales S.A. de C.V, comunicará al titular en máximo 20 (veinte) días naturales, contados a partir de haber recibido la solicitud de acceso, rectificación, cancelación u oposición, la determinación adoptada, a efecto de que se haga efectiva dentro de los 15 días naturales siguientes. Estos plazos podrán ser ampliados por un periodo igual cuando a discreción de Hello México, Agencia de contenidos digitales S.A. de C.V, las circunstancias del caso lo justifiquen. El derecho de acceso procede cuando el titular desee conocer cuáles de sus datos personales obran en poder de Hello México, Agencia de contenidos digitales S.A. de C.V, y el aviso de privacidad que le es aplicable. Se dará cumplimiento a una solicitud de acceso, poniendo a disposición del TITULAR o su representante, previo acreditamiento de su identidad, los documentos donde obren los datos personales requeridos, ya sea mediante copias fotostáticas, un CD que contenga dicha información, un dispositivo USB o cualquier otro medio que determine Hello México, Agencia de contenidos digitales S.A. de C.V., La entrega de los datos será gratuita siempre y cuando no se repita la solicitud de acceso en un periodo menor a 12 meses. El TITULAR únicamente cubrirá los costos de reproducción en copias u otros formatos. El TITULAR podrá rectificar sus datos personales cuando estos sean inexactos o incompletos, indicando en la solicitud de rectificación las modificaciones que deban realizarse y aportando a Hello México, Agencia de contenidos digitales S.A. de C.V, la documentación que sustente su petición. En caso de ser procedente la solicitud del TITULAR, Hello México, Agencia de contenidos digitales S.A. de C.V, deberá informar de los cambios de que se trate a los encargados del tratamiento y a terceros, en caso de que haya habido transferencias de datos en los términos del presente Aviso de Privacidad. El derecho de cancelación consiste en la supresión del dato y puede ir precedido por un periodo de bloqueo en el que los datos no podrán ser objeto de tratamiento. No procederá la cancelación de los datos personales en los casos previstos por la Ley. El TITULAR tendrá derecho en todo momento y por causa legítima a oponerse al tratamiento de sus datos. De resultar procedente la solicitud, Hello México, Agencia de contenidos digitales S.A. de C.V, no podrá tratar los datos del TITULAR. Hello México, Agencia de contenidos digitales S.A. de C.V, podrá negar el acceso a los datos personales, o realizar la rectificación o cancelación o conceder la oposición cuando el solicitante no sea el TITULAR o el representante legal no esté debidamente acreditado para ello, cuando en su base de datos no se encuentren los datos personales del titular, cuando se lesionen derechos de un tercero, cuando exista un impedimento legal o una resolución de una autoridad competente que restrinja el acceso a los datos personales o no permita su rectificación, cancelación u oposición y cuando la rectificación, cancelación u oposición haya sido previamente realizada. 9) En caso de que se efectúen cambios al presente Aviso de Privacidad, Hello México, Agencia de contenidos digitales S.A. de C.V, los hará del conocimiento del titular mediante notificación escrita que será publicada en la página de Internet de www.hellomexico.mx si resulta procedente, a través del correo electrónico que el TITULAR le haya notificado a Hello México, Agencia de contenidos digitales S.A. de C.V, previamente. Si el TITULAR está de acuerdo con las modificaciones hechas al Aviso de Privacidad deberá entregar el documento que incluya dichas modificaciones, debidamente firmado con atención a Hello México, Agencia de contenidos digitales S.A. de C.V, dentro de los siguientes 5 días hábiles. 10) El consentimiento para el tratamiento de datos personales podrá ser revocado mediante aviso por escrito, que el TITULAR proporcione por escrito, dirigido al correo electrónico señalado en el presente Aviso de Privacidad , en el cual incluya las razones por las que revoca el consentimiento. 11) Hello México, Agencia de contenidos digitales S.A. de C.V, dará trámite a las solicitudes de acceso, rectificación, cancelación y oposición, labor que estará a su cargo, cuyo domicilio físico se encuentra ubicado en la dirección señalada al inicio del presente aviso, para cualquier duda o comentario respecto al presente Aviso de Privacidad se ha señalado anteriormente. Al proporcionarnos sus datos usted reconoce que entiende y acepta la recopilación y transmisión de su información y datos personales por parte de Hello México, Agencia de contenidos digitales S.A. de C.V, según se señala en el presente Aviso de Privacidad.
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
                                <a href="#" style="width: 100%;" class="footer-enlaces ms-3" data-bs-toggle="modal" data-bs-target="#QuienesSomos">¿Quienes somos?</a> <br>
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
                                        <h5 class="modal-title text-center" id="staticBackdropLabel" style="font-size: 35px; color:#38a937;">¿Quienes somos?</h5>
                                    </div>
                                </div>
                                <div class="modal-body">
                                   <p class="modal-footer text-secondary">
                                        De conformidad con lo dispuesto en la Ley Federal de Protección de Datos Personales en Posesión de los Particulares y a los requisitos que dicha legislación establece, HELLO MÉXICO: Agencia de contenidos digitales S.A. de C.V, da a conocer el presente documento: Para efectos del presente Aviso de Privacidad, se entenderá por: Aviso de Privacidad: Se refiere al presente documento, el cual es puesto a disposición del TITULAR, previo al tratamiento de sus datos personales, de conformidad con el artículo 15 de la Ley Federal de Protección de Datos Personales en Posesión de los Particulares. Datos personales: Cualquier información concerniente a una persona física identificada o identificable. Datos personales sensibles: Aquellos datos personales que afecten a la esfera más íntima del TITULAR, o cuya utilización indebida pueda dar origen a discriminación o conlleve un riesgo grave para éste. En particular, se consideran sensibles aquellos que puedan revelar aspectos como origen racial o étnico, estado de salud presente y futuro, información genética, creencias religiosas, filosóficas y morales, afiliación sindical, opiniones políticas, preferencia sexual. Derechos: Se refiere a los derechos de acceso, cancelación, rectificación y oposición con los que cuenta el TITULAR en relación a sus datos personales. Encargado: La persona física o moral que sola o conjuntamente con otras trate datos personales por cuenta del responsable. Ley: Ley Federal de Protección de Datos Personales en Posesión de los Particulares y/o su Reglamento. Responsable: Hello México, Agencia de Contenidos Digitales S.A. de C.V, en su carácter de persona moral privada que decide sobre el tratamiento de datos personales. Titular: La persona física a quien corresponden los datos personales. Tratamiento: Obtención, uso, divulgación o almacenamiento de datos personales por cualquier medio. El uso abarca cualquier acción de acceso, manejo, aprovechamiento, transferencia o disposición de datos personales. El presente Aviso de Privacidad se pone a disposición del TITULAR, en cumplimiento a lo dispuesto por la Ley Federal de Protección de Datos Personales en posesión de los Particulares, así como demás disposiciones legales aplicables. Hello México, Agencia de contenidos digitales S.A. de C.V, es una a Sociedad Anónima de Capital Variable legalmente constituida de conformidad con las leyes de la República Mexicana, con domicilio fiscal en Retorno 16 de Fray Servando Teresa de Mier No 5, Departamento 12, Col.Jardín Balbuena, Venustiano Carranza CDMX. siendo RESPONSABLE del tratamiento de los datos personales del TITULAR que otorga su consentimiento al presente aviso. Hello México, Agencia de contenidos digitales S.A. de C.V, con el compromiso de observar los principios de licitud, consentimiento, información, calidad, finalidad, lealtad, proporcionalidad y responsabilidad en el tratamiento de datos personales y los derechos de privacidad y autodeterminación informativa, hace constar en el presente aviso de privacidad lo siguiente: 1) La Empresa tratará su información y datos personales como confidenciales y mantendrá medidas preventivas dirigidas a protegerla contra pérdida, mal uso, acceso no autorizado, alteración o destrucción, no la divulgará para otro propósito que no sea el establecido en el presente Aviso de Privacidad. Su información será tratada como confidencial y será administrada durante el tiempo necesario para lograr los fines mencionados en el presente Aviso Privacidad, el cual podrá actualizarse para reflejar los cambios en nuestras prácticas para recabar información, para la utilización de la información, y en materia de seguridad. 2) Los datos personales que tratará Hello México, Agencia de contenidos digitales S.A. de C.V, incluyendo la obtención, uso, divulgación o almacenamiento de tales datos por cualquier medio de acceso, manejo, aprovechamiento, transferencia o disposición, son aquellos que usted en su calidad de TITULAR, ha proporcionado o proporcione a Hello México, Agencia de contenidos digitales S.A. de C.V, y aquellos a los que Hello México, Agencia de contenidos digitales S.A. de C.V, tiene acceso legítimamente por haber sido proporcionados para los fines que más adelante se señalan. A continuación se enlistan algunos de los datos personales a que se refiere este apartado: Nombre. Compañía. Dirección. Información de contacto, incluyendo teléfono, correo electrónico y otros. Profesión y contacto laboral Cuando se requiera cédula profesional Identificación oficial con fotografía y vigente, Además de diversos Datos que se requieran y por ley se permitan recabar. La lista anterior debe entenderse como enunciativa, más no limitativa de aquellos datos de carácter personal que serán tratados por Hello México, Agencia de contenidos digitales S.A. de C.V, en el entendido que se trata de datos personales de la misma naturaleza. 3) Hello México, Agencia de contenidos digitales S.A. de C.V, hace de su conocimiento que los datos personales del titular serán tratados por Hello México, Agencia de contenidos digitales S.A. de C.V, y/o las empresas afiliadas de la misma, encargadas que actúen en nombre de Hello México, Agencia de contenidos digitales S.A. de C.V, y terceros, distintos a Hello México, Agencia de contenidos digitales S.A. de C.V, o al titular de los datos, quienes deberán cumplir con el presente Aviso de Privacidad. 4) Las finalidades del tratamiento de los datos personales del TITULAR por parte de Hello México, Agencia de contenidos digitales S.A. de C.V, son las que se enuncian a continuación, así como todas aquellas que resulten análogas: Envío de publicidad informativa relativa a temas del servicio proporcionado. Fines informativos, administrativos y/o comerciales relacionados con el servicio proporcionado. 5) Al acceder al presente sitio y aceptar el presente Aviso de Privacidad, usted en su carácter de TITULAR otorga expresamente a Hello México, Agencia de contenidos digitales S.A. de C.V, su consentimiento para la transferencia nacional e internacional de sus datos personales, siempre que el receptor de los datos asuma las mismas obligaciones asumidas por Hello México, Agencia de contenidos digitales S.A. de C.V. Asimismo, Hello México, Agencia de contenidos digitales S.A. de C.V, se compromete a transferir solo aquella información que sea necesaria para la misma finalidad con la que se emite el presente aviso. 6) También podemos compartir su información: I. Cuando alguna autoridad gubernamental o diverso funcionario gubernamental responsable de hacer cumplir la ley solicite o requiera razonablemente dicha información; II. Cuando lo exija la ley o en respuesta a algún proceso legal; III. Cuando sea razonablemente necesario llevar a cabo una investigación de carácter legal. 7) Hello México, Agencia de contenidos digitales S.A. de C.V, establecerá y mantendrá medidas de seguridad, administrativas, técnicas y físicas que permitan proteger los datos personales contra daño, pérdida, alteración, destrucción o el uso, acceso o tratamiento no autorizado. Estas medidas no serán menores a aquellas que mantenga Hello México, Agencia de contenidos digitales S.A. de C.V, para el manejo de su propia información. 8) Derechos: Conforme a la Ley de Protección de Datos Personales Usted tiene el derecho de ejercer en cualquier momento sus derechos de acceso, rectificación, cancelación y oposición de su información, mediante una solicitud por escrito dirigida a Hello México, Agencia de contenidos digitales S.A. de C.V, quien podrá solicitarle para su protección y beneficio, documentación que acredite correcciones a los datos en caso de que solicite rectificación de los mismos. Usted puede solicitar que se cancelen sus datos personales que Hello México, Agencia de contenidos digitales S.A. de C.V, conserva. Asimismo usted podrá limitar el uso y distribución de sus datos personales a través de una solicitud por escrito a La Empresa. No obstante lo anterior, es posible que La Empresa se vea obligada conforme a la legislación aplicable a conservar algunos o todos sus datos personales. Es importante que los cambios que pretenda hacer a sus datos personales sean correctos y no se eliminarán aquellos datos que por obligación o disposición legal deba de conservar la empresa. La solicitud deberá ser presentada por el TITULAR o su representante legal, a la dirección antes mencionada, dicha solicitud deberá contener: I) El nombre completo del TITULAR y domicilio u otro medio para comunicarle la respuesta, incluyendo dirección de correo electrónico. II) Los documentos que acrediten su identidad o la del representante legal, III) La descripción clara y precisa de los datos personales respecto de lo que busca ejercer sus derechos, IV) Cualquier otro elemento que facilite la localización de los datos personales del TITULAR. Hello México, Agencia de contenidos digitales S.A. de C.V, comunicará al titular en máximo 20 (veinte) días naturales, contados a partir de haber recibido la solicitud de acceso, rectificación, cancelación u oposición, la determinación adoptada, a efecto de que se haga efectiva dentro de los 15 días naturales siguientes. Estos plazos podrán ser ampliados por un periodo igual cuando a discreción de Hello México, Agencia de contenidos digitales S.A. de C.V, las circunstancias del caso lo justifiquen. El derecho de acceso procede cuando el titular desee conocer cuáles de sus datos personales obran en poder de Hello México, Agencia de contenidos digitales S.A. de C.V, y el aviso de privacidad que le es aplicable. Se dará cumplimiento a una solicitud de acceso, poniendo a disposición del TITULAR o su representante, previo acreditamiento de su identidad, los documentos donde obren los datos personales requeridos, ya sea mediante copias fotostáticas, un CD que contenga dicha información, un dispositivo USB o cualquier otro medio que determine Hello México, Agencia de contenidos digitales S.A. de C.V., La entrega de los datos será gratuita siempre y cuando no se repita la solicitud de acceso en un periodo menor a 12 meses. El TITULAR únicamente cubrirá los costos de reproducción en copias u otros formatos. El TITULAR podrá rectificar sus datos personales cuando estos sean inexactos o incompletos, indicando en la solicitud de rectificación las modificaciones que deban realizarse y aportando a Hello México, Agencia de contenidos digitales S.A. de C.V, la documentación que sustente su petición. En caso de ser procedente la solicitud del TITULAR, Hello México, Agencia de contenidos digitales S.A. de C.V, deberá informar de los cambios de que se trate a los encargados del tratamiento y a terceros, en caso de que haya habido transferencias de datos en los términos del presente Aviso de Privacidad. El derecho de cancelación consiste en la supresión del dato y puede ir precedido por un periodo de bloqueo en el que los datos no podrán ser objeto de tratamiento. No procederá la cancelación de los datos personales en los casos previstos por la Ley. El TITULAR tendrá derecho en todo momento y por causa legítima a oponerse al tratamiento de sus datos. De resultar procedente la solicitud, Hello México, Agencia de contenidos digitales S.A. de C.V, no podrá tratar los datos del TITULAR. Hello México, Agencia de contenidos digitales S.A. de C.V, podrá negar el acceso a los datos personales, o realizar la rectificación o cancelación o conceder la oposición cuando el solicitante no sea el TITULAR o el representante legal no esté debidamente acreditado para ello, cuando en su base de datos no se encuentren los datos personales del titular, cuando se lesionen derechos de un tercero, cuando exista un impedimento legal o una resolución de una autoridad competente que restrinja el acceso a los datos personales o no permita su rectificación, cancelación u oposición y cuando la rectificación, cancelación u oposición haya sido previamente realizada. 9) En caso de que se efectúen cambios al presente Aviso de Privacidad, Hello México, Agencia de contenidos digitales S.A. de C.V, los hará del conocimiento del titular mediante notificación escrita que será publicada en la página de Internet de www.hellomexico.mx si resulta procedente, a través del correo electrónico que el TITULAR le haya notificado a Hello México, Agencia de contenidos digitales S.A. de C.V, previamente. Si el TITULAR está de acuerdo con las modificaciones hechas al Aviso de Privacidad deberá entregar el documento que incluya dichas modificaciones, debidamente firmado con atención a Hello México, Agencia de contenidos digitales S.A. de C.V, dentro de los siguientes 5 días hábiles. 10) El consentimiento para el tratamiento de datos personales podrá ser revocado mediante aviso por escrito, que el TITULAR proporcione por escrito, dirigido al correo electrónico señalado en el presente Aviso de Privacidad , en el cual incluya las razones por las que revoca el consentimiento. 11) Hello México, Agencia de contenidos digitales S.A. de C.V, dará trámite a las solicitudes de acceso, rectificación, cancelación y oposición, labor que estará a su cargo, cuyo domicilio físico se encuentra ubicado en la dirección señalada al inicio del presente aviso, para cualquier duda o comentario respecto al presente Aviso de Privacidad se ha señalado anteriormente. Al proporcionarnos sus datos usted reconoce que entiende y acepta la recopilación y transmisión de su información y datos personales por parte de Hello México, Agencia de contenidos digitales S.A. de C.V, según se señala en el presente Aviso de Privacidad.
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
