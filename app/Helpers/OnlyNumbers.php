<?php

if (!function_exists('onlyNumbers')) {
  /**
   * Removes all non-number characters.
   *
   * @param sentence $string
   * @return string
   */
  function onlyNumbers($sentence) {
    return preg_replace('/[^0-9]/', '', $sentence);
  }
}