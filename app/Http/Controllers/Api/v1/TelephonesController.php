<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\v1\TelephoneResource;
use App\Models\Telephone;
use Database\Constants\TTelephones;
use Illuminate\Http\Request;

class TelephonesController extends Controller {
  /**
   * Display a listing of the resource.
   */
  public function index() {
    return TelephoneResource::collection(Telephone::all());
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
   * Display the specified resource.
   */
  public function show(string $telephoneId) {
    return new TelephoneResource(
      Telephone::where(TTelephones::TELEPHONE_ID, $telephoneId)->first()
    );
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
