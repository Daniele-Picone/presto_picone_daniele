<?php

namespace Database\Seeders;

use App\Models\Category;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public $categories= [
        'Elettronica',
        'Abbigliamento',
        'Salute e bellezza',
        'Casa e giardino',
        'Giocattoli',
        'Sport',
        'Videogame',
        'Motori',
    ];
    public function run(): void
    {
       
 foreach($this->categories  as $category){
    Category::create([
        'name' => $category
        
    ]);
}
 }
       
}
