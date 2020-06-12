<?php
$str_data_continentes = file_get_contents("./json/continentes.json");
$str_data_paises = file_get_contents("./json/paises.json");

$dataContinentes = json_decode($str_data_continentes, true);
$dataPaises = json_decode($str_data_paises, true);
?>

<div class="where_togo_area">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-lg-4">
        <div class="form_area">
          <h3>Where you want to go?</h3>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="search_wrap">

          <form class="search_form" method="GET" action="">
            <?php $opcion = 'Todo'; ?>
            <?php !empty($_GET['continente']) ? $opcion = $_GET['continente'] : $opcion = "" ?>
            
            <div class="input_field">
              <select name="continente" id="continente" onchange="this.form.submit()">
                <option value="" selected="selected" data-display="Seleccionar Continente">Seleccionar Continente</option>
                <?php foreach ($dataContinentes as $continentes) : ?>
                  <option <?php echo ($opcion == $continentes['nombre']) ? 'selected="selected"' : '' ?>>
                    <?php echo $continentes['nombre'] ?>
                  </option>
                <?php endforeach ?>
              </select>
            </div>
          </form>

        </div>
      </div>

      <div class="col-lg-4">
        <div class="search_wrap">

          <form class="search_form" method="GET" action="">
            <input type="hidden" name="continente" value="<?php echo isset($_GET['continente']) ? $_GET['continente'] : '' ?>">
            <div class="input_field">
              <select name="pais" id="pais" onchange="this.form.submit()">
                <option data-display="Seleccionar Pais">Seleccionar Pais</option>
                <?php foreach ($dataPaises as $paises) : ?>
                  <?php if ($paises['continente'] == $_GET['continente']) : ?>
                    <option><?php echo $paises['nombre']; ?></option>
                  <?php endif ?>

                  <?php if ($_GET['continente'] == null || $_GET['continente'] == 'Todo') : ?>
                    <option><?php echo $paises['nombre']; ?></option>
                  <?php endif ?>

                <?php endforeach ?>
              </select>
            </div>
          </form>

        </div>
      </div>

    </div>
  </div>
</div>