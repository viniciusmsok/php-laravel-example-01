<?php

namespace App\Http\Resources\v1;

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
      'telephoneId' => $this[TTelephones::$TELEPHONE_ID],
      'personId' => $this[TTelephones::$PERSON_ID],
      'numberType' => $this[TTelephones::$NUMBER_TYPE],
      'countryDialingCode' => $this[TTelephones::$COUNTRY_DIALING_CODE],
      'phoneNumber' => $this[TTelephones::$PHONE_NUMBER],
      'phoneNumberWithMask' => $this[TTelephones::$PHONE_NUMBER_WITH_MASK],
      'extensionCode' => $this[TTelephones::$EXTENSION_CODE],
      'verifiedBoolean' => $this[TTelephones::$VERIFIED_BOOLEAN],
      'createdAt' => $this[TTelephones::$CREATED_AT],
      'updatedAt' => $this[TTelephones::$UPDATED_AT]
    ];
  }
}