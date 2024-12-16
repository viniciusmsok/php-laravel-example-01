<?php

namespace Database\Factories;

use App\Models\Person;
use Database\Constants\TTelephones;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Telephone>
 */
class TelephoneFactory extends Factory {
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition(): array {
		$type = $this->faker->randomElement(
			TTelephones::getNumberTypeOptions()
		);

		$phone = '';

		if ($type === TTelephones::$NUMBER_TYPE_MOBILE) {
			$phone = $this->faker->numerify('(##)#####-####');
		}
		else {
			$phone = $this->faker->numerify('(##)####-####');
		}

		return [
			TTelephones::$PERSON_ID => Person::all()->random()->person_id,
			TTelephones::$NUMBER_TYPE => $type,
			TTelephones::$COUNTRY_DIALING_CODE => '55',
			TTelephones::$PHONE_NUMBER => preg_replace('/\D/', '', $phone),
			TTelephones::$PHONE_NUMBER_WITH_MASK => $phone,
			TTelephones::$EXTENSION_CODE => $this->faker->optional(0.2)->numberBetween(1, 9999),
			TTelephones::$VERIFIED_BOOLEAN => $this->faker->randomElement([
				TTelephones::$YES,
				TTelephones::$NO
			])
		];
	}
}