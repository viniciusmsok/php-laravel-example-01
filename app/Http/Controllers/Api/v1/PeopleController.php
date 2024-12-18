<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Person;
use Database\Constants\TPeople;
use App\Http\Resources\v1\PersonResource;


class PeopleController extends Controller {
  public function index() {
    return PersonResource::collection(Person::all());
  }

  public function show(string $customerId) {
    return new PersonResource(
      Person::where(TPeople::PERSON_ID, $customerId)->first()
    );
  }

  public function store(Request $request) {
    //
  }

  public function update(Request $request, string $id) {
    //
  }

  public function destroy(string $id) {
    //
  }
}
