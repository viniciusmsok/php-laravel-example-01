<?php

namespace App\Traits;

use Illuminate\Contracts\Support\MessageBag;
use Illuminate\Database\Eloquent\Model;

trait HttpResponses {
  public function response(int $status = 200, array|Model $content = []) {
    return response()->json($content, $status);
  }

  public function error(string $message, int $status = 500, array|MessageBag $errors = []) {
    $content = [
      'status' => $status
    ];

    if (!empty($message)) {
      $content['message'] = $message;
    }

    if (!empty($errors)) {
      $content['errors'] = $errors;
    }

    return response()->json($content, $status);
  }
}