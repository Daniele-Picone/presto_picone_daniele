<x-layout>


<div class=" header-show">
 <div class=" header-show-img ">
  @if ($article->images->count()>0)
      <div class="carousel slide" id="carouselExample">
        <div class="carousel-inner">
          @foreach ($article->images as $key=>$image )
           <div class="carousel-item 
           @if ($loop->first)
           active
           @endif 
           ">
            <img src="{{Storage::url($image->path)}}" class="d-block w-100 rounded  shadow " alt=" immagine {{$key + 1}} dell'articolo {{$article->title}}">

          </div>
          
          @endforeach
        </div>
          @if($article->images->count() > 1)
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
         @endif      
      </div>
    @else 
      <img src="https://picsum.photos/300/200" alt="Nessuna Foto inserita dall'iutente">

  @endif




  </div>
    <div class="article-show-body">
       <h1>{{$article->title}}</h1>
       <p><a href="">{{$article->category->name}}</a></p>
        <p>{{$article->description}}</p>
        <p>{{$article->price}}</p>
    </div>
    

</div>







</x-layout>