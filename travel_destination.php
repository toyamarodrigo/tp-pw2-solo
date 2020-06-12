<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php require "./includes/head.php" ?>
    <title>Travelo</title>
</head>

<body>
    <?php
    $str_data = file_get_contents("./json/paises.json");
    $productos = json_decode($str_data, true);
    $page = 'travel';
    require "./includes/header.php";

    require "./includes/bradcam.php";
    require "./includes/filter.php";
    require "./includes/popular_places.php";
    require "./includes/newsletter.php";
    require "./includes/recent_trips.php";

    require "./includes/footer.php";
    require "./includes/modal.php";
    require "./includes/scripts.php";
    ?>
</body>

</html>