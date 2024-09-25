<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tu Fórmula 1</title>

    <link rel="stylesheet" href="../css/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <!--ENCABEZADO-->
    <header class="container-fluid bg-light d-flex">
      <a href="../index.php" class=""><img class="bg-light my-4 ms-2" width="80"
        height="80" src="../logo-F1.png" alt=""></a>
    
      <a class="text-danger mx-auto p-3" id="titulo" href="../index.php"><p class="">TU FÓRMULA 1</p></a>
      
    </header>

   <!--BARRA DE NAVEGACIÓN-->
   <nav class="navbar navbar-expand-lg bg-danger p-3" id="menu">
    <div class="container-fluid">
      <a class="navbar-brand" href="../index.php">
        <span class="">INICIO</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="clasificacion.php">CLASIFICACIÓN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="equipos.php">EQUIPOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pilotos.php">PILOTOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold" href="#">CALENDARIO</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              PARA USUARIOS
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">BUZÓN DE SUGERENCIAS</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              REGISTRO
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">INICIAR SESIÓN</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="registrar.php">REGISTRARSE</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex" action="../buscador.php" method="get" role="search">
            <input class="form-control me-2" type="search" placeholder="Buscar" name="buscar" aria-label="Search">
            <button class="btn btn-outline- btn-light" id="boton" name="enviar" type="submit">Buscar</button>
          </form>
      </div>
    </div>
  </nav>

      <!--CONTACTO-->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">¿DESEA ENVIAR ALGUNA SUGERENCIA?</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form class="needs-validation" action="../insertar.php" method="post">
          <div class="modal-body">
            <h6 class="text-dark fw-bold p-2">Para enviar una sugerencia debes de estar registrado</h6>
            
              <label for="validationTooltipUsername" class="form-label text-dark fw-bold text-bg-danger p-2 shadow bg-body-danger rounded p-6">NOMBRE DE USUARIO</label>
              <div class="input-group has-validation">
                  <span class="input-group-text text-bg-danger p-6" id="validationTooltipUsernamePrepend">@</span>
                  <input type="text" name="email" class=" form-control text-bg-dark text-ligth p-6" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="mt-4 form-label text-dark fw-bold text-bg-danger p-2 shadow bg-body-danger rounded">ESCRIBA AQUÍ SU MENSAJE</label>
                <textarea class="form-control text-bg-dark text-ligth p-6" id="exampleFormControlTextarea1" name="mensaje" rows="3"></textarea>
              </div>
         
     
          </div>
          <div class="modal-footer"> 
            <button type="button" class="btn btn-secondary fw-bold mt-4" data-bs-dismiss="modal">CERRAR</button>
            <button type="submit" type="button" name="btnMen" class="btn btn-danger text-dark fw-bold mt-4">
              ENVIAR
          </button>
          </div> 
        </form>
        </div>
      </div>
    </div>


   <!--INICIO DE SESIÓN-->
   <div class="offcanvas offcanvas-end bg-danger" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title text-bg-dark text-ligth shadow rounded p-2" id="offcanvasRightLabel">INICIAR SESIÓN</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <form class="needs-validation" action="../login.php" method="post">
                <label for="validationTooltipUsername" class="form-label text-dark fw-bold text-bg-light p-2 shadow bg-body-danger rounded p-6">NOMBRE DE USUARIO</label>
                <div class="input-group has-validation">
                    <span class="input-group-text p-6" id="validationTooltipUsernamePrepend">@</span>
                    <input type="email" class=" form-control text-bg-dark text-ligth p-6 input" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" name="email" required>
                </div>
                <label for="validationTooltip04" class="mt-4 form-label text-dark fw-bold text-bg-light p-2 shadow bg-body-danger rounded" >CONTRASEÑA</label>
                <input type="text" class="form-control text-bg-dark text-ligth p-6 input" id="validationTooltip04" name="contrasenya" required>
                <button type="submit" class="btn btn-dark mt-4 " name="btnEntrar">
                  ENTRAR
              </button>
            <button type="button" href="../logout.php" class="btn btn-light text-dark mt-4" name="btnSalir">
              CERRAR SESIÓN
            </button>
        </form>
    </div>
  </div>

<!--TABLA CALENDARIO-->
  <div class="container-fluid w-75">
    <h2 class="fw-bold text-decoration-underline p-3">CALENDARIO 2023</h2>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">FECHA</th>
            <th scope="col">CIRCUITO</th>
            <th scope="col">GANADOR</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">BAHRAIN</th>
            <td>3-5 MAR</td>
            <td>SAKHIR</td>
            <td>VERSTAPPEN</td>
        </tr>
        <tr>
            <th scope="row">SAUDI ARABIA</th>
            <td>17-19 MAR</td>
            <td>JEDDAH</td>
            <td>PÉREZ</td>
        </tr>
        <tr>
            <th scope="row">AUSTRALIA</th>
            <td>31-02 MARZ-ABR</td>
            <td>ALBERT PARK, MELBOURNE</td>
            <td>VERSTAPPEN</td>
        </tr>
        <tr>
            <th scope="row">AZERBAIJAN</th>
            <td>28-30 ABR</td>
            <td>BAKÚ</td>
            <td>PÉREZ</td>
        </tr>
        <tr>
            <th scope="row">EEUU</th>
            <td>05-07 MAY</td>
            <td>MIAMI</td>
            <td>VERSTAPPEN</td>
        </tr>
        <tr>
            <th scope="row">EMILIA ROMAGNA</th>
            <td>17-19 MAYO</td>
            <td>IMOLA</td>
            <td>NO CHAMPION</td>
        </tr>
        <tr>
            <th scope="row">MONACO</th>
            <td>26-28</td>
            <td>MONTECARLO</td>
            <td>VERSTAPPEN</td>
        </tr>
        <tr>
            <th scope="row">ESPAÑA</th>
            <td>02-04 JUN</td>
            <td>CATALUNYA</td>
            <td>VERSTAPPEN</td>
        </tr>
        <tr>
            <th scope="row">CANADÁ</th>
            <td>16-18 JUN</td>
            <td>GILLES-ILLENEUVE,MONTREAL</td>
            <td>VERSTAPPEN</td>
        </tr>
         <tr>
            <th scope="row">AUSTRIA</th>
            <td>30-02 JUN-JUL</td>
            <td>REDBULL RING</td>
            <td>VERSTAPPEN</td>
        </tr>
        <tr>
            <th scope="row">REINO UNIDO</th>
            <td>07-09 JUL</td>
            <td>SILVERSTONE</td>
            <td>VERSTAPPEN</td>
        </tr>
        <tr>
            <th scope="row">HUNGRÍA</th>
            <td>21-23 JUL</td>
            <td>HUNGARORING, BUDAPEST</td>
            <td>VERSTAPPEN</td>
        </tr>
        <tr>
            <th scope="row">BÉLGICA</th>
            <td>28-30 JUL</td>
            <td>SPA-FRANCORCHAMPS</td>
            <td>VERSTAPPEN</td>
        </tr>
        <tr>
            <th scope="row">HOLANDA</th>
            <td>25-27 AGO</td>
            <td>ZANDVOORT</td>
            <td>VERSTAPPEN</td>
        </tr>
        <tr>
            <th scope="row">ITALIA</th>
            <td>01-03 SEPT</td>
            <td>MONZA</td>
            <td>VERSTAPPEN</td>
        </tr>
         <tr>
            <th scope="row">SINGAPUR</th>
            <td>15-17 SEPT</td>
            <td>MARINA BAY STREET CIRCUIT</td>
            <td>SAINZ</td>
        </tr>
        <tr>
            <th scope="row">JAPAN</th>
            <td>22-24 SEPT</td>
            <td>SUZUKA</td>
            <td>VERSTAPPEN</td>
        </tr>
        <tr>
            <th scope="row">QATAR</th>
            <td>06-08 OCT</td>
            <td>LUSAIL</td>
            <td>VERSTAPPEN</td>
        </tr>
        <tr>
            <th scope="row">EEUU</th>
            <td>20-22 OCT</td>
            <td>CIRCUITO DE LAS AMÉRICAS</td>
            <td>VERSTAPPEN</td>
        </tr>
        <tr>
            <th scope="row">MEXICO</th>
            <td>27-29 OCT</td>
            <td>AUTÓDROMO HERMANOS RODRÍGUEZ</td>
            <td>VERSTAPPEN</td>
        </tr>
        <tr>
            <th scope="row">BRAZIL</th>
            <td>03-05 NOV</td>
            <td>INTERLAGOS</td>
            <td>VERSTAPPEN</td>
        </tr>
        <tr>
            <th scope="row">LAS VEGAS</th>
            <td>16-18 NOV</td>
            <td>LAS VEGAS</td>
            <td>VERSTAPPEN</td>
        </tr>
        
        <tr>
            <th scope="row">ABU DHABI</th>
            <td>24-26 NOV</td>
            <td>YAS MARINA CIRCUIT</td>
            <td>VERSTAPPEN</td>
        </tr>
        </tbody>
    </table>
   </div>

      <!--POLITICA DE PRIVACIDAD-->
    <!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">POLÍTICA DE PRIVACIDAD</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h6 class="text-dark p-2"><P></P><strong>1. INFORMACIÓN AL USUARIO</strong><P></P>

          TÚ FÓRMULA 1 BLOG, S.L., como Responsable del Tratamiento, le informa que, según lo dispuesto en el Reglamento (UE) 2016/679, de 27 de abril, (RGPD) y en la L.O. 3/2018, de 5 de diciembre, de protección de datos y garantía de los derechos digitales (LOPDGDD), trataremos su datos tal y como reflejamos en la presente Política de Privacidad.
          
          En esta Política de Privacidad describimos cómo recogemos sus datos personales y por qué los recogemos, qué hacemos con ellos, con quién los compartimos, cómo los protegemos y sus opciones en cuanto al tratamiento de sus datos personales.
          
          Esta Política se aplica al tratamiento de sus datos personales recogidos por la empresa para la prestación de sus servicios. Si acepta las medidas de esta Política, acepta que tratemos sus datos personales como se define en esta Política.
          
          <P></P><strong> 2. CONTACTO</strong><P></P>
          
          Denominación social: TÚ FÓRMULA 1 BLOG, S.L.<P></P>
          Nombre comercial: TÚ FÓRMULA 1 <P></P>
          CIF: 2735482 <P></P>
          Domicilio: C/LITORAL 2, ALGECIRAS,CÁDIZ <P></P>
          e-mail: tuformula1blog@contacto.com <P></P>
           
          <P></P><strong>3. PRINCIPIOS CLAVE</strong><P></P>
          
          Siempre hemos estado comprometidos con prestar nuestros servicios con el más alto grado de calidad, lo que incluye tratar sus datos con seguridad y transparencia. Nuestros principios son:
          
          Legalidad: Solo recopilaremos sus Datos personales para fines específicos, explícitos y legítimos.
          Minimización de datos: Limitamos la recogida de datos de carácter personal a lo que es estrictamente relevante y necesario para los fines para los que se han recopilado.
          Limitación de la Finalidad: Solo recogeremos sus datos personales para los fines declarados y solo según sus deseos.
          Precisión: Mantendremos sus datos personales exactos y actualizados.
          Seguridad de los Datos: Aplicamos las medidas técnicas y organizativas adecuadas y proporcionales a los riesgos para garantizar que sus datos no sufran daños, tales como divulgación o acceso no autorizado, la destrucción accidental o ilícita o su pérdida accidental o alteración y cualquier otra forma de tratamiento ilícito.
          Acceso y Rectificación: Disponemos de medios para que acceda o rectifique sus datos cuando lo considere oportuno.
          Conservación: Conservamos sus datos personales de manera legal y apropiada y solo mientras es necesario para los fines para los que se han recopilado.
          Las transferencias internacionales: cuando se dé el caso de que sus datos vayan a ser transferidos fuera de la UE/EEE se protegerán adecuadamente.
          Terceros: El acceso y transferencia de datos personales a terceros se llevan a cabo de acuerdo con las leyes y reglamentos aplicables y con las garantías contractuales adecuadas.
          Marketing Directo y cookies: Cumplimos con la legislación aplicable en materia de publicidad y cookies.

          <P></P><strong> 4. RECOGIDA Y TRATAMIENTO DE SUS DATOS PERSONALES</strong><p></p>
          Las tipos de datos que se pueden solicitar y tratar son:
          
          Datos de carácter identificativo.
          También recogemos de forma automática datos sobre su visita a nuestro sitio web  según se describe en la política de cookies.
          
          Siempre que solicitemos sus Datos personales, le informaremos con claridad de qué datos personales recogemos y con qué fin. En general, recogemos y tratamos sus datos personales con el propósito de:
          
          Proporcionar información, servicios, productos, información relevante y novedades en el sector.
          Envío de comunicaciones.

         <P></P> <strong>5. LEGITIMIDAD</strong><P></P>
          
          De acuerdo con la normativa de protección de datos aplicable, sus datos personales podrán tratarse siempre que:
          
          Nos ha dado su consentimiento a los efectos del tratamiento. Por supuesto podrá retirar su consentimiento en cualquier momento.
          Por requerimiento legal.
          Por exisitr un interés legítimo que no se vea menoscabado por sus derechos de privacidad, como por ejemplo el envío de información comercial bien por suscripción a nuestra newsletter o por su condición de cliente.
          Por se necesaria para la prestación de alguno de nuestros servicios mediante relación contractual entre usted y nosotros.
          
          <P></P><strong>6. COMUNICACIÓN DE DATOS PERSONALES</strong><P></P>
          
          Los datos pueden ser comunicados a empresas relacionadas con TÚ FÓRMULA 1 BLOG, S.L. para la prestación de los diversos servicios en calidad de Encargados del Tratamiento. La empresa no realizará ninguna cesión, salvo por obligación legal.
          
          <P></P><strong>7. SUS DERECHOS</strong><P></P>
          
          En relación con la recogida y tratamiento de sus datos personales, puede ponerse en contacto con nosotros en cualquier momento para:
          
          Acceder a sus datos personales y a cualquier otra información indicada en el Artículo 15.1 del RGPD.
          Rectificar sus datos personales que sean inexactos o estén incompletos de acuerdo con el Artículo 16 del RGPD.
          Suprimir sus datos personales de acuerdo con el Artículo 17 del RGPD.
          Limitar el tratamiento de sus datos personales de acuerdo con el Artículo 18 del RGPD.
          Solicitar la portabilidad de sus datos de acuerdo con el Artículo 20 del RGPD.
          Oponerse al tratamiento de sus datos personales de acuerdo con el artículo 21 del RGPD.
          Si ha otorgado su consentimiento para alguna finalidad concreta, tiene derecho a retirar el consentimiento otorgado en cualquier momento, sin que ello afecte a la licitud del tratamiento basado en el consentimiento previo a su retirada rrhh.
          
          Puede ejercer estos derechos enviando comunicación, motivada y acreditada, a tuformula1blog@contacto.com
          
          También tiene derecho a presentar una reclamación ante la Autoridad de control competente (www.aepd.es) si considera que el tratamiento no se ajusta a la normativa vigente.
          
          <P></P><strong>8. INFORMACIÓN LEGAL</strong><P></P>
          Los requisitos de esta Política complementan, y no reemplazan, cualquier otro requisito existente bajo la ley de protección de datos aplicable, que será la que prevalezca en cualquier caso.
          
          Esta Política está sujeta a revisiones periódicas y la empresa puede modificarla en cualquier momento. Cuando esto ocurra, le avisaremos de cualquier cambio y le pediremos que vuelva a leer la versión más reciente de nuestra Política y que confirme su aceptación.</h6>

      <div class="modal-footer"> 
        <button type="button" class="btn btn-secondary fw-bold mt-4" data-bs-dismiss="modal">CERRAR</button>
      </div> 
    </form>
    </div>
  </div>
</div>
</div>



 <!--AVISO LEGAL-->
  <!-- Modal -->
  <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">AVISO LEGAL</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <h6 class="text-dark p-2"><P></P><strong>LEY DE LOS SERVICIOS DE LA SOCIEDAD DE LA INFORMACIÓN (LSSI)</strong><P></P>

              TU FÓRMULA 1 BLOG, S.L., responsable del sitio web, en adelante RESPONSABLE, pone a disposición de los usuarios el presente documento, con el que pretende dar cumplimiento a las obligaciones dispuestas en la Ley 34/2002, de 11 de julio, de Servicios de la Sociedad de la Información y del Comercio Electrónico (LSSICE), así como informar a todos los usuarios del sitio web respecto a cuáles son las condiciones de uso.
              
              Toda persona que acceda a este sitio web asume el papel de usuario, comprometiéndose a la observancia y cumplimiento riguroso de las disposiciones aquí dispuestas, así como a cualquier otra disposición legal que fuera de aplicación. 
              
              TÚ FÓRMULA 1 BLOG, S.L. se reserva el derecho de modificar cualquier tipo de información que pudiera aparecer en el sitio web, sin que exista obligación de preavisar o poner en conocimiento de los usuarios dichas obligaciones, entendiéndose como suficiente con la publicación en el sitio web de TU EMPRESA, S.L
              
              <P></P><strong> DATOS IDENTIFICATIVOS</strong></P>
              
              Denominación social: TÚ FÓRMULA 1 BLOG, S.L.<P>
              </P>
              Nombre comercial: TÚ FÓRMULA 1<P></P>
              CIF: 2735482 <P></P>
              Domicilio: C/LITORAL 2, ALGECIRAS,CÁDIZ <P></P>
              e-mail: tuformula1blog@contacto.com <P></P>
              
              <strong>2. OBJETO</strong><P></P>
              
              A través del Sitio Web, les ofrecemos a los Usuarios la posibilidad de acceder a la información sobre nuestros servicios.
              
              <P></P><strong>3. PRIVACIDAD Y TRATAMIENTO DE DATOS</strong><P></P> 
              
              Cuando para el acceso a determinados contenidos o servicio sea necesario facilitar datos de carácter personal, los Usuarios garantizarán su veracidad, exactitud, autenticidad y vigencia. La empresa dará a dichos datos el tratamiento automatizado que corresponda en función de su naturaleza o finalidad, en los términos indicados en la sección de Política de Privacidad.
              
              <P></P><strong>4. PROPIEDAD INDUSTRIAL E INTELECTUAL</strong><P></P>
              
              El Usuario reconoce y acepta que todos los contenidos que se muestran en el Espacio Web y en especial, diseños, textos, imágenes, logos, iconos, botones, software, nombres comerciales, marcas, o cualesquiera otros signos susceptibles de utilización industrial y/o comercial están sujetos a derechos de Propiedad Intelectual y todas las marcas, nombres comerciales o signos distintivos, todos los derechos de propiedad industrial e intelectual, sobre los contenidos y/o cualesquiera otros elementos insertados en el página, que son propiedad exclusiva de la empresa y/o de terceros, quienes tienen el derecho exclusivo de utilizarlos en el tráfico económico. Por todo ello el Usuario se compromete a no reproducir, copiar, distribuir, poner a disposición o de cualquier otra forma comunicar públicamente, transformar o modificar tales contenidos manteniendo indemne a la empresa de cualquier reclamación que se derive del incumplimiento de tales obligaciones. En ningún caso el acceso al Espacio Web implica ningún tipo de renuncia, transmisión, licencia o cesión total ni parcial de dichos derechos, salvo que se establezca expresamente lo contrario. Las presentes Condiciones Generales de Uso del Espacio Web no confieren a los Usuarios ningún otro derecho de utilización, RRHH, alteración, explotación, reproducción, distribución o comunicación pública del Espacio Web y/o de sus Contenidos distintos de los aquí expresamente previstos. Cualquier otro uso o explotación de cualesquiera derechos estará sujeto a la previa y expresa autorización específicamente otorgada a tal efecto por la empresa o el tercero titular de los derechos afectados.
              
              Los contenidos, textos, fotografías, diseños, logotipos, imágenes, programas de ordenador, códigos fuente y, en general, cualquier creación intelectual existente en este Espacio, así como el propio Espacio en su conjunto, como obra artística multimedia, están protegidos como derechos de autor por la legislación en materia de propiedad intelectual. La empresa es titular de los elementos que integran el diseño gráfico del Espacio Web, lo menús, botones de navegación, el código HTML, los textos, imágenes, texturas, gráficos y cualquier otro contenido del Espacio Web o, en cualquier caso dispone de la correspondiente autorización para la utilización de dichos elementos. El contenido dispuesto en el Espacio Web no podrá ser reproducido ni en todo ni en parte, ni transmitido, ni registrado por ningún sistema de recuperación de información, en ninguna forma ni en ningún medio, a menos que se cuente con la autorización previa, por escrito, de la citada Entidad.
              
              Asimismo queda prohibido suprimir, eludir y/o manipular el «copyright» así como los dispositivos técnicos de protección, o cualesquiera mecanismos de información que pudieren contener los contenidos. El Usuario de este Espacio Web se compromete a respetar los derechos enunciados y a evitar cualquier actuación que pudiera perjudicarlos, reservándose en todo caso la empresa el ejercicio de cuantos medios o acciones legales le correspondan en defensa de sus legítimos derechos de propiedad intelectual e industrial.
              
              <P></P><STRONG>5. OBLIGACIONES Y RESPONSABILIDADES DEL USUARIO DEL ESPACIO WEB</STRONG><P></P>
              
              El Usuario se compromete a:
              
              Hacer un uso adecuado y lícito del Espacio Web así como de los contenidos y servicios, de  conformidad con: (i) la legislación aplicable en cada momento; (ii) las Condiciones Generales de Uso del Espacio Web; (iii) la moral y buenas costumbres generalmente aceptadas y (iv) el orden público.
              Proveerse de todos los medios y requerimientos técnicos que se precisen para acceder al Espacio Web.
              Facilitar información veraz al cumplimentar con sus datos de carácter personal los formularios contenidos en el Espacio Web y a mantenerlos actualizados en todo momento de forma que responda, en cada momento, a la situación real del Usuario. El Usuario será el único responsable de las manifestaciones falsas o inexactas que realice y de los perjuicios que cause a la empresa o a terceros por la información que facilite.
              No obstante lo establecido en el apartado anterior el Usuario deberá asimismo abstenerse de:
              
              Hacer un uso no autorizado o fraudulento del Espacio Web y/o de los contenidos con fines o efectos ilícitos, prohibidos en las presentes Condiciones Generales de Uso, lesivos de los derechos e intereses de terceros, o que de cualquier forma puedan dañar, inutilizar, sobrecargar, deteriorar o impedir la normal utilización de los servicios o los documentos, archivos y toda clase de contenidos almacenados en cualquier equipo informático.
              Acceder o intentar acceder a recursos o áreas restringidas del Espacio Web, sin cumplir las condiciones exigidas para dicho acceso.
              Provocar daños en los sistemas físicos o lógicos del Espacio Web, de sus proveedores o de terceros.
              Introducir o difundir en la red virus informáticos o cualesquiera otros sistemas físicos o lógicos que sean susceptibles de provocar daños en los sistemas físicos o lógicos de la empresa, proveedores o de terceros.
              Intentar acceder, utilizar y/o manipular los datos de la empresa, terceros proveedores y otros Usuarios.
              Reproducir o copiar, distribuir, permitir el acceso del público a través de cualquier modalidad de comunicación pública, transformar o modificar los contenidos, a menos que se cuente con la autorización del titular de los correspondientes derechos o ello resulte legalmente permitido.
              Suprimir, ocultar o manipular las notas sobre derechos de propiedad intelectual o industrial y demás datos identificativos de los derechos de la empresa o de terceros incorporados a los contenidos, así como los dispositivos técnicos de protección o cualesquiera mecanismos de información que puedan insertarse en los contenidos.
              Obtener e intentar obtener los contenidos empleando para ello medios o procedimientos distintos de los que, según los casos, se hayan puesto a su disposición a este efecto o se hayan indicado expresamente en las páginas web donde se encuentren los contenidos o, en general, de los que se empleen habitualmente en Internet por no entrañar un riesgo de daño o inutilización del Espacio web y/o de los contenidos.
              En particular, y a título meramente indicativo y no exhaustivo, el Usuario se compromete a no transmitir, difundir o poner a disposición de terceros informaciones, datos, contenidos, mensajes, gráficos, dibujos, archivos de sonido y/o imagen, fotografías, grabaciones, software y, en general, cualquier clase de material que: • De cualquier forma sea contrario, menosprecie o atente contra los derechos fundamentales y las libertades públicas reconocidas constitucionalmente, en los Tratados Internacionales y en el resto de la legislación vigente.• Induzca, incite o promueva actuaciones delictivas, denigratorias, difamatorias, violentas o, en general, contrarias a la ley, a la moral, a las buenas costumbres generalmente aceptadas o al orden público.• Induzca, incite o promueva actuaciones, actitudes o pensamientos discriminatorios por razón de sexo, raza, religión, creencias, edad o condición.• Incorpore, ponga a disposición o permita acceder a productos, elementos, mensajes y/o servicios delictivos, violentos, ofensivos, nocivos, degradantes o, en general, contrarios a la ley, a la moral y a las buenas costumbres generalmente aceptadas o al orden público. Induzca o pueda inducir a un estado inaceptable de ansiedad o temor.• Induzca o incite a involucrarse en prácticas peligrosas, de riesgo o nocivas para la salud y el equilibrio psíquico.• Se encuentra protegido por la legislación en materia de protección intelectual o industrial perteneciente a la sociedad o a terceros sin que haya sido autorizado el uso que se pretenda realizar.• Sea contrario al honor, a la intimidad personal y familiar o a la propia imagen de las personas.• Constituya cualquier tipo de publicidad.• Incluya cualquier tipo de virus o programa que impida el normal funcionamiento del Espacio Web.
              Si para acceder a algunos de los servicios y/o contenidos del Espacio Web, se le proporcionara una contraseña, se obliga a usarla de manera diligente, manteniéndola en todo momento en secreto. En consecuencia, será responsable de su adecuada custodia y confidencialidad, comprometiéndose a no cederla a terceros, de manera temporal o permanente, ni a permitir el acceso a los mencionados servicios y/o contenidos por parte de personas ajenas. Igualmente, se obliga a notificar a la sociedad cualquier hecho que pueda suponer un uso indebido de su contraseña, como, a título enunciativo, su robo, extravío o el acceso no autorizado, con el fin de proceder a su inmediata cancelación. En consecuencia, mientras no efectúe la notificación anterior, la empresa quedará eximida de cualquier responsabilidad que pudiera derivarse del uso indebido de su contraseña, siendo de su responsabilidad cualquier utilización ilícita de los contenidos y/o servicios del Espacio Web por cualquier tercero ilegítimo. Si de manera negligente o dolosa incumpliera cualquiera de las obligaciones establecidas en las presentes Condiciones Generales de Uso, responderá por todos los daños y perjuicios que de dicho incumplimiento pudieran derivarse para la empresa.
              
              <P></P><STRONG>6. RESPONSABILIDADES</STRONG><P></P>
              
              No se garantiza el acceso continuado, ni la correcta visualización, descarga o utilidad  de los elementos e informaciones contenidas en la web que puedan verse impedidos, dificultados o interrumpidos por factores o circunstancias que están fuera de su control. No se hace responsable de las decisiones que pudieran adoptarse como consecuencia del acceso a los contenidos o informaciones ofrecidas.
              
              Se podrá interrumpir el servicio, o resolver de modo inmediato la relación con el Usuario, si se detecta que un uso de su Espacio Web, o de cualquiera de los servicios ofertados en el mismo, es contrario a las presentes Condiciones Generales de Uso. No nos hacemos responsables por daños, perjuicios, pérdidas, reclamaciones o gastos derivados del uso del Espacio Web.
              
              Únicamente será responsable de eliminar, lo antes posible, los contenidos que puedan generar tales perjuicios, siempre que así se notifique. En especial no seremos responsables de los perjuicios que se pudieran derivar, entre otros, de:
              
              Interferencias, interrupciones, fallos, omisiones, averías telefónicas, retrasos, bloqueos o desconexiones en el funcionamiento del sistema electrónico, motivadas por deficiencias, sobrecargas y errores en las líneas y redes de telecomunicaciones, o por cualquier otra causa ajena al control de la empresa. 
              Intromisiones ilegítimas mediante el uso de programas malignos de cualquier tipo y a través de cualquier medio de comunicación, tales como virus informáticos o cualesquiera otros.
              Abuso indebido o inadecuado del Espacio Web.
              Errores de seguridad o navegación producidos por un mal funcionamiento del navegador o por el uso de versiones no actualizadas del mismo. El administrador del espacio web se reservan el derecho de retirar, total o parcialmente, cualquier contenido o información presente en el Espacio Web.
              La empresa excluye cualquier responsabilidad por los daños y perjuicios de toda naturaleza que pudieran deberse a la mala utilización de los servicios de libre disposición y uso por parte de los Usuarios de Espacio Web. Asimismo queda exonerado de cualquier responsabilidad por el contenido e informaciones que puedan ser recibidas como consecuencia de los formularios de recogida de datos, estando los mismos únicamente para la prestación de los servicios de consultas y dudas. Por otro lado, en caso de causar daños y perjuicios por un uso ilícito o incorrecto de dichos servicios, podrá ser el Usuario reclamado por los daños o perjuicios causados.
              
              Usted mantendrá a la empresa indemne frente a cualesquiera daños y perjuicios que se deriven de reclamaciones, acciones o demandas de terceros como consecuencia de su acceso o uso del Espacio Web. Asimismo, usted se obliga a indemnizar frente a cualesquiera daños y perjuicios, que se deriven del uso por su parte de “robots”, “spiders”, “crawlers” o herramientas similares empleadas con el fin de recabar o extraer datos o de cualquier otra actuación por su parte que imponga una carga irrazonable sobre el funcionamiento del Espacio Web.
              
              <P></P><strong>7. HIPERVÍNCULOS</strong><p></p>
              
              El Usuario se obliga a no reproducir de ningún modo, ni siquiera mediante un hiperenlace o hipervínculo, el Espacio Web, así como ninguno de sus contenidos, salvo autorización expresa y por escrito del responsable del fichero.
              
              El Espacio Web puede incluir enlaces a otros espacios web, gestionados por terceros, con objeto de facilitar el acceso del Usuario a la información de empresas colaboradoras y/o patrocinadoras. Conforme con ello, la sociedad no se responsabiliza del contenido de dichos Espacios web, ni se sitúa en una posición de garante ni/o de parte ofertante de los servicios y/o información que se puedan ofrecer a terceros a través de los enlaces de terceros.
              
              Se concede al Usuario un derecho limitado, revocable y no exclusivo a crear enlaces a la página principal del Espacio Web exclusivamente para uso privado y no comercial. Los Espacios web que incluyan enlace a nuestro Espacio Web (i) no podrán falsear su relación ni afirmar que se ha autorizado tal enlace, ni incluir marcas, denominaciones, nombres comerciales, logotipos u otros signos distintivos de nuestra sociedad; (ii) no podrán incluir contenidos que puedan considerarse de mal gusto, obscenos, ofensivos, controvertidos, que inciten a la violencia o la discriminación por razón de sexo, raza o religión, contrarios al orden público o ilícitos; (iii) no podrán enlazar a ninguna página del Espacio Web distinta de la página principal; (iv) deberá enlazar con la propia dirección del Espacio Web, sin permitir que el Espacio web que realice el enlace reproduzca el Espacio Web como parte de su web o dentro de uno de sus “frames” o crear un “browser” sobre cualquiera de las páginas del Espacio Web. La empresa podrá solicitar, en cualquier momento, que elimine cualquier enlace al Espacio Web, después de lo cual deberá proceder de inmediato a su eliminación.
              
              La empresa no puede controlar la información, contenidos, productos o servicios facilitados por otros Espacios web que tengan establecidos enlaces con destino al Espacio Web.
              
              <P></P><STRONG>8. PROTECCIÓN DE DATOS</STRONG><P></P>
              
              Para utilizar algunos de los Servicios, el Usuario debe proporcionar previamente ciertos datos de carácter personal. La empresa tratará automatizadamente estos datos y aplicará las correspondientes medidas de seguridad, todo ello en cumplimiento del RGPD, LOPDGDD y LSSI. El Usuario puede acceder a la política seguida en el tratamiento de los datos personales, así como el establecimiento de las finalidades previamente establecidas, en las condiciones definidas en la Política de Privacidad.
              
              <P></P><STRONG>9. COOKIES</STRONG><P></P>
              
              La empresa se reserva el derecho de utilizar la tecnología “cookie” en el Espacio Web, a fin de reconocerlo como Usuario frecuente y personalizar el uso que realice del Espacio Web mediante la preselección de su idioma, o contenidos más deseados o específicos.
              
              Las cookies recopilan la dirección IP del usuario siendo Google el responsable del tratamiento de esta información.
              
              Las cookies son ficheros enviados a un navegador, por medio de un servidor Web, para registrar la navegación del Usuario en el Espacio Web, cuando el Usuario permita su recepción. Si usted lo desea puede configurar su navegador para ser avisado en pantalla de la recepción de cookies y para impedir la instalación de cookies en su disco duro. Por favor consulte las instrucciones y manuales de su navegador para ampliar esta información.
              
              Gracias a las cookies, resulta posible que se pueda reconocer el navegador del ordenador utilizado por el Usuario con la finalidad de facilitar contenidos y ofrecer las preferencias de navegación u publicitarias que el Usuario, a los perfiles demográficos de los Usuarios así como para medir las visitas y parámetros del tráfico, controlar el progreso y número de entradas.
              
              <P></P><STRONG>10. DECLARACIONES Y GARANTÍAS</STRONG><P></P>
              
              En general, los contenidos y servicios ofrecidos en el Espacio Web tienen carácter meramente informativo. Por consiguiente, al ofrecerlos, no se otorga garantía ni declaración alguna en relación con los contenidos y servicios ofrecidos en el Espacio web, incluyendo, a título enunciativo, garantías de licitud, fiabilidad, utilidad, veracidad, exactitud, o comerciabilidad, salvo en la medida en que por ley no puedan excluirse tales declaraciones y garantías.
              
              <P></P><STRONG>11. FUERZA MAYOR</STRONG><P></P>
              
              La empresa no será responsable en todo en caso de imposibilidad de prestar servicio, si ésta se debe a interrupciones prolongadas del suministro eléctrico, líneas de telecomunicaciones, conflictos sociales, huelgas, rebelión, explosiones, inundaciones, actos y omisiones del Gobierno, y en general todos los supuestos de fuerza mayor o de caso fortuito.
              
              <P></P><STRONG>12. RESOLUCIÓN DE CONTROVERSIAS. LEY APLICABLE Y JURISDICCIÓN</STRONG><P></P>
              
              Las presentes Condiciones Generales de Uso, así como el uso del Espacio Web, se regirán por la legislación española. Para la resolución de cualquier controversia las partes se someterán a los Juzgados y Tribunales del domicilio social del Responsable del sitio web.
              
              En el supuesto de que cualquier estipulación de las presentes Condiciones Generales de Uso resultara inexigible o nula en virtud de la legislación aplicable o como consecuencia de una resolución judicial o administrativa, dicha inexigibilidad o nulidad no hará que las presentes Condiciones Generales de Uso resulten inexigibles o nulas en su conjunto. En dichos casos, la empresa procederá a la modificación o sustitución de dicha estipulación por otra que sea válida y exigible y que, en la medida de lo posible, consiga el objetivo y pretensión reflejados en la estipulación original.

          <div class="modal-footer"> 
            <button type="button" class="btn btn-secondary fw-bold mt-4" data-bs-dismiss="modal">CERRAR</button>
          </div> 
        </form>
        </div>
      </div>
    </div>
  </div>
  
  
 <!--POLITICA DE PRIVACIDAD-->
  <!-- Modal -->
<div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content w-100">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">POLÍTICA DE COOKIES</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h6 class="text-dark p-2">
          Las cookies son pequeñas cantidades de información que se almacenan en el navegador utilizado por cada usuario para que el servidor recuerde cierta información que posteriormente pueda utilizar.
          
          <P></P><STRONG>TIPOS DE COOKIES QUE UTILIZAMOS</STRONG><P></P>
          Esta página web utiliza cookies de terceros que son aquellas que se envían a tu ordenador o terminal desde un dominio o una página web que no es gestionada por nosotros, sino por otra entidad que trata los datos obtenidos a través de las cookies.
          
          En este caso las Cookies son utilizadas con fines estadísticos relacionados con las visitas que recibe y las páginas que se consultan, quedando aceptado su uso al navegar por ella.

          <p>
              
              <img src="../images/politica_cookies.jpg" width="100%" height="100%">
              

          </p>
          Si desea más información más sobre los tipos de cookies de seguimiento y análisis de datos de Google haga clic <a href="https://policies.google.com/technologies/cookies?hl=es&gl=es#types-of-cookies">aquí.</a>
      <div class="modal-footer"> 
        <button type="button" class="btn btn-secondary fw-bold mt-4" data-bs-dismiss="modal">CERRAR</button>
      </div> 
    </form>
    </div>
  </div>
</div>
</div>


  <!--FOOTER-->
<footer class="bg-danger text-ligth">
    <div class="container">
      <nav class="row">
        <a href="../index.php" class="col-5 text-reset text-uppercase d-flex align-items-center p-3">
        <img class="bg-light mr-2" width="80"height="80" src="../logo-F1.png" alt="logo">
        </a>
        <ul class="col-4 list-unstyled p-3">
          <li class="font-weight-bold text-uppercase">DOCUMENTACIÓN LEGAL</li>
          <li><a class="text-reset" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2" >POLÍTICA DE PRIVACIDAD</a></li>
          <li><a class="text-reset" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal3">AVISO LEGAL</a></li>
          <li><a class="text-reset" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal4">POLÍTICA DE COOKIES</a></li>
        </ul>
        <ul class="col-3 list-unstyled p-4 my-auto" id="logos">
          <li>REDES SOCIALES F1</li>
          <li>
            <a href="https://www.facebook.com/Formula1/" class="text-reset">
              <img src="../images/footer/facebook.jpg" width="50"height="50" alt="face logo">
            </a>
            <a href="https://www.instagram.com/f1/" class="text-reset">
              <img src="../images/footer/ig.jpg" width="50"height="50" alt="ig logo">
            <a href="https://www.tiktok.com/@f1" class="text-reset">
              <img src="../images/footer/tiktok.jpg" width="50"height="50" alt="tiktok logo">
            </a>
            <a href="https://twitter.com/f1" class="text-reset"> 
              <img src="../images/footer/tw.jpg" width="50"height="50" alt="tw logo">
            </a>
            <a href="https://www.youtube.com/c/F1/videos" class="text-reset"> 
              <img src="../images/footer/yt.jpg" width="50"height="50" alt="yt logo">
            </a>
          </li>
        </ul>
      </nav>
    </div>      
  </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
  </html>