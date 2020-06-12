<?php
$continente = (isset($_GET["continente"]) ? $_GET['continente'] : null);
$pais = (isset($_GET["pais"]) ? $_GET['pais'] : null);
?>

<div class="popular_destination_area">

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="section_title text-center mb_70">
          <h3>Popular Destination</h3>
          <p>Suffered alteration in some form, by injected humour or good day randomised booth anim 8-bit hella wolf moon beard words.</p>
        </div>
      </div>
    </div>

    <div class="row">

      <?php foreach ($productos as $key => $value) { ?>

        <?php if ($page == 'index' && $value['destacado']) { ?>

          <div class="col-lg-4 col-md-6">
            <div class="single_destination">
              <div class="thumb">
                <?php echo '<img src="' .  $value["url"] . '" alt="..." />' ?>
              </div>
              <div class="content">
                <p class="d-flex align-items-center">
                  <?php echo $value["nombre"]; ?>
                  <a href="travel_destination.html">
                    <?php echo $value["precio"]; ?>
                  </a>
                </p>
              </div>
            </div>
          </div>

        <?php } elseif ($page == 'travel') { ?>

          <?php
          if (
            ((empty($continente) || $continente == 'Todo') && empty($pais)) || // No se aplica filtro 
            (empty($pais) && $continente == $value['continente']) || // Se filtra por continente
            ((empty($continente) || $continente == 'Todo') && $pais == $value['nombre']) || // Se filtra por paises
            ($pais == $value['nombre'] && $continente == $value['continente']) // Se filtra por continente y pais
          ) {
          ?>

            <div class="col-lg-4 col-md-6">
              <div class="single_destination">
                <div class="thumb">
                  <img src="img/destination/1.png" alt="">
                </div>
                <div class="content">
                  <p class="d-flex align-items-center">Italy <a href="travel_destination.html"> 07 Places</a> </p>
                </div>
              </div>
            </div>

          <?php } ?>
        <?php } ?>
      <?php } ?>

    </div>
  </div>
</div>