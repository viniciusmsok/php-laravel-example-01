<?php

namespace App\Http\Resources\v1;

use App\Models\Country;
use App\Models\Person;
use Database\Constants\TPeople;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PersonResource extends JsonResource {
  /**
   * Transform the resource into an array.
   *
   * @return array<string, mixed>
   */
  public function toArray(Request $request): array {
    return [
      Person::personId => $this[TPeople::PERSON_ID],
      Person::personType => [
        'value' => $this[TPeople::PERSON_TYPE],
        'description' => $this->getPersonTypeDescription()
      ],
      Person::mainName => $this[TPeople::MAIN_NAME],
      Person::socialName => $this[TPeople::SOCIAL_NAME],
      Country::country => Country::findByCode($this[TPeople::MAIN_COUNTRY_CODE]),
      Person::nationalId => $this[TPeople::NATIONAL_ID],
      Person::email => $this[TPeople::EMAIL],
      Person::createdAt => $this[TPeople::CREATED_AT],
      Person::updatedAt => $this[TPeople::UPDATED_AT]
    ];
  }
}