<?php

namespace App\Sources;

use App\Enums\Sources;

class SourceApiRouter
{

    protected float $version;

    public function build(float $version, string $method) : static
    {

    }

    public function match(string $sourceName) : Source
    {
        $source = Sources::tryfrom($sourceName);

        if ($source !== null)
        {
        }
    }

}
