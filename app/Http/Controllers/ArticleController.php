<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;

class ArticleController extends Controller
{

   public static function middleware(){

      return [
         new Middleware('auth', only:['create']),
      ];
   }

   public function create (){
        
 
    
    return view('article.create'  );
   }
}
