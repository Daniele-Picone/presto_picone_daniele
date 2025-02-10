<x-layout>
<div class="container-fluid">
    <div class="row mb-5 justify-content-center align-items-center text-center">
        <div class="col-12  ">
            <h1 class="display-1 mb-5" > Dashboard Revisor  </h1>
        </div>
        @if (session()->has('message'))
        <div class="row justify-content-center">
            <div class="col-5 alert alert-succes text-center shadow rounded">
                {{session('message')}}
            </div>
        </div>
        
        @endif

        @if ($article_to_check)
           <div class="row justify-content-center pt-5">
            <div class="col-8">
                <div class="row justify-content-center">
                    @for ($i = 0; $i < 6; $i++)
                      <div class="col-6 col-md-4 mb-4 text-center">
                        <img class="img-fluid rounded shadow" src="https://picsum.photos/300/200" alt="immagine segna posto">
                      </div>
                    
                    @endfor
                </div>
            </div>
            <div class="col-md-4 ps4 d-flex flex-column justify-content-between">
                <div >
                    <h1>{{$article_to_check->title}}</h1>
                    <h3>{{$article_to_check->user->name}}</h3>
                    <h4>{{$article_to_check->price}}€</h4>
                    <h4>{{$article_to_check->category->name}}</h4>
                    <p>{{$article_to_check->description}}</p>
                </div>
                <div class="d-flex pb-4 justify-content-around">
                    <form action="{{route('reject',['article'=>$article_to_check])}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="login-button  btn-danger" >Rifiuta</button>
                    </form>
                    <form action="{{route('accept',['article'=>$article_to_check])}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="login-button  btn-succes" >Accetta</button>
                    </form>
                </div>

            </div>
           </div>
         @else
             <div class="row justify-conten-center align-items-center text-center">
                <div class="col-12">
                    <h1>
                        Nessun articolo da revisionare
                    </h1>
                </div>
             </div>
        
        @endif


        </div>

 </div>











</x-layout>