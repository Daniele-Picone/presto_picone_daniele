<x-layout>
<div class="container-fluid">
    <div class="row justify-content-center align-items-center text-center">
        <div class="col-12">
            <h1 class="display-1" > Risultati ricerca {{$query}} </h1>
        </div>

        <div class="row justify-content-center ailgn-items-center py-5">
            @forelse($articles as $article)
                 <div class="col-12 col-md-6">
                    <x-card :article=$article ></x-card>
                 </div>
                 @empty
                 <div class="col-12">
                    <h3 class="text-center">
                        Nessun articolo corrisponde alla tua ricerca
                    </h3>
                 </div>
            @endforelse
        </div>
        <div class="d-flex justify-content-center">
            <div >
                {{$articles->links()}}
            </div>
        </div>


</x-layout>