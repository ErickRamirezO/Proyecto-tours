<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title translate="no">Contacto - Tours Ecuador</title>
  <meta name="description" content="Tours Ecuador es tu puerta de entrada a aventuras increíbles. Aquí, puedes conectarte con nosotros de manera sencilla y rápida. ¿Tienes preguntas sobre nuestros emocionantes tours o necesitas información adicional? Estamos a tu disposición. Encuentra nuestros datos de contacto, un práctico formulario en línea y hasta un mapa que te guiará directamente a nuestro punto de información turística. Estamos aquí para hacer que tu próxima experiencia en Ecuador sea inolvidable, ¡así que no dudes en ponerte en contacto con nosotros!">
  <link rel="icon" href="../img/iconToursEcuador.png" type="image/png" sizes="32x32"/>
  <link rel="stylesheet" href="../css/estilo_index.css" type="text/css">

  <link rel="stylesheet" href="../css/estilo_contacto.css" type="text/css">
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
</head>

<body>
  <div class="principal">
    <?php include "sidenav.php";?>
    <?php include "navbar.php";?>
    <div class="portada-tours">
      <div class="portada-tours-primero" translate="no">
        <p class="contactanos">Contáctanos</p>
      </div>
    </div>
    <br><br>
    <div class="w3-row contacto_contenedor" translate="no">
      <div class="w3-half w3-container">
        <h4 class="direccion"><b><i class="fa-solid fa-location-dot"></i>&nbsp; Dirección</b></h4>
        <p class="direccionTexto">Calle Venezuela y Espejo, frente al Palacio de la Presidencia en el punto de Información Turística "El Quinde".</p>
        <div class="w3-center">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.788732555902!2d-78.51442112587328!3d-0.22065693538804504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d599b58c9b5595%3A0xdd21c90083fe9f79!2sTours%20Ecuador%20Travel%20Agency!5e0!3m2!1ses-419!2sec!4v1694053254735!5m2!1ses-419!2sec" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
        <h4 class="telefonos"><b><i class="fa-solid fa-phone"></i>&nbsp; Teléfonos</b></h4>
        <a href="https://api.whatsapp.com/send?phone=593978622270" target="new" class="w3-button w3-round-large w3-green w3-hover-teal"><i class="fab fa-whatsapp"></i>&nbsp; Chat 1</a>
        <a href="https://api.whatsapp.com/send?phone=593978750531" target="new" class="w3-button w3-round-large w3-green w3-hover-teal"><i class="fab fa-whatsapp"></i>&nbsp; Chat 2 </a>
        <h4 class="correoElectronico"><b><i class="fa-solid fa-envelope"></i>&nbsp; Correo electrónico</b></h4>
        <p>tours_ecuador@hotmail.com</p>
      </div>
      <div class="w3-half w3-container formulario-container">
        <form id="formularioContacto" method="post">
          <h4 class="formularioDeContacto"><b>Formulario de contacto</b></h4>
        <div class="w3-row-padding">
            <div class="w3-half">
                <label for="nombre">Nombre y Apellido</label>
                <input type="text" id="nombre" name="nombre" placeholder="Juan Perez">
            </div>
            <div class="w3-half">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="micorreo@ejemplo.com">
            </div>
        </div>

        <div class="w3-row-padding">
          <div class="w3-half">
                <label for="codigoPais">Código de País</label>
                <select id="codigoPais" name="codigoPais">
                  <option value="+93">Afganistán (+93)</option>
                  <option value="+355">Albania (+355)</option>
                  <option value="+49">Alemania (+49)</option>
                  <option value="+376">Andorra (+376)</option>
                  <option value="+244">Angola (+244)</option>
                  <option value="+1">Antigua y Barbuda (+1)</option>
                  <option value="+966">Arabia Saudita (+966)</option>
                  <option value="+213">Argelia (+213)</option>
                  <option value="+54">Argentina (+54)</option>
                  <option value="+374">Armenia (+374)</option>
                  <option value="+61">Australia (+61)</option>
                  <option value="+43">Austria (+43)</option>
                  <option value="+994">Azerbaiyán (+994)</option>
                  <option value="+1">Bahamas (+1)</option>
                  <option value="+880">Bangladés (+880)</option>
                  <option value="+1">Barbados (+1)</option>
                  <option value="+973">Baréin (+973)</option>
                  <option value="+32">Bélgica (+32)</option>
                  <option value="+501">Belice (+501)</option>
                  <option value="+229">Benín (+229)</option>
                  <option value="+375">Bielorrusia (+375)</option>
                  <option value="+95">Birmania/Myanmar (+95)</option>
                  <option value="+591">Bolivia (+591)</option>
                  <option value="+387">Bosnia y Herzegovina (+387)</option>
                  <option value="+267">Botsuana (+267)</option>
                  <option value="+55">Brasil (+55)</option>
                  <option value="+673">Brunéi (+673)</option>
                  <option value="+359">Bulgaria (+359)</option>
                  <option value="+226">Burkina Faso (+226)</option>
                  <option value="+257">Burundi (+257)</option>
                  <option value="+975">Bután (+975)</option>
                  <option value="+238">Cabo Verde (+238)</option>
                  <option value="+855">Camboya (+855)</option>
                  <option value="+237">Camerún (+237)</option>
                  <option value="+1">Canadá (+1)</option>
                  <option value="+974">Catar (+974)</option>
                  <option value="+235">Chad (+235)</option>
                  <option value="+56">Chile (+56)</option>
                  <option value="+86">China (+86)</option>
                  <option value="+357">Chipre (+357)</option>
                  <option value="+39">Ciudad del Vaticano (+39)</option>
                  <option value="+57">Colombia (+57)</option>
                  <option value="+269">Comoras (+269)</option>
                  <option value="+850">Corea del Norte (+850)</option>
                  <option value="+82">Corea del Sur (+82)</option>
                  <option value="+225">Costa de Marfil (+225)</option>
                  <option value="+506">Costa Rica (+506)</option>
                  <option value="+385">Croacia (+385)</option>
                  <option value="+53">Cuba (+53)</option>
                  <option value="+45">Dinamarca (+45)</option>
                  <option value="+1">Dominica (+1)</option>
                  <option value="+593">Ecuador (+593)</option>
                  <option value="+20">Egipto (+20)</option>
                  <option value="+503">El Salvador (+503)</option>
                  <option value="+971">Emiratos Árabes Unidos (+971)</option>
                  <option value="+291">Eritrea (+291)</option>
                  <option value="+421">Eslovaquia (+421)</option>
                  <option value="+386">Eslovenia (+386)</option>
                  <option value="+34">España (+34)</option>
                  <option value="+1">Estados Unidos (+1)</option>
                  <option value="+372">Estonia (+372)</option>
                  <option value="+251">Etiopía (+251)</option>
                  <option value="+63">Filipinas (+63)</option>
                  <option value="+358">Finlandia (+358)</option>
                  <option value="+679">Fiyi (+679)</option>
                  <option value="+33">Francia (+33)</option>
                  <option value="+241">Gabón (+241)</option>
                  <option value="+220">Gambia (+220)</option>
                  <option value="+995">Georgia (+995)</option>
                  <option value="+233">Ghana (+233)</option>
                  <option value="+1">Granada (+1)</option>
                  <option value="+30">Grecia (+30)</option>
                  <option value="+502">Guatemala (+502)</option>
                  <option value="+592">Guyana (+592)</option>
                  <option value="+224">Guinea (+224)</option>
                  <option value="+240">Guinea ecuatorial (+240)</option>
                  <option value="+245">Guinea-Bisáu (+245)</option>
                  <option value="+509">Haití (+509)</option>
                  <option value="+504">Honduras (+504)</option>
                  <option value="+36">Hungría (+36)</option>
                  <option value="+91">India (+91)</option>
                  <option value="+62">Indonesia (+62)</option>
                  <option value="+964">Irak (+964)</option>
                  <option value="+98">Irán (+98)</option>
                  <option value="+353">Irlanda (+353)</option>
                  <option value="+354">Islandia (+354)</option>
                  <option value="+692">Islas Marshall (+692)</option>
                  <option value="+677">Islas Salomón (+677)</option>
                  <option value="+972">Israel (+972)</option>
                  <option value="+39">Italia (+39)</option>
                  <option value="+1">Jamaica (+1)</option>
                  <option value="+81">Japón (+81)</option>
                  <option value="+962">Jordania (+962)</option>
                  <option value="+7">Kazajistán (+7)</option>
                  <option value="+254">Kenia (+254)</option>
                  <option value="+996">Kirguistán (+996)</option>
                  <option value="+686">Kiribati (+686)</option>
                  <option value="+965">Kuwait (+965)</option>
                  <option value="+856">Laos (+856)</option>
                  <option value="+266">Lesoto (+266)</option>
                  <option value="+371">Letonia (+371)</option>
                  <option value="+961">Líbano (+961)</option>
                  <option value="+231">Liberia (+231)</option>
                  <option value="+218">Libia (+218)</option>
                  <option value="+423">Liechtenstein (+423)</option>
                  <option value="+370">Lituania (+370)</option>
                  <option value="+352">Luxemburgo (+352)</option>
                  <option value="+389">Macedonia del Norte (+389)</option>
                  <option value="+261">Madagascar (+261)</option>
                  <option value="+60">Malasia (+60)</option>
                  <option value="+265">Malaui (+265)</option>
                  <option value="+960">Maldivas (+960)</option>
                  <option value="+223">Malí (+223)</option>
                  <option value="+356">Malta (+356)</option>
                  <option value="+212">Marruecos (+212)</option>
                  <option value="+230">Mauricio (+230)</option>
                  <option value="+222">Mauritania (+222)</option>
                  <option value="+52">México (+52)</option>
                  <option value="+691">Micronesia (+691)</option>
                  <option value="+373">Moldavia (+373)</option>
                  <option value="+377">Mónaco (+377)</option>
                  <option value="+976">Mongolia (+976)</option>
                  <option value="+382">Montenegro (+382)</option>
                  <option value="+258">Mozambique (+258)</option>
                  <option value="+264">Namibia (+264)</option>
                  <option value="+674">Nauru (+674)</option>
                  <option value="+977">Nepal (+977)</option>
                  <option value="+505">Nicaragua (+505)</option>
                  <option value="+227">Níger (+227)</option>
                  <option value="+234">Nigeria (+234)</option>
                  <option value="+47">Noruega (+47)</option>
                  <option value="+64">Nueva Zelanda (+64)</option>
                  <option value="+968">Omán (+968)</option>
                  <option value="+31">Países Bajos (+31)</option>
                  <option value="+92">Pakistán (+92)</option>
                  <option value="+680">Palaos (+680)</option>
                  <option value="+507">Panamá (+507)</option>
                  <option value="+675">Papúa Nueva Guinea (+675)</option>
                  <option value="+595">Paraguay (+595)</option>
                  <option value="+51">Perú (+51)</option>
                  <option value="+48">Polonia (+48)</option>
                  <option value="+351">Portugal (+351)</option>
                  <option value="+44">Reino Unido (+44)</option>
                  <option value="+236">República Centroafricana (+236)</option>
                  <option value="+420">República Checa (+420)</option>
                  <option value="+242">República del Congo (+242)</option>
                  <option value="+243">República Democrática del Congo (+243)</option>
                  <option value="+1">República Dominicana (+1)</option>
                  <option value="+27">República Sudafricana (+27)</option>
                  <option value="+250">Ruanda (+250)</option>
                  <option value="+40">Rumanía (+40)</option>
                  <option value="+7">Rusia (+7)</option>
                  <option value="+685">Samoa (+685)</option>
                  <option value="+1">San Cristóbal y Nieves (+1)</option>
                  <option value="+378">San Marino (+378)</option>
                  <option value="+1">San Vicente y las Granadinas (+1)</option>
                  <option value="+1">Santa Lucía (+1)</option>
                  <option value="+239">Santo Tomé y Príncipe (+239)</option>
                  <option value="+221">Senegal (+221)</option>
                  <option value="+381">Serbia (+381)</option>
                  <option value="+248">Seychelles (+248)</option>
                  <option value="+232">Sierra Leona (+232)</option>
                  <option value="+65">Singapur (+65)</option>
                  <option value="+963">Siria (+963)</option>
                  <option value="+252">Somalia (+252)</option>
                  <option value="+94">Sri Lanka (+94)</option>
                  <option value="+268">Suazilandia (+268)</option>
                  <option value="+249">Sudán (+249)</option>
                  <option value="+211">Sudán del Sur (+211)</option>
                  <option value="+46">Suecia (+46)</option>
                  <option value="+41">Suiza (+41)</option>
                  <option value="+597">Surinam (+597)</option>
                  <option value="+66">Tailandia (+66)</option>
                  <option value="+255">Tanzania (+255)</option>
                  <option value="+992">Tayikistán (+992)</option>
                  <option value="+670">Timor Oriental (+670)</option>
                  <option value="+228">Togo (+228)</option>
                  <option value="+676">Tonga (+676)</option>
                  <option value="+1">Trinidad y Tobago (+1)</option>
                  <option value="+216">Túnez (+216)</option>
                  <option value="+993">Turkmenistán (+993)</option>
                  <option value="+90">Turquía (+90)</option>
                  <option value="+688">Tuvalu (+688)</option>
                  <option value="+380">Ucrania (+380)</option>
                  <option value="+256">Uganda (+256)</option>
                  <option value="+598">Uruguay (+598)</option>
                  <option value="+998">Uzbekistán (+998)</option>
                  <option value="+678">Vanuatu (+678)</option>
                  <option value="+58">Venezuela (+58)</option>
                  <option value="+84">Vietnam (+84)</option>
                  <option value="+967">Yemen (+967)</option>
                  <option value="+253">Yibuti (+253)</option>
                  <option value="+260">Zambia (+260)</option>
                  <option value="+263">Zimbabue (+263)</option>
                </select>
            </div>
            <div class="w3-half">
                <label for="telefono">Teléfono</label>
                <input type="text" id="telefono" name="telefono" placeholder="0987654310">
            </div>
        </div>

        <div class="w3-row-padding">
            <div class="w3-half">
                <label for="asunto">Asunto</label>
                <input type="text" id="asunto" name="asunto" placeholder="Escriba el Asunto">
            </div>
        </div>

        <div class="w3-row-padding">
            <div class="w3-full">
                <label for="mensaje">Mensaje</label>
                <textarea id="mensaje" name="mensaje" placeholder="Escriba su mensaje..." style="height:200px;resize:none;"></textarea>
            </div>
        </div>

        <div class="w3-container w3-center">
            <button type="submit" name="enviar" id="enviar_btn" class="w3-btn w3-round-large w3-blue">Enviar</button>
        </div>
    </form>
      </div>
    </div>
  </div><br>
  <?php include "footer.php";?>
  <script src="../js/contacto.js"></script>
  <script src="../js/translate.js"></script>
</body>

</html>