<?php
    require_once $abs_us_root.$us_url_root.'users/init.php';
    require_once $abs_us_root.$us_url_root.'users/includes/template/prep.php';
    if (!securePage($_SERVER['PHP_SELF'])){die();}
?>


<?php
echo "Hello";
?>
<a href="devices/csg-esp8266-rota/">Rota</a>