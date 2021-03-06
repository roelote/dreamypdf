<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->

    <title>Pdf Dreamy Tours</title>

  </head>

  <style>

 @font-face {
    font-family: 'Sitka Small';
    src: url({{ storage_path('fonts/Sitka Small.ttf') }}) format("truetype");
}

 @font-face {
    font-family: 'Sitka Small Bold';
    src: url({{ storage_path('fonts/Sitka Small Bold.ttf') }}) format('truetype');
}

@font-face {
    font-family: 'RobotoCondensed-Regular';
    src: url({{ storage_path('fonts/RobotoCondensed-Regular.ttf') }}) format("truetype");
}

@font-face {
    font-family: 'Oswald-SemiBold';
    src: url({{ storage_path('fonts/Oswald-SemiBold.ttf') }}) format("truetype");
}




.font
{
  font-family: 'Sitka Small Bold';
  font-size: 24px;
  color: #F81845;
  display: block;
  text-transform: uppercase;
}
p, li
{
  font-family: 'RobotoCondensed-Regular';
  font-size: 1rem;
}

.nolist
{
    list-style: none;
}

.listchek li::before {
    content: '\f00c';
    font-family: 'FontAwesome';
    float: left;
    margin-left: -1.2em;
    margin-right: .3.2rem;

}

.listnochek li::before {
    content: '\f00d';
    font-family: 'FontAwesome';
    float: left;
    margin-left: -1.2em;
    margin-right: .3rem;

}

.listothers li::before {
    content: '\f054';
    font-family: 'FontAwesome';
    float: left;
    margin-left: -1.2em;
    margin-right: .3rem;
}

    html {
    	margin: 0pt 0pt;
    }
    .font2
    {
      font-family: 'Sitka Small Bold';
      display: block;
      font-size: 22px;
    }
    .page-break {
    page-break-after: always;
    }
    header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 0.5cm;
            /* background-color: #2a0927; */
            color: white;
            text-align: center;
            line-height: 30px;
        }

    footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 1cm;
            padding-left: .3cm;
            /* background-color: #cef1ff; */
            color: white;
            text-align: left;
            line-height: 15px;
        }



     .portada
      {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 100%;
            background-position: center;
            background-size: cover;
            text-align: left;
            line-height: 35px;
      }
    .fi
    {
       width: 50%;
       float: left;
    }
   .mt-5
   {
     margin-top: 15px;
   }
   .px-4
   {
     padding-right: 25px;
     padding-left: 25px;
   }
   .mt-0
   {
     margin-top: 0px;
   }
   .text-center
   {
     text-align: center;
   }
   .title-home
   {
    background-color:#F81845;
    color:#fff;
    margin-top:8rem;
    font-family: 'Sitka Small Bold';
    display: block;
    font-size: 30px;
    padding: 15px 0px;
   }
.precio  table {
   width: 100% !important;
   border: 1px solid #000;
}
.precio  table thead  {
   background-color: #8AD3E0;
}

.precio table td, .precio thead th
{
 padding: .3rem;
}
.precio th,.precio td {
   width: 25%;
   text-align: left;
   vertical-align: top;
   border: 1px solid #000;
}
.text-uppercase
{
    text-transform: uppercase;
}

h2
{
  font-family: "Ubuntu", sans-serif !important;
  font-size: 18px !important;
  color: #F81845;
  text-transform: uppercase;
  text-align: center;
}
.itine h2
{
  font-size: 22px !important;
}
h3
{
    font-family: "Ubuntu", sans-serif !important;
    font-size: 18px;
}
.itin ul
{
    list-style: none;
}

.itin ul:first-child(3) li:before {
    content: "\f00c";
    font-family: 'FontAwesome';
    float: left;
    margin-left: -1.2em;
    margin-right: .3.2rem;
}


  </style>


  <body>


    <section>
      <div class="portada" style="background-image: url({{ $id->imagen_url }}); ">
        <img src="img/logo-portada.png" alt="" width="200px;" style="margin-top:10px;">
       <span class="text-center title-home text-uppercase" >{{ $id->titulo }}</span>
      </div>

    </section>

    <div class="page-break"></div>
    <section style="margin: 15pt 15pt">
       <header>

       </header>
        <article class="mt-5">

          <div class="fi itine">
            <div class="px-4">
                {!!$id->itinerario!!}
            </div>
          </div>
          <div class="fi">
            <table class="table">
                @php
                    $iti = json_decode($id->imagesitinerario);
                 @endphp
              <tbody>
                <tr>
                  <td><img src="images/{{ $iti[0] }}" alt="" style="width: 265px; height:350px;"></td>
                  <td><img src="images/{{ $iti[1] }}" alt="" style="width: 265px; height:350px;"></td>
                </tr>
                <tr>
                 <td><img src="images/{{ $iti[2] }}" alt="" style="width: 265px;  height:350px;"></td>
                 <td><img src="images/{{ $iti[3] }}" alt="" style="width: 265px;  height:350px;"></td>
                </tr>
              </tbody>
            </table>
          </div>


        </article>
        <footer>
          <img src="img/logo.png" width="70px">

        </footer>
    </section>

    <div class="page-break"></div>
    <section style="margin: 15pt 15pt">
        <header>

        </header>
         <article class="mt-5">

          <div class="fi">
            <table class="table">
                @php
                 $incl = json_decode($id->imagesincluye);
                 @endphp
              <tbody>

                <tr>
                  <td><img src="images/{{ $incl[0] }}" alt="" style="width: 506px; height:350px;"></td>
                </tr>
                <tr>
                 <td><img src="images/{{ $incl[1] }}" alt="" style="width: 506px;  height:350px;"></td>
                </tr>
              </tbody>
            </table>
          </div>

           <div class="fi">
             <div class="px-4">
                {!!$id->incluye!!}
             </div>
           </div>


         </article>
         <footer>
           <img src="img/logo.png" width="70px">

         </footer>
     </section>
     <div class="page-break"></div>
          <section style="margin: 30pt 30pt">
            <header>

            </header>
                <div>
                  <span class="font text-center">SOMOS UNA EMPRESA CONFIABLE</span>

              <p>Dreamy Tours ??? Agencia de Viajes y Tours Operator, cumple con todos los requisitos y licencias principales para operar y ofrecer los diversos servicios del sector del turismo en todo Per??
              </p>
              <ul class="nolist listothers">
                <li>Contamos con la autorizaci??n de la DIRCETUR (Direcci??n Regional de Comercio Exterior y Turismo del Cusco), organizaci??n gubernamental que promueve la competencia, sostenibilidad y la diversi???caci??n de los productos peruanos exportables, el turismo y la artesan??a. </li>
                <li>Estamos suscritos a PROMPERU (Comisi??n de Promoci??n del Per?? para la Exportaci??n y el Turismo), instituci??n perteneciente al Ministerio de Comercio Exterior y Turismo de nuestro pa??s. </li>
                <li>Estamos registrados en la SUNAT (Superintendencia Nacional de Administraci??n Tributaria), instituci??n adscrita al Ministerio de Econom??a y Finanzas del Per??, nuestro n??mero de RUC es 20600661575.</li>
              </ul>
                </div>
              <div>

                <table class="table">

                  <tbody>
                    <tr>
                      <td style="width: 27%"><div style="border:2px solid rgb(145,144,144)"><img src="img/ficha-sunat.jpg" alt="" style="width: 100%; height:380px;"></div></td>
                      <td style="width: 44%"><div style="border:2px solid rgb(145,144,144)"><img src="img/licencia-dreamy-tours.jpg" alt="" style="width: 100%; height:380px;"></div></td>
                      <td style="width: 27%"><div style="border:2px solid rgb(145,144,144)"><img src="img/contastancia-dircetur.jpg" alt="" style="width: 100%; height:380px;"></div></td>
                    </tr>

                  </tbody>
                </table>

              </div>

              <footer>
                <img src="img/logo.png" width="70px">

              </footer>
          </section>

      <div class="page-break"></div>
      <section style="margin: 30pt 30pt">
        <header>

        </header>
            <div>
              <span class="font text-center">NUESTRAS UNIDADES TRANSPORTE</span>
          <p>Dreamy Tours te ofrece un staff de conductores profesionales y capacitados que siempre estar??n a disposici??n de brindarte un buen servicio
          </p>
          <p>Mantenemos una amplia y variada flota de veh??culos de diferentes modelos y capacidades, siempre preparados para brindarte la mejor atenci??n, cumpliendo con todos los protocolos de Bioseguridad.</p>
            </div>
            <table class="table">

              <tbody>
                <tr>
                  <td style="width: 100%"><img src="img/trans-1.jpg" alt="" style="width: 100%;height:260px;"></td>
                </tr>
                <tr>
                  <td style="width: 100%"><img src="img/trans-2.jpg" alt="" style="width: 100%;height:260px;"></td>
                </tr>

              </tbody>
            </table>

          <footer>
            <img src="img/logo.png" width="70px">

          </footer>
      </section>
      <div class="page-break"></div>
      <section style="margin: 30pt 30pt">
        <header>

        </header>
            <div>
              <span class="font text-center">DISFRUTA DE UN DELICIOSO DESAYUNO BUFFET </span>
          <p class="text-center">Empieza el d??a con el mejor desayuno buffet. Una experiencia sabrosa y ??nica.</p>

            </div>
            <br>
            <table class="table">
                @php
                $dbuff = json_decode($id->imagesdbuffete);
                @endphp
              <tbody>
                <tr>
                  <td style="width: 33%"><img src="images/{{ $dbuff[0] }}" alt="" style="width: 100%; height:550px;"></td>
                  <td style="width: 33%"><img src="images/{{ $dbuff[1] }}" alt="" style="width: 100%; height:550px;"></td>
                  <td style="width: 33%"><img src="images/{{ $dbuff[2] }}" alt="" style="width: 100%; height:550px;"></td>
                </tr>

              </tbody>
            </table>


          <footer>
            <img src="img/logo.png" width="70px">

          </footer>
      </section>
      <div class="page-break"></div>
      <section style="margin: 30pt 30pt">
        <header>

        </header>
            <div>
              <span class="font text-center">ALMUERZO BUFETTE </span>
          <p class="text-center">Date el gusto de almorzar lo mejor - Bufett</p>
            </div>
            <br>
            <table class="table">
                @php
                $abuff = json_decode($id->imagesabuffete);
                @endphp
              <tbody>
                <tr>
                  <td style="width: 33%"><img src="images/{{ $abuff[0] }}" alt="" style="width: 100%; height:550px;"></td>
                  <td style="width: 33%"><img src="images/{{ $abuff[1] }}" alt="" style="width: 100%; height:550px;"></td>
                  <td style="width: 33%"><img src="images/{{ $abuff[2] }}" alt="" style="width: 100%; height:550px;"></td>
                </tr>

              </tbody>
            </table>


          <footer>
            <img src="img/logo.png" width="70px">

          </footer>
      </section>
      <div class="page-break"></div>
      <section style="margin: 30pt 30pt">
        <header>

        </header>
            <div>
              <span class="font text-center">{{ $id->nombre_hotel1 }} </span>
              <span class="font2">{{ $id->categoria_h1 }}</span>
              <div>
                {{--  <table class="table">
                    @php
                    $h1 = json_decode($id->imagesh);
                    @endphp
                  <tbody>
                    <tr>
                      <td style="width: 33%"><img src="images/{{ $h1[0] }}" alt="" style="width: 100%; height:260px;"></td>
                      <td style="width: 33%"><img src="images/{{ $h1[1] }}" alt="" style="width: 100%; height:260px;"></td>
                      <td style="width: 33%"><img src="images/{{ $h1[2] }}" alt="" style="width: 100%; height:260px;"></td>
                    </tr>
                    <tr>
                      <td style="width: 33%"><img src="images/{{ $h1[3] }}" alt="" style="width: 100%; height:260px;"></td>
                      <td style="width: 33%"><img src="images/{{ $h1[4] }}" alt="" style="width: 100%; height:260px;"></td>
                      <td style="width: 33%"><img src="images/{{ $h1[5] }}" alt="" style="width: 100%; height:260px;"></td>
                    </tr>

                  </tbody>
                </table>  --}}
              </div>

            </div>


          <footer>
            <img src="img/logo.png" width="70px">

          </footer>
      </section>
      <div class="page-break"></div>
      <section style="margin: 30pt 30pt">
        <header>

        </header>
            <div>
                <span class="font text-center">{{ $id->nombre_hotel2 }} </span>
                <span class="font2">{{ $id->categoria_h2 }}</span>
            </div>
            <div>
              {{--  <table class="table">
                @php
                $h2 = json_decode($id->imagesh2);
                @endphp
                <tbody>
                  <tr>
                    <td style="width: 33%"><img src="images/{{ $h2[0] }}" alt="" style="width: 100%; height:260px;"></td>
                    <td style="width: 33%"><img src="images/{{ $h2[1] }}" alt="" style="width: 100%; height:260px;"></td>
                    <td style="width: 33%"><img src="images/{{ $h2[2] }}" alt="" style="width: 100%; height:260px;"></td>
                  </tr>
                  <tr>
                    <td style="width: 33%"><img src="images/{{ $h2[3] }}" alt="" style="width: 100%; height:260px;"></td>
                    <td style="width: 33%"><img src="images/{{ $h2[4] }}" alt="" style="width: 100%; height:260px;"></td>
                    <td style="width: 33%"><img src="images/{{ $h2[5] }}" alt="" style="width: 100%; height:260px;"></td>
                  </tr>

                </tbody>
              </table>  --}}
            </div>

          <footer>
            <img src="img/logo.png" width="70px">

          </footer>
      </section>

<<<<<<< HEAD
        </header>
            <div>
              <span class="font text-center">HOTELES QUE OFRECEMOS </span>
              <span class="font2">HOTEL 3 <img src="img/estrella.png" width="20px"> <img src="img/estrella.png" width="20px"> <img src="img/estrella.png" width="20px"></span>
          <p>Mantenemos una amp.</p>
            </div>
            <div>
              {{--  <table class="table">
                @php
                $h3 = json_decode($id->imagesh3);
                @endphp
                <tbody>
                  <tr>
                    <td style="width: 33%"><img src="images/{{ $h3[0] }}" alt="" style="width: 100%; height:260px;"></td>
                    <td style="width: 33%"><img src="images/{{ $h3[1] }}" alt="" style="width: 100%; height:260px;"></td>
                    <td style="width: 33%"><img src="images/{{ $h3[2] }}" alt="" style="width: 100%; height:260px;"></td>
                  </tr>
                  <tr>
                    <td style="width: 33%"><img src="images/{{ $h3[3] }}" alt="" style="width: 100%; height:260px;"></td>
                    <td style="width: 33%"><img src="images/{{ $h3[4] }}" alt="" style="width: 100%; height:260px;"></td>
                    <td style="width: 33%"><img src="images/{{ $h3[5] }}" alt="" style="width: 100%; height:260px;"></td>
                  </tr>

                </tbody>
              </table>  --}}
            </div>


          <footer>
            <img src="img/logo.png" width="70px">

          </footer>
      </section>
=======
>>>>>>> ddd0239a58dfaf4a50b6ac22a2b844ee79ba0de9
      <div class="page-break"></div>
      <section style="margin: 50pt 50pt">
        <header>

        </header>
            <div>
              <span class="font">PRECIOS</span>
              <p>??CU??NTO CUESTA? Tenemos alternativas de precios que se acomodan a todos los presupuestos, precios por personas, expresado en dolares y/o nuevos soles.
              </p>

              <div class="precio">
                    {!!$id->precio!!}
              </div>
              <span class="font">CONTACTOS</span>
              <p>Realice sus reservas el email info@dreamy.tours, o puede comunicarse con uno de nuestros ejecutivos de ventas a los tel??fonos detallados l??neas abajo, estaremos gustosos en atenderles.</p>
              <ul class="nolist">
                <li><i  style="font-size: 1.2rem;" class="fa fa-phone"></i> Oficina: +51 084-548558 </li>
                <li><i  style="font-size: 1.2rem;" class="fa fa-mobile"></i> Celular ??? WhatsApp: + 51 969 787221 </li>
                <li><i  style="font-size: 1.2rem;" class="fa fa-mobile"></i> Celular ??? WhatsApp: +51 969 787221 </li>
              </ul>
            </div>



          <footer>
            <img src="img/logo.png" width="70px">
          </footer>
      </section>
      <div class="page-break"></div>
      <section style="margin: 50pt 50pt">
        <header>

        </header>

        <div>
          <span class="font">??COMO RESERVAR?</span>
          <p>Para iniciar los tr??mites de su reserva por favor necesitamos que nos env??e la siguiente informaci??n:</p>

          <ul class="nolist listothers">
            <li>Nombre y apellidos</li>
            <li>Nro. De Documento </li>
            <li>Nacionalidad</li>
            <li>Fecha de nacimiento </li>
            <li>Sexo</li>
            <li>Tel??fono</li>
            <li>Es muy importante su informaci??n sobre su hotel en la ciudad del Cusco, en caso de su reserva se realice por cuenta propia</li>
            <li>Enviar su solicitud de reserva al correo info@dreamy.tours</li>
          </ul>

          <span class="font">M??TODOS DE PAGO</span>
          <ul class="nolist listothers">
            <li>Pago en Efectivo </li>
            <li>Yape </li>
            <li>Deposito a Nuestro Numero de Numero de Cuenta corriente. </li>
          </ul>

          <div>
            <img src="img/metodos-de-pago.jpg" alt="" width="100%">
          </div>
        </div>


          <footer>
            <img src="img/logo.png" width="70px">

          </footer>
      </section>

  </body>
</html>


