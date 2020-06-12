<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <?php require "./includes/head.php" ?>
    <title>Travelo</title>
</head>

<body>
    <?php
    $page == 'travel';
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