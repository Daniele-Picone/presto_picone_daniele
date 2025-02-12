<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use App\Jobs\RemoveFaces;
use App\Jobs\ResizeImage;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use App\Jobs\GoogleVisonSafeSearch;
use App\Jobs\GoogleVisionLabelImage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

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
    
if (count($this->images) > 0) {
    foreach ($this->images as $image) {
        $newFileName = "articles/{$this->article->id}";
        $newImage = $this->article->images()->create(['path' => $image->store($newFileName, 'public')]);

        RemoveFaces::withChain([ 
            new ResizeImage($newImage->path, 300, 300),
            new GoogleVisonSafeSearch($newImage->id),
            new GoogleVisionLabelImage($newImage->id)

       ])->dispatch($newImage->id);
    }
    File::deleteDirectory(storage_path('/app/livewire-tmp'));
}
$this->reset();
    session()->flash('success', 'Articolo Creato Correttamente');
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