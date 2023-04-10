<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsModel extends Model
{
    use HasFactory;
    protected $table= 'products';

    public function scopeSearch($query) {
        if($key = request() ->key) {
            $query = $query->where('title', 'like', '%' . $key . '%');
        }
        return $query;
    }
}
