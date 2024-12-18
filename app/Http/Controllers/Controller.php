<?php

namespace App\Http\Controllers;

use Exception;
use App\Exceptions\ValidationException;
use App\Traits\HttpResponses;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\MessageBag;

abstract class Controller {
  protected string $controllerDescription = '';

  use HttpResponses;

  function EValidation(MessageBag $errors): ValidationException {
    return new ValidationException(
      'Validation error on \'' . $this->controllerDescription . '\'',
      $errors
    );
  }

  function ESave() {
    return new Exception('Save error on \'' . $this->controllerDescription . '\'', 400);
  }

  public function ok(array|Model $data = []) {
    return response()->json($data, 200);
  }

  public function created(array|Model|JsonResource $data = []) {
    return response()->json($data, 201);
  }

  public function noContent() {
    return response()->noContent();
  }
}