<?php
$continente = (isset($_GET["continente"]) ? $_GET['continente'] : null);
$pais = (isset($_GET["pais"]) ? $_GET['pais'] : null);
?>

<div class="popular_places_area">

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="section_title text-center mb_70">
          <h3>Popular Places</h3>
          <p>Suffered alteration in some form, by injected humour or good day randomised booth anim 8-bit hella wolf moon beard words.</p>
        </div>
      </div>
    </div>

    <div class="row">

      <?php foreach ($productos as $key => $value) { ?>

        <?php
        if ($page == 'index' && $value['destacado']) {
          if (
            ((empty($continente) || $continente == 'Todo') && empty($pais)) || // No se aplica filtro 
            (empty($pais) && $continente == $value['continente']) || // Se filtra por continente
            ((empty($continente) || $continente == 'Todo') && $pais == $value['nombre']) || // Se filtra por paises
            ($pais == $value['nombre'] && $continente == $value['continente']) // Se filtra por continente y pais
          ) {
        ?>

            <div class="col-lg-4 col-md-6">
              <div class="single_place">
                <div class="thumb">
                  <?php echo '<img src="' .  $value["url"] . '" alt="..." />' ?>
                  <a href="#" class="prise"><?php echo $value["precio"]; ?></a>
                </div>
                <div class="place_info">
                  <a href="<?php echo 'destination_details.php?id=' . $value["id"] ?>">
                    <h3><?php echo $value["nombre"]; ?></h3>
                  </a>
                  <p><?php echo $value["continente"]; ?></p>
                  <div class="rating_days d-flex justify-content-between">
                    <span class="d-flex justify-content-center align-items-center">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <a href="#">(20 Review)</a>
                    </span>
                    <div class="days">
                      <i class="fa fa-clock-o"></i>
                      <a href="#">5 Days</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          <?php
          }
        } elseif ($page == 'travel') {
          ?>

          <?php
          if (
            ((empty($continente) || $continente == 'Todo') && empty($pais)) || // No se aplica filtro 
            (empty($pais) && $continente == $value['continente']) || // Se filtra por continente
            ((empty($continente) || $continente == 'Todo') && $pais == $value['nombre']) || // Se filtra por paises
            ($pais == $value['nombre'] && $continente == $value['continente']) // Se filtra por continente y pais
          ) {
          ?>

            <div class="col-lg-4 col-md-6">
              <div class="single_place">
                <div class="thumb">
                  <?php echo '<img src="' .  $value["url"] . '" alt="..." />' ?>
                  <a href="#" class="prise"><?php echo $value["precio"]; ?></a>
                </div>
                <div class="place_info">
                  <a href="<?php echo 'destination_details.php?id=' . $value["id"] ?>">
                    <h3><?php echo $value["nombre"]; ?></h3>
                  </a>
                  <p><?php echo $value["continente"]; ?></p>
                  <div class="rating_days d-flex justify-content-between">
                    <span class="d-flex justify-content-center align-items-center">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <a href="#">(20 Review)</a>
                    </span>
                    <div class="days">
                      <i class="fa fa-clock-o"></i>
                      <a href="#">5 Days</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          <?php } ?>
        <?php } ?>
      <?php } ?>

    </div>

  </div>
</div>