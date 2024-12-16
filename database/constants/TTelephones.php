<?php

namespace Database\Constants;

class TTelephones extends Table {
  public static string $TABLE_NAME = 'telephones';

  /* COLUMNS */
  public static string $TELEPHONE_ID           = 'telephone_id';
  public static string $PERSON_ID              = 'person_id';
  public static string $NUMBER_TYPE            = 'number_type';
  public static string $COUNTRY_DIALING_CODE   = 'country_dialing_code';
  public static string $PHONE_NUMBER           = 'phone_number';
  public static string $PHONE_NUMBER_WITH_MASK = 'phone_number_with_mask';
  public static string $EXTENSION_CODE         = 'extension_code';
  public static string $VERIFIED_BOOLEAN       = 'verified_boolean';

  public static string $CREATED_AT = 'created_at';
  public static string $UPDATED_AT = 'updated_at';

  /* CONSTRAINTS */
  public static string $CK_TELEPHONES_NUMBER = 'ck_telephones_number';
  public static string $CK_TELEPHONES_TYPE = 'ck_telephones_type';
  public static string $CK_TELEPHONES_VERIFIED = 'ck_telephones_verified';

  /* CONSTANT VALUES */
  public static string $NUMBER_TYPE_MOBILE = 'MOB';
  public static string $NUMBER_TYPE_HOME   = 'HOM';
  public static string $NUMBER_TYPE_WORK   = 'WOR';
  public static string $NUMBER_TYPE_FAX    = 'FAX';
  public static string $NUMBER_TYPE_OTHER  = 'OTH';

  public static function getNumberTypeOptions(): array {
    return [
      self::$NUMBER_TYPE_MOBILE,
      self::$NUMBER_TYPE_HOME,
      self::$NUMBER_TYPE_WORK,
      self::$NUMBER_TYPE_FAX,
      self::$NUMBER_TYPE_OTHER
    ];
  }
}