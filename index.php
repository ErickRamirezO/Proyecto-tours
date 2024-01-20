<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tours Ecuador</title>
  <meta name="description" content="Tours Ecuador es una agencia de viajes en Ecuador, ofreciendo a los turistas la oportunidad de descubrir los destinos turísticos más destacados del país. Nuestro compromiso es brindar experiencias inolvidables a nuestros clientes, asegurándonos de que cada detalle esté cuidadosamente planificado y adaptado a sus necesidades.
">
  <link rel="icon" href="../img/iconToursEcuador.png" type="image/png" sizes="32x32"/>
  <link rel="stylesheet" href="css/estilo_index.css" type="text/css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
"></script>
  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/themes/splide-skyblue.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="
https://cdn.jsdelivr.net/npm/@ciar4n/izmir@1.0.1/izmir.min.css
" rel="stylesheet">
  <script src="
https://cdn.jsdelivr.net/npm/animejs@3.2.1/lib/anime.min.js
"></script>
</head>

<body>
  <div class="principal">
    <!-- Messenger Plugin de chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin de chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "104916481070349");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v18.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="index.php"><p class="inicio" translate="no">Inicio</p></a>
      <a onclick="toggleTours()"><p translate="no">Tours &nbsp;<i class="fa fa-caret-down" style="display: none;"></i><i class="fa fa-caret-up"></i></p></a>
      <div id="toursDropdown">
        <a href="tours/todos-los-tours.php"><p class="todo-tours todosLosTours" translate="no">Todos los tours</p></a>
        <a href="tours/tours-privados.php"><p class="privado-tours guianzaToursPrivados" translate="no">Tours privados y Guianzas</p></a>
      </div>
      <a href="tours/transfers.php"><p class="transfers" translate="no">Transfers</p></a>
      <a href="tours/acerca.php"><p class="acercade" translate="no">Acerca de nosotros</p></a>
      <a href="tours/contacto.php"><p class="contacto" translate="no">Contacto</p></a>
      <hr>
      <div class="w3-center">
        <button id="btnEspañol" class="w3-btn w3-border w3-border-blue w3-hover-blue" translate="no">Español</button>
        <button id="btnEnglish" class="w3-btn w3-border w3-border-red w3-hover-red" translate="no">English</button>
      </div>
    </div>
    <div id="overlay"></div>
    <div class="cabecera">
      <div class="logo">
        <a href="index.php">
          <img src="img/logoToursEcuador.png"></a>
      </div>
      <div class="menu">
        <div id="inicio">
          <a href="index.php"> <p translate="no"> Inicio</p></a>
        </div>
        <div class="tours-m" id="tours">
          <p translate="no">Tours <i class="fa-solid fa-chevron-up"></i></p>
          <div class="tours-destinos-nav">
            <a href="tours/todos-los-tours.php"><p class="todo-tours todosLosTours" translate="no">Todos los tours</p></a>
            <a href="tours/tours-privados.php"><p class="privado-tours guianzaToursPrivados" translate="no">Tours privados y Guianzas</p></a>
          </div>
        </div>
        <div id="transfers">
          <a href="tours/transfers.php"><p translate="no">Transfers</p></a>
        </div>
        <div id="acerca">
          <a href="tours/acerca.php"><p translate="no">Acerca de nosotros</p></a>
        </div>
        <div id="contacto">
          <a href="tours/contacto.php"><p translate="no">Contacto</p></a>
        </div>
        <div id="traduccion">
          <label class="switch">
            <input type="checkbox" id="language-switch">
            <span class="slider"></span>
            <span class="language-text">EN</span>
            <span class="language-text">ES</span>
          </label>
        </div>
        <div class="hamburguer-icon">
          <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
        </div>
      </div>
</div>
    <div class="portada">
      <div class="encabezado">
        <img src="img/quilotoa_principal.jpeg" alt="Fondo_quilotoa" style="filter: brightness(50%);">
        <div class="text-overlay frase_tours_ecuador w3-mobile w3-center" translate="no">
          ECUADOR PAÍS DE LOS CUATRO MUNDOS
        </div>
      </div>
      <div class="indexportada">
        <div id="primera-portada" class="w3-hide-small w3-hide-medium">
          <figure class="c4-izmir c4-gradient-bottom c4-image-zoom-in">
            <img src="img/viaja_img.jpg" alt="Pailón del Diablo">
            <figcaption class="c4-layout-bottom-center">
              <div class="c4-fade-up viaja">
                <h3 translate="no">Viaja</h3>
              </div>
            </figcaption>
          </figure>
        </div>
        <div id="segunda-portada">
          <figure class="c4-izmir c4-gradient-bottom c4-image-zoom-in">
            <img src="img/explora_img.jpg" alt="Collage del Cotopaxi, piqueros de patas azules, delfín rosado y focas">
            <figcaption class="c4-layout-bottom-center">
              <div class="c4-fade-up explora">
                <h3 translate="no">
                  Explora
                </h3>
              </div>
            </figcaption>
          </figure>
        </div>
        <div id="tercera-portada" class="w3-hide-small w3-hide-medium">
          <figure class="c4-izmir c4-gradient-bottom c4-image-zoom-in">
            <img src="img/quito_principal.jpeg" alt="Virgen del Panecillo">
            <figcaption class="c4-layout-bottom-center">
              <div class="c4-fade-up descubre">
                <h3 translate="no">
                  Descubre
                </h3>
              </div>
            </figcaption>
          </figure>
        </div>
      </div>
    </div>

    <div id="tours_populares">
      <section class="splide" aria-label="Splide Basic HTML Example">
        <h2 style="text-align:center;font-weight:bold;" class="toursPopulares" translate="no">Tours populares</h2>
        <div class="splide__track">
          <ul class="splide__list">
            <li class="splide__slide ">
              <div class="tours_populares_item">
                <div class="tours_populares_imagen">
                  <a href="tours/baños.php"> <img src="img/baños_1.jpeg"><a>
                </div>
                <div class="tours_populares_info">
                  <div class="tours_populares_info_titulo">
                    <a href="tours/baños.php"><p translate="no">Baños</p> </a>
                  </div>
                  <div class="tours_populares_info_dis_y_pais">
                    <div>
                      <button class="disponibilidad" translate="no">Disponible</button>
                    </div>
                    <div>
                      <p translate="no"><i class="fa-solid fa-location-dot"></i> Baños De Agua Santa</p>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="splide__slide">
              <div class="tours_populares_item">
                <div class="tours_populares_imagen">
                 <a href="tours/cotopaxi.php"> <img src="img/cotopaxiP.jpg"></a>
                </div>
                <div class="tours_populares_info">
                  <div class="tours_populares_info_titulo">
                 <a href="tours/cotopaxi.php">   <p class="cotopaxi" translate="no">Volcán Cotopaxi</p></a>
                  </div>
                  <div class="tours_populares_info_dis_y_pais">
                    <div>
                      <button class="disponibilidad" translate="no">Disponible</button>
                    </div>
                    <div>
                      <p translate="no"><i class="fa-solid fa-location-dot"></i> Latacunga</p>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="splide__slide">
              <div class="tours_populares_item">
                <div class="tours_populares_imagen">
                  <a href="tours/quilotoa.php">  <img src="img/QuilotoaP.jpg"></a>
                </div>
                <div class="tours_populares_info">
                  <div class="tours_populares_info_titulo">
                    <a href="tours/quilotoa.php">  <p class="laguna" translate="no">Laguna del Quilotoa</p></a>
                  </div>
                  <div class="tours_populares_info_dis_y_pais">
                    <div>
                      <button class="disponibilidad" translate="no">Disponible</button>
                    </div>
                    <div>
                      <p translate="no"><i class="fa-solid fa-location-dot"></i> Latacunga</p>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="splide__slide">
              <div class="tours_populares_item">
                <div class="tours_populares_imagen">
                <a href="tours/otavalo.php">  <img src="img/otavaloP.jpg"></a>
                </div>
                <div class="tours_populares_info">
                  <div class="tours_populares_info_titulo">
                   <a href="tours/otavalo.php"> <p translate="no">Otavalo</p></a>
                  </div>
                  <div class="tours_populares_info_dis_y_pais">
                    <div>
                      <button class="disponibilidad" translate="no">Disponible</button>
                    </div>
                    <div>
                      <p translate="no"><i class="fa-solid fa-location-dot"></i> Otavalo</p>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="splide__slide">
              <div class="tours_populares_item">
                <div class="tours_populares_imagen">
                 <a href="tours/papallacta.php"> <img src="img/papallactaP.jpg"></a>
                </div>
                <div class="tours_populares_info">
                  <div class="tours_populares_info_titulo">
                    <a href="tours/papallacta.php"><p translate="no">Papallacta</p></a>
                  </div>
                  <div class="tours_populares_info_dis_y_pais">
                    <div>
                      <button class="disponibilidad" translate="no">Disponible</button>
                    </div>
                    <div>
                      <p translate="no"><i class="fa-solid fa-location-dot"></i> Quijos</p>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="splide__slide">
              <div class="tours_populares_item">
                <div class="tours_populares_imagen">
                  <a href="tours/mindo.php"><img src="img/mindoP.jpg"></a>
                </div>
                <div class="tours_populares_info">
                  <div class="tours_populares_info_titulo">
                    <a href="tours/mindo.php"><p translate="no">Mindo</p></a>
                  </div>
                  <div class="tours_populares_info_dis_y_pais">
                    <div>
                      <button class="disponibilidad" translate="no">Disponible</button>
                    </div>
                    <div>
                      <p translate="no"><i class="fa-solid fa-location-dot"></i> San Miguel de los Bancos</p>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
     <a href="tours/todos-los-tours.php" class="tours-b"> <button class="tours_populares_button verTodosLosTours" translate="no">Ver todos los tours</button>     </a>
    </div><br>

    <footer>
  <div class="w3-padding-16 w3-center w3-row">
    <div class="w3-third w3-center logo-footer">
      <img src="img/logoToursEcuador.png">
      <p style="font-weight: bold;" class="frase_tours_ecuador_footer">“Vive y viaja mientras puedas”</p>
    </div>
    <div align="center" class="w3-third w3-center w3-padding-16">
      <p style="font-weight:bold;" class="siguenos" translate="no">SÍGUENOS</p>
      <div class="redes_sociales_footer ">
        <div>
          <a href="https://instagram.com/tours_ecuador?igshid=MWZjMTM2ODFkZg==" target="new"><i class="fa-brands fa-instagram fa-lg"></i> </a>
        </div>
        <div>
          <a href="https://www.tiktok.com/@tours_ecuador" target="new"> <i class="fa-brands fa-tiktok fa-lg"></i></a>
        </div>
        <div>
          <a href="https://www.facebook.com/profile.php?id=100063757313937" target="new"> <i class="fa-brands fa-facebook-f fa-lg"></i></a>
        </div>
        <div>
         <a href="https://api.whatsapp.com/send?phone=593978750531" target="new">  <i class="fa-brands fa-whatsapp fa-lg"></i></a>
        </div>
      </div>
      <div class="ubicacion_footer w3-mobile w3-center">
        <i class="fa-solid fa-location-dot"></i>
        <p class="ubicacion_calle" translate="no">Calle Venezuela y Espejo</p>
      </div>
    </div>
    <div align="center" class="w3-third footer_enlaces w3-padding-16">
      <a href="tours/todos-los-tours.php"><b class="todosLosTours" translate="no">Todos los tours</b></a>
      <a href="tours/acerca.php"><b class="acercade" translate="no">Acerca de nosotros</b></a>
      <a href="tours/contacto.php"><b class="contacto" translate="no">Contáctanos</b></a>
    </div>
  </div>
  <div class="copyright w3-center">
    <p translate="no">© Copyright Tours Ecuador ® All rights reserved. Quito, Ecuador.          </p>
  </div>
</footer>
  </div>
  <script src="js/translate.js"></script>
  <script src="js/slider.js"></script>
  <script src="js/index.js"></script>
  <script src="js/sidenav.js"></script>
</body>

</html>