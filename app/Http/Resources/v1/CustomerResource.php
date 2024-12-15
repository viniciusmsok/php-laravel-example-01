<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource {
  /**
   * Transform the resource into an array.
   *
   * @return array<string, mixed>
   */
  public function toArray(Request $request): array {
    return [
      'customerId' => $this->customer_id,
      'personType' => $this->person_type,
      'mainName' => $this->main_name,
      'socialName' => $this->social_name,
      'federalId' => $this->federal_id,
      'email' => $this->email,
      'createdAt' => $this->created_at,
      'updatedAt' => $this->updated_at,
    ];
  }
}
