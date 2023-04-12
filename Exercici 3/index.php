<?php

  $p_xococalata=1;
  $p_xiclets=0.5;
  $p_caramels=1.5;

  $q_xocolata=10;
  $q_xiclets=20;
  $q_caramels=4;


  function preuQuantitat($preu, $quantitat){
    return $preu*$quantitat;
  }

  $comanda = array(preuQuantitat($p_xococalata, $q_xocolata), preuQuantitat($p_xiclets, $q_xiclets), preuQuantitat($p_caramels, $q_caramels));

  echo "El preu de la teva comanda és de: ".array_sum($comanda);

  // Ahora me convence más el código :)

?>