<?php

namespace Modules\Address\Entities;

use Modules\Address\Entities\Division;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class District extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function newFactory()
    {
        return \Modules\Address\Database\factories\DistrictFactory::new();
    }

    public function division(){
        return $this->belongsTo(Division::class, 'division_id');
    }
}
