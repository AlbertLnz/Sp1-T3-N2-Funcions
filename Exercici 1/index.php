<?php

  $JJOO = array(
    1896 => "Atenas", 1900 => "París", 1904 => "San Luis", 1908 => "Londres", 1912 => "Estocolmo", 1920 => "Amberes", 1924 => "París",
    1928 => "Ámsterdam", 1932 => "Los Ángeles", 1936 => "Berlín", 1948 => "Londres", 1952 => "Helsinki", 1956 => "Melbourne",
    1960 => "Roma", 1964 => "Tokio", 1968 => "Ciudad de México", 1972 => "Múnich", 1976 => "Montreal", 1980 => "Moscú", 1984 => "Los Ángeles",
    1988 => "Seúl", 1992 => "Barcelona", 1996 => "Atlanta", 2000 => "Sídney", 2004 => "Atenas", 2008 => "Beijing", 2012 => "Londres",
    2016 => "Río de Janeiro", 2020 => "Tokio"
  );



  function juegosOlimpicos($JJOO){
    $inicio=1960;
    $final=2016;

    for($i=$inicio ; $inicio<=$final ; $inicio+=4){
      if($JJOO[$inicio] != NULL){
        print "En ".$inicio. " los JJOO se celebraron en ".$JJOO[$inicio]."<br>";
      }else{
        print "En ".$inicio. " NO se celebraron JJOO\n";
      }
    }
  }

  juegosOlimpicos($JJOO);

?>