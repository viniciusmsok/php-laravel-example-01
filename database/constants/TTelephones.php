<?php

namespace Database\Constants;

class TTelephones extends Table {
  const TABLE_NAME = 'telephones';

  /* COLUMNS */
  const TELEPHONE_ID           = 'telephone_id';
  const PERSON_ID              = 'person_id';
  const NUMBER_TYPE            = 'number_type';
  const COUNTRY_DIALING_CODE   = 'country_dialing_code';
  const PHONE_NUMBER           = 'phone_number';
  const PHONE_NUMBER_WITH_MASK = 'phone_number_with_mask';
  const EXTENSION_CODE         = 'extension_code';
  const VERIFIED_BOOLEAN       = 'verified_boolean';

  const CREATED_AT = 'created_at';
  const UPDATED_AT = 'updated_at';

  /* CONSTRAINTS */
  const CK_TELEPHONES_NUMBER = 'ck_telephones_number';
  const CK_TELEPHONES_TYPE = 'ck_telephones_type';
  const CK_TELEPHONES_VERIFIED = 'ck_telephones_verified';

  /* CONSTANT VALUES */
  const NUMBER_TYPE_MOBILE = 'MOB';
  const NUMBER_TYPE_HOME   = 'HOM';
  const NUMBER_TYPE_WORK   = 'WOR';
  const NUMBER_TYPE_FAX    = 'FAX';
  const NUMBER_TYPE_OTHER  = 'OTH';

  public static function getNumberTypeOptions(): array {
    return [
      self::NUMBER_TYPE_MOBILE,
      self::NUMBER_TYPE_HOME,
      self::NUMBER_TYPE_WORK,
      self::NUMBER_TYPE_FAX,
      self::NUMBER_TYPE_OTHER
    ];
  }
}