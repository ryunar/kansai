<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
     public function likes()   
   {
    return $this->hasMany(Like::class);  
   }
   public function category()
   {
    return $this->belongsTo(Category::class);
   }
   public function prefecture()
   {
    return $this->belongsTo(Prefecture::class);
   }
   public function users()
   {
    return $this->belongsTo(User::class);
   }
   public function getByLimit(int $limit_count = 10)
   {
    return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
   }
   protected $fillable = 
   [
    'title',
    'body',
   ];
}
