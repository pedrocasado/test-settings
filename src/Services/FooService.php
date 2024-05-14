<?php

namespace App\Services;

use App\Settings\AppSettings;

class FooService
{
    public function __construct(private readonly AppSettings $appSettings)
    {
    }

    public function getFoo(): string
    {
        return $this->appSettings->myString;
    }
}
