<div>
<div class="article-form-container">



   <form  wire:submit="store"  >
   
      @if (session()->has('success'))
             <div class="alert alert-succes text-center" > 
                {{session('succes')}}
             </div>
      
      @endif
    
   <div class="input-group ">
        <label for="title">Inserisci Titolo</label>
        <input type="text" id="title" wire:model.blur="title"  placeholder="Inserisci un Titolo">
      </div>
     @error('title')
       <p class=" text-danger" >{{$message}}</p>
     @enderror
    
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
