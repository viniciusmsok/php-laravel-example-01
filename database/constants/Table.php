<?php

namespace Database\Constants;

abstract class Table {
  const YES = 'Y';
  const NO = 'N';

  const YES_NO_OPTIONS = [
    self::YES,
    self::NO
  ];

  static function yesNoValidationOptions() {
    return 'in:' . implode(',', self::YES_NO_OPTIONS);
  }
}