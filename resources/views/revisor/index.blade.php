<x-layout>
    <div class="container-fluid">
        <div class="row mb-5 justify-content-center align-items-center text-center">
            <div class="col-12">
                <h1 class="display-1">Dashboard Revisor</h1>
            </div>

            @if (session()->has('message'))
                <div class="row justify-content-center">
                    <div class="col-5 alert alert-success text-center shadow rounded">
                        {{ session('message') }}
                    </div>
                </div>
            @endif

            @if (!empty($article_to_check))
                <div class="row ">
                    @if ($article_to_check->images && $article_to_check->images->count() > 0)
                        @foreach ($article_to_check->images as $key => $image)

                        <div class="col-6">
                            <div class="card mb-3">
                                <div class="row g-0 ">
                                    <div class="col-md-4">
                                       <img src="{{ $image->getUrl(300,300) }}" alt="Immagine {{$key + 1}} dell'articolo {{$article_to_check->title}}">
                                    </div>
                                   <div class="col-md-5 py-3">
                                     <h5>Label</h5>
                                     <h5>Labels</h5>
                                            @if ($image->labels)
                                              @foreach ($image->labels as $label )
                                                 #{{$label}}
                                              @endforeach
                                            @else
                                               <p>No label</p>
                                            @endif
                                   </div>
                                    <div class="col-md-8 ps-3">
                                        <div class="card-body">
                                            <h5>Rating</h5>
                                            <div class="row justify-content-center">
                                                <div class="col-2">
                                                 <div class="text-center mx-auto">
                                                    {{$image->adult}}
                                                 </div>
                                                </div>
                                                 <div class="col-10">adult</div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-2">
                                                 <div class="text-center mx-auto">
                                                    {{$image->violence}}
                                                 </div>
                                                </div>
                                                 <div class="col-10">violence</div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-2">
                                                 <div class="text-center mx-auto">
                                                    {{$image->spoof}}
                                                 </div>
                                                </div>
                                                 <div class="col-10">spoof</div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-2">
                                                 <div class="text-center mx-auto">
                                                    {{$image->racy}}
                                                 </div>
                                                </div>
                                                 <div class="col-10">racy</div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-2">
                                                 <div class="text-center mx-auto">
                                                    {{$image->medical}}
                                                 </div>
                                                </div>
                                                 <div class="col-10">medical</div>
                                            </div>
                                        </div>
                                      
                                    </div>                
                                </div>
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
                <div class="col-md-4 ps4 d-flex flex-column justify-content-between">
                    <div>
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
                        <button class="login-button btn-danger">Rifiuta</button>
                    </form>
                    <form action="{{ route('accept', ['article' => $article_to_check]) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="login-button btn-success">Accetta</button>
                    </form>
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
    </div>
</x-layout>
