<?php

namespace App\Faker;

use Faker\Provider\Base;

class BrazilianProvider extends Base {

  public function generateUniqueCPF() {
    $n = (string) $this->generator->unique()->numberBetween(10000000, 999999999);
    if (strLen($n) === 8) {
      $n = '0' . $n;
    }

    //Calculate first verification digit
    $dv1 = 0;
    for ($i = 0, $x = 10; $i < 9; $i++, $x--) {
      $dv1 += $n[$i] * $x;
    }
    $dv1 = ($dv1 % 11 < 2) ? 0 : 11 - ($dv1 % 11);

    //Calculate last verification digit
    $dv2 = 0;
    for ($i = 0, $x = 11; $i < 9; $i++, $x--) {
      $dv2 += $n[$i] * $x;
    }
    $dv2 += $dv1 * 2;
    $dv2 = ($dv2 % 11 < 2) ? 0 : 11 - ($dv2 % 11);

    $result = $n . $dv1 . $dv2;

    //return complete CPF
    return $result;
  }

  public function generateUniqueCNPJ() {
    $n = (string) $this->generator->unique()->numberBetween(10000000000, 999999999999);
    if (strlen($n) === 11) {
      $n = '0' . $n;
    }

    //Calculate first verification digit
    $peso1 = [5, 4, 3, 2, 9, 8, 7, 6, 5, 4, 3, 2];
    $soma1 = 0;
    for ($i = 0; $i < 12; $i++) {
      $soma1 += (int) $n[$i] * $peso1[$i];
    }
    $dv1 = $soma1 % 11;
    $dv1 = ($dv1 < 2) ? 0 : 11 - $dv1;
    $n = $n . $dv1;

    //Calculate last verification digit
    $peso2 = [6, 5, 4, 3, 2, 9, 8, 7, 6, 5, 4, 3, 2];
    $soma2 = 0;
    for ($i = 0; $i < 13; $i++) {
      $soma2 += (int) $n[$i] * $peso2[$i];
    }
    $dv2 = $soma2 % 11;
    $dv2 = ($dv2 < 2) ? 0 : 11 - $dv2;

    $result = $n . $dv2;

    //return complete CNPJ
    return $result;
  }
}