<?php

namespace App\Models;

use Database\Constants\TTelephones;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telephone extends Model {
  const telephoneId         = 'telephoneId';
  const personId            = 'personId';
  const numberType          = 'numberType';
  const countryDialingCode  = 'countryDialingCode';
  const phoneNumber         = 'phoneNumber';
  const phoneNumberWithMask = 'phoneNumberWithMask';
  const extensionCode       = 'extensionCode';
  const verifiedBoolean     = 'verifiedBoolean';
  const createdAt           = 'createdAt';
  const updatedAt           = 'updatedAt';

  protected $primaryKey = TTelephones::TELEPHONE_ID;

  protected $fillable = [
    TTelephones::PERSON_ID,
    TTelephones::NUMBER_TYPE,
    TTelephones::COUNTRY_DIALING_CODE,
    TTelephones::PHONE_NUMBER,
    TTelephones::PHONE_NUMBER_WITH_MASK,
    TTelephones::EXTENSION_CODE,
    TTelephones::VERIFIED_BOOLEAN
  ];

  protected $casts = [
    TTelephones::TELEPHONE_ID           => 'integer',
    TTelephones::PERSON_ID              => 'integer',
    TTelephones::NUMBER_TYPE            => 'string',
    TTelephones::COUNTRY_DIALING_CODE   => 'string',
    TTelephones::PHONE_NUMBER           => 'string',
    TTelephones::PHONE_NUMBER_WITH_MASK => 'string',
    TTelephones::EXTENSION_CODE         => 'string',
    TTelephones::VERIFIED_BOOLEAN       => 'string',
    TTelephones::CREATED_AT             => 'datetime',
    TTelephones::UPDATED_AT             => 'datetime'
  ];

  const numberTypeMobileDesc    = 'MOBILE';
  const numberTypeHomeDesc      = 'HOME';
  const numberTypeWorkDesc      = 'WORK';
  const numberTypeFaxDesc       = 'FAX';
  const numberTypeOtherDesc     = 'OTHER';
  const numberTypeUndefinedDesc = 'UNDEFINED';

  const numberTypeOptions = [
    TTelephones::NUMBER_TYPE_MOBILE => self::numberTypeMobileDesc,
    TTelephones::NUMBER_TYPE_HOME   => self::numberTypeHomeDesc,
    TTelephones::NUMBER_TYPE_WORK   => self::numberTypeWorkDesc,
    TTelephones::NUMBER_TYPE_FAX    => self::numberTypeFaxDesc,
    TTelephones::NUMBER_TYPE_OTHER  => self::numberTypeOtherDesc
  ];

  public function getNumberTypeDescription($numberType = null): string {
    return (
      self::numberTypeOptions[$numberType ?? $this->number_type] ??
      self::numberTypeUndefinedDesc
    );
  }

  /** @use HasFactory<\Database\Factories\TelephoneFactory> */
  use HasFactory;
}