<?php

namespace App\Models;

use App\Models\Article;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
   protected  $fillable=[
    'name'
   ];
   public function articles():HasMany{
    return $this->hasMany(Article::class);
}
}
