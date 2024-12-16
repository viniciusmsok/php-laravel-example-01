<?php

namespace Database\Factories;

use App\Faker\BrazilianProvider;
use Database\Constants\TPeople;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\customer>
 */
class PersonFactory extends Factory {
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array {
    $this->faker->addProvider(new BrazilianProvider($this->faker));

    $personType = $this->faker->randomElement(
      [TPeople::$PERSON_TYPE_LEGAL, TPeople::$PERSON_TYPE_NATURAL]
    );

    $name = '';
    $mainCountryCode = '';

    if ($personType === TPeople::$PERSON_TYPE_LEGAL) {
      $name = $this->faker->company;
      $mainCountryCode = $this->faker->generateUniqueCPF();
    }
    else {
      $name = $this->faker->name;
      $mainCountryCode = $this->faker->generateUniqueCNPJ();
    }

    $name = substr($name, 0, 60);

    return [
      TPeople::$PERSON_TYPE => $personType,
      TPeople::$MAIN_NAME => $name,
      TPeople::$SOCIAL_NAME => $name,
      TPeople::$MAIN_COUNTRY_CODE => 'BRA',
      TPeople::$NATIONAL_ID => $mainCountryCode,
      TPeople::$EMAIL => $this->faker->email
    ];
  }
}
