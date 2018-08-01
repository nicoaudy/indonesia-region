<?php

/*
 *
 * (c) NicoAudy <nicoaudy1994@gmail.com>
 *
 */

namespace App\Models\Region;

use App\Models\Region\Regency;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    public function regencies()
    {
        return $this->hasMany(Regency::class);
    }
}
