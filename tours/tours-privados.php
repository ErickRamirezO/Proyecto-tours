<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title translate="no">Guianzas y Tours privados</title>
  <meta name="description" content="Lo que nos diferencia de otras agencias es nuestra oferta de Tours Privados. Entendemos que cada viajero es único y tiene diferentes intereses y preferencias. Por eso, hemos creado una variedad de tours exclusivos que se adaptan a los gustos y deseos de nuestros clientes. Ya sea que desees explorar la exuberante selva amazónica o sumergirte en la cultura y la historia de las ciudades coloniales, nuestros tours privados te permitirán disfrutar de una experiencia personalizada y original.">
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
  <style>
    @media only screen and (max-width: 767px){
  .portada-tours{
    height:290px;
    
  }
  .portada-tours p{
    height:200px;
    font-size:40px;
  }
}
  </style>
</head>

<body>
  <div class="principal" translate="no">
    <?php include "sidenav.php";?>
    <?php include "navbar.php";?>
    <div class="portada-tours">
      <div class="portada-tours-primero portada-tours-privado">
        <p class="guianzas" style="text-shadow: 2px 2px 8px black;">Tours privados y guianzas</p>
      </div>
    </div>
    <br><br>
    <div class="w3-row guianza-contenedor">
      <div class="w3-container w3-half">
        <div class="w3-card-4 w3-center" style="width:80%;margin:auto;">
          <header class="w3-container w3-blue">
            <h3 class="guianzasTitulo">Guianzas</h3>
          </header>
          <div class="w3-container">
            <p class="w3-justify w3-padding-16 guianzasTexto">En Tours  Ecuador, creemos que la guianza es un arte, una oportunidad para transformar un simple viaje en una experiencia enriquecedora. Nuestros guías turísticos son embajadores apasionados y conocedores de los destinos que exploramos. Con una pasión por la historia, la cultura y la autenticidad, nuestros guías están aquí para revelar los secretos de cada lugar que visitas y para llevarte a un viaje que va más allá de lo ordinario.</p>
          </div>
        </div>
      </div>
      <div class="w3-half w3-container w3-center">
          <img src="../img/guianza.jpg" style="width:50%;border-radius:8px!important;">
      </div>
    </div>
    <div class="w3-row guianza-contenedor">
        <div class="w3-half w3-container w3-center">
          <img src="../img/tour-privado.jpg" style="width:50%;border-radius:8px!important;">
        </div>
        <div class="w3-container w3-center w3-half">
          <div class="w3-card-4 w3-center" style="width:80%;margin:auto;">
            <header class="w3-container w3-blue">
              <h3 class="toursTitulo">Tours Privados</h3>
            </header>
            <div class="w3-container">
              <p class="w3-justify w3-padding-16 toursTexto">En Tours Ecuador, creemos que los viajes son más significativos cuando se adaptan a tus preferencias personales. Es por eso que ofrecemos una variedad de Tours Privados diseñados exclusivamente para ti y tus seres queridos. Ya sea que estés buscando una escapada romántica, unas vacaciones en familia o una aventura en solitario, nuestros Tours Privados son la respuesta perfecta.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include "footer.php";?>
  </div>
  <script src="../js/translate.js"></script>
</body>

</html>