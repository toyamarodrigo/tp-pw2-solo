<!doctype html>
<html class="no-js" lang="zxx">

<head>
  <?php require "./includes/head.php" ?>
  <title>Travelo</title>
</head>

<body>
  <?php 
  $page == 'index';
  require "./includes/header.php";
  require "./includes/slider.php";
  
  require "./includes/filter.php";

  require "./includes/popular_dest.php";
  require "./includes/newsletter.php";
  require "./includes/popular_places.php";
  require "./includes/video_area.php";
  require "./includes/travel_var.php";
  require "./includes/testimonials.php";
  require "./includes/recent_trips.php";
  require "./includes/footer.php";

  require "./includes/modal.php";
  require "./includes/scripts.php";
  ?>
</body>

</html>