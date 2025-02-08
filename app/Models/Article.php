<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Scout\Searchable;

class Article extends Model
{
   use HasFactory;
   use Searchable;

   protected $fillable =[
    'title', 'description','price', 'category_id', 'user_id',
   ];
   

   public function user():BelongsTo{
     return $this->belongsTo(User::class);

   }
   public function category():BelongsTo{
    
    return $this->belongsTo(Category::class);
   }


   public function setAccepted($value){
    $this->is_accepted = $value;
    $this->save();
    return true;
   }
   public static function toBerevisedCount(){
    return Article::where('is_accepted', null)->count();
   }

   public function toSearchchableArrey(){
    return[
        
      'id'=> $this->id,
      'title'=> $this->title,
      'description'=> $this->description,
      'category'=> $this->category,

    ];
   }
}
