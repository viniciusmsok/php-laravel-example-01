<?php

namespace App\Exceptions;

use Exception;

class AppException extends Exception {
  protected $data;
  protected $code = 400;
  protected $message = 'Application error';

  public function __construct(
    string $message,
    $data,
    int $code = 400,
    ?Exception $previous = null
  ) {
    parent::__construct($message, $code, $previous);
    $this->data = $data;
  }

  public function report(): void {
    /* Log::error("Exceção: {$this->message}"); */
  }

  public function render($request) {
    return response()->json(
      [
        'error' => $this->message,
        'data' => $this->data
      ],
      $this->code
    );
  }
}