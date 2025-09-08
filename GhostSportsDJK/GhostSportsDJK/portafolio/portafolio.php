<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../index/estilosIndex.css">
    <link rel="stylesheet" href="estilosportafolio.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/ef698667d1.js" crossorigin="anonymous"></script>
</head>
<body>
    
  <header>
    
    <div class="contenedor-ingresar">
      <a href="../ingresar/ingresar.php">
          <button class="btn-ingresar">
              <span>INICIAR SESION</span>
          </button>
      </a>
      
      <a href="../contacto/contacto.php">
          <button class="btn-ingresar2"><span>REGRISTRARSE</span></button>
      </a>
  
  </div>

   
    <div class="logo">
        <a href="../index.php">
            <img src="../img/imagen56-Photoroom.png" alt="Logo" width="150px" height="150px" class="atras">
        </a>
    </div>

   
    <div class="fondo">
        <form>
            <input type="text" placeholder="Busqueda en la Web">
            <button><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
    </div>

   
    <div class="botones-principales">
        <a href="../index.php">
            <button><span>INICIO</span></button>
        </a>
        <a href="../acerca/acerca.php">
            <button><span>ACERCA DE</span></button>
        </a>
        <a href="portafolio/portafolio.php">
            <button><span>PRODUCTOS</span></button>
        </a>
        
    </div>
</header>
<main>
    <section class="principalportafolio">
      <div class="PRODUCTOS-BICICLETA">
        <div class="TITULO-PRODUCTOS-1">Bicicleta</div>

        <div class="IMG-BICICLETA">
          <img src="../img/cat-mtb.jpg" alt="" class="imagen-producto">
        </div>
        <div class="TEX-PRECIO">
          <span>867.000$</span>
        </div>
        <div class="CONTENEDOR-COLOR-C">
          <label for="color">Color</label>
          <select name="COLOR" id="COLOR">
            <option value="">
              Escoje una opcion
            </option>
            <option value="ROJO">Rojo</option>
            <option value="NEGRA">Negra</option>
            <option value="AMARILLA">Amarilla</option>
            <option value="AZUL">Azul</option>
          </select>
        </div>
        <div class="CONTENEDOR-COLOR-T">
          <label for="TALLA">Talla</label>
          <select name="TALLA" id="TALLA">
            <option value="">
              Escoje una opcion
            </option>
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
          </select>
        </div>
        <div class="BARRA-DESCRIPCION">
          <div class="TITULO-DESCRIPCION">
            <H2>Descripcion</H2>
            <i class="fa-solid fa-circle-down"></i>
          </div>
          <div class="TEX-DESCRIPCION"><p>Bicicleta de montaña equipada con cuadro de aluminio ligero y resistente, suspensión delantera de 100 mm de recorrido para absorber impactos, transmisión Shimano de 21 velocidades para un cambio suave en cualquier terreno, frenos de disco mecánicos para mayor seguridad, y llantas de 29" con dibujo agresivo que garantizan tracción y estabilidad en caminos irregulares.</p></div>
        </div>
        <div class="BARRA-DESCRIPCION-ADI">
          <div class="TITULO-DESCRIPCION-ADI">
            <H2>Descripcion Adicional</H2>
            <i class="fa-solid fa-circle-down"></i>
          </div>
          <div class="TEX-DESCRIPCION-ADI"><p> Explora nuevos caminos con nuestra bicicleta MTB, diseñada para terrenos exigentes. Con un cuadro resistente, suspensión delantera y llantas de gran agarre, te ofrece control, comodidad y durabilidad en cada aventura. Ideal para ciclistas que buscan rendimiento tanto en montaña como en ciudad.</p></div>
        </div>
        <!--segundo producto-->
        <section class="principalportafolio">
          <div class="PRODUCTOS-BICICLETA">
            <div class="TITULO-PRODUCTOS-1">Botines de Fútbol ProKick 2025</div>
    
            <div class="IMG-BICICLETA">
              <img src="../img/cat-fut.jpg" alt="" class="imagen-producto">
            </div>
            <div class="TEX-PRECIO">
              <span>$359.900 COP</span>
            </div>
            <div class="CONTENEDOR-COLOR-C">
              <label for="color">Color</label>
              <select name="COLOR" id="COLOR">
                <option value="">
                  Escoje una opcion
                </option>
                <option value="ROJO">Rojo</option>
                <option value="NEGRA">Negra</option>
                <option value="AMARILLA">Amarilla</option>
                <option value="AZUL">Azul</option>
              </select>
            </div>
            <div class="CONTENEDOR-COLOR-T">
              <label for="TALLA">Talla</label>
              <select name="TALLA" id="TALLA">
                <option value="">
                  Escoje una opcion
                </option>
                <option value="S">39</option>
                <option value="M">40</option>
                <option value="L">41</option>
                <option value="XL">42</option>
              </select>
            </div>
            <div class="BARRA-DESCRIPCION">
              <div class="TITULO-DESCRIPCION">
                <H2>Descripcion</H2>
                <i class="fa-solid fa-circle-down"></i>
              </div>
              <div class="TEX-DESCRIPCION"><p>Saca tu mejor versión en la cancha con los Botines ProKick 2025. Ideales para quienes buscan velocidad, control y estabilidad. Su suela de alta tracción y su diseño ultraligero te ayudarán a marcar la diferencia en cada jugada.</p></div>
            </div>
            <div class="BARRA-DESCRIPCION-ADI">
              <div class="TITULO-DESCRIPCION-ADI">
                <H2>Descripcion Adicional</H2>
                <i class="fa-solid fa-circle-down"></i>
              </div>
              <div class="TEX-DESCRIPCION-ADI"><p> Confeccionados en materiales sintéticos resistentes, los Botines ProKick 2025 garantizan un ajuste cómodo y seguro. Su plantilla acolchada brinda mayor protección contra impactos, mientras que su acabado moderno y aerodinámico te hará lucir increíble dentro y fuera del campo. Perfectos para césped natural y canchas sintéticas. </p></div>
            </div>
            
                  <section class="principalportafolio">
                    <div class="PRODUCTOS-BICICLETA">
                      <div class="TITULO-PRODUCTOS-1">Balón de Baloncesto Hoops Master 2025</div>
              
                      <div class="IMG-BICICLETA">
                        <img src="../img/basquet2.png" alt="" class="imagen-producto">
                      </div>
                      <div class="TEX-PRECIO">
                        <span>$179.900 COP</span>
                      </div>
                      <div class="CONTENEDOR-COLOR-C">
                        <label for="color">Color</label>
                        <select name="COLOR" id="COLOR">
                          <option value="">
                            Escoje una opcion
                          </option>
                          <option value="ROJO">Naranja</option>
                          <option value="NEGRA">Negro</option>
                   
                        </select>
                      </div>
                      <div class="CONTENEDOR-COLOR-T">
                        <label for="TALLA">Talla</label>
                        <select name="TALLA" id="TALLA">
                          <option value="">
                            Escoje una opcion
                          </option>
                          <option value="S">Tamaño 5</option>
                          <option value="M">Tamaño 6</option>
                          <option value="L">Tamaño 7</option>
                          
                        </select>
                      </div>
                      <div class="BARRA-DESCRIPCION">
                        <div class="TITULO-DESCRIPCION">
                          <H2>Descripcion</H2>
                          <i class="fa-solid fa-circle-down"></i>
                        </div>
                        <div class="TEX-DESCRIPCION"><p>Eleva tu nivel de juego con el Balón Hoops Master 2025. Diseñado para ofrecer un excelente agarre, control y durabilidad en cualquier tipo de cancha, ya sea interior o exterior.</p></div>
                      </div>
                      <div class="BARRA-DESCRIPCION-ADI">
                        <div class="TITULO-DESCRIPCION-ADI">
                          <H2>Descripcion Adicional</H2>
                          <i class="fa-solid fa-circle-down"></i>
                        </div>
                        <div class="TEX-DESCRIPCION-ADI"><p> Fabricado en material compuesto de alta resistencia, el Balón Hoops Master 2025 presenta una textura que mejora el agarre y facilita los dribles, pases y lanzamientos. Su estructura de cámara de aire de alta calidad garantiza un rebote uniforme y un rendimiento óptimo durante los partidos o entrenamientos. Ideal para jugadores de todos los niveles.</p></div>
                      </div>


                      <section class="principalportafolio">
                        <div class="PRODUCTOS-BICICLETA">
                          <div class="TITULO-PRODUCTOS-1">Balón de Fútbol Profesional - Edición 2025</div>
                  
                          <div class="IMG-BICICLETA">
                            <img src="../img/balonfut.png" alt="" class="imagen-producto">
                          </div>
                          <div class="TEX-PRECIO">
                            <span>$120,000 COP</span>
                          </div>
                          <div class="CONTENEDOR-COLOR-C">
                            <label for="color">Color</label>
                            <select name="COLOR" id="COLOR">
                              <option value="">
                                Escoje una opcion
                              </option>
                              <option value="ROJO">Blanco</option>
                             
                            </select>
                          </div>
                          <div class="CONTENEDOR-COLOR-T">
                            <label for="TALLA">Talla</label>
                            <select name="TALLA" id="TALLA">
                              <option value="">
                                Escoje una opcion
                              </option>
                              <option value="S">Tamaño 4</option>
                              <option value="M">Tamaño 5</option>
                              <option value="L">Tamaño 6</option>
                              <option value="XL">Tamaño 7</option>
                            </select>
                          </div>
                          <div class="BARRA-DESCRIPCION">
                            <div class="TITULO-DESCRIPCION">
                              <H2>Descripcion</H2>
                              <i class="fa-solid fa-circle-down"></i>
                            </div>
                            <div class="TEX-DESCRIPCION"><p>Disfruta de la mejor experiencia en el campo con este balón de fútbol de alta calidad, diseñado para ofrecerte precisión, control y durabilidad en cada jugada. Su superficie texturizada y costuras reforzadas aseguran un rendimiento superior tanto en entrenamientos como en partidos oficiales. Ideal para jugadores de todos los niveles, este balón está preparado para soportar las exigencias del fútbol profesional.</p></div>
                          </div>
                          <div class="BARRA-DESCRIPCION-ADI">
                            <div class="TITULO-DESCRIPCION-ADI">
                              <H2>Descripcion Adicional</H2>
                              <i class="fa-solid fa-circle-down"></i>
                            </div>
                            <div class="TEX-DESCRIPCION-ADI"><p> Este balón está fabricado con materiales de alta resistencia, que le proporcionan una mayor durabilidad y desempeño en cualquier condición de juego. Su diseño aerodinámico permite un vuelo más estable y preciso, ayudando a mejorar tu control y precisión en el pase y el disparo. ¡Haz que cada jugada cuente!</p></div>
                          </div>


                          <section class="principalportafolio">
                            <div class="PRODUCTOS-BICICLETA">
                              <div class="TITULO-PRODUCTOS-1">Raqueta de Tenis Profesional - Edición 2025</div>
                      
                              <div class="IMG-BICICLETA">
                                <img src="../img/tenis2.png" alt="" class="imagen-producto">
                              </div>
                              <div class="TEX-PRECIO">
                                <span>$350,000 COP</span>
                              </div>
                              <div class="CONTENEDOR-COLOR-C">
                                <label for="color">Color</label>
                                <select name="COLOR" id="COLOR">
                                  <option value="">
                                    Escoje una opcion
                                  </option>
                                  <option value="ROJO">Rojo</option>
                                  <option value="NEGRA">Negra</option>
                                  <option value="AMARILLA">Amarilla</option>
                                  <option value="AZUL">Azul</option>
                                </select>
                              </div>
                              <div class="CONTENEDOR-COLOR-T">
                                <label for="TALLA">Talla</label>
                                <select name="TALLA" id="TALLA">
                                  <option value="">
                                    Escoje una opcion
                                  </option>
                                  <option value="S">Longitud estándar (68 cm)</option>
                                  <option value="M">Longitud extendida (71 cm) </option>
                                
                                </select>
                              </div>
                              <div class="BARRA-DESCRIPCION">
                                <div class="TITULO-DESCRIPCION">
                                  <H2>Descripcion</H2>
                                  <i class="fa-solid fa-circle-down"></i>
                                </div>
                                <div class="TEX-DESCRIPCION"><p>Con la raqueta de tenis profesional Edición 2025, tendrás el equilibrio perfecto entre potencia y control en cada golpe. Fabricada con materiales de última tecnología, esta raqueta ofrece una estructura liviana pero resistente, ideal para jugadores que buscan mejorar su rendimiento en la cancha. Su diseño aerodinámico y su marco de alta precisión permiten una mayor estabilidad y potencia en el juego.</p></div>
                              </div>
                              <div class="BARRA-DESCRIPCION-ADI">
                                <div class="TITULO-DESCRIPCION-ADI">
                                  <H2>Descripcion Adicional</H2>
                                  <i class="fa-solid fa-circle-down"></i>
                                </div>
                                <div class="TEX-DESCRIPCION-ADI"><p> Descripción extra:
                                  La raqueta cuenta con un sistema de amortiguación avanzada que reduce la vibración y te ofrece un toque más suave al impactar la pelota, protegiendo tus muñecas y codos. Su cuerda de alta calidad optimiza la consistencia y el control de los golpes, permitiéndote un juego más dinámico y preciso. Ya seas un jugador principiante o profesional, esta raqueta se adapta a tus necesidades.</p></div>
                              </div>


                              <section class="principalportafolio">
                                <div class="PRODUCTOS-BICICLETA">
                                  <div class="TITULO-PRODUCTOS-1">Balón de Voleibol Profesional - Edición 2025</div>
                          
                                  <div class="IMG-BICICLETA">
                                    <img src="../img/voleibol.png" alt="" class="imagen-producto">
                                  </div>
                                  <div class="TEX-PRECIO">
                                    <span>$95,000 COP</span>
                                  </div>
                                  <div class="CONTENEDOR-COLOR-C">
                                    <label for="color">Color</label>
                                    <select name="COLOR" id="COLOR">
                                      <option value="">
                                        Escoje una opcion
                                      </option>
                                      <option value="ROJO">Blanco/azul</option>
                                      <option value="NEGRA">Amarillo/azul</option>
                                      <option value="AMARILLA">Amarilla/blanco</option>
                                  
                                    </select>
                                  </div>
                                  <div class="CONTENEDOR-COLOR-T">
                                    <label for="TALLA">Talla</label>
                                    <select name="TALLA" id="TALLA">
                                      <option value="">
                                        Escoje una opcion
                                      </option>
                                      <option value="S">Tamaño 4</option>
                                      <option value="M">Tamaño 5</option>
                                      
                                    </select>
                                  </div>
                                  <div class="BARRA-DESCRIPCION">
                                    <div class="TITULO-DESCRIPCION">
                                      <H2>Descripcion</H2>
                                      <i class="fa-solid fa-circle-down"></i>
                                    </div>
                                    <div class="TEX-DESCRIPCION"><p>Mejora tu rendimiento en la cancha con este balón de voleibol de alta calidad, diseñado para ofrecerte un excelente control y durabilidad en cada partido. Con su estructura liviana y su superficie texturizada, este balón te proporciona un toque preciso y un vuelo estable. Ideal para entrenamientos y partidos de alto nivel, es perfecto para jugadores de todas las edades y niveles.</p></div>
                                  </div>
                                  <div class="BARRA-DESCRIPCION-ADI">
                                    <div class="TITULO-DESCRIPCION-ADI">
                                      <H2>Descripcion Adicional</H2>
                                      <i class="fa-solid fa-circle-down"></i>
                                    </div>
                                    <div class="TEX-DESCRIPCION-ADI"><p> Fabricado con materiales de última tecnología, el balón de voleibol Edición 2025 es resistente al desgaste y mantiene su forma durante largos períodos de uso. Su diseño optimizado para el rebote y su buena respuesta en el aire aseguran una experiencia de juego más efectiva, mejorando tu rendimiento tanto en defensa como en ataque. ¡Lleva tu juego al siguiente nivel!</p></div>
                                  </div>

    
          
    
          </div>
        </section>

      

      </div>
    </section>
</main>
<footer>

<div>
  <a href="https://www.facebook.com"><img src="../img/facebookn.png" alt="" width="50px" height="50px"></a> 
 
  <a href="https://x.com/?lang=es"><img src="../img/xn.png" alt="" width="50px" height="50px"></a> 

  <a href="https://www.instagram.com/"><img src="../img/instan.png" alt="" width="50px" height="50px"></a> 
</div>
  <div>
    <p class="textofooter">  https://ghostsports.github.io/GhostSportsDJK</p>
  </div>
  <div>
    <img src="../img/imagen56-Photoroom.png" alt=""width="50px" height="50px" >
  </div>
</footer>
</body>
</html>

