<?php
require 'Controleur/controleur.php';
$ID=$_GET['ID'];
$show=new Control();
$show->showcontrol($ID);
?>