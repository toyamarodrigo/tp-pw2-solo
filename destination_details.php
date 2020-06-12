<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <?php require "./includes/head.php" ?>
    <title>Travelo</title>
</head>

<body>
    <?php
    $page = 'travel';
    $str_data = file_get_contents("./json/paises.json");
    $paises = json_decode($str_data, true);

    require "./includes/header.php";

    $id = $_GET['id'];

    // Si $_POST submit esta setteado, guarda los datos del comentario en comentarios.json
    if (isset($_POST['submit'])) {
        $data = $_POST;
        unset($data['submit']);
        $data['fecha'] = date('d/m/Y H:i:s');
        $fecha = new DateTime();
        $indexComentario = $fecha->format('YmdHisu');
        if (file_exists('./json/comentarios.json')) {
            $comentarioJson = file_get_contents('./json/comentarios.json');
            $comentarioArray = json_decode($comentarioJson, true);
        } else {
            $comentarioArray = array();
        }
        $comentarioArray[$indexComentario] = $data;
        $fp = fopen('./json/comentarios.json', 'w');
        fwrite($fp, json_encode($comentarioArray));
        fclose($fp);
    }
    ?>


    <div class="destination_banner_wrap overlay">
        <div class="destination_text text-center">

            <?php foreach ($paises as $key => $value) {
                if ($key == $id) break;
            } ?>

            <h3><?php echo $value['nombre'] ?></h3>
        </div>
    </div>

    <div class="destination_details_info">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-9">
                    <div class="destination_info">
                        <h3>Description</h3>
                        <?php echo '<p class="col-12 pt-4">' . $value['descripcion'] . '</p>' ?>
                        <ul class="py-3">
                            <?php foreach ($value['descripcion_details'] as $k => $v) : ?>
                                <li><?php echo $v; ?></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                    <div class="bordered_1px"></div>
                    <div class="contact_join">
                        <h3>Review</h3>
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="single_input">
                                        <input type="text" name="nombre" required placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="single_input">
                                        <input type="email" id="email" name="email" required placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single_input">
                                        <textarea name="comentario" id="" cols="30" rows="10" required placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form1">
                                        <p class="clasificacion" name="rankeo">
                                            <input id="radio1" type="radio" name="estrellas" value="5">
                                            <label for="radio1">★</label>
                                            <input id="radio2" type="radio" name="estrellas" value="4">
                                            <label for="radio2">★</label>
                                            <input id="radio3" type="radio" name="estrellas" value="3">
                                            <label for="radio3">★</label>
                                            <input id="radio4" type="radio" name="estrellas" value="2">
                                            <label for="radio4">★</label>
                                            <input id="radio5" type="radio" name="estrellas" value="1">
                                            <label for="radio5">★</label>
                                        </p>
                                    </div>
                                </div>

                                <input type="hidden" class="input-xlarge" name="producto_id" value="<?php echo $_GET['id'] ?>" />

                                <div class="col-lg-12">
                                    <div class="submit_btn">
                                        <input class="boxed-btn4 btn-block" type="submit" value="Enviar" name="submit">
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="testimonial_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <?php
                    if (file_exists('./json/comentarios.json')) {
                        $comentarioJson = file_get_contents('./json/comentarios.json');
                        $comentarioArray = json_decode($comentarioJson, true);
                        krsort($comentarioArray);
                        $cantidad = 0;
                        foreach ($comentarioArray as $comentario) {
                            if ($comentario['producto_id'] == $_GET['id']) {
                                $cantidad++;
                                if ($cantidad == 11) break;
                    ?>
                                <div class="row justify-content-center align-items-center">
                                    <div class="border p-4 shadow col-8 single_testmonial">
                                        <p> <?php echo $comentario['comentario']; ?> </p>

                                        <div class="testmonial_author">
                                            <h3>- <?php echo $comentario['nombre']; ?> </h3>
                                        </div>

                                        <h3>
                                            <?php
                                            if ($comentario['estrellas'] == '1') {
                                                echo '★';
                                            } elseif ($comentario['estrellas'] == '2') {
                                                echo '★★';
                                            } elseif ($comentario['estrellas'] == '3') {
                                                echo '★★★';
                                            } elseif ($comentario['estrellas'] == '4') {
                                                echo '★★★★';
                                            } elseif ($comentario['estrellas'] == '5') {
                                                echo '★★★★★';
                                            }
                                            //echo $comentario['estrellas']; 
                                            ?>
                                        </h3>

                                        <small>
                                            <i> <?php echo $comentario['fecha']; ?> </i>
                                        </small>
                                    </div>
                                </div>

                    <?php
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <?php
    require "./includes/newsletter.php";

    require "./includes/footer.php";
    require "./includes/modal.php";
    require "./includes/scripts.php";
    ?>
</body>

</html>