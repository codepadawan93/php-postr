<?php

namespace Postr\Core;

use Postr\Exceptions\PostrException;

class HttpResponse {
  private $code;
  private $headers;
  private $body;

  public function __construct($code, $headers, $body)
  {
    $this->code    = $code;
    $this->headers = $headers;
    $this->body    = $body;
  }

  public function getField($field)
  {
    if($this->{$field})
      return $this->{$field};
    throw new PostrException("Inexistent field '$field'.");
  }
}
