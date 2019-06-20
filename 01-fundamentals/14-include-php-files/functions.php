<?php
  // calc VAT
  function calcVAT($cost){
    $VAT = $cost * 0.20;
    // round to 2 decimal places with "," every 3 pos num i.e 1,000.00
    return number_format($VAT,2,".",",");
  }

  // calc total cost
  function calcTotal($cost){
    $VAT = calcVAT($cost);// local varriable
    $total = $cost + $VAT;
    // round to 2 decimal places with "," every 3 pos num i.e 1,000.00
    return number_format($total,2,".",",");
  }
?>
