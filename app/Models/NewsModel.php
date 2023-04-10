<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsModel extends Model
{
    use HasFactory;
    protected $table= 'posts';

    public function scopeSearch($query) {
        if($key = request() ->key) {
            $query = $query->where('title', 'like', '%' . $key . '%');
        }
        return $query;
    }
}
