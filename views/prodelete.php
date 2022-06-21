<?php

if (isset($_POST['idpro'])) {
    $exitpro = new productController();
    $exitpro->deletePro();
}


?>