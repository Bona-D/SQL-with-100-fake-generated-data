<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['product_name','category_id'];

    public function categories()
    {
        return $this->belongsTo('App\Models\Category','category_id');
    }

}
