<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Faker\BrazilianProvider;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\customer>
 */
class CustomerFactory extends Factory {
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array {
    $this->faker->addProvider(new BrazilianProvider($this->faker));

    $personType = $this->faker->randomElement(['LEG', 'NAT']);
    
    $name = '';
    $federalID = '';
    
    if ($personType === 'LEG') {
      $name = $this->faker->company;
      $federalID = $this->faker->generateCNPJ();
    }
    else {
      $name = $this->faker->name;
      $federalID = $this->faker->generateCPF();
    }

    $name = substr($name, 0, 60);
    

    return [
      'person_type' => $personType,
      'main_name' => $name,
      'social_name' => $name,
      'federal_id' => $federalID,
      'email' => $this->faker->email
    ];
  }
}
