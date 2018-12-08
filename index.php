<?php include_once 'includes/templates/header.php';?>

<section class="seccion contenedor">
  <h2>La mejor conferencia de disño web en español</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pulvinar eleifend odio. Sed et tempus nibh.
    Vestibulum rhoncus mi diam, sed porta orci placerat et.

  </p>
</section>
<!--Seccion-->

<section class="programa">
  <div class="contenedor_video">
    <video autoplay loop poster="img/bg-talleres.jpg">
      <source src="video/video.mp4" type="video/mp4">
      <source src="video/video.mp4" type="video/webm">
      <source src="video/video.mp4" type="video/ovg ">
    </video>
  </div>
  <!--Contenedor del video-->

  <div class="contenido_programa ">
    <div class="contenedor ">
      <div class="programa_evento clearfix">
        <h2>Programa del evento</h2>


        <?php
          try {
            require_once('includes/funciones/bd_conexion.php');
            $sql = "SELECT * FROM categoria_evento ";
            $resultado = $conn->query($sql);
          } catch (\Exception $e) {
            echo $e->getMessage();

          }
          ?>
        <nav class="menu_programa ">
          <?php while($cat = $resultado->fetch_array(MYSQLI_ASSOC)){?>
          <?php $categoria = $cat['cat_evento'];?>
          <a href="#<?php echo strtolower($categoria); ?>">
            <i class="<?php echo " fas" ." ". $cat['icono'] ?>" aria-hidden="true"></i>
            <?php echo $categoria?>
          </a>
          <?php } ?>
        </nav>

        <?php
            try {
              require_once('includes/funciones/bd_conexion.php');
              $sql = "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
              $sql .= " FROM eventos ";
              $sql .= " INNER JOIN categoria_evento ";
              $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
              $sql .= " INNER JOIN invitados ";
              $sql .= " ON eventos.id_inv = invitados.invitado_id ";
              $sql .= " AND eventos.id_cat_evento = 1 ";
              $sql .= " ORDER BY evento_id LIMIT 2; ";
              $sql .= "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
              $sql .= " FROM eventos ";
              $sql .= " INNER JOIN categoria_evento ";
              $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
              $sql .= " INNER JOIN invitados ";
              $sql .= " ON eventos.id_inv = invitados.invitado_id ";
              $sql .= " AND eventos.id_cat_evento = 2 ";
              $sql .= " ORDER BY evento_id LIMIT 2; ";
              $sql .= "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
              $sql .= " FROM eventos ";
              $sql .= " INNER JOIN categoria_evento ";
              $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
              $sql .= " INNER JOIN invitados ";
              $sql .= " ON eventos.id_inv = invitados.invitado_id ";
              $sql .= " AND eventos.id_cat_evento = 3 ";
              $sql .= " ORDER BY evento_id LIMIT 2; ";
            } catch (\Exception $e) {
              echo $e->getMessage();

            }
          ?>
          
        <?php $i = 0; ?>

        <?php $conn->multi_query($sql) ?>

        <?php 
            do{
              $resultado = $conn->store_result();
              $row = $resultado->fetch_all(MYSQLI_ASSOC);?>

        <?php foreach ($row as $evento): ?>
        <?php if($i % 2==0){ ?>
        <div id="<?php echo strtolower($evento['cat_evento']);?>" 
        class="info_curso ocultar">
        <?php } ?>

        
          <div class="detalle_evento">
            <h3><?php echo ($evento['nombre_evento'])?></h3>
            <p><i class="far fa-clock"></i><?php echo $evento['cat_evento'];?></p>
            <p><i class="far fa-calendar-alt"></i><?php echo $evento['fecha_evento'];?></p>
            <p><i class="fas fa-user"></i>
            <?php echo $evento['nombre_invitado']." ".$evento['apellido_invitado'];?></p>
          </div>
        


      
        <?php if($i % 2==1): ?>
        <a href="#" class="button float_rigth">Ver todos</a>

      </div>
      <!--Talleres-->
        <?php endif; ?>

      <?php $i++; ?>
      <?php endforeach; ?>
      <?php $resultado->free(); ?>

      <?php } while($conn->more_results() && $conn->next_result())?>







    </div>
    <!--Programa_evento-->
  </div>
  <!--Contenedor-->
  </div>
  <!--Contendi_programa-->
</section>
<!--Programa-->


<?php include_once 'includes/templates/invitados.php';?>

<div class="contador parallax">
  <div class="contenedor">
    <ul class="resumen_evento">
      <li>
        <p class="numero"></p>Invitados
      </li>
      <li>
        <p class="numero"></p>Talleres
      </li>
      <li>
        <p class="numero"></p>Días
      </li>
      <li>
        <p class="numero"></p>Conferencias
      </li>
    </ul>
  </div>
</div>

<section class="precios seccion">
  <h2>Precios</h2>
  <div class="contenedor">
    <ul class="lista_precios clearfix">
      <li>

        <div class="tabla_precio">
          <h3>Pase por día</h3>
          <p class="numero">30$</p>
          <ul>
            <li><i class="fas fa-check"></i>Bocadillos Gratis</li>
            <li><i class="fas fa-check"></i>Todas las conferencias</li>
            <li><i class="fas fa-check"></i>Todos los talleres</li>

          </ul>
          <a href="#" class="button hollow">Comprar</a>
        </div>

      </li>

      <li>

        <div class="tabla_precio">
          <h3>Todos los días</h3>
          <p class="numero">50$</p>
          <ul>
            <li><i class="fas fa-check"></i>Bocadillos Gratis</li>
            <li><i class="fas fa-check"></i>Todas las conferencias</li>
            <li><i class="fas fa-check"></i>Todos los talleres</li>

          </ul>
          <a href="#" class="button">Comprar</a>
        </div>

      </li>
      <li>

        <div class="tabla_precio">
          <h3>Pase por 2 días</h3>
          <p class="numero">45$</p>
          <ul>
            <li><i class="fas fa-check"></i>Bocadillos Gratis</li>
            <li><i class="fas fa-check"></i>Todas las conferencias</li>
            <li><i class="fas fa-check"></i>Todos los talleres</li>

          </ul>
          <a href="#" class="button hollow">Comprar</a>
        </div>

      </li>



    </ul>
  </div>
</section>
<div class="mapa" id="mapa"></div>

<section class="seccion">
  <h2>Testimoniales</h2>
  <div class="testimoniales contenedor clearfix">
    <div class="testimonial">
      <blockquote>
        <p><i class="fas fa-quote-left"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec maximus
          magna in risus aliquam pretium. Ut
          id quam tempor, feugiat metus ac, vulputate ipsum. Morbi nec massa in orci ultricies elementum. Nulla
          condimentum neque et nunc congue, non commodo erat semper.</p>
        <footer class="info_testimonial clearfix">
          <img src="img/testimonial.jpg" alt="imagen testimonial">
          <cite>Oswald Aponte Escobedo <span>Diseñador en @prisma</span></cite>
        </footer>
      </blockquote>
    </div>
    <!--Testimonial-->
    <div class="testimonial">
      <blockquote>
        <p><i class="fas fa-quote-left"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec maximus
          magna in risus aliquam pretium. Ut
          id quam tempor, feugiat metus ac, vulputate ipsum. Morbi nec massa in orci ultricies elementum. Nulla
          condimentum neque et nunc congue, non commodo erat semper.</p>
        <footer class="info_testimonial clearfix">
          <img src="img/testimonial.jpg" alt="imagen testimonial">
          <cite>Oswald Aponte Escobedo <span>Diseñador en @prisma</span></cite>
        </footer>
      </blockquote>
    </div>
    <!--Testimonial-->
    <div class="testimonial">
      <blockquote>
        <p><i class="fas fa-quote-left"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec maximus
          magna in risus aliquam pretium. Ut
          id quam tempor, feugiat metus ac, vulputate ipsum. Morbi nec massa in orci ultricies elementum. Nulla
          condimentum neque et nunc congue, non commodo erat semper.</p>
        <footer class="info_testimonial clearfix">
          <img src="img/testimonial.jpg" alt="imagen testimonial">
          <cite>Oswald Aponte Escobedo <span>Diseñador en @prisma</span></cite>
        </footer>
      </blockquote>
    </div>
    <!--Testimonial-->
  </div>
</section>

<div class="newsletter parallax">
  <div class="contenido contenedor">
    <p>Registrate al newsletter:</p>
    <h3>gdlgwebcamp</h3>
    <a href="#mc_embed_signup" class="boton_newsletter transparente button">Registro</a>

  </div>
</div>

<section class="seccion contenedor">
  <h2>Faltan</h2>
  <div class="cuenta_regresiva">
    <ul class="clearfix">
      <li>
        <p id="dias" class="numero"></p>Días
      </li>
      <li>
        <p id="horas" class="numero"></p>Horas
      </li>
      <li>
        <p id="minutos" class="numero"></p>Minutos
      </li>
      <li>
        <p id="segundos" class="numero"></p>Segundos
      </li>
    </ul>
  </div>
</section>
<?php include_once 'includes/templates/footer.php';?>