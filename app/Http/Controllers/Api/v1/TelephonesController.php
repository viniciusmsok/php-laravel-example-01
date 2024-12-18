<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

use App\Http\Resources\v1\TelephoneResource;
use App\Models\Telephone;
use Database\Constants\TTelephones;

class TelephonesController extends Controller {
  public function __construct() {
    $this->controllerDescription = 'telephones';
  }

  public function index() {
    return TelephoneResource::collection(Telephone::all());
  }

  public function store(Request $request) {
    $object = $this->getObjectAttributes($request->all(), false);

    $result = new TelephoneResource(Telephone::create($object));
    if ($result) {
      throw $this->ESave();
    }

    return $this->created($result);
  }

  public function show(string $telephoneId) {
    return new TelephoneResource(
      Telephone::where(TTelephones::TELEPHONE_ID, $telephoneId)->first()
    );
  }

  public function update(Request $request, string $telephoneId) {
    //
  }

  public function destroy(string $id) {
    //
  }

  private function getObjectAttributes($httpData, $isEdit) {
    $rules = [
      Telephone::personId => ['required', 'numeric'],

      Telephone::numberType => [
        'required',
        'in:' . implode(',', TTelephones::getNumberTypeOptions())
      ],

      Telephone::countryDialingCode => ['required', 'max:8'],
      Telephone::phoneNumberWithMask => ['required', 'max:20'],
      Telephone::extensionCode => ['nullable', 'max:4']
    ];

    if ($isEdit) {
      $rules[Telephone::verifiedBoolean] = [
        'required',
        TTelephones::yesNoValidationOptions()
      ];
    }

    $validator = Validator::make($httpData, $rules);
    if ($validator->fails()) {
      throw $this->EValidation($validator->errors());
    }

    $httpData[Telephone::phoneNumber] = onlyNumbers(
      $httpData[Telephone::phoneNumberWithMask]
    );

    if ($isEdit) {
      $httpData[Telephone::verifiedBoolean] = (
        $httpData[Telephone::verifiedBoolean] ??
        TTelephones::NO
      );
    }

    return [
      TTelephones::PERSON_ID              => $httpData[Telephone::personId],
      TTelephones::NUMBER_TYPE            => $httpData[Telephone::numberType],
      TTelephones::COUNTRY_DIALING_CODE   => $httpData[Telephone::countryDialingCode],
      TTelephones::PHONE_NUMBER           => $httpData[Telephone::phoneNumber],
      TTelephones::PHONE_NUMBER_WITH_MASK => $httpData[Telephone::phoneNumberWithMask],

      TTelephones::EXTENSION_CODE => (
        $httpData[Telephone::extensionCode] ??
        null
      ),

      TTelephones::VERIFIED_BOOLEAN => (
        $httpData[Telephone::verifiedBoolean] ??
        TTelephones::NO
      )
    ];
  }
}
