<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Support\MessageBag;

class ValidationException extends AppException {
  protected MessageBag $data;
  protected $code = 422;
  protected $message = 'Usuário não encontrado.';

  public function __construct(
    string $message,
    MessageBag $data,
    int $code = 422,
    ?Exception $previous = null
  ) {
    parent::__construct($message, $data, $code, $previous);
  }
}