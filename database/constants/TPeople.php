<?php

namespace Database\Constants;

class TPeople extends Table {
  const TABLE_NAME = 'people';

  /* COLUMNS */
  const PERSON_ID         = 'person_id';
  const PERSON_TYPE       = 'person_type';
  const MAIN_NAME         = 'main_name';
  const SOCIAL_NAME       = 'social_name';
  const MAIN_COUNTRY_CODE = 'main_country_code';
  const NATIONAL_ID       = 'national_id';
  const EMAIL             = 'email';

  const CREATED_AT = 'created_at';
  const UPDATED_AT = 'updated_at';

  /* CONSTRAINTS */
  const CK_PEOPLE_NAME              = 'ck_people_name';
  const CK_PEOPLE_PERSON_TYPE       = 'ck_people_person_type';
  const CK_PEOPLE_PERSON_EMAIL      = 'ck_people_person_email';
  const CK_PEOPLE_MAIN_COUNTRY_CODE = 'ck_people_main_country_code';

  /* CONSTANT VALUES */
  const PERSON_TYPE_NATURAL = 'NAT';
  const PERSON_TYPE_LEGAL   = 'LEG';

  /* INDEXES */
  const IDX_PEOPLE_NACIONAL_UNIQUE = 'idx_people_nacional_unique';
}