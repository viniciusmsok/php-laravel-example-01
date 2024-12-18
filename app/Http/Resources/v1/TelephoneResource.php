<?php

namespace App\Http\Resources\v1;

use App\Models\Telephone;
use Database\Constants\TTelephones;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TelephoneResource extends JsonResource {
  /**
   * Transform the resource into an array.
   *
   * @return array<string, mixed>
   */
  public function toArray(Request $request): array {
    return [
      Telephone::telephoneId => $this[TTelephones::TELEPHONE_ID],
      Telephone::personId => $this[TTelephones::PERSON_ID],

      Telephone::numberType => [
        'value' => $this[TTelephones::NUMBER_TYPE],
        'description' => $this->getNumberTypeDescription()
      ],

      Telephone::countryDialingCode => $this[TTelephones::COUNTRY_DIALING_CODE],
      Telephone::phoneNumber => $this[TTelephones::PHONE_NUMBER],
      Telephone::phoneNumberWithMask => $this[TTelephones::PHONE_NUMBER_WITH_MASK],
      Telephone::extensionCode => $this[TTelephones::EXTENSION_CODE],
      Telephone::verifiedBoolean => $this[TTelephones::VERIFIED_BOOLEAN],
      Telephone::createdAt => $this[TTelephones::CREATED_AT],
      Telephone::updatedAt => $this[TTelephones::UPDATED_AT]
    ];
  }
}