<?php

namespace App\Sources\V1;

use Illuminate\Support\Collection;

interface UserSource
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
