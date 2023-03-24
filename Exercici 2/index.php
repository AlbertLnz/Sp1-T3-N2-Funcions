<?php

  $temps_trucada_minuts = 10;

  function tarifaTelefonica($temps_trucada_minuts){
    if($temps_trucada_minuts<=3){
      $cost = 10;
    }
    else{
      $cost = 10+(($temps_trucada_minuts-3)*5);
    }
    
    return $cost;
  }

  echo "El preu de la teva trucada ha sigut: ".tarifaTelefonica($temps_trucada_minuts)." cèntims";

?>