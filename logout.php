<?php
    Session_start();
    Session_destroy();
    echo '<script>window.location.href="index.php";</script>';   
?>