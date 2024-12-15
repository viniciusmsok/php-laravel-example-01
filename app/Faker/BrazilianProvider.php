<?php

namespace App\Faker;

use Faker\Provider\Base;

class BrazilianProvider extends Base {

  public function generateCPF() {
    $n = [];
    for ($i = 0; $i < 9; $i++) {
      $n[$i] = rand(0, 9);
    }

    $d1 = 0;
    for ($i = 0, $x = 10; $i < 9; $i++, $x--) {
      $d1 += $n[$i] * $x;
    }
    $d1 = ($d1 % 11 < 2) ? 0 : 11 - ($d1 % 11);

    $d2 = 0;
    for ($i = 0, $x = 11; $i < 9; $i++, $x--) {
      $d2 += $n[$i] * $x;
    }
    $d2 += $d1 * 2;
    $d2 = ($d2 % 11 < 2) ? 0 : 11 - ($d2 % 11);

    return implode('', $n) . $d1 . $d2;
  }

  public function generateCNPJ() {
    $n = [];
    for ($i = 0; $i < 8; $i++) {
      $n[$i] = rand(0, 9);
    }

    $n[8] = 0;
    $n[9] = 0;
    $n[10] = 0;
    $n[11] = 1;

    // Calcula os dígitos verificadores
    $d1 = 0;
    $d2 = 0;
    $multiplicadores1 = [5, 4, 3, 2, 9, 8, 7, 6, 5, 4, 3, 2];
    $multiplicadores2 = [6, 5, 4, 3, 2, 9, 8, 7, 6, 5, 4, 3, 2];

    for ($i = 0; $i < 12; $i++) {
      $d1 += $n[$i] * $multiplicadores1[$i];
    }
    $d1 = ($d1 % 11 < 2) ? 0 : 11 - ($d1 % 11);

    $n[12] = $d1;

    for ($i = 0; $i < 13; $i++) {
      $d2 += $n[$i] * $multiplicadores2[$i];
    }
    $d2 = ($d2 % 11 < 2) ? 0 : 11 - ($d2 % 11);

    return implode('', $n) . $d2;
  }
}