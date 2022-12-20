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

function get_meses_transcurridos($fechaDesde, $fechaHasta) 
{  
    date_default_timezone_set('UTC');
    $fechainicial = new DateTime($fechaDesde);
    $fechafinal = new DateTime($fechaHasta);//'2013-01-01'
    $fechainicial->modify('first day of this month');
    $fechafinal->modify('first day of this month');
    $diferencia = $fechainicial->diff($fechafinal);
    $meses = ( $diferencia->y * 12 ) + $diferencia->m;
    return $meses + 1;
}



echo get_meses_transcurridos('04-11-2022','07-12-2022');

?>