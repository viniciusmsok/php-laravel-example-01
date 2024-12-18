<?php

namespace App\Models;

use Database\Constants\TPeople;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model {
  const personId        = 'personId';
  const personType      = 'personType';
  const mainName        = 'mainName';
  const socialName      = 'socialName';
  const mainCountryCode = 'mainCountryCode';
  const nationalId      = 'nationalId';
  const email           = 'email';
  const createdAt       = 'createdAt';
  const updatedAt       = 'updatedAt';

  protected $fillable = [
    self::personId,
    self::personType,
    self::mainName,
    self::socialName,
    self::mainCountryCode,
    self::nationalId,
    self::email,
    self::createdAt,
    self::updatedAt
  ];

  protected $casts = [
    TPeople::PERSON_ID         => 'integer',
    TPeople::PERSON_TYPE       => 'string',
    TPeople::MAIN_NAME         => 'string',
    TPeople::SOCIAL_NAME       => 'string',
    TPeople::MAIN_COUNTRY_CODE => 'string',
    TPeople::NATIONAL_ID       => 'string',
    TPeople::EMAIL             => 'string',
    TPeople::CREATED_AT        => 'datetime',
    TPeople::UPDATED_AT        => 'datetime'
  ];

  const personTypeNaturalDesc   = 'NATURAL';
  const personTypeLegalDesc     = 'LEGAL';
  const personTypeUndefinedDesc = 'UNDEFINED';

  const personTypeOptions = [
    TPeople::PERSON_TYPE_NATURAL => self::personTypeNaturalDesc,
    TPeople::PERSON_TYPE_LEGAL => self::personTypeLegalDesc
  ];

  public function getPersonTypeDescription($personType = null): string {
    return (
      self::personTypeOptions[$personType ?? $this->person_type] ??
      self::personTypeUndefinedDesc
    );
  }

  /** @use HasFactory<\Database\Factories\PersonFactory> */
  use HasFactory;
}