<?php

namespace App\admin;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    const CATEGORIES = [
        'shop',
        'gallery'
    ];

    public function type()
    {
        return $this->belongsTo("App\admin\Type", "type_id", "id");
    }
}
