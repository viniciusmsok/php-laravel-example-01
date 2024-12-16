<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\v1\PersonResource;
use App\Models\Person;
use Database\Constants\TPeople;
use Illuminate\Http\Request;

class PeopleController extends Controller {
  /**
   * Display a listing of the resource.
   */
  public function index() {
    return PersonResource::collection(Person::all());
  }

  /**
   * Display the specified resource.
   */
  public function show(string $customerId) {
    return new PersonResource(
      Person::where(TPeople::PERSON_ID, $customerId)->first()
    );
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create() {
    //
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request) {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id) {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id) {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id) {
    //
  }
}
