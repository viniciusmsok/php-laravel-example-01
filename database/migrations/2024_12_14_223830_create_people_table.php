<?php

use Database\Constants\TPeople;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  public function up(): void {
    Schema::create(TPeople::TABLE_NAME, function (Blueprint $table) {
      $table->id(TPeople::PERSON_ID);
      $table->char(TPeople::PERSON_TYPE, 3);
      $table->string(TPeople::MAIN_NAME, 60);
      $table->string(TPeople::SOCIAL_NAME, 60);
      $table->char(TPeople::MAIN_COUNTRY_CODE, 3);
      $table->string(TPeople::NATIONAL_ID, 50);
      $table->string(TPeople::EMAIL, 250);
      $table->timestamps();

      $table->unique(
        [TPeople::MAIN_COUNTRY_CODE, TPeople::NATIONAL_ID],
        TPeople::IDX_PEOPLE_NACIONAL_UNIQUE
      );
    });

    DB::statement(
      'ALTER TABLE ' . TPeople::TABLE_NAME . ' ' .
      'ADD CONSTRAINT ' . TPeople::CK_PEOPLE_PERSON_TYPE . ' ' .
      'CHECK ( ' .
      '  ' . TPeople::PERSON_TYPE . ' IN ( ' .
      "    '" . TPeople::PERSON_TYPE_NATURAL . "', " .
      "    '" . TPeople::PERSON_TYPE_LEGAL . "' " .
      '  ) ' .
      ') '
    );

    DB::statement(
      'ALTER TABLE ' . TPeople::TABLE_NAME . ' ' .
      'ADD CONSTRAINT ' . TPeople::CK_PEOPLE_NAME . ' ' .
      'CHECK ( ' .
      '  ' . TPeople::MAIN_NAME . ' = TRIM(UPPER(' . TPeople::MAIN_NAME . ')) AND ' .
      '  ' . TPeople::SOCIAL_NAME . ' = TRIM(UPPER(' . TPeople::SOCIAL_NAME . ')) ' .
      ')'
    );

    DB::statement(
      'ALTER TABLE ' . TPeople::TABLE_NAME . ' ' .
      'ADD CONSTRAINT ' . TPeople::CK_PEOPLE_MAIN_COUNTRY_CODE . ' ' .
      'CHECK ( ' .
      '  ' . TPeople::MAIN_COUNTRY_CODE . ' = TRIM(UPPER(' . TPeople::MAIN_COUNTRY_CODE . ')) ' .
      ')'
    );

    DB::statement(
      'ALTER TABLE ' . TPeople::TABLE_NAME . ' ' .
      'ADD CONSTRAINT ' . TPeople::CK_PEOPLE_PERSON_EMAIL . ' ' .
      'CHECK ( ' .
      '  ' . TPeople::EMAIL . ' = TRIM(LOWER(' . TPeople::EMAIL . ')) AND ' .
      "  LOCATE('@', " . TPeople::EMAIL . ') > 0 ' .
      ')'
    );
  }

  public function down(): void {
    Schema::dropIfExists(TPeople::TABLE_NAME);
  }
};