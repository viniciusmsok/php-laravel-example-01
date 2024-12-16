<?php

use Database\Constants\TPeople;
use Database\Constants\TTelephones;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void {
    Schema::create(TTelephones::TABLE_NAME, function (Blueprint $table) {
      $table->id(TTelephones::TELEPHONE_ID);
      $table->unsignedBigInteger(TTelephones::PERSON_ID);
      $table->foreign(TTelephones::PERSON_ID)->references(TPeople::PERSON_ID)->on(TPeople::TABLE_NAME);
      $table->char(TTelephones::NUMBER_TYPE, 3);
      $table->string(TTelephones::COUNTRY_DIALING_CODE, 8);
      $table->string(TTelephones::PHONE_NUMBER, 20);
      $table->string(TTelephones::PHONE_NUMBER_WITH_MASK, 20);
      $table->string(TTelephones::EXTENSION_CODE, 4)->nullable();
      $table->char(TTelephones::VERIFIED_BOOLEAN, 1);
      $table->timestamps();
    });

    DB::statement(
      'ALTER TABLE ' . TTelephones::TABLE_NAME . ' ' .
      'ADD CONSTRAINT ' . TTelephones::CK_TELEPHONES_NUMBER . ' ' .
      'CHECK (' .
      '  LENGTH(' . TTelephones::PHONE_NUMBER . ') > 3 AND ' .
      '  ' . TTelephones::PHONE_NUMBER . ' = REGEXP_REPLACE(' . TTelephones::PHONE_NUMBER_WITH_MASK . ", '[^0-9]', '') " .
      ')'
    );

    DB::statement(
      'ALTER TABLE ' . TTelephones::TABLE_NAME . ' ' .
      'ADD CONSTRAINT ' . TTelephones::CK_TELEPHONES_TYPE . ' ' .
      'CHECK (' .
      '  ' . TTelephones::NUMBER_TYPE . ' IN (' .
      "  '" . TTelephones::NUMBER_TYPE_MOBILE . "', " .
      "  '" . TTelephones::NUMBER_TYPE_HOME . "', " .
      "  '" . TTelephones::NUMBER_TYPE_WORK . "', " .
      "  '" . TTelephones::NUMBER_TYPE_FAX . "', " .
      "  '" . TTelephones::NUMBER_TYPE_OTHER . "' " .
      '  ) ' .
      ') '
    );

    DB::statement(
      'ALTER TABLE ' . TTelephones::TABLE_NAME . ' ' .
      'ADD CONSTRAINT ' . TTelephones::CK_TELEPHONES_VERIFIED . ' ' .
      'CHECK (' .
      '  ' . TTelephones::VERIFIED_BOOLEAN . ' IN ( ' .
      "  '" . TTelephones::YES . "', " .
      "  '" . TTelephones::NO . "' " .
      '  )' .
      ')'
    );
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void {
    Schema::dropIfExists(TTelephones::TABLE_NAME);
  }
};