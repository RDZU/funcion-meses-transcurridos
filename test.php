<?php


  function get_dia($fecha)
  {
  return date("d", strtotime(date_format(date_create($fecha), 'Y-m-d'))); 
  }
function getDiasMes($fecha) {
    $mes = date("m", strtotime(date_format(date_create($fecha), 'Y-m-d')));
    $annio = date("y", strtotime(date_format(date_create($fecha), 'Y-m-d')));
    return cal_days_in_month(CAL_GREGORIAN, $mes, $annio);
}

//getDiasMes($fechaDesde->format('d-m-Y'));

function get_meses_transcurridos($fechaDesde, $fechaHasta) {  

    $fechainicial = new DateTime($fechaDesde);
    $fechafinal = new DateTime($fechaHasta);//'2013-01-01'
    $diferencia = $fechainicial->diff($fechafinal);
    $dia_inicial = get_dia($fechaDesde);
    echo "dia inicial: ". $dia_inicial; echo "\n";
    //exit();
    print_r("diff dias: ". $diferencia->d); echo "\n"; //exit(); 
    print_r("suma: ". $diferencia->d + $dia_inicial); echo "\n";// exit();
    // El método diff nos devuelve un objeto del tipo DateInterval,
    // que almacena la información sobre la diferencia de tiempo 
    // entre fechas (años, meses, días, etc.).
    //exit();
   // echo $month_2; exit();


    $meses = ( $diferencia->y * 12 ) + $diferencia->m;
    //echo $meses + 1;

    if($diferencia->d + $dia_inicial > getDiasMes($fechafinal->format('d-m-Y')))
      return "meses transcurridos: -> ".$meses + 2;
    else
      return "meses transcurridos: -> ".$meses + 1;
}


echo get_meses_transcurridos('04-11-2022','07-12-2022');

?>