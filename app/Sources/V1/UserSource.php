<?php

namespace App\Sources\V1;

use App\Sources\Source;
use Illuminate\Support\Collection;

interface UserSource extends Source
{
    /**
     * Gathers all models from data source.
     *
     * @return Collection of Users
     */
    public function all() : Collection;

    /**
     * Stores model into the data source.
     *
     * @return bool
     */
    public function store() : bool;
}
