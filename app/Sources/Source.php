<?php

namespace App\Sources;

interface Source
{
    public function build() : static;
}
