<?php

namespace App\Models;

use Database\Constants\TPeople;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model {
  const PERSON_TYPE_NATURAL_DESC   = 'NATURAL';
  const PERSON_TYPE_LEGAL_DESC     = 'LEGAL';
  const PERSON_TYPE_UNDEFINED_DESC = 'UNDEFINED';

  const PERSON_TYPE_OPTIONS = [
    TPeople::PERSON_TYPE_NATURAL => self::PERSON_TYPE_NATURAL_DESC,
    TPeople::PERSON_TYPE_LEGAL => self::PERSON_TYPE_LEGAL_DESC
  ];

  public function getPersonTypeDescription($personType = null): string {
    return self::PERSON_TYPE_OPTIONS[$personType ?? $this->person_type] ?? self::PERSON_TYPE_UNDEFINED_DESC;
  }

  /** @use HasFactory<\Database\Factories\PersonFactory> */
  use HasFactory;
}