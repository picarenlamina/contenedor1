<?php

include "Libreria.php";

$valor = Libreria::factorial( $_GET["valor"] );


echo '<div id="resultado">' . $valor . '</div>';

