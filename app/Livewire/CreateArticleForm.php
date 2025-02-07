<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class CreateArticleForm extends Component
{
   #[Validate('required|min:3')]
   public $title;

   #[Validate('required')]
   public $category;
   #[Validate('required|min:10')]
   public $description;

   #[Validate('required|numeric')]
   public $price;

   public $article;


   public function store(){
      
    $this->validate();
    $this->article = Article::create([

       'title'=> $this->title,
       'category_id'=> $this->category,
       'description'=> $this->description,
       'price'=> $this->price,
       'user_id'=> Auth::id(),

]);

  $this->reset();

  session()->flash('succes','Articolo Creato Correttamente');


   }

    public function mount(){
        $this->categories = Category::all();
    }




    public function render()
    {    
      
        return view('livewire.create-article-form');
    }
}
