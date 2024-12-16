<?php

namespace App\Http\Resources\v1;

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
      'personId' => $this[TPeople::$PERSON_ID],
      'personType' => $this[TPeople::$PERSON_TYPE],
      'mainName' => $this[TPeople::$MAIN_NAME],
      'socialName' => $this[TPeople::$SOCIAL_NAME],
      'mainCountryCode' => $this[TPeople::$MAIN_COUNTRY_CODE],
      'nationalId' => $this[TPeople::$NATIONAL_ID],
      'email' => $this[TPeople::$EMAIL],
      'createdAt' => $this[TPeople::$CREATED_AT],
      'updatedAt' => $this[TPeople::$UPDATED_AT]
    ];
  }
}