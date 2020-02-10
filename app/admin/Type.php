<?php

namespace App\admin;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function items()
    {
        return $this->hasMany("App\admin\Product", "type_id", "id");
    }
}
