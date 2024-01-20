<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title translate="no">Tours Nocturnos - Tours Ecuador</title>
  <meta name="description" content="El Quito City Tour es una emocionante aventura que te permite descubrir Quito desde las alturas a bordo de un autobús de dos pisos. Este recorrido único te lleva a paradas estratégicas en la ciudad, incluyendo lugares icónicos como el Bulevar Naciones Unidas, la Plaza Foch, el Mercado Artesanal, la Basílica del Voto Nacional, la Iglesia de San Francisco y el impresionante Mirador El Panecillo. Con el sistema Hop On - Hop Off, puedes explorar a tu propio ritmo durante todo un día, sumergiéndote en la rica cultura, la gastronomía y la historia de Quito. Además, el recorrido incluye vistas panorámicas impresionantes y una experiencia única para conocer los lugares más destacados de la ciudad. ¡Embárcate en esta emocionante aventura y descubre la belleza de Quito desde lo alto!">
  <link rel="icon" href="../img/iconToursEcuador.png" type="image/png" sizes="32x32"/>
  <link rel="stylesheet" href="../css/estilo_index.css" type="text/css">
  <link rel="stylesheet" href="../css/estilo_destinos.css" type="text/css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="../css/vertical-timeline.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"
    integrity="sha512-z4OUqw38qNLpn1libAN9BsoDx6nbNFio5lA6CuTp9NlK83b89hgyCVq+N5FdBJptINztxn1Z3SaKSKUS5UP60Q=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
    integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>    <!--fancybox-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <div class="principal" translate="no">
    <?php include "sidenav.php";?>
    <?php include "navbar.php";?>
    <div class="titulo_destino">
      <img src="../img/avion.png" class="imagen_a" style="transform: scaleX(-1);">
      <h1 class="titulo">Tours Nocturnos &nbsp;</h1>
    </div>
    <div class="imagenes-portada">
      <div class="imagenes-portada-primero">
        <a href="../img/nocturnos_p0.jpg" data-fancybox="gallery" data-caption="Basílica del Voto Nacional">
          <img src="../img/nocturnos_p0.jpg" alt="Basílica del Voto Nacional" class="w3-hover-opacity">
        </a>
      </div>
      <div class="imagenes-portada-segunda">
        <div class="portada-pri">
          <div class="portada-primera1">
            <a href="../img/nocturnos_p1.jpg" data-fancybox="gallery" data-caption="Iglesia Santa Clara">
              <img src="../img/nocturnos_p1.jpg" alt="Iglesia Santa Clara" class="w3-hover-opacity">
            </a>
          </div>
          <div class="portada-primera1">
            <a href="../img/nocturnos_p2.jpg" data-fancybox="gallery" data-caption="La Catedral">
              <img src="../img/nocturnos_p2.jpg" alt="La Catedral" class="w3-hover-opacity">
            </a>
          </div>
        </div>
        <div class="portada-pri">
          <div class="portada-primera1">
            <a href="../img/nocturnos_p3.jpg" data-fancybox="gallery" data-caption="Vista al Panecillo">
              <img src="../img/nocturnos_p3.jpg" alt="Vista al Panecillo" class="w3-hover-opacity">
            </a>
          </div>
          <div class="portada-primera1">
            <a href="../img/nocturnos_p4.jpg" data-fancybox="gallery" data-caption="Basílica del Voto Nacional">
              <img src="../img/nocturnos_p4.jpg" alt="Basílica del Voto Nacional" class="w3-hover-opacity">
            </a>
          </div>
        </div>
      </div>
    </div>


    <div class="contenedor-informacion">
      <div class="table-of-contents-sticky w3-hide-small">
        <div class="table-of-contents">
          <h3>Tours Nocturnos</h3>
          <ul>
            <li><a href="#santaClara">Tour cúpulas de Santa Clara</a></li>
            <li><a href="#catedral">Tour cúpulas de la Catedral</a></li>
            <li><a href="#basilicaVotoNacional">Tour Basílica del Voto Nacional</a></li>
          </ul>
        </div>
      </div>
      <section class="linea-tiempo">
        <h3 class="w3-center" id="santaClara">Tour cúpulas de Santa Clara</h3>
        <h3 id="itinerario" class="w3-center">Itinerario</h3>
        <div id="myTimeline">
            <div data-vtdate="Inicio">
                <div data-vticon="true">
                    <i class="fa-solid fa-location-dot"></i>
                </div>
              <div class="image-column">
                <img src="../img/Naciones-Unidas.jpg" alt="Quito Tour Bus en Av. Naciones Unidas" class="cover-image">
              </div>
              <div class="content-column santa_clara_p1">
                <h4>Bulevar Naciones Unidas</h4>
                <p>Comenzaremos el recorrido a bordo del único autobús de dos pisos de Quito. En este viaje, descubrirás detalles y secretos ocultos de nuestra ciudad, mientras nuestros guías te relatan leyendas e historias de la capital.</p>
              </div>
            </div>
            <div data-vtdate="Primera parada">
              <div data-vticon="true">
                    <i class="fa-solid fa-location-dot"></i>
                </div>
              <div class="image-column">
                <img src="../img/SANTA-CLARA-1.jpg" alt="Plaza Foch" class="cover-image">
              </div>
              <div class="content-column santa_clara_p2">
                <h4>Visita al Monasterio de Santa Clara</h4>
                <p>Realizaremos una visita al Monasterio de Santa Clara. Exploraremos la iglesia, el coro bajo, el coro alto y la hermosa cúpula ovalada de color naranja. Durante la visita, te sumergirás en la historia de este convento con más de 400 años de antigüedad.</p>
              </div>
            </div>
            <div data-vtdate="Segunda parada">
              <div data-vticon="true">
                  <i class="fa-solid fa-location-dot"></i>
                </div>
              
              <div class="content-column santa_clara_p3">
                <h4>Un Dulce Final</h4>
                <p>Para concluir nuestra experiencia, disfrutaremos de unas deliciosas galletitas o bizcochos elaborados por las monjas, acompañados de vino consagrado.</p>
              </div>
            </div>
            <div data-vtdate="Fin del Tour">
              <div data-vticon="true">
                <i class="fa-solid fa-location-dot"></i>
              </div>
              <div class="content-column santa_clara_p4">
                <p>Fin del Tour</p>
              </div>
            </div>
        </div><br>
        <div class="w3-container w3-margin">
          <h2 id="incluye" class="w3-center">Incluye</h2>
          <ul class="incluye_santa_clara w3-left">
            <li>Ingreso al monasterio de claustro de Santa Clara.</li>
            <li>Acceso a la iglesia, coro bajo, coro alto y las cúpulas.</li>
            <li>Disfruta de deliciosas galletitas y vino elaborados por las monjas.</li>
          </ul>
        </div>
        <div class="w3-container w3-margin">
          <h2 id="indicaciones" class="w3-center">Indicaciones</h2>
          <ul class="indicaciones_santa_clara w3-left">
            <li>Ropa cómoda</li>  
            <li>Cámara de fotos</li>  
          </ul>
        </div>
        <div class="w3-container w3-center">
          <h2 id="ruta" class="w3-center">Ruta</h2>
         <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d255346.4564697342!2d-78.516345!3d-0.221959!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d599811fe08e09%3A0x3227b9057a3edfbc!2sProtomonasterio%20de%20Santa%20Clara%20de%20Nuestra%20Se%C3%B1ora%20del%20Rosario!5e0!3m2!1ses!2sus!4v1695234129087!5m2!1ses!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        
        <h3 class="w3-center" id="catedral">Tour cúpulas de la Catedral</h3>
        <h3 id="itinerario" class="w3-center">Itinerario</h3>
        <div id="myTimeline2" class="timeline-red">
            <div data-vtdate="Inicio">
                <div data-vticon="true">
                    <i class="fa-solid fa-location-dot"></i>
                </div>
              <div class="image-column">
                <img src="../img/Naciones-Unidas.jpg" alt="Quito Tour Bus en Av. Naciones Unidas" class="cover-image">
              </div>
              <div class="content-column catedral_p1">
                <h4>Comienzo de la Aventura</h4>
                <p>Nuestra emocionante travesía empieza a las 17:30 a bordo del único autobús de dos pisos de Quito. A lo largo del viaje, te sumergirás en los secretos más profundos y los detalles más ocultos de nuestra querida ciudad. Nuestros guías expertos te cautivarán con fascinantes leyendas e historias de la capital.</p>
              </div>
            </div>
            <div data-vtdate="Primera parada">
              <div data-vticon="true">
                    <i class="fa-solid fa-location-dot"></i>
                </div>
              <div class="image-column">
                <img src="../img/Catedral-Metropolitana-de-Quito.jpg" alt="Catedral Metropolitana de Quito" class="cover-image">
              </div>
              <div class="content-column catedral_p2">
                <h4>Tesoros de la Catedral de Quito</h4>
                <p>Nuestra primera parada nos lleva a la majestuosa Catedral de Quito. Aquí, descubrirás los exquisitos retablos tallados por los maestros de la histórica escuela quiteña. Estos retablos están adornados con pan de oro y albergan santos y mártires esculpidos por los talentosos artistas de la escuela quiteña.<br>
El altar mayor, una joya artística cubierta completamente en pan de oro, revela influencias barrocas y mudéjares. En 1572, la Catedral fue oficialmente concluida y consagrada bajo la dirección del segundo Obispo de Quito, Mons. Fray Pedro de la Peña.</p>
              </div>
            </div>
            <div data-vtdate="Segunda parada">
              <div data-vticon="true">
                  <i class="fa-solid fa-location-dot"></i>
                </div>
              <div class="image-column">
                <img src="../img/gallo-catedral.jpg" alt="El gallo de la Catedral" class="cover-image">
              </div>
              <div class="content-column catedral_p3">
                <h4>Ascenso a las Cúpulas</h4>
                <p>Después de explorar el interior, nos aventuramos por estrechos pasadizos para llegar a las altas cúpulas de la Catedral. Aquí, podrás admirar de cerca el icónico "Gallito de la Catedral" y maravillarte con una vista panorámica de la Plaza Grande, el Sagrario y el Panecillo. Las cúpulas te brindarán la oportunidad perfecta para capturar las imágenes más espectaculares de este paisaje único.</p>
              </div>
            </div>
            <div data-vtdate="Tercera parada">
              <div data-vticon="true">
                  <i class="fa-solid fa-location-dot"></i>
                </div>
              <div class="image-column">
                <img src="../img/Jose-de-Sucre.jpg" alt="José de Sucre" class="cover-image">
              </div>
              <div class="content-column catedral_p4">
                <h4>Misterios en las Catacumbas</h4>
                <p>Nuestra próxima parada nos lleva a las catacumbas de la iglesia, un lugar enigmático y lleno de historia. Descubre los restos finales del Mariscal Antonio José de Sucre, el valiente líder de la Batalla de Pichincha, así como los del ex Presidente García Moreno y otros personajes destacados de nuestra historia ecuatoriana. Ten en cuenta que el acceso a las catacumbas podría estar cerrado por decisión de la iglesia.</p>
              </div>
            </div>
            <div data-vtdate="Fin del Tour">
              <div data-vticon="true">
                <i class="fa-solid fa-location-dot"></i>
              </div>
              <div class="content-column catedral_p5">
                <p>Nuestra inolvidable aventura culmina con la degustación de un reconfortante canelazo caliente antes de regresar al punto de partida en el Bulevar Naciones Unidas.</p>
              </div>
            </div>
        </div><br>
        <div class="w3-container w3-margin">
          <h2 id="incluye" class="w3-center">Incluye</h2>
          <ul class="incluye_catedral w3-left">
            <li>Ingreso especial a la Catedral Primada de Quito.</li>
            <li>Acceso a la iglesia y altares.</li>
            <li>Explora las cúpulas del Gallito de la Catedral.</li>
            <li>Concluye el tour con un reconfortante canelazo caliente.</li>
          </ul>
        </div>
        <div class="w3-container w3-margin">
          <h2 id="indicaciones" class="w3-center">Indicaciones</h2>
          <ul class="indicaciones_catedral w3-left">
            <li>Ropa cómoda</li>  
            <li>Cámara de fotos</li>  
          </ul>
        </div>
        <div class="w3-container w3-center">
          <h2 id="ruta" class="w3-center">Ruta</h2>
         <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d255346.48205637504!2d-78.512572!3d-0.220472!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d5998779f94943%3A0xb77bf32fdf8d8f2!2sCatedral%20Metropolitana%20de%20Quito!5e0!3m2!1ses!2sus!4v1695234241074!5m2!1ses!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        
        <h3 class="w3-center" id="basilicaVotoNacional">Tour Basílica del Voto Nacional</h3>
        <h3 id="itinerario" class="w3-center">Itinerario</h3>
        <div id="myTimeline3">
            <div data-vtdate="Inicio">
                <div data-vticon="true">
                    <i class="fa-solid fa-location-dot"></i>
                </div>
              <div class="image-column">
                <img src="../img/Naciones-Unidas.jpg" alt="Quito Tour Bus en Av. Naciones Unidas" class="cover-image">
              </div>
              <div class="content-column basilica_p1">
                <h4>Comienzo del Viaje</h4>
                <p>Iniciamos nuestro emocionante recorrido a bordo del único autobús de dos pisos de Quito. Durante el trayecto, desvelarás detalles y secretos ocultos de nuestra ciudad. Nuestros guías te cautivarán con leyendas e historias de la capital.</p>
              </div>
            </div>
            <div data-vtdate="Primera parada">
              <div data-vticon="true">
                    <i class="fa-solid fa-location-dot"></i>
                </div>
              <div class="image-column">
                <img src="../img/Basilica-Voto.jpg" alt="Plaza Foch" class="cover-image">
              </div>
              <div class="content-column basilica_p2">
                <h4>Exploración de la Basílica del Voto Nacional</h4>
                <p>Nuestra primera parada te llevará a la iglesia neogótica más grande de Quito. Su construcción tomó cien años, y persiste la leyenda de que permanece inconclusa; se dice que el día que se termine, ocurrirá un cataclismo.</p>
              </div>
            </div>
            <div data-vtdate="Segunda parada">
              <div data-vticon="true">
                  <i class="fa-solid fa-location-dot"></i>
                </div>
              <div class="image-column">
                <img src="../img/flor-basilica.jpg" alt="Mercado artesanal La Mariscal entrada principal" class="cover-image">
              </div>
              <div class="content-column basilica_p3">
                <h4>Descubrimiento de Secretos en la Basílica</h4>
                <p>En nuestro recorrido, tendrás la oportunidad de caminar por lugares generalmente cerrados al público y descubrir secretos ocultos de la Basílica del Voto Nacional.<br>
Esta hermosa iglesia alberga miradores únicos. Durante nuestro tour, accederemos a los balcones, donde podrás admirar esculturas de animales ecuatorianos que sustituyen a las tradicionales gárgolas.</p>
              </div>
            </div>
            <div data-vtdate="Tercera parada">
              <div data-vticon="true">
                  <i class="fa-solid fa-location-dot"></i>
                </div>
              <div class="image-column">
                <img src="../img/reloj.jpg" alt="Básilica del Voto Nacional" class="cover-image">
              </div>
              <div class="content-column basilica_p4">
                <h4>Ascenso a las Torres</h4>
                <p>Continuaremos subiendo a la torre del Cóndor y a la torre del reloj. Desde estas alturas, disfrutarás de una vista panorámica de 360 grados de la ciudad de Quito y tendrás la oportunidad de tomar las mejores fotografías de esta impresionante urbe.</p>
              </div>
            </div>
            <div data-vtdate="Cuarta parada">
              <div data-vticon="true">
                  <i class="fa-solid fa-location-dot"></i>
                </div>
              <div class="image-column">
                <img src="../img/catacumbas-basilica.jpg" alt="Iglesia de San Francisco" class="cover-image">
              </div>
              <div class="content-column basilica_p5">
                <h4>Exploración de las Catacumbas</h4>
                <p>Finalmente, accederemos a las catacumbas para admirar esta parte misteriosa de la iglesia, donde se encuentra enterrada parte de la historia de Quito.</p>
              </div>
            </div>
            <div data-vtdate="Fin del Tour">
              <div data-vticon="true">
                <i class="fa-solid fa-location-dot"></i>
              </div>
              <div class="content-column basilica_p6">
                <p>La noche culmina con el deleite de un reconfortante canelazo caliente antes de regresar al punto de partida en el Bulevar Naciones Unidas.</p>
              </div>
            </div>
        </div><br>
        <div class="w3-container w3-margin">
          <h2 id="incluye" class="w3-center">Incluye</h2>
          <ul class="indicaciones_basilica w3-left">
            <li>Ingreso especial a la Basílica del Voto Nacional.</li>
            <li>Acceso a los balcones y torres con vistas panorámicas.</li>
            <li>Exploración del cementerio y la capilla.</li>
            <li>Termina la experiencia con un canelazo caliente.</li>
          </ul>
        </div>
        <div class="w3-container w3-margin">
          <h2 id="indicaciones" class="w3-center">Indicaciones</h2>
          <ul class="indicaciones_basilica w3-left">
            <li>Ropa cómoda</li>  
            <li>Cámara de fotos</li>  
          </ul>
        </div>
        <div class="w3-container w3-center">
          <h2 id="ruta" class="w3-center">Ruta</h2>
         <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d255346.57494888356!2d-78.507652!3d-0.214987!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d59a25c31db3b5%3A0x6c011283454d8bce!2sBas%C3%ADlica%20del%20Voto%20Nacional!5e0!3m2!1ses!2sus!4v1695234269558!5m2!1ses!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </section>
      <div class="reservas w3-hide-small">
        <input type="checkbox" id="Boton-Reservas" >
        <div class="reservas-primero">
          <div id="dias">
            <div class="contenido-reserva-p">
              <p>1 <span class="dias">Días</span>&nbsp;</p>
            </div>
            <div class="icono-reserva">
              <i class="fa-solid fa-calendar-day"></i>
            </div>
          </div>
          
          <div id="alimentacion" class="w3-hide">
            <div class="contenido-reserva-p">
              <p class="noAlimentacion">No Alimentación</p>
            </div>
            <div class="icono-reserva">
              <i class="fas fa-apple-alt"></i>
            </div>
          </div>
           
          <div class="contacto-reserva" id="reserva">
            <a class="reserva-primero reservarToursNocturnos" href="https://api.whatsapp.com/send?phone=593978750531&text=Hola Tours Ecuador 👋%0AEstoy interesado en reservar el tour *ESCRIBIR EL NOMBRE DEL TOUR NOCTURNO (BASILICA, CATEDRAL, SANTA CLARA)* para *ESCRIBIR EL NÚMERO DE PERSONAS* para el *ESCRIBIR LA FECHA DEL VIAJE*%0A%0APor favor si me pueden ayudar con esa reserva. ¡Muchas Gracias!" target="new"> 
            <div class="reserva-primero">
              <div class="contenido-reserva-p">
                <p class="reservar">Reservar</p>
              </div>
              <div class="icono-reserva">
               <i class="fa-brands fa-whatsapp fa-lg"></i>
              </div>
            </div>
               </a>
          </div>
        </div>
        <div class="Boton-mas">
        <label for="Boton-Reservas">+ </label>
        </div>
      </div>
    </div>
    <?php include "footer.php";?>
  </div>
  <script src="../js/galeria.js"></script>
  <script src="../js/destino.js"></script>
  <script src="../js/translate.js"></script>
  <script src="../js/vertical-timeline.min.js"></script>
    <script>
  $('#myTimeline, #myTimeline2, #myTimeline3').verticalTimeline({
    startLeft: false,
    alternate: true,
    animate: "slide",
    arrows: true
});</script>
</body>

</html>