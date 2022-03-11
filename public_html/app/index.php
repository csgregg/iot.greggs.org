<?php
    require_once '/users/init.php';  //make sure this path is correct!
    require_once $abs_us_root.$us_url_root.'users/includes/template/prep.php';
    if (!securePage($_SERVER['PHP_SELF'])){die();}
?>


<?php
echo "Hello";
?>