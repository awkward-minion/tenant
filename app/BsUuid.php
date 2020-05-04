<?php

namespace App;

use Webpatser\Uuid\Uuid;

trait BsUuid
{
    protected static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->uuid = (string) Uuid::generate(4);
        });
    }
}
