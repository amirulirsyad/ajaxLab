<?php

  $a = "";

  $Honda = ["Civic","City","Accord",
            "HR-V","CR-V","Pilot","Passport",
            "Odyssey","Ridgeline"];

  $Perodua = ["Ativa","Myvi","Aruz",
            "Axia","Bezza","Alza"];

  $Proton = ["X70","X50","Exora",
            "Persona","Iriz","Saga"];

  $Audi = ["A3 Sedan","A4 Sedan","RS 4 Avant",
            "A5	Sportback","RS 5	Sportback",
          "A6	Sedan","RS 6	Avant","A7	Sportback",
        "RS 7	Sportback","A8 L","Q2","Q3","Q3 Sportback",
        "Q5","Q5 Sportback","Q7","Q8"];

  $Volswagen = ["Golf GTI","Golf R-Line","Golf R",
            "Arteon R-Line","Passat Elegance","Passat R-Line"];

  $Toyota = ["Yaris","Vios","Avanza",
            "Rush","Hilux","Hiace",
            "Innova","Corolla Altis","Corolla Cross",
            "Fortuner","Camry","RAV4","Harrier",
          "GR Yaris","Vellfire","Alphard"];

  // get the q parameter from URL
  $b = $_REQUEST["q"];
  $b = strtolower($b);

  if( $b == "Honda" )
  $a = $Honda;
  else if( $b == "Perodua")
  $a = $Perodua;
  else if( $b == "Proton" )
  $a = $Proton;
  else if( $b == "Audi" )
  $a = $Audi;
  else if( $b == "Volswagen")
  $a = $Volswagen;
  else if( $b == "Toyota")
  $a = $Toyota;
  

  echo json_encode($a);



?>