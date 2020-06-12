<?php
/*
* TODO:
* - Title About: About, img bg class = bradcam_bg_3
* - Title Travel: Destination, img bg class = bradcam_bg_2
* - Title Contact: Contact, img bg class = bradcam_bg_4
*/
?>
<div <?php
      if ($page == 'about') {
        echo "class='bradcam_area bradcam_bg_3'";
      } elseif ($page == 'travel') {
        echo "class='bradcam_area bradcam_bg_2'";
      } elseif ($page == 'contact') {
        echo "class='bradcam_area bradcam_bg_4'";
      }
      ?>>
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <div class="bradcam_text text-center">
          <h3><?php
              if ($page == 'about') {
                echo "About Us";
              } elseif ($page == 'travel') {
                echo "Destination";
              } elseif ($page == 'contact') {
                echo "Contact";
              }
              ?></h3>
          <p>Pixel perfect design with awesome contents</p>
        </div>
      </div>
    </div>
  </div>
</div>