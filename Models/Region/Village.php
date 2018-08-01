<?php

/*
 *
 * (c) NicoAudy <nicoaudy1994@gmail.com>
 *
 */

namespace App\Models\Region;

use App\Models\Region\District;
use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
  public function district()
  {
      return $this->belongsTo(District::class);
  }
}
