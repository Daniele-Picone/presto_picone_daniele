<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

class CreateArticleForm extends Component
{
    use WithFileUploads;
   #[Validate('required|min:3')]
   public $title;
     

   public $images = [];
   public $temporary_images;




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
    
if(count($this->images) > 0){
    if(count($this->images) > 0){

        foreach($this->images as $image){
    
            $this->article->images()->create(['path'=> $image->store('images','public')]);
        }
        dd($this->images);
}

 $this->reset();
session()->flash('succes','Articolo Creato Correttamente');
 

   }
}

    public function mount(){
        $this->categories = Category::all();
    }




    public function render()
    {    
      
        return view('livewire.create-article-form');
    }

    public function updatedTemporaryImages()
    {
        if ($this->validate([
            'temporary_images.*' => 'image|max:1024', 
            'temporary_images' => 'max:6',
        ])) {
            foreach ($this->temporary_images as $image) {
                $this->images[] = $image;
            }
        }
    }
    
    public function removeImage($key){
        if(in_array($key, array_keys($this->images))){
            unset($this->images[$key]);
        }
    }
}