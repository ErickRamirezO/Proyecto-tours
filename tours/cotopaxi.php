<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title translate="no">Cotopaxi - Tours Ecuador</title>
  <meta name="description" content="Descubre la grandeza del volcán Cotopaxi en Ecuador. Desde su imponente cima hasta su majestuoso paisaje, esta aventura te espera. ¡Reserva tu experiencia en Cotopaxi ahora!">
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
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <!--fancybox-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <div class="principal">
    <?php include "sidenav.php";?>
    <?php include "navbar.php";?>
    <div class="titulo_destino">
      <img src="../img/avion.png" class="imagen_a" style="transform: scaleX(-1);">
      <h1 class="titulo volcan" translate="no">Volcán Cotopaxi &nbsp;</h1>
    </div>
    <div class="imagenes-portada">
      <div class="imagenes-portada-primero">
        <a href="../img/cotopaxiP0.jpg" data-fancybox="gallery" data-caption="Volcán de Cotopaxi">
          <img src="../img/cotopaxiP0.jpg" alt="Volcán de Cotopaxi" class="w3-hover-opacity">
        </a>
      </div>
      <div class="imagenes-portada-segunda">
        <div class="portada-pri">
          <div class="portada-primera1">
            <a href="../img/cotopaxiP1.jpg" data-fancybox="gallery" data-caption="Caminata en el Volcán Cotopaxi">
              <img src="../img/cotopaxiP1.jpg" alt="Caminata en el Volcán Cotopaxi" class="w3-hover-opacity">
            </a>
          </div>
          <div class="portada-primera1">
            <a href="../img/cotopaxiP2.jpeg" data-fancybox="gallery" data-caption="Muñeco de nieve">
              <img src="../img/cotopaxiP2.jpeg" alt="Muñeco de nieve" class="w3-hover-opacity">
            </a>
          </div>
        </div>
        <div class="portada-pri">
          <div class="portada-primera1">
            <a href="../img/cotopaxiP3.jpeg" data-fancybox="gallery" data-caption="Laguna de Yambo">
              <img src="../img/cotopaxiP3.jpeg" alt="Laguna de Yambo" class="w3-hover-opacity">
            </a>
          </div>
          <div class="portada-primera1">
            <a href="../img/cotopaxiP4.jpeg" data-fancybox="gallery" data-caption="Vista al volcán Cotopaxi">
              <img src="../img/cotopaxiP4.jpeg" alt="Vista al volcán Cotopaxi" class="w3-hover-opacity">
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="contenedor-informacion" translate="no">
      <div class="table-of-contents-sticky w3-hide-small">
        <div class="table-of-contents">
          <h3>Tour Cotopaxi</h3>
          <ul>
            <li><a href="#itinerario">Itinerario</a></li>
            <li><a href="#incluye">Incluye</a></li>
            <li><a href="#noIncluye">No incluye</a></li>
            <li><a href="#indicaciones">Indicaciones</a></li>
            <li><a href="#ubicacion">Ubicación</a></li>
          </ul>
        </div>
      </div>
      <section class="linea-tiempo">
        <h3 id="itinerario" class="w3-center">Itinerario</h3>
        <div id="myTimeline">
            <div data-vtdate="Primera parada">
                <div data-vticon="true">
                    <i class="fa-solid fa-location-dot"></i>
                </div>
              <div class="image-column">
                <img src="../img/machachi.jpg" alt="Machachi" class="cover-image">
              </div>
              <div class="content-column cotopaxi_p1">
                <h3>Parada en Machachi</h3>
                <p>Pausa para adquirir un aperitivo, hacer uso de las instalaciones sanitarias y acceder a cajeros automáticos si es necesario.</p>
              </div>
            </div>
            <div data-vtdate="Segunda parada">
              <div data-vticon="true">
                    <i class="fa-solid fa-location-dot"></i>
                </div>
              <div class="image-column">
                <img src="../img/parqueN.jpg" alt="Parque Nacional Cotopaxi" class="cover-image">
              </div>
              <div class="content-column cotopaxi_p2">
                <h3>Parque Nacional Cotopaxi</h3>
                <p>En el límite de la provincia de Pichincha se halla el Parque Nacional Cotopaxi, una reserva ecológica que fusiona la belleza del páramo andino, la tierra de origen volcánico y las lagunas generadas por los picos nevados. </p>
              </div>
            </div>
            <div data-vtdate="Tercera parada">
              <div data-vticon="true">
                    <i class="fas fa-water"></i>
                </div>
              <div class="image-column">
                <img src="../img/lagunadeL.jpg" alt="Laguna de Limpiopungo en Cotopaxi" class="cover-image">
              </div>
              <div class="content-column cotopaxi_p3">
                <h3>Laguna de Limpiopungo </h3>
                <p>Participa en un recorrido a pie dirigido a lo largo de la orilla de una laguna de origen glaciar. Durante este paseo, tendrás la oportunidad de avistar diversas especies de aves y plantas autóctonas que habitan en las inmediaciones de la laguna.</p> 
              </div>
            </div>
            <div data-vtdate="Cuarta parada">
              <div data-vticon="true">
                    <i class="fas fa-camera"></i>
                </div>
              <div class="image-column">
                <img src="../img/centroI.jpg" alt="Centro de Interpretaciones Mariscal Sucre en el Cotopaxi" class="cover-image">
              </div>
              <div class="content-column cotopaxi_p4">
                <h3>Centro de Interpretaciones Mariscal Sucre</h3>
                <p>Todo el contenido informativo acerca del Parque Nacional Cotopaxi se encuentra accesible en el Centro de Interpretación, ampliamente reconocido como el Museo del Parque. Este espacio cuenta con áreas de exhibición, una tienda de souvenirs y un café. </p>   
              </div>
            </div>
            <div data-vtdate="Quinta parada">
              <div data-vticon="true">
                    <i class="fa-solid fa-person-hiking"></i>
                </div>
              <div class="image-column">
                <img src="../img/refugioJR.jpg" alt="Refugio José Rivas en el Cotopaxi" class="cover-image">
              </div>
              <div class="content-column cotopaxi_p5">
                <h3>Refugio José Rivas</h3>
                <p>Procederemos al ascenso del
Refugio José Rivas del volcán Cotopaxi, ubicado a 4897 m s. n. m. sobre el nivel del mar, en el cual tendrás una espectacular vista del nevado y sus alrededores. </p>
              </div>
            </div>
            <div data-vtdate="Sexta parada">
              <div data-vticon="true">
                    <i class="fas fa-drumstick-bite"></i>
                </div>
            
              <div class="content-column cotopaxi_p6">
                <h3>Almuerzo</h3>
                <p>Haremos una parada para degustar los platos característicos de la región, donde te sugerimos probar el caldo de gallina, el locro y el borrego asado. Además, hay alternativas vegetarianas disponibles. (El almuerzo no está incluido).</p> 
              </div>
            </div>
            <div data-vtdate="Fin del Tour">
              <div data-vticon="true">
                <i class="fa-solid fa-bus"></i>
              </div>
              <div class="content-column">
                <p class="cotopaxi_p7">Disfrute de un regreso cómodo a Quito, con el servicio de desembarque en su hotel incluido.</p>     
              </div>
            </div>
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
          <div id="noches">
            <div class="contenido-reserva-p">
              <p>0 <span class="noches">Noches</span> &nbsp;</p>
            </div>
            <div class="icono-reserva">
              <i class="fas fa-moon"></i>
            </div>
          </div>
          <div id="destino">
            <div class="contenido-reserva-p">
              <p>6 <span class="destinos">Destinos</span> &nbsp;</p>
            </div>
            <div class="icono-reserva">
              <i class="fa-solid fa-bus"></i>
            </div>
          </div>
          <div id="alimentacion">
            <div class="contenido-reserva-p">
              <p class="alimentacion">Alimentación</p>
            </div>
            <div class="icono-reserva">
              <i class="fas fa-apple-alt"></i>
            </div>
          </div>
           
          <div class="contacto-reserva" id="reserva">
            <a class="reserva-primero reservarCotopaxi" href="https://api.whatsapp.com/send?phone=593978750531&text=Hola Tours Ecuador 👋%0AEstoy interesado en reservar el tour Cotopaxi para *ESCRIBIR EL NÚMERO DE PERSONAS* para el *ESCRIBIR LA FECHA DEL VIAJE*%0A%0APor favor si me pueden ayudar con esa reserva. ¡Muchas Gracias!" target="new"> 
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
          
          <div class="contacto-reserva" id="privado">
             <a class="reserva-primero cotizarCotopaxi" href="https://api.whatsapp.com/send?phone=593978750531&text=Hola Tours Ecuador 👋%0A¿Podrían proporcionarme más información sobre los detalles del tour Cotopaxi, el costo y lo que está incluido?%0A%0AEspero su pronta respuesta. ¡Gracias!" target="new"> 
            <div class="reserva-primero">
              <div class="contenido-reserva-p">
                <p class="cotizar-tour">Cotizar tour privado</p>
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
    <div class="descripcion w3-row" translate="no">
      <h2 id="incluye">Incluye</h2>
      <ul class="incluye_cotopaxi">
        <li>Transporte de turismo full equipo</li> 
        <li>Seguro de viajes</li>  
        <li>Guía todo el trayecto</li>
        <li>Ingreso Parque Nacional Cotopaxi</li>
        <li>Centro de Interpreatación</li> 
        <li>Laguna de Limpiopungo</li>  
        <li>Primer Refugio</li>
      </ul>
     
    </div>
    <div class="descripcion w3-row" translate="no">
      <h2 id="noIncluye">No incluye</h2>
      <ul class="no_incluye_cotopaxi">
        <li>Actividades extras</li>      
        <li>Gastos personales del turista</li>
        <li>Desayuno y almuerzo</li>
      </ul>
      
    </div>
    <div class="descripcion w3-row" translate="no">
      <h2 id="indicaciones">Indicaciones</h2>
      <ul class="indicaciones_cotopaxi">
        <li>Ropa cómoda y abrigada  </li>  
        <li>Gorra y gorro de lana </li> 
        <li>Bloqueador </li> 
        <li>Zapatillas de buen labrado  </li> 
        <li>Cámara de fotos </li>  
        <li>Guantes</li>
      </ul>
      
    </div>
    <div class="ubicacion" translate="no">
      <h2 id="ubicacion">Ubicación</h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15958.136949172831!2d-78.44748987074216!3d-0.683732632625389!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d44e5dbbd52ce7%3A0x61297ba77301c1e8!2sVolc%C3%A1n%20Cotopaxi!5e0!3m2!1ses!2sec!4v1694113862711!5m2!1ses!2sec" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <?php include "footer.php";?>
  </div>
  <script src="../js/galeria.js"></script>
  <script src="../js/destino.js"></script>
  <script src="../js/translate.js"></script>
    <script src="../js/vertical-timeline.min.js"></script>
    <script>
  $('#myTimeline').verticalTimeline({
    startLeft: false,
    alternate: true,
    animate: "slide",
    arrows: true
});</script>
</body>

</html>