<?php

namespace App\Sources\V1;

use App\Models\User;
use Illuminate\Support\Collection;

class UserSourceDb implements UserSource
{
    public function all(): Collection
    {
        return User::all();
    }

    public function store(): bool
    {
        return false;
    }
}
