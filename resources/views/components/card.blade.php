



<div class="article-card ">

     <img src="{{$article->images->isNotEmpty() ? $article->images->first()->getUrl(300,300): 'https://picsum.photos/200'}}" class="card-img-top" alt="immagine dell'articolo {{$article->title}}" >
    <div class="article-card-body">
        <h3 class="article-card-title">{{$article->title}}</h3>
       @if ($article->category )
       <h5 class="article-card-title"> <a href="{{route('byCategory',['category'=> $article->category])}}"> {{$article->category->name}}</a> </h5>
       
       @endif
        <p class="article-card-description">{{$article->description}}</p>
        <div class="article-card-footer mb-5">
            <span class="article-card-price">€ {{$article->price}}</span>
        </div>
    </div>
    <a href="{{route('article.show', compact('article'))}}" class="article-card-infobtn" >Vedi dettagli</a>
</div>
