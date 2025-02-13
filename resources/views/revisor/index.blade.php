<x-layout>
    <div class="container-fluid">
        <div class="row mb-5 justify-content-center align-items-center text-center">
            <div class="col-12">
                <h1 class="display-1 mt-5 mb-5">{{__('ui.Dashboard Revisor')}}</h1>
            </div>

            @if (session()->has('message'))
                <div class="row justify-content-center">
                    <div class="col-5 alert alert-success text-center shadow rounded">
                        {{ session('message') }}
                    </div>
                </div>
            @endif

            @if (!empty($article_to_check))
                <div class=" article-container-revisor ">
                      <div class="img-revisor-wrapper">
                      @if ($article_to_check->images && $article_to_check->images->count() > 0)
                        @foreach ($article_to_check->images as $key => $image)

                        <div class=" img-revision-card">
                            <div class=" image-card-section mb-3">
                                  <img src="{{ $image->getUrl(300,300) }}" alt="Immagine {{$key + 1}} dell'articolo {{$article_to_check->title}}">
                                  <div class="rating-container">
                                                 <h5>Rating</h5>
                                         <span class="text-center mx-auto {{ $image->adult }}"> Adult</span>
                                         <span class="text-center mx-auto {{ $image->violence }}"> Violance</span>
                                         <span class="text-center mx-auto {{ $image->spoof }}"> Spoof</span>
                                         <span class="text-center mx-auto {{ $image->racy }}"> Racy</span>
                                         <span class="text-center mx-auto {{ $image->medical }}"> Medical</span>





                                         </div>
                                         <div class=" label-container">
                                  
                                  <h5>{{ __('ui.Labels') }}</h5>
                                         @if ($image->labels)
                                           @foreach ($image->labels as $label )
                                              #{{$label}}
                                           @endforeach
                                         @else
                                            <p>No label</p>
                                         @endif
                                        
                        </div>
                            </div>
                        
                       @endforeach
                    @else
                        @for ($i = 0; $i < 6; $i++)
                            <div class="col-6 col-md-4 mb-4 text-center">
                                <img class="img-fluid rounded shadow" src="https://picsum.photos/300/200" alt="immagine segna posto">
                            </div>
                        @endfor
                    @endif
                      </div>
                      
                    </div>
                    <div class=" article-description-revisor  ">
                        <div class=" article-description-revisor-body" >
                            <h1>{{ $article_to_check->title }}</h1>
                            <h3>{{ $article_to_check->user->name }}</h3>
                            <h4>{{ $article_to_check->price }}€</h4>
                            <h4>{{ $article_to_check->category->name }}</h4>
                            <p>{{ $article_to_check->description }}</p>
                        </div>
                        <div class="d-flex pb-4 justify-content-around">
                            <form action="{{ route('reject', ['article' => $article_to_check]) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button class="login-button btn-danger">{{ __('ui.Rifiuta') }}</button>
                            </form>
                            <form action="{{ route('accept', ['article' => $article_to_check]) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button class="login-button btn-success">{{ __('ui.Accetta') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
                @else
                <div class="row justify-content-center align-items-center text-center">
                    <div class="col-12">
                        <h1>Nessun articolo da revisionare</h1>
                    </div>
                </div>
            @endif
    </div>
</x-layout>
