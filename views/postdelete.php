<?php
    if (isset($_POST['id'])) {
        $exitPet = new PetController();
        $exitPet->deletePet();
    }




?>