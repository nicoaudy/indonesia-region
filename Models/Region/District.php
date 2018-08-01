<?php

/*
 *
 * (c) NicoAudy <nicoaudy1994@gmail.com>
 *
 */

namespace App\Models\Region;

use App\Models\Region\Regency;
use App\Models\Region\Village;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    public function regency()
    {
        return $this->belongsTo(Regency::class);
    }

    public function villages()
    {
        return $this->hasMany(Village::class);
    }
}
