<div>
<div class="article-form-container">


   @if (session()->has('success'))
          <div class="alert alert-succes text-center" > 
             {{session('succes')}}
          </div>
   
   @endif

   <form  wire:submit="store"  >
   
    
   <div class="input-group ">
        <label for="title">Inserisci Titolo</label>
        <input type="text" id="title" wire:model.blur="title"  placeholder="Inserisci un Titolo">
      </div>
     @error('title')
       <p class=" text-danger" >{{$message}}</p>
     @enderror
    
     <div class="input-gorup mb-4 mt-4">
     <input type="file" wire:model="temporary_images"  multiple placeholder="img/">

       @error('temporary_images')
          <p class="text-danger" > {{$message}}</p>
       @enderror
       @error('temporary_images')
       <p class="text-danger" >{{$message}}</p>   
         @enderror
     </div>

    
  
     @if(!empty($images))
     <div class="row justify-content-center align-items-center "> 
     
     <p>Photo preview:</p>
     @foreach($images as $key => $image)
         <div class="col d-flex flex-column  align-items-center my-3">
            <img src="{{ $image->temporaryUrl() }}" class="img-preview mb-2 shadow rounded" >
            <button type="button" class="btn-remove-img-form" wire:click="removeImage({{ $key }})">X</button>
         </div>
         @endforeach 
         
      </div>
     @endif
    






     <div class="input-group">
        <label for="category">Inserisci Categoria</label>
        <select id="category" class="input-group" wire:model="category">
           <option label disabled>Seleziona una categoria</option>
           @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
</div>

@error('category')
    <p class="text-danger">{{ $message }}</p>
@enderror
     


      <div class="input-group">
        <label for="description">Descrizione Articolo</label>
        <textarea  id="title" wire:model.blur="description" placeholder="Inserisci Descrizione" rows="5" cols="40" > </textarea>
      </div>
      @error('description')
       <p class="text-danger" >{{$message}}</p>
       @enderror

      <div class="input-group">
        <label for="price">Inserisci Prezzo </label>
        <input type="number" id="price" wire:model.blur="price"  placeholder="Inserisci il prezzo">
        <span>€</span>
      </div>
      @error('price')
       <p class="text-danger" >{{$message}}</p>
       @enderror
    
      <button type="submit" class="register-button">Posta</button>
   </form>




   </div>

</div>
