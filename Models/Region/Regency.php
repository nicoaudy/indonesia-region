<?php

/*
 *
 * (c) NicoAudy <nicoaudy1994@gmail.com>
 *
 */

namespace App\Models\Region;

use App\Models\Region\Province;
use App\Models\Region\District;
use Illuminate\Database\Eloquent\Model;

class Regency extends Model
{
    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function districts()
    {
        return $this->hasMany(District::class);
    }
}
