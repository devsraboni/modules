<?php

namespace Modules\Address\Entities;

use Modules\Address\Entities\District;
use Modules\Address\Entities\Division;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Address extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function newFactory()
    {
        return \Modules\Address\Database\factories\AddressFactory::new();
    }

}
