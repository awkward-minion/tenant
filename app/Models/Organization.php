<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Hyn\Tenancy\Traits\UsesSystemConnection;
use App\BsUuid;

class Organization extends Model
{
    use UsesSystemConnection, BsUuid;
    //

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'website',
        'hostname',
        'customer',
        'uuid',
        'creator_name',
        'creator_email',
        'domain'
    ];
}
