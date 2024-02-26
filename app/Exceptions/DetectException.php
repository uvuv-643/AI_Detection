<?php

namespace App\Exceptions;

use Illuminate\Http\Client\Response;

class DetectException extends \Exception
{

    private Response $response;

    public function __construct(Response $response)
    {
        parent::__construct();
        $this->response = $response;
    }

}
