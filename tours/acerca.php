<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title translate="no">Acerca de nosotros</title>
  <meta name="description" content="Descubre la misión de Tour Ecuador S.A.S, dedicada a brindar servicios de viajes que buscan la plena satisfacción del cliente y la visión de convertirse en una de las mejores agencias de viajes en Ecuador. Descubre lo que nuestros viajeros dicen sobre su experiencia con nosotros.">
  <link rel="icon" href="../img/iconToursEcuador.png" type="image/png" sizes="32x32"/>
  <link rel="stylesheet" href="../css/estilo_index.css" type="text/css">

  <link rel="stylesheet" href="../css/estilo_acerca.css" type="text/css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"
    integrity="sha512-z4OUqw38qNLpn1libAN9BsoDx6nbNFio5lA6CuTp9NlK83b89hgyCVq+N5FdBJptINztxn1Z3SaKSKUS5UP60Q=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
    integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- SweetAlert 2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.2/dist/sweetalert2.min.js"></script>
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.2/dist/sweetalert2.min.css"
  />
  <script src="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
"></script>
  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/themes/splide-skyblue.min.css">
<script src="
https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js
"></script>
  <style>
    
    .checked {
      color: orange;
    }
  </style>
</head>

<body>
  <div class="principal">
    <?php include "sidenav.php";?>
    <?php include "navbar.php";?>
    <div class="portada-tours">
      <div class="portada-tours-primero">
        <p class="acerca" translate="no">Acerca de nosotros</p>
      </div>
    </div>
    <br><br>

    <div class="w3-center w3-row w3-card-2 quienesSomosContenedor">
      <h3 class="quienesSomos" translate="no">¿Quienes somos?</h3>
      <p class="quienesSomosTexto" translate="no">Somos una agencia de viajes dedicada a la venta de paquetes turísticos destinados a qué el turista disfrute de las maravillas que alberga el país de los cuatro mundos, brindando un servicio eficaz, único , estratégico y veraz con guías certificados en la rama del turismo para la generación de experiencias inolvidables en cada uno de los viajes . Velamos por  la seguridad, confort  que se brinda en cada salida.</p>
    </div>
    <div class="w3-row">

  
      <div class="w3-half mision_vision">
        <h3 class="w3-center mision" translate="no">Misión</h3>
        <p class="w3-justify misionTexto" translate="no">Tour Ecuador S.A.S, es una compañía de Agencia de Viajes, dedicada principalmente a vender servicios de viajes organizados de transporte y de alojamiento al por mayor y menor al público en general y a clientes comerciales. 
Su misión es brindar el mejor servicio con el fin de lograr la plena satisfacción del cliente con nuestros paquetes turísticos a precios accesibles para que las familias disfruten de conocer las maravillas más importantes de cada ciudad del Ecuador. 
El propósito es ser líderes en el servicio de agencia de viajes y posicionarnos a nivel nacional brindando calidad, eficiencia y responsabilidad en todos los paquetes contratados por nuestros clientes. Dando la creación de nuevas fuentes de trabajo en el sector turístico y de esta manera concretar alianzas y consolidar  nuevos productos dentro de la rama.
</p>
      </div>
      <div class="w3-half mision_vision">
        <h3 class="w3-center vision" translate="no">Visión</h3>
        <p class="w3-justify visionTexto" translate="no">Tour Ecuador S.A.S.,  en los próximos 5 años mediante la prestación de un servicio de agencia de viajes se apoyará en tecnología adecuada, un capital humano comprometido y con vocación de servicio, lo cual nos ayudara a posicionarnos como una de las empresas más competitiva en paquetes turísticos, reconocida por trabajar bajo principios de responsabilidad social. 
Se consolidará como una de las mejores agencias de viajes del Ecuador brindando un servicio de calidad, contando con un equipo de trabajo que se concentrara en la creación, promoción y capacitación, dando como resultado paquetes turísticos que no se han ofrecidos por ninguna otra agencia a nivel nacional. 
</p>
      </div>
    </div>
    <div class="w3-center testimonios_contenedor">
      <h2 class="testimonios" translate="no">Testimonios</h2>
        <div id="testimonios-slider" class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="w3-panel w3-padding w3-margin w3-card-4 w3-light-grey">
                            <p class="w3-large w3-serif">
                                <i class="fa fa-quote-right w3-xxlarge w3-text-gray"></i><br>
                                <p translate="no">Ire Ale Mui</p>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <p class="t_Ire_Ale_Mui" translate="no">Recomiendo totalmente esta agencia de viajes, desde quien te atiende el teléfono, quien te atiende en la agencia la Srta. Cintia da un servicio muy amable. La Guía del tour Srta Camila muy preocupada y atenta con el grupo todo el tiempo, el chofer Sr Diego también. Y la experiencia del tour fue mejor de lo esperado. Volveré pronto a tomar otro tour con ustedes. ¡Qué buena experiencia! Gracias</p>
                            </p>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="w3-panel w3-padding w3-margin w3-card-4 w3-light-grey">
                            <p class="w3-large w3-serif">
                                <i class="fa fa-quote-right w3-xxlarge w3-text-gray"></i><br>
                                <p translate="no">Kleber Mosquera</p>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <p class="t_Kleber_Mosquera" translate="no">Super bien la agencia me trataron muy bien, súper las guías, el transporte igual impecable los recomiendo mucho.</p>
                            </p>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="w3-panel w3-padding w3-margin w3-card-4 w3-light-grey">
                            <p class="w3-large w3-serif">
                                <i class="fa fa-quote-right w3-xxlarge w3-text-gray"></i><br>
                                <p translate="no">Pauline Schorter</p>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <p class="t_Pauline_Schorter" translate="no">We did a 3 days tour to Cotopaxi, Quilotoa and Baños. It was a great experience, thanks to Cynthia and Alejandro we were able to see so many things and learn a lot about Ecuador. This agency is great if you want to discover Ecuador and the guides are amazing.</p>
                            </p>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="w3-panel w3-padding w3-margin w3-card-4 w3-light-grey">
                            <p class="w3-large w3-serif">
                                <i class="fa fa-quote-right w3-xxlarge w3-text-gray"></i><br>
                                <p translate="no">Jean-Baptiste Blaise</p>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <p class="t_Jean-Baptiste_Blaise" translate="no">Great experience of three days thought equator!  Cotopaxi, Quilotoa and Baños
                                Cynthia and Alejandro were very professional and friendly. They are amazing guides, I strongly recommend them!</p>
                            </p>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="w3-panel w3-padding w3-margin w3-card-4 w3-light-grey">
                            <p class="w3-large w3-serif">
                                <i class="fa fa-quote-right w3-xxlarge w3-text-gray"></i><br>
                                <p translate="no">Mathieu Mokrzycki</p>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <p class="t_Mathieu_Mokrzycki" translate="no">Gran recorrido de tres días. Increíbles compañeros. Gran libertad en las actividades.
                                Consejo superior.</p>
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <?php include "footer.php";?>
  </div>
  <script src="../js/acerca.js"></script>
  <script src="../js/translate.js"></script>
</body>

</html>