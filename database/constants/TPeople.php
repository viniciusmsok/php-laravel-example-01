<?php

namespace Database\Constants;

class TPeople extends Table {
  public static string $TABLE_NAME = 'people';

  /* COLUMNS */
  public static string $PERSON_ID         = 'person_id';
  public static string $PERSON_TYPE       = 'person_type';
  public static string $MAIN_NAME         = 'main_name';
  public static string $SOCIAL_NAME       = 'social_name';
  public static string $MAIN_COUNTRY_CODE = 'main_country_code';
  public static string $NATIONAL_ID       = 'national_id';
  public static string $EMAIL             = 'email';

  public static string $CREATED_AT = 'created_at';
  public static string $UPDATED_AT = 'updated_at';

  /* CONSTRAINTS */
  public static string $CK_PEOPLE_NAME              = 'ck_people_name';
  public static string $CK_PEOPLE_PERSON_TYPE       = 'ck_people_person_type';
  public static string $CK_PEOPLE_PERSON_EMAIL      = 'ck_people_person_email';
  public static string $CK_PEOPLE_MAIN_COUNTRY_CODE = 'ck_people_main_country_code';

  /* CONSTANT VALUES */
  public static string $PERSON_TYPE_NATURAL = 'NAT';
  public static string $PERSON_TYPE_LEGAL   = 'LEG';

  /* INDEXES */
  public static string $IDX_PEOPLE_NACIONAL_UNIQUE = 'idx_people_nacional_unique';
}