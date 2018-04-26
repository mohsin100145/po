<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $table = 'phones';

    public function district()
    {
    	return $this->belongsTo(District::class, 'district_id');
    }
}
