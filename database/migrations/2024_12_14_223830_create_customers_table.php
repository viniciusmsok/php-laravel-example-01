<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  public function up(): void {
    Schema::create('customers', function (Blueprint $table) {
      $table->id('customer_id');
      $table->char('person_type', 3);
      $table->string('main_name', 60);
      $table->string('social_name', 60);
      $table->string('federal_id', 50);
      $table->string('email', 250);
      $table->timestamps();
    });
  }

  public function down(): void {
    Schema::dropIfExists('customers');
  }
};
