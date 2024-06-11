<?php

namespace App\DTO;

use App\Http\Requests\StoreSupportRequest;

class UpdateSupport
{
    public function __construct(string $id, string $subject, string $status, string $body){}

    public function parseRequestData(StoreSupportRequest $request):self
    {
        return new self($request->id, $request->subject, 'a', $request->body);
    }
}