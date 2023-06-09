<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentsModel extends Model
{
    use HasFactory;
    protected $table= 'comments';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id', 'product_id', 'parent_id', 'content'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function replies()
    {
        return $this->hasMany(CommentsModel::class) -> whereNotNull('parent_id');
    }
    public function scopeSearch($query) {
        if($key = request() ->key) {
            $query = $query->where('name', 'like', '%' . $key . '%');
        }
        return $query;
    }
}
