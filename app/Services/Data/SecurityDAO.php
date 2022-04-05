<?php

namespace App\Services\Data;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class SecurityDAO {
    public function __construct()
    { // A constructor//
    }
    public function getAllTestUsers(): Collection
    {
        return DB::table('d9a8fele89gpo6aw.milestone')->get();
    }
}
