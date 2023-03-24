<?php

  $p_xococalata=1;
  $p_xiclets=0.5;
  $p_caramels=1.5;

  $q_xocolata=10;
  $q_xiclets=20;
  $q_caramels=4;


  function preuXocolata($p_xococalata, $q_xocolata){
    return $p_xococalata*$q_xocolata;
  }
  function preuXiclets($p_xiclets, $q_xiclets){
    return $p_xiclets*$q_xiclets;
  }
  function preuCaramels($p_caramels, $q_caramels){
    return $p_caramels*$q_caramels;
  }

  function preuComanda($p_xococalata, $p_xiclets, $p_caramels, $q_xocolata, $q_xiclets, $q_caramels){
    return preuXocolata($p_xococalata, $q_xocolata)+preuXiclets($p_xiclets, $q_xiclets)+preuCaramels($p_caramels, $q_caramels);
  }

  echo "El preu de la teva comanda és de: ".preuComanda($p_xococalata, $p_xiclets, $p_caramels, $q_xocolata, $q_xiclets, $q_caramels);

  //No me convence el código, algo me chirria... :(

?>